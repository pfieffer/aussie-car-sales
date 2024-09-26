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
  <?php include('navbar.php'); ?>

  <div class="container">
    <h2>
      Search from a catalog of over 20,000 cars in Australia
    </h2>

    <form name="searchCarForm">
      <div class="row">

        <div class="col-6" style="padding-right: 48px;">
          <input type="text" id="searchKeyword" name="searchKeyword" placeholder="Search Keyword">
        </div>

        <div class="col-3">
          <input type="text" id="searchLocation" name="searchLocation" placeholder="Location">
        </div>

        <div class="col-3">
          <button value="Go" class="btn" style="margin-top: 0px; padding: 8px 20px; width: 100%;"
            onclick="return validateSearchCarForm()">Go</button>
        </div>
      </div>

    </form>

    <br>


    <div class="row">

      <div class="col-4">
        <div class="car-card" onclick="window.open('car-detail.html', '_self')">
          <img src="images/cars/mitsubishi-outlander.png" />
          <h4>2012 Mitsubishi Outlander</h4>
          <h5>$21,000</h5>
          <p>📍 Chatswood, NSW</p>
        </div>
      </div>

      <div class="col-4">
        <div class="car-card" onclick="window.open('car-detail.html', '_self')">
          <img src="images/cars/subaru-outback.png" />
          <h4>2021 Subaru Outback</h4>
          <h5>$32,000</h5>
          <p>📍 Florey, ACT</p>
        </div>
      </div>

      <div class="col-4">
        <div class="car-card" onclick="window.open('car-detail.html', '_self')">
          <img src="images/cars/kia-sportage.jpg" />
          <h4>2018 Kia Sportage</h4>
          <h5>$21,000</h5>
          <p>📍 Franklin, ACT</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-4">
        <div class="car-card" onclick="window.open('car-detail.html', '_self')">
          <img src="images/cars/landcruiser.jpg" />
          <h4>2018 Toyota Landcruiser</h4>
          <h5>$72,000</h5>
          <p>📍 Geelong, VIC</p>
        </div>
      </div>

      <div class="col-4">
        <div class="car-card" onclick="window.open('car-detail.html', '_self')">
          <img src="images/cars/xtrail.jpg" />
          <h4>2019 Nissan X-Trail</h4>
          <h5>$29,000</h5>
          <p>📍 Brisbane, QLD</p>
        </div>
      </div>

      <div class="col-4">
        <div class="car-card" onclick="window.open('car-detail.html', '_self')">
          <img src="images/cars/civic.jpg" />
          <h4>2023 Honda Civic Type-R</h4>
          <h5>$78,000</h5>
          <p>📍 Manly, NSW</p>
        </div>
      </div>

    </div>
  </div>

  <?php include('footer.php') ?>
</body>

<script type="text/javascript" src="js/main.js"></script>

</html>