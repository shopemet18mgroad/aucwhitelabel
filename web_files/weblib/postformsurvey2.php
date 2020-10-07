<?php
include('../db/config.php');
$table_name = "form_auth";
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST["submit"])) {
	$companystatus = $_POST["companystatus"];
	print_r($companystatus);die;
}

?>