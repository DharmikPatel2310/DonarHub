<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap');

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', 'Verdana', sans-serif;
            display: flex;
            align-items: center;
            padding: 1.25em;
            min-height: 100vh;
            color: #444;
        }

        table {
            width: 100%;
            border-spacing: 0;
            border-radius: 1em;
            overflow: hidden;
        }

        thead {
            visibility: hidden;
            position: absolute;
            width: 0;
            height: 0;
        }

        th {
            background: #215A8E;
            color: #fff;
        }

        td:nth-child(1) {
            background: #215A8E;
            color: #fff;
            border-radius: 1em 1em 0 0;
        }

        th,
        td {
            padding: 1em;
        }

        tr,
        td {
            display: block;
        }

        td {
            position: relative;
        }

        td::before {
            content: attr(data-label);
            position: absolute;
            left: 0;
            padding-left: 1em;
            font-weight: 600;
            font-size: .9em;
            text-transform: uppercase;
        }

        tr {
            margin-bottom: 1.5em;
            border: 1px solid #ddd;
            border-radius: 1em;
            text-align: right;
        }

        tr:last-of-type {
            margin-bottom: 0;
        }

        td:nth-child(n+2):nth-child(odd) {
            background-color: #ddd;
        }

        @media only screen and (min-width: 768px) {

            table {
                max-width: 1200px;
                margin: 0 auto;
                border: 1px solid #ddd;
            }

            thead {
                visibility: visible;
                position: relative;
            }

            th {
                text-align: left;
                text-transform: uppercase;
                font-size: .9em;
            }

            tr {
                display: table-row;
                border: none;
                border-radius: 0;
                text-align: left;
            }

            tr:nth-child(even) {
                background-color: #ddd;
            }

            td {
                display: table-cell;
            }

            td::before {
                content: none;
            }

            td:nth-child(1) {
                background: transparent;
                color: #444;
                border-radius: 0;
            }

            td:nth-child(n+2):nth-child(odd) {
                background-color: transparent;
            }


        }
    </style>
</head>

<?php

function create_table()
{
    global $wpdb;
    $tablename = $wpdb->prefix . 'chrf_donorhub';
    $collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE `{$tablename}` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `campain_name` varchar(255) NOT NULL,
        `campain_img` text NOT NULL,
        `description` text NOT NULL,
        `goal` int(11) NOT NULL,
        `min_amt` int(11) NOT NULL,
        `max_amt` int(11) NOT NULL,
        `organization_name` varchar(255) NOT NULL,
        `custom_amt` varchar(255) NOT NULL,
        `anonymous_donations` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
       ) {$collate};";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

function insert_data(
    $campain_name,
    $campain_img,
    $description,
    $is_goal,
    $goal,
    $min_amt,
    $max_amt,
    $is_org_name,
    $organization_name,
    $custom_amt,
    $anonymous_donations
) {
    if (
        !empty($campain_name) && !empty($campain_img) && !empty($description) && !empty($min_amt) &&
        !empty($max_amt)
    ) {

        $camp_img = $campain_img;
        $img = $camp_img['name'];
        $file_path = $camp_img['tmp_name'];
        $dest_path = Plugin_Path . 'inc/upload/' . $img;
        move_uploaded_file($file_path, $dest_path);
        $extension = explode('.', $img)[1];
        $extensions = array('jpg', 'jpeg', 'png');

        if (in_array($extension, $extensions)) {
            $cmp_img = $img;
        } else {
            $cmp_img = '';
        }

        if ($is_goal == 'enable') {
            $goal_amt = $goal;
        } else {
            $goal_amt = '';
        }

        if ($is_org_name == 'enable') {
            $org_name = $organization_name;
        } else {
            $org_name = '-';
        }

        global $wpdb;
        $prefix = $wpdb->prefix;
        $table = $prefix . 'chrf_donorhub';
        $data = array(
            'campain_name' => $campain_name,
            'campain_img' => $cmp_img,
            'description' => $description,
            'goal' => $goal_amt,
            'min_amt' => $min_amt,
            'max_amt' => $max_amt,
            'organization_name' => $org_name,
            'custom_amt' => $custom_amt,
            'anonymous_donations' => $anonymous_donations,
        );
        if ($wpdb->insert($table, $data)) {
            $scripts = "<script>alert('Data Saved Successfully')</script>";
            echo $scripts;
            // header("Location: http://localhost/wordpress/wp-content/plugins/DonorHub/assets/data/final_form.php");
        } else {
            $scripts = "<script>alert('Data not saved')</script>";
            echo $scripts;
        }
    } else {
        $scripts = "<script>alert('Please fill up the form properly')</script>";
        echo $scripts;
    }
}


function get_campains()
{
    global $wpdb;
    $tablename = $wpdb->prefix . 'chrf_donorhub';
    $sql = "select * from {$tablename}";
    $result = $wpdb->get_results($sql);
    $table = "";
    $table.='<center><font style=" font-family: cursive; color: crimson;"><h1>All Campaign</h1></font></center>';
    $table .= '<br><center><table border=1 cellspacing=3px>
                <tr>
                    <th><center>Name</center></th>
                    <th><center>Description</center></th>
                    <th>Goal</th>
                    <th>Min Amount</th>
                    <th>Max Amount</th>
                    <th>Organization Name</th>
                    <th>Custom Amount</th>
                    <th>Anonymous Donations</th>
                    <th></th>
                </tr>';

    foreach ($result as $r) {
        $table .= "<tr>
                    <td>{$r->campain_name}</td>
                    <td>{$r->description}</td>
                    <td>{$r->goal}</td>
                    <td>{$r->min_amt}</td>
                    <td>{$r->max_amt}</td>
                    <td><center>{$r->organization_name}</center></td>
                    <td>{$r->custom_amt}</td>
                    <td>{$r->anonymous_donations}</td>
                    <td><a class='btn btn-primary' href='assets/data/final_form.php'>Edit</a></td>
                   </tr>";
    }

    $table .= "</table></center>";
    echo $table;
}