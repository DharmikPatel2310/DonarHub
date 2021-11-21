<!-- Add Compain -->
<?php
defined('ABSPATH') || die("<br><center><h1>Nice Try</h1></center>");
require_once(Plugin_Path . "inc/functions.php");

$str = '<div class="wrap">';
$str .= '<h1>Registoration Form</h1><br>';
$str .= '<form method=post>';
$str .= '<label name="textfname"><font style="font-size: 17px;">Your Compain Name: </font>';
$str .= '<input type="text" name="fname"></label>';
echo $str;
submit_button("Save Changes");
$str .= '</form>';
if (isset($_POST['fname'])) {
    echo $_POST['fname'];
    inserts($_POST['fname']);
}
?>