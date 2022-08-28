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
?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<div class="container h-100 justify-content-center align-items-center pc">
	<div class="container cn">
	<div class="row">
		<div class="col-md-12">
	<div class="card justify-content-center border border-dark">
		<div class="card-header text-center chb w">
			<h5 class="ch5">Welcome <?php echo $_SESSION['username']; ?></h5>
		</div>
		<div class="card-body">
			<p class="text-center cb">You have successfully logged in.</p>
			<div class="text-center "><a class="cb c" href="logout.php"><i class="fas fa-arrow-alt-circle-right c"></i>Log Out</a></div>
		</div>
	</div>
	</div>
  </div>
</div>
</div>
   <div class="container w-25"></div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>



<style type="text/css">
	

</style>