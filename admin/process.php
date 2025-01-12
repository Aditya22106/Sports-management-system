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
$game = $_POST['game'];
$win = $_POST['win'];
$sec = $_POST['win'];
$thr = $_POST['thr'];

// SQL query to insert data into results table
$sql = "INSERT INTO results (game, win, sec, thr) VALUES ('$game', '$win', '$sec', '$thr')";

// Insert data and check for errors
if (mysqli_query($conn, $sql)) {
  echo "Result added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
