<html>
<head>
	<?php  include '../connection.php'; ?>
	<title>User Login</title>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
	<link rel="stylesheet" type="text/css" href="css\mystyle.css">
	<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>
<body>
	
	<div class="cont">
		<div class="box">
		<div class="heading">
			
		</div>
		<form class="form" method="POST" action="loginSession.php">
			<div class="field">	
			<input type="text" name="email" placeholder="Enter Your Email"/></div>
			<div class="field">
			<input type="password" name="password" placeholder="Password"/></div>
			<button class="login_bt" name="submit" type="submit" title="login"> Sign-In</button>
			<div class="sep">
				<div class="line"></div>
				<p>OR</p>
				<div class="line"></div>
			</div>
			<div class="other">
				<button class="btn" type="button"><i class="fontstyle"></i>
					<span class="">Log In with Facebook</span>
				</button>
				<a class="Forgot_pass" href="forget.php">Forgot Password?</a>
			</div>
			
		</form>
</div>
<div class="box">
	<p id="abc">Don't hava an account?<a class="signup"
		href="rejistration.php">Sign Up</a></p>
</div>
	</div>

</body>
</html>