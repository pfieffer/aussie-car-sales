<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
    <?php include('include/navbar.php') ?>

    <div class="container">

        <form name="loginForm" onsubmit="return validateLoginFields()" id="login-form" method="POST" action="authenticate.php">
            <h2>
                Login to buy and sell cars
            </h2>
            <div class="row">
                <div class="col-30">
                    <label for="username">Username</label>
                </div>
                <div class="col-70">
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="password">Password</label>
                </div>
                <div class="col-70">
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
            </div>

            <br>

            <div class="row">
                <input type="submit" value="Login" class="btn">
            </div>
        </form>

        <br>

    </div>

    <?php include('include/footer.php') ?>
</body>

<script type="text/javascript" src="js/main.js"></script>

</html>