<!DOCTYPE html>
<html style="text-align: center;margin-top: 225px;" lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LOGOUT</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body style="background-color: #4ad5ff;">
	
</body>
</html>



<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['company_id'])) {
    header("Location: company_login_ui.php");
    exit();
}
// Check if the user has clicked the logout button
	// Display confirmation message
	echo "<p>Are you sure you want to logout your account?</p>";
	echo "<form action='logout.php' method='post'>";
	echo "<input type='submit' name='confirm_logout' value='Yes'>";
	echo "<input type='submit' name='cancel_logout' value='No'>";
	echo "</form>";
if (isset($_POST['confirm_logout'])) {
		// Delete user session data and redirect to login page
		session_unset();
		session_destroy();
		echo "<div class='success-message'>logout success!</div>";
        echo "<a class='login-button' href='company_login_ui.php'>Login</a>";
		exit();

	$db_conn->close();
} elseif (isset($_POST['cancel_logout'])) {
	// Redirect to welcome page
	header("Location: company_webpage.php");
	exit();
}
?>
