<?php
include('../db/config.php');
$table_name = "form_auth";
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST["submit"])) {
	$user_name = urlencode($_POST["username"]);
	$password = $_POST["password"];
	$login_auth_val = getAuth($table_name, $user_name, $password);
	if($login_auth_val){
		// set session and redirect to dashboard
		session_start();
		$_SESSION["useraucj"] = $user_name;
		$_SESSION["access_level"] = $login_auth_val['access_level'];
		header('location: ../survey/formselector.php');
	}else{
		header('location: ../survey/index.php?sta=failed');
	}
}

?>