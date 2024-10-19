<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Search Results</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
  <?php include('include/navbar.php'); ?>

  <div class="container">
    <?php
    include('include/connection.php');

    // Get search parameters from the query string
    $model = isset($_GET['search-model']) ? $_GET['search-model'] : '';
    $location = isset($_GET['search-location']) ? $_GET['search-location'] : '';

    // Modify SQL query based on search parameters
    $sql = "SELECT * FROM cars WHERE 1=1"; // Base query

    if (!empty($model)) {
      $sql .= " AND model LIKE '%$model%'";
    }

    if (!empty($location)) {
      $sql .= " AND location LIKE '%$location%'";
    }
    // Execute query
    $result = $conn->query($sql);

    if (!$result) {
      echo "<h4>Error listing cars</h4>";
      exit();
    }

    // Count the number of results
    $numCars = $result->num_rows;

    // Display the number of cars found
    echo "<h2>Found $numCars cars matching your search</h2>";

    ?>
    <br>

    <div class="row">
      <?php
      // Check if the query returns any rows
      if ($numCars > 0) {
        // Iterate through the result set using a while loop
        while ($row = $result->fetch_assoc()) {
          $image = $row['image'];
          echo "
            <div class='col-4'>
              <div class='car-card'>
                <img src='$image' />
                <h4>" . $row['year'] . " " . $row['make'] . " " . $row['model'] . "</h4>
                <h5>$" . $row['price'] . "</h5>
                <p>📍 " . $row['location'] . "</p>
              </div>
            </div>
          ";
        }
      } else {
        echo "<h4>No results found</h4>";
      }

      // Close the connection
      $conn->close();
      ?>
    </div>
  </div>

  <?php include('include/footer.php') ?>
</body>

<script type="text/javascript" src="js/main.js"></script>

</html>