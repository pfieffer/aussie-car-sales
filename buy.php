<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Buy</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
  <?php include('include/navbar.php'); ?>

  <div class="container">
    <h2>
      Search from a catalog of over 20,000 cars in Australia
    </h2>

    <form name="searchCarForm" onsubmit="return validateSearchCarForm()" action="search.php" method="GET">
      <div class="row">

        <div class="col-6" style="padding-right: 48px;">
          <input type="text" id="search-model" name="search-model" placeholder="Search model">
        </div>

        <div class="col-3">
          <input type="text" id="search-location" name="search-location" placeholder="Location">
        </div>

        <div class="col-3">

          <button value="Go" class="btn" style="margin-top: 0px; padding: 8px 20px; width: 100%;"
            onclick="return validateSearchCarForm()" type="submit">Go</button>
        </div>
      </div>

    </form>

    <br>


    <div class="row">

      <?php

      include('include/connection.php');

      // if()
      $sql = "SELECT * FROM cars";
      // Execute query
      $result = $conn->query($sql);
      if (!$result) {
        echo "<h4>Error listing cars</h4>";
        exit();
      }

      // Check if the query returns any rows
      if ($result->num_rows > 0) {
        // Iterate through the result set using a while loop
        while ($row = $result->fetch_assoc()) {
          // Access row data
          // echo "ID: " . $row['id'] . " - Make: " . $row['make'] . " - Model: " . $row['model'] . "<br>";

          echo "
          <div class='col-4'>
        <div class='car-card'>
          <img src='images/cars/mitsubishi-outlander.png' />
          <h4>" . $row['year'] . " " . $row['make'] . " " . $row['model'] . "</h4>
          <h5>$" . $row['price'] . "</h5>
          <p>📍 " . $row['location'] . "</p>
        </div>
      </div>
          ";
        }
      } else {
        echo "0 results";
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