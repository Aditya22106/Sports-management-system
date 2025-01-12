<?php

include_once('connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the form data
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	
	// Validate form data
	if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
		// Required fields are empty
		echo $error = "Please fill in all required fields.";
	} elseif ($password != $confirm_password) {
		// Passwords don't match
		echo $error = "Passwords don't match.";
	} else {
		$password = md5($password);

		// Prepare and execute the SQL statement to insert user data into the database
		$sql = "INSERT INTO `studentlogin`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
		$mysqli->query($sql);
		header("Location: login.php");
		exit();
	}
}

?>
