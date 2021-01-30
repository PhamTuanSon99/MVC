<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$database="mvc_project";

	$db = mysqli_connect($hostname, $username, $password, $database);
	mysqli_set_charset($db, "UTF8");
?>