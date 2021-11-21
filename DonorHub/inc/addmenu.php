<?php
defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");


add_action('admin_menu', 'wp_plugin_menus'); //add menu on admin page
function wp_plugin_menus()
{
    add_menu_page('Donation', 'DonorHub', 'manage_options', 'menu-options', 'wp_option_func', 'dashicons-businessperson');

    add_submenu_page('menu-options', 'Add Campain', 'Add Campain', 'manage_options', 'add-campain', 'wp_addcampain_func');
    add_submenu_page('menu-options', 'Donations', 'Donations', 'manage_options', 'submenu-donations', 'wp_donations_func');
    add_submenu_page('menu-options', 'Donor', 'Donor', 'manage_options', 'submenu-donors', 'wp_donors_func');

    // add_Plugins_page('My Plugin','My Plugin','manage_options','plugin-page','my_plugin_menu');
}
function wp_option_func()
{
    include(Plugin_Path . "/assets/data/allforms.php");
}

function wp_addcampain_func()
{
    include(Plugin_Path . "/assets/data/final_form.php");
}

function wp_donations_func()
{
    echo "<h1>This is Donations</h1>";
}

function wp_donors_func()
{
    echo "<h1>This is Donors</h1>";
}

function my_plugin_menu()
{
    echo "<h1>This is My Plugin Page in dashboard menu</h1>";
}
