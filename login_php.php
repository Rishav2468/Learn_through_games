<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
// Retrieve the email and password from the Unity request
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to the MySQL database
$conn = mysqli_connect('localhost', 'id16533209_sahilcc', '6<4F)aP]uEM6OGZW', 'id16533209_sahil');
if (!$conn) {
    die('Failed to connect to database: ' . mysqli_connect_error());
}

// Retrieve the user data from the database based on the email address
$query = "SELECT * FROM sc_users WHERE username='$username'";
$result = mysqli_query($conn, $query);

// Check if the query returned exactly one row
if ($result && mysqli_num_rows($result) == 1) {
    // The query returned exactly one row, so the user exists
    $row = mysqli_fetch_assoc($result);
    
    $stored_password = $row['password'];
    // Compare the plain text password against the stored password
    if ($password == $stored_password) {
        // The password matches the stored password, so the login was successful
        $email = $row['email'];
        echo "Success" . "|" . $email . "|" . $username;
    } else {
        // The password does not match the stored password, so the login failed
        $errors[] = "Wrog email or password.";
        echo "Failed" . "|" . implode(",", $errors);
    }
} else {
    // The query returned zero or multiple rows, so the user does not exist or there are duplicate accounts
    $errors[] = "Wrog email or password.";
    echo "Failed" . "|" . implode(",", $errors);
}

// Close the database connection
mysqli_close($conn);

?>
