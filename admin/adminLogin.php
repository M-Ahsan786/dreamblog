<html>
<head>
	<title>admin login</title>
	<link rel="stylesheet" type="text/css" href="css\mystyle.css">
	<?php include('../connection.php');?>
	<? php sessionstart();?>
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    function clearCache() {
  // Reload the page, bypassing the cache
  location.reload(true);
}
</script>

</head>
<body>
	<div class="cont">
		<div class="box">
		<div class="heading">
			
		</div>
		<form class="form" method="post" action="loginSession.php">
			<div class="field">	
			<input type="name" name="email" placeholder="Enter Your Email"/></div>
			<div class="field">
			<input type="password" name="password" placeholder="Password"/></div>
			<button class="login_bt" type="submit" name="submit" title="login" onload="clearCache()"> Log In</button>
			<div class="sep">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>
			<div class="other">
				<button class="btn" type="button"><i class="fontstyle"></i>
					<span class="">Log In with Facebook</span>
				</button>
				<a class="Forgot_pass" href="#">Forgot Password?</a>
			</div>

		</form>
</div>
<div class="box">
	<p id="abc">Don't hava an account?<a class="signup"
		href="">Sign Up</a></p>
</div>
	</div>
	</body>
</html>