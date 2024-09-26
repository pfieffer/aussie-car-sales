<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <title>Aussie Car Sales</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
  <?php
  include('navbar.php');
  ?>

  <div class="hero-image">
    <div class="hero-text">
      <h1>Aussie Car Sales</h1>
      <p>
        Your
        <span style="text-decoration: underline">one stop solution</span> to
        buy and sell Cars in Australia
      </p>
      <a class="btn" href="buy.php">Search Cars</a>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <h2>Recent cars</h2>

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

    <div class="row" style="text-align: center;">
      <a href="buy.html" class="btn">
        Show All
      </a>
    </div>

    <br>
    <div class="row">
      <h2>Looking to Sell?</h2>

      <div class="col-6">
        <div class="car-card">
          💰 Get valuation for your car
        </div>
      </div>

      <div class="col-6">
        <div class="car-card">
          ✅ List your car for free
        </div>
      </div>

    </div>

    <br>
    <h2>
      Expert Car reviews
    </h2>

    <div class="row">

      <div class="col-4">
        <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RlMWLyuJrzc"
          title="This is Nissan’s BEST car!" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>

      <div class="col-4">
        <iframe width="100%" height="auto"
          src="https://www.youtube.com/embed/e1r3Ce3129w?list=PLj8xiTIFL1M3gSW1ChcsbZj9E7xvdIhjI"
          title="Land Rover Defender 2021 in-depth on and off-road REVIEW" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

      </div>

      <div class="col-4">
        <iframe width="100%" height="auto"
          src="https://www.youtube.com/embed/83vPYRIeW5M?list=PLj8xiTIFL1M3gSW1ChcsbZj9E7xvdIhjI"
          title="Honda CR-V SUV 2020 in-depth review | carwow Reviews" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>

    </div>

  </div>

  <?php include('footer.php') ?>
</body>

</html>