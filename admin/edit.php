<?php
if (isset($_GET['id'])) {
    $id = ($_GET['id']);
} else {
    redirect('index.php');
}
$stmt = mysqli_prepare($conn, $sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>
    <h1>Edit User</h1>
    <form method="POST">
        Event Name: <input type="text" name="name" value='<?= $row['name'] ?>' placeholder="Enter Events name" required><br>
        Event Description: <input type="text" name="description" value='<?= $row['description'] ?>' placeholder="Enter The Description" required><br>
        Date: <input type="date" name="date" placeholder="Enter the date" required><br>
        Time: <input type="time" name="time" placeholder="Enter the time" required><br>
        Venue: <input type="text" name="venue" placeholder="Enter the venue" required><br>
        <input type="submit" name="sb" value="Create Event">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $title = secure($_POST['title']);
        $description = secure($_POST['description']);
        $date = secure($_POST['date']);
        $time = secure($_POST['time']);
        $venue = secure($_POST['venue']);

        $sql = "UPDATE `events` SET `title`='$title',`description`='$description',`date`='$date',`time`='$time',`venue`='$venue' WHERE id=$id";
        $mysqli->query($sql);

        redirect("index.php");
    }

    ?>
</body>

</html>