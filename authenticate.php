<?php
include('include/connection.php');

if (!isset($_POST['username'], $_POST['password'])) {
    // Could not get the data that should have been sent.
    exit('Please fill both the username and password fields!');
}

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, $_POST['password']);

$sql = "SELECT password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if ($result == false) {
    echo '<script type="text/javascript">
    alert("Invalid username and/or password.");
    window.location.href = "login.php"; // Redirect to the home page
    </script>';
    exit();
}

$row = mysqli_fetch_row($result);
$hashed_password = $row[0];

// Verify the entered password with the hashed password from the database
if (password_verify($password, $hashed_password)) {
    // echo "Login successful!";
    $userIdSql = "SELECT id FROM users WHERE username='$username'";
    $row = mysqli_fetch_row(mysqli_query($conn, $userIdSql));
    $userId = $row[0];
    // start the session and set user data as logged in
    if (!isset($_SESSION)) { session_start(); }
    $_SESSION["user_id"] = $userId;
    // echo "Session variable user_id set: ".$userId;

    echo '<script type="text/javascript">
    alert("Login successful.");
    window.location.href = "profile.php"; // Redirect to profile page
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Invalid username and/or password.");
    window.location.href = "login.php"; // Redirect to the home page
    </script>';
}

$conn->close();

?>