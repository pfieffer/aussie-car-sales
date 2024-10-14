<?php

if (!isset($_GET['search-model']) || !isset($_GET['search-location'])) {
    echo '<script type="text/javascript">
    window.location.href = "buy.php";
    alert("Please enter search keyword");
    </script>';
}

include('include/connection.php');
$model = mysqli_escape_string($conn, $_GET['search-model']);
$location = mysqli_escape_string($conn, $_GET['search-location']);

$sql = "SELECT * FROM cars WHERE model LIKE '%$model%' AND location LIKE '%$location%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo (" <tr>
      <td>" . $row['make'] . "</td>
      <td>" . $row['model'] . "</td>
      <td>" . $row['location'] . "</td>
     
    </tr>");
    }
} else {
    echo "0 results";
}

?>
