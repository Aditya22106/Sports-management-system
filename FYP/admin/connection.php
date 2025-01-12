<?php

$mysqli = new mysqli("localhost","root","","login");

session_start();

function printArray($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

?>
