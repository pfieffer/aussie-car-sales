<?php

include('connection.php');

session_start();
$user_id = $_SESSION['user_id']; // get this from logged in user session later on


$make = mysqli_escape_string($conn,  $_POST['make']);
$model = mysqli_escape_string($conn, $_POST['model']);
$year = mysqli_escape_string($conn, $_POST['year']);
$milage = mysqli_escape_string($conn, $_POST['milage']);
$location = mysqli_escape_string($conn, $_POST['location']);
$price = mysqli_escape_string($conn, $_POST['price']);
// $image = $_POST['image'];

if ($make == '' || $model == '' || $year == '' || $milage == '' || $location == '' || $price == '') {
    echo "<h3>Please fill in all the fields";
} else {
    $sql = "INSERT INTO cars (make,model,year,milage,location,price,user_id)
    VALUES ('$make','$model','$year','$milage', '$location', '$price', '$user_id')";
    if (mysqli_query($conn, $sql)) {
        // echo "<h1>Car listing successful</h1>";

        echo '<script type="text/javascript">
        window.location.href = "buy.php";
        alert("Car listed successfully");
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

// TODO: Redirection logic on successful adding car

?>