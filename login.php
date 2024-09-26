<?php
include('connection.php');

if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

// No need to use mysqli_escape_string here, since we are using prepared statements
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$sql = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if($result==false){
    echo "Invalid username or password";
    exit();
}

$row = mysqli_fetch_row($result);
$hashed_password = $row[0];

// Verify the entered password with the hashed password from the database
if (password_verify($password, $hashed_password)) {
    echo "Login successful!";
    // Here you can start the session and set user data as logged in
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>