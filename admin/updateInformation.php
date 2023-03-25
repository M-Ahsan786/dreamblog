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
<?php 
$userId=$_GET['id'];
$userSql="select *from user where ID={$userId}";
$userResult=mysqli_query($conn,$userSql);
while($row=mysqli_fetch_array($userResult))
{
	?>

</head>
<body>
<div class="login-form"> 

<h1>Edit User Details</h1>


<main class="form-signin">
  <form  method="post">

	<div class="row">

	  <div class="col"><label>First Name: </label>
		<input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php echo $row['firstName'] ?>" required>
	  </div>
	</div>

	<div class="row">

	  <div class="col">
	  	<label>Email: </label>
		<input type="text" id="email" name="email" placeholder="Email" required value="<?php echo $row['email'] ?>" class="border border-3">
	  </div>

	  
	</div>
	<div class="row">

	  <div class="col">
	  	<label>Password: </label>
		<input type="text" id="pass" name="Password" placeholder="Password" required value="<?php echo $row['Password'] ?>" class="border border-3">
	  </div>
	  <div class="col">
	  	<label>Re_Password: </label>
		<input type="text" id="repass" name="rePassword" placeholder="Re-Password" required value="<?php echo $row['rePassword'] ?>" class="border border-3">
	  </div>

	  
	</div>
	<div class="row">

	  <div class="col">
	  	<label>CNIC: </label>
		<input id="cnic" type="cnic" name="cnic" placeholder="CNIC" value="<?php echo $row['cnic'] ?>" required class="border border-3">
	  </div>
	  <div class="col">
	  	<label>Gender: </label>
		<input id="cnic" type="text" name="gender" placeholder="Gender" value="<?php echo $row['gender'] ?>" required class="border border-3">
	  </div>	

	</div>
<label>Address: </label>
<input type="text" name="address" placeholder="Address" value="<?php echo $row['address'] ?>" required>


	<div class="row">
  
	  <div class="col">
	  	<label>Town: </label>
		<input type="text" name="town" placeholder="Town" value="<?php echo $row['town'] ?>" required>
	  </div>

	  <div class="col">
	  	<label>Region: </label>
		<input type="text" name="region" placeholder="Region" value="<?php echo $row['region'] ?>" required>	  
	  </div>
	</div>

	<div class="row">
	  <div class="col">
	  	<label>Country: </label>
	<input type="text" name="country" placeholder="Country" value="<?php echo $row['country'] ?>" required>
	  </div>
	  <div class="col">
	  	<label>Date of Birth: </label>
	<input type="date" name="dateofbirth" placeholder="Date of Birth" value="<?php echo $row['dateofbirth'] ?>" required>
	  </div>
	</div>

	<div class="row">

	  <div class="col">
	  	<label>City: </label>
		<input type="text" name="city" placeholder="city" value="<?php echo $row['city'] ?>" required>
	  </div>

	  <div class="col">
	  	<label>Phone No: </label>
		<input type="tel" name="phoneNO" placeholder="Phone Number" value="<?php echo $row['phoneNO'] ?>" required>
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
 <?php 
};
  if(isset($_POST['submit']))
      {
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

      	$sqlQuery="update user set firstName='$firstName',email='$email',cnic='$cnc',Password='$Password',rePassword='$rePassword',cnic='$cnic',gender='$gender',phoneNO='$phoneNO',dateofbirth='$dateofbirth',address='$address',town='$town',region='$region',country='$country',city='$city' where ID=$userId";

      	$result= mysqli_query($conn,$sqlQuery);
        if($result)
        {    
               echo "<script>alert('Update user data successfully')</script>";
               header("Location: rejisteredUsers.php");
   			
        }
        else
        { 
            echo "<script>alert('Register Failed')</script>";
        }

        }
        unset($_POST['submit'])


 ?>
</div>
</body>
</html>