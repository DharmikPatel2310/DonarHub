    <?php

    /**
     * Plugin name: DonorHub
     * Plugin Uri: 
     * Author: Mihir Patel
     * Author Uri:
     * Version: 1.0.0
     * Description: Donation based Plugin
     */
    defined('ABSPATH') || die("<br><center><h1>You can't access this site</h1></center>");

    define("Plugin_url", plugin_dir_url(__FILE__));
    define("Plugin_Path", plugin_dir_path(__FILE__));
    define('Plugin_File', __FILE__);

    include Plugin_Path . "inc/shortcode.php";  //add shortcode
    include Plugin_Path . "inc/metaboxes.php";  //add metaboxes
    include Plugin_Path . "inc/addmenu.php";  //addmenu
    include Plugin_Path . "inc/customposttype.php";  //customopsttype
    include Plugin_Path . "inc/db.php";  //Database file

    // add_filter('the_title','my_the_title');  //change the title of all titles
    function my_the_title($title)
    {
        return "<strong>Titled is Changed</strong>";
    }

    add_action('admin_enqueue_scripts', 'wp_enqueue_javacssscripts');   //this is how add static files
    function wp_enqueue_javacssscripts()
    {
        // wp_enqueue_style('practice_dev_plugin', plugins_url("assets/css/final_style.css", __FILE__));
        // wp_enqueue_style('practice_dev_plugin', Plugin_url . "assets/css/style1.css");

        wp_enqueue_script('practice_dev_plugin', plugins_url("assets/js/final_js.js", __FILE__));
        // wp_enqueue_script('practice_dev_plugin', plugins_url("assets/js/custom1.js", __FILE__));
    }
