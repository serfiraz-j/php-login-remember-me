<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="container h-100 justify-content-center align-items-center pc">
	<div class="container cn">
	<div class="row">
		<div class="col-md-12">
	<div class="card justify-content-center border border-dark">
		<div class="card-header text-center chb l">
			<h5 class="ch5">Login</h5>
		</div>
		<div class="card-body">
			<form action="processes.php" method="POST">
	<div class="mb-3">
    <labe class="form-label cb">Username:</label>
    <input type="text" name="username" class="form-control" value="<?php 
    if(isset($_COOKIE['username'])){
    	echo $_COOKIE['username'];
    }
     ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label cb">Password:</label>
    <input type="password"  name="password" class="form-control" id="exampleInputPassword1" value="<?php 
    if(isset($_COOKIE['password'])){
    	echo $_COOKIE['password'];
    }
     ?>">
  </div>
  <div class="mb-3 form-check ">
    <input type="checkbox" <?php echo isset($_COOKIE['username']) ? "checked" : "" ?> name="remember_me" class="form-check-input cb" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" name="login" class="btn btn-primary cb">login</button><br><br>
  </form>
			<?php 
		if (isset($_GET['c']) AND $_GET['c']=="no") { ?>
			<div class="alert alert-danger"><strong>Error!</strong> Invalid username or password</div>		
	<?php } ?>
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
