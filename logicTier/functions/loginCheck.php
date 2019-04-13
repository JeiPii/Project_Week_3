<?php
include('connectDatabase.php');

if (!isUser()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../../frontTier/accounts/login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../../frontTier/accounts/login.php");
}
?>