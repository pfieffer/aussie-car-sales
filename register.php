<?php

include('connection.php');

$fullName = mysqli_escape_string($conn, $_POST['fullName']);
$userName = mysqli_escape_string($conn, $_POST['username']);
$email = mysqli_escape_string($conn, $_POST['email']);
$password = mysqli_escape_string($conn, $_POST['password']);
$address = mysqli_escape_string($conn, $_POST['address']);
$phoneNumber = mysqli_escape_string($conn, $_POST['phone']);

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if ($fullName == '' || $userName == '' || $email == '' || $password == '' || $address == '' || $phoneNumber == '') {
    echo "<h3>Please fill in all the fields";
} else {
    $sql = "INSERT INTO users (full_name,username,email,password,address,phone_number)
    VALUES ('$fullName','$userName','$email','$hashed_password', '$address', '$phoneNumber')";
    if (mysqli_query($conn, $sql)) {
        echo "<h1>Signup successful</h1>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$conn -> close();

?>
