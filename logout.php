<?php 
session_start();
userControl();
function userControl(){
	if (!isset($_SESSION['username'])) {
		session_destroy();
		header("location:login.php");
		exit();
	}
	}
	
	session_destroy();
	header('location:login.php');
	exit;

?>
