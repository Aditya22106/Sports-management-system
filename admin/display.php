<?php

include_once('connection.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];

    if (empty($title) || empty($description) || empty($date) || empty($time) || empty($venue)) {
       
        $error = "Please fill in all required fields.";
    } else {
        $host = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "login";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if(isset($_POST['sb']))
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO events (title, description, date, time, venue) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $title, $description, $date, $time, $venue);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) == 1) {
            $success = "Event created successfully.";
        } else {
            $error = "Failed to create event. Please try again later.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}

?>
