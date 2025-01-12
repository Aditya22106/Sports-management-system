<?php

include "connection.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 
$sql="DELETE FROM `events` WHERE `id`='$id";
$mysqli->query($sql);
redirect('index.php');

?>
