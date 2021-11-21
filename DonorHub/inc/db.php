<?php
defined('ABSPATH') || die("<br><center><h1>Nice Try</h1></center>");
require_once(Plugin_Path . "inc/functions.php");

if (isset($_POST['submit'])) {
    insert_data($_POST['campain-name'], $_FILES['cmp-img'], $_POST['campain-desc'], $_POST['donation-goal'], $_POST['don-goal'], $_POST['min-amount'], $_POST['max-amount'], $_POST['org-name-rad'], $_POST['org-name'], $_POST['custom-amount'], $_POST['anonymous-donation']);
}

register_activation_hook(Plugin_File, function () {
    // create_table();  
});

register_deactivation_hook(Plugin_File, function () {
    // global $wpdb;
    // $table = $wpdb->prefix . "donations";
    // $sql="TRUNCATE TABLE `{$table}`;";
    // $sql = "DROP TABLE IF EXISTS `{$table};";
    // $wpdb->query($sql);
});
