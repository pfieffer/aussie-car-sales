<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Add Car</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <script src='js/main.js'></script>
</head>

<body>

    <?php include('navbar.php'); ?>


    <div class="container">

        <form name="addCarForm" onsubmit="return validateAddCarForm()" id="login-form" method="post" action="doaddcar.php">
            <h2>
                List car for sale
            </h2>
            <div class="row">
                <div class="col-30">
                    <label for="make">Make</label>
                </div>
                <div class="col-70">
                    <input type="text" id="make" name="make" placeholder="Toyota" required>
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="model">Model</label>
                </div>
                <div class="col-70">
                    <input type="text" id="model" name="model" placeholder="Hilux">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="year">Year</label>
                </div>
                <div class="col-70">
                    <input type="number" id="year" name="year" placeholder="2007">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="milage">Milage</label>
                </div>
                <div class="col-70">
                    <input type="number" id="milage" name="milage" placeholder="12000">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="location">Location</label>
                </div>
                <div class="col-70">
                    <input type="text" id="location" name="location" placeholder="Gungahlin, ACT">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="price">Price</label>
                </div>
                <div class="col-70">
                    <input type="number" id="price" name="price" placeholder="$49000">
                </div>
            </div>

            <br>

            <div class="row">
                <input type="submit" value="List Car" class="btn">
            </div>
        </form>

    </div>


    <?php include('footer.php') ?>

</body>

</html>