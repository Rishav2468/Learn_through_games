<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");


  session_start(); 

//   if (!isset($_SESSION['username'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  
  // Escape the email and password values to avoid any special characters
$username= addslashes($_SESSION['username']);
$password = addslashes($_SESSION['password']);

// Combine the email and password values into a single string
$data = $username . '|' . $password;

// Send the data to the client as plain text
header('Content-Type: text/plain');
echo $data;
  
?> 
