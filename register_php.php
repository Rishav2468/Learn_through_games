<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
// Define the database connection parameters
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'database_name';

// Connect to the database
$conn = mysqli_connect('localhost', 'id16533209_sahilcc', '6<4F)aP]uEM6OGZW', 'id16533209_sahil');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if the username or email already exists in the database
    $query = "SELECT * FROM sc_users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $errors[] = "Username or email already exists.";
    }

    // If there are no errors, insert the user into the database
    if (empty($errors)) {
        $query = "INSERT INTO sc_users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "User registered successfully.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        // Display the errors to the user
        echo implode("<br>", $errors);
    }
}

// Close the database connection
mysqli_close($conn);

?>
