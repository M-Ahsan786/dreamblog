<?php 
include '../connection.php';
session_start();
if(isset($_POST['submit'])){
    	$email=$_POST['email'];
    	$pass=$_POST['password'];
    	$query="select * from `admin` where `Email`='$email'";
    	$result=mysqli_query($conn, $query);

    	$email_count=mysqli_num_rows($result);

    	if($email_count){
    		$email_pass=mysqli_fetch_assoc($result);
    		$db_pass=$email_pass['Password'];

    		$_SESSION['username']=$email_pass['Name'];
            $_SESSION['id']=$email_pass['ID'];
			
    		if($pass==$db_pass){
    			echo "<script>alert('Your successfull here');</script>";
    			header("Location:AdminDashboard.php");
    			
    		}else{
    			echo "<script>alert('Your Email or Password Incorrect');</script>";
    		}
    	}
    }

?>