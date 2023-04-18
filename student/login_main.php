<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['user_id'])) {
  header("Location: welcome.php");
  exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Login Page in HTML with CSS Code Example</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>WELCOME BACK.</h1>
			</div>
		</div>


		<div class="right">
			<h5>Login</h5>
			<!-- <p>Don't have an account? <a href="#"> Register</a> it takes less than a minute</p> -->
			<form action="login.php" method="post">
			<div class="inputs">
				<!-- <label for="email">Email:</label> -->
				<input type="email" id="email" name="email" required placeholder="Email"> 
				<!-- <label for="password">Password:</label> -->
				<input type="password" id="password" name="password" required placeholder="password"><br><br>
			  	<input type="submit" value="Login">
				<!-- <input type="text" placeholder="Email"> -->
				<br>
				<!-- <input type="password" placeholder="Password"> -->
			</div>
			</form>

			<br><br>

			<div class="remember-me--forget-password">
				<!-- Angular -->
				<label>
					<input type="checkbox" name="item" checked />
					<span class="text-checkbox">Remember me</span>
		
					<p>forgot password</p>
				</label>
				
			</div>
			<form action="registration.html">
				<button>Register</button>
			</form>
			
			
		</div>

	</div>
	<!-- partial -->

</body>

</html>