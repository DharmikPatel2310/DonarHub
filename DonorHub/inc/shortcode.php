<?php
defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");

add_action('init', 'my_init');
function my_init()
{
    add_shortcode('try', 'cspit_try_shortcode'); //try is tag name of shortcode
}
function cspit_try_shortcode($args)
{

    global $wpdb;
    $tablename = $wpdb->prefix . 'chrf_donorhub';
    $sql = "select * from {$tablename}";
    $result = $wpdb->get_results($sql);

    $table = "";
    $table .= "</table></center>";

    $output = '<html>
        <head>
        <style>
        .gridView {
            display: grid;
            /* background-color: black; */
                padding: 5px;
                width: auto;
                grid-template-columns: auto auto auto;
                margin: auto;
                border: 2px;
            }
    
            .g {
                /* background-color: gray; */
                padding: 5px;
                margin: 10px 8px;
                font-size: 25px;
                text-align: center;
                border: 1px ;
            }
            .images{
                width=200px;
                height=200px;
            }
        </style>
    </head>

    <body>
    <div class="gridView">';
    foreach ($result as $r) {
        $campain_name = $r->campain_name;
        $description = $r->description;
        $campain_img = $r->campain_img;
        $goal = $r->goal;
        $organization_name = $r->organization_name;
        $href_url = 'http://localhost/wordpress/wp-content/plugins/DonorHub/assets/data/donations3.php
                ?campain_img=' . $campain_img . '&campain_name=' . $campain_name .
            '&description=' . $description . '&goal=' . $goal .
            '&organization_name=' . $organization_name  . '';
        $pic_url = 'http://localhost/wordpress/wp-content/plugins/DonorHub/inc/upload/';
        $output .= '<div class="g">
        <a href="' . $href_url . '">
        <div id="images"><img src="' . $pic_url . $campain_img . '" width=200px height=200px></div>
        </a>
        <div><h3>' . $campain_name . '</h3></div>
        <div style="font-size: 15px;"><p>' . $description . '</p></div>
        <div><h5>Goal: ' . $goal . '</h5></div>';
        // if ($organization_name != '-') {
        //     $output .= '<div><h6>Organization Name: ' . $organization_name . '</h6></div>';
        // }
        // $output .= '</div>';
    }
    $output .= '</div>
                </body>
                </html>';
    $args = shortcode_atts(array('name' => $output), $args, 'try');
    return $args['name'];   //$args is return array

}
