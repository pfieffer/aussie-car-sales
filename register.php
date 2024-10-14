<?php

include('include/connection.php');

$fullName = mysqli_escape_string($conn, $_POST['fullName']);
$userName = mysqli_escape_string($conn, $_POST['username']);
$email = mysqli_escape_string($conn, $_POST['email']);
$password = mysqli_escape_string($conn, $_POST['password']);
$address = mysqli_escape_string($conn, $_POST['address']);
$phoneNumber = mysqli_escape_string($conn, $_POST['phone']);

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if ($fullName == '' || $userName == '' || $email == '' || $password == '' || $address == '' || $phoneNumber == '') {
        // Could not get the data that should have been sent.
        exit('Please fill in all the fields!');
} else {
    $sql = "INSERT INTO users (full_name,username,email,password,address,phone_number)
    VALUES ('$fullName','$userName','$email','$hashed_password', '$address', '$phoneNumber')";
    if (mysqli_query($conn, $sql)) {

        echo '<script type="text/javascript">
        alert("Registration successful. Login with your username and password to continue");
        window.location.href = "login.php";
        </script>';
    } else {
        // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        echo '<script type="text/javascript">
        alert("Something went wrong. Please try again later");
        window.location.href = "index.php";
        </script>';
    }
}

$conn -> close();

?>
