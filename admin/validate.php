<?php

include_once('connection.php');

function test_input($data)
{
	global $mysqli;
	$data = mysqli_real_escape_string($mysqli, $data);
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = test_input($_POST["username"]);
	$password = md5(test_input($_POST["password"]));
	$role = test_input($_POST["role"]);

	if ($role == 'admin') {
		$result = $mysqli->query("SELECT * FROM `adminlogin` WHERE `username`='$username' AND `password`='$password'");
		if ($result->num_rows > 0) {
			$_SESSION['username'] = $username;
			header("location:index.php");
			exit();
		} else {
			echo "WRONG INFORMATION";
			exit();
		}
	} elseif ($role == 'student') {
		$result = $mysqli->query("SELECT * FROM `studentlogin` WHERE `email`='$username' AND `password`='$password'");
		if ($result->num_rows > 0) {
			$_SESSION['username'] = $username;
			header("location:../student/index_st.php");
			exit();
		} else {
			echo "WRONG INFORMATION";
			exit();
		}
	}
}
