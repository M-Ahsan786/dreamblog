<?php 
include '../connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php  include '../connection.php'; ?>
	<title>rest password</title>
	<link rel="stylesheet" type="text/css" href="css/editRejistration.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>




</head>
<body>
<div class="login-form"> 

<h1>Forget Password</h1>


<main class="form-signin">
  <form  method="post">

	<div class="row">

	  <div class="col">
		<input type="text" class="form-control" name="email" placeholder="Enter Your Email" required>
	  </div>
	</div>

	<div class="row">

	  <div class="col">
		<input type="text" id="pass" name="newPassword" placeholder="New Password"  class="border border-3">
	  </div>
       <div class="col">
		<input id="repass" type="text" name="rePassword" placeholder="Re Password"  class="border border-3">
	  </div>
	  
	</div>
	
<div class="row">

	  <div class="col">
<button class="w-100 btn btn-lg btn-primary submit" type="submit" name="submit">Rest Password</button>
	  </div>

	  <div class="col">
<button class="w-100 btn btn-lg btn-primary" type=""><a style="text-decoration: none; color: white"href="userlogin.php">Back</a></button>
	  </div>
	</div>
    
 </form>
</div>
</body>
</html>