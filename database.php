<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
	$host = "localhost"; // Host name 
	$db_username = "id16533209_sahilcc"; // Mysql username 
	$db_password = "JDO|3J?fo\J@\Mk@"; // Mysql password 
	$db_name = "id16533209_sahil"; // Database name 

	$mysqli_conection = mysqli_connect($host, $db_username, $db_password, $db_name)or die("cannot connect"); 
?>