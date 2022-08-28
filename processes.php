<?php 
session_start();

if (isset($_POST['login'])) {
	
	$username="admin";
	$password="admin";

	if ($_POST['username'] == $username && $_POST['password'] == $password) {
		
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];

		if (isset($_POST['remember_me'])) {
			
			setcookie("username","admin",strtotime("+1 day"));
			setcookie("password", "admin",strtotime("+1 day"));
		}

		else {
			setcookie("username","admin",strtotime("-1 day"));
			setcookie("password", "admin",strtotime("-1 day"));
		}

		header("location:welcome.php");
	}

	else {
		header("location:login.php?c=no");
		exit();
	}
}


 ?>