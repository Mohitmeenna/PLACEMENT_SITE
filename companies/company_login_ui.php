<?php
session_start();

if (isset($_SESSION['company_id'])) {
  header('Location: company_webpage.php');
  exit();
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<title>Company Login</title>
	<style>
		body {
            color:black;
            font-family: 'Montserrat', sans-serif;
            background-image: url(img4.jpg);
    background-repeat: no-repeat;
    background-size:cover;
}

form {
  
    position: relative;
  height: 560px;
  width: 405px;
  padding-top: 38px;
  margin: 84px auto 315px auto;
  padding-left: 79px;
      background: url(https://picsum.photos/id/1004/5616/3744) no-repeat   center center #505050;   
  background-size: cover;
  box-shadow: 0px 30px 60px -5px #fff;
}

h2 {
  text-align: center;
color:black;
  margin-top: 20px;
  margin-bottom: 10px;
  position: relative;
  right: 60px;
bottom: 24px;
}

label {
    display:block;
  margin: 20px 10px;
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
hr{
    margin-bottom:20px;
  border: 2px solid grey;
  border-radius: 5px;
  position: relative;
  right:38px;
}
a{
  /* margin-left:100px; */
  text-decoration:none;
}


.btn {
  margin-top:50px;
  margin-left:100px;
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}


	</style>
</head>
<body>
	<form action="company_login.php" method="post">
  <h2>Company Login</h2>
<hr>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required><br><br>
    <hr>  
		<input type="submit" value="Login">
	<a href="company_registration.html"    class="btn" id="register-btn">Register</a>
</form>
</body>
</html>
