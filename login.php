<?php
include "dbconfig.php";
$connection = new mysqli($host, $user, $pw, $dbname);
$error_msg = "";
session_start();
if (isset($_POST['submit'])) {
	$un = trim($_POST['username']);
	$pwd = $_POST['password'];
	echo "username $un";
	echo "password $pwd";
	$mysql = "Select * from tbl_user where user_id = '$un' and pwd=md5($pwd)";
	$result = $connection->query($mysql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_object();
		echo "<pre>" . print_r($row, true) . "</pre>";
		// session_start();
		$_SESSION['username'] = $row->user_id;
		header("location: Dasboard.php");
		exit;
	} else {
		$error_msg = "Login error! Contact your site administrator ";
	}
}
$connection->close();
?>