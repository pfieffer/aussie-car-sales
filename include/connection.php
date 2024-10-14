<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'aussie_car_sales');
if ($conn) {
    // echo 'Success connecting with the database';
} else {
    echo 'Failed connecting with the database';
}

?>