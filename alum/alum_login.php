<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['alum_id'])) {
  header("Location: welcome.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<style>
		body {
			margin: 70px;
			margin-top: 153px;
  height:745px;
  background-color: #d3d3d3;
  font-family: Arial, sans-serif;
  background-image: url(img8.jpg);
  background-repeat: no-repeat;
  background-size: cover;
		}
		
		form {
			position: relative;
  border-radius: 5px;
  height: 350px;
  width: 405px;
  margin: auto;
  padding: 50px 25px 13px 60px;
  background: url(https://picsum.photos/id/1004/5616/3744) no-repeat   center center #505050;   
  background-size: cover;  
  box-shadow: 10px 30px 60px -5px rgba(255, 0, 0, 0.3);
		}
		
		h2 {
			text-align: center;
color:black;
margin-top: -12px;
			margin-bottom: 30px;
		}
		
		label {
			margin-bottom: 10px;
			font-weight: bold;
color:black;
display:block;
		}
		
		input[type="email"],
		input[type="password"] {
			width: 382px;
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-bottom: 20px;
			background-color: #f2f2f2;
		}
		
		input[type="submit"] {
			margin-bottom: 21px;
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		
		input[type="submit"]:hover {
			background-color: #45a049;
		}
		
		.register-btn {
	background-color: #008CBA;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
	font-size: 16px;
	transition: background-color 0.3s ease;
	float: right;
	margin-left: 10px;
}

.register-btn:hover {
	background-color: #006f8a;
}

</style>
</head>
<body>
	<form action="alum_login_main.php" method="post">
		<h2>Alumni Login</h2>
  		<label for="email">Email:</label>
  		<input type="email" id="email" name="email" required>
  		<label for="password">Password:</label>
  		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Login">
		<form action="alum_registration.html">
		  <button class="register-btn" id="register-btn">Register</button>
		</form>
	</form>
</body>
</html>
