<html>
<head>
	<?php  include '../connection.php'; ?>
	<title>User Rejistration Forum</title>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/validateform.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script>
    $(":input").inputmask();

   </script>
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
	<form method="post" action="">
	<div class="container">
		<div class="row">
		<div class="col-md-7">
			<h1 class="text-left">User Rejistration Forum</h1>
			<p class="text-left">Welcome to Dream Coding Blog Application rejistered yourself and write your thoughts </p>
		</div>
	
	 <div class="col-md-5">
			<div class="row">
				<div class="col-md-6">
					<h3 class="text-left">Rejistration forum</h3>
				</div>
				<div class="col-md-6">
					<span class="glyphicon glyphicon-pencil"></span>
				</div>
			</div>
			<hr>
			<div class="row">
				<label class="label col-md-2 control-label">First Name</label>
				<div class="col-md-10">
					<input type="firstName" class="form-control" name="firstName" placeholder="firstName" required="">
				</div>
				
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">E-mail</label>
				<div class="col-md-10">
					<input type="E-mail" class="form-control" name="email" placeholder="E-mail" required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Password</label>
				<div class="col-md-10">
					<input type="Password" class="form-control" id="pass" name="Password" placeholder="Password" required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Re-Password</label>
				<div class="col-md-10">
					<input type="Password" class="form-control" id="repass" onkeyup="checkPassword()" name="rePassword" placeholder="Re-Password" required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">CNIC</label>
				<div class="col-md-10">
					<input type="text"  class="form-control"  placeholder="XXXXX-XXXXXXX-X"  name="cnic" required="" >
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Gender</label>
				<div class="col-md-10">
					<input type="radio" name="gender" value="male" required=""><small>Male</small>
					<input type="radio"  name="gender" value="female" required=""><small>FeMale</small>
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Phone No</label>
				<div class="col-md-10">
					 <input class="form-control" required=""  type = "number" name="phoneNO" maxlength = "12" placeholder="+92300-0000000">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Date of Birth</label>
				<div class="col-md-10">
					<input class="form-control" type="date" name="dateofbirth" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31" required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Address</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="address" placeholder="Address" value=""  required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Town</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="town" placeholder="Town" value=""  required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Region</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="region" placeholder="Region" value=""  required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">Country</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="country" placeholder="Country" value="" required="">
				</div>
			</div>
			<div class="row">
				<label class="label col-md-2 control-label">City</label>
				<div class="col-md-10">
					<input class="form-control" type="text" name="city" placeholder="City" value="" required="">
				</div>
			</div>
			
			<div><button class="btn btn-info" name="submit" type="submit">Rejistered</button>
			<button class="btn btn-info" name="" type=""><a style="text-decoration: none; color: black" href="userlogin.php">SignIn</a></button></div>
		</div>
	</div>
</div>
</form>

<?php

if(isset($_POST['submit'])){
    $firstName=$_POST['firstName'];
    $email=$_POST['email'];
    $Password=$_POST['Password'];
    $rePassword=$_POST['rePassword'];
    $cnic=$_POST['cnic'];
    $phoneNO=$_POST['phoneNO'];
    $dateofbirth=$_POST['dateofbirth'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $town=$_POST['town'];
    $region=$_POST['region'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $query="INSERT INTO user (firstName, email,Password,rePassword,cnic,gender,phoneNO,dateofbirth,	address,town,region,country,city) VALUES ('$firstName', '$email', '$Password', '$rePassword', '$cnic', '$gender', '$phoneNO', '$dateofbirth', '$address','$town','$region','$country','$city')";
    $result=mysqli_query($conn, $query);
    if($result){
    	$redirect_url = 'userlogin.php';
    	echo "<script>alert('Your have been successfully registered')</script>";
    	echo "<script>window.location='{$redirect_url}';</script>";
    }else{
    	 echo "<script>alert('User Registeration Failed')</script>";
    }
}unset($_POST['submit']);
?>

</body>
</html>