<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
// Connect to MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = mysqli_connect('localhost', 'id16533209_sahilcc', '6<4F)aP]uEM6OGZW', 'id16533209_sahil');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the score for a specific user
$email = $_POST["email"]; // ID of the user whose score you want to retrieve
$sql = "SELECT math_score FROM sc_users WHERE username = '$email' ";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Get the row containing the score
    $row = $result->fetch_assoc();

    // Return the score to Unity as a JSON string
    echo $row["math_score"];
} else {
    // Handle the error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
