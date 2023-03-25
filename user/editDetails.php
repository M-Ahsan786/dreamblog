<!DOCTYPE html>
<html>
<head>
	<?php  include '../connection.php'; ?>
	<title>Edit User Details</title>
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

<h1>Edit Your Personal Details</h1>


<main class="form-signin">
  <form  method="post">

	<div class="row">

	  <div class="col">
		<input type="text" class="form-control" name="firstName" placeholder="First Name" required>
	  </div>
	</div>

	<div class="row">

	  <div class="col">
		<input type="text" id="email" name="Email" placeholder="Email" required class="border border-3">
	  </div>

	  
	</div>
	<div class="row">

	  <div class="col">
		<input id="cnic" type="cnic" name="cnic" placeholder="CNIC" required class="border border-3">
	  </div>	

	</div>

<input type="text" name="Address" placeholder="Address" required>


	<div class="row">

	  <div class="col">
		<input type="text" name="Town" placeholder="Town" required>
	  </div>

	  <div class="col">
		<input type="text" name="Region" placeholder="Region" required>	  
	  </div>
	</div>

	<div class="row">
	  <div class="col">
	<input type="text" name="Country" placeholder="Country" required>
	  </div>
	</div>

	<div class="row">

	  <div class="col">
		<input type="text" name="city" placeholder="city" required>
	  </div>

	  <div class="col">
		<input type="tel" name="phoneNumber" placeholder="Phone Number" required>
	  </div>

	</div>
<div class="row">

	  <div class="col">
<button class="w-100 btn btn-lg btn-primary submit" type="submit" name="submit">Update Profile</button>
	  </div>

	  <div class="col">
<button class="w-100 btn btn-lg btn-primary" type=""><a style="text-decoration: none; color: white"href="setting.php">Back</a></button>
	  </div>
	</div>
    
 </form>
</div>
</body>
</html>