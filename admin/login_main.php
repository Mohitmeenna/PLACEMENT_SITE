<?php
session_start();

// Check if user is logged in
if (isset($_SESSION['admin_id'])) {
  header("Location: main.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			background-image: url(img1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		
		form {
			display: flex;
			flex-direction: column;
			max-width: 500px;
			margin: auto;
			margin-top: 174px;
			border: 2px solid #ccc;
			padding: 20px;
			background-color: #6d68b3;
			box-shadow: 10px 30px 60px -5px rgba(255, 255, 255, 0.44);
		}
		
		h2 {
			text-align: center;
color:black;
			margin-top: 50px;
			margin-bottom: 30px;
		}
		
		label {
			margin-bottom: 10px;
			font-weight: bold;
color:black;
		}
		
		input[type="email"],
		input[type="password"] {
			padding: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
			margin-bottom: 20px;
			background-color: #f2f2f2;
		}
		
		input[type="submit"] {
			margin-top: 30px;

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
	<form action="login.php" method="post">
		<h2>Admin Login</h2>
  		<label for="email">Email:</label>
  		<input type="email" id="email" name="email" required>
  		<label for="password">Password:</label>
  		<input type="password" id="password" name="password" required><br><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
