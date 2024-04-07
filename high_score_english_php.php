<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Connect to the database
$host = 'localhost';
$user = 'id16533209_sahilcc';
$password = '6<4F)aP]uEM6OGZW';
$database = 'id16533209_sah';
$conn = mysqli_connect('localhost', 'id16533209_sahilcc', '6<4F)aP]uEM6OGZW', 'id16533209_sahil');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username and high score from the HTTP request
$email = $_POST["email"];
$math_score = $_POST["english_score"];

// Update the player's high score in the database
$sql = "UPDATE sc_users SET english_score='$math_score' WHERE username ='$email'";
 mysqli_query($conn, $sql);
if ($conn->query($sql) === TRUE) {
    


    
} else {
    echo "Error updating high score: " . $conn->error;
}

$conn->close();
?>
