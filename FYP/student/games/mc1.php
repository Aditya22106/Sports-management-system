<?php
// Database connection
$host = "localhost";
$user = "root";
$password = "";
$database = "login";

$conn = mysqli_connect("localhost","root","","login");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Form data
$name = $_POST['name'];
$roll = $_POST['roll'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$name2 = $_POST['name2'];
$roll2 = $_POST['roll2'];
$name3 = $_POST['name3'];
$roll3 = $_POST['roll3'];
$name4 = $_POST['name4'];
$roll4 = $_POST['roll4'];
$name5 = $_POST['name5'];
$roll5 = $_POST['roll5'];
$name6 = $_POST['name6'];
$roll6 = $_POST['roll6'];
$name7 = $_POST['name7'];
$roll7 = $_POST['roll7'];
$name8 = $_POST['name8'];
$roll8 = $_POST['roll8'];
$name9 =  $_POST['name9'];
$roll9 =  $_POST['roll9'];
$name10 = $_POST['name10'];
$roll10 = $_POST['roll10'];
$name11 = $_POST['name11'];
$roll11 = $_POST['roll11'];
$name12 = $_POST['name12'];
$roll12 = $_POST['roll12'];
$name13 = $_POST['name13'];
$roll13 = $_POST['roll13'];



// SQL query to insert data into students table
$sql = "INSERT INTO malecricket (name, roll, phone, email, name2, roll2, name3, roll3, name4, roll4, name5, roll5, name6, roll6, name7, roll7, name8, roll8, name9, roll9, name10, roll10, name11, roll11, name12, roll12, name13, roll13) VALUES ('$name', '$roll', '$phone', '$email', '$name2', '$roll2', '$name3', '$roll3', '$name4', '$roll4', '$name5', '$roll5', '$name6', '$roll6', '$name7', '$roll7', '$name8', '$roll8', '$name9', '$roll9', '$name10', '$roll10', '$name11', '$roll11', '$name12', '$roll12', '$name13', '$roll13')";

// Insert data and check for errors
if (mysqli_query($conn, $sql)) {
  echo "Student added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>