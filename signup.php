<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

   <?php include('navbar.php'); ?>

    <div class="container">

        <form name="registrationForm" onsubmit="return validateSignupFields()" id="signup-form" method="POST" action="register.php" >
            <br>
            Fill up the form to register an account on Car Sales Australia and enjoy buying and listing cars for free.

            <br>
            <div class="row">
                <div class="col-30">
                    <label for="name">Full Name</label>
                </div>
                <div class="col-70">
                    <input type="text" id="name" name="fullName" placeholder="Your Name">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="address">Address</label>
                </div>
                <div class="col-70">
                    <input type="text" id="address" name="address" placeholder="Full Address">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="col-70">
                    <input type="tel" id="phone" name="phone" placeholder="+61 XXX XXX XXX">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="email">Email</label>
                </div>
                <div class="col-70">
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
            </div>

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
                <p>By clciking Register, you understand and agree to the <a href="#">terms and conditions</a> of Car
                    Sales Australia.</p>
                <input type="submit" value="Register" class="btn">
            </div>

        </form>
    </div>

    <?php include('footer.php') ?>
</body>

<script type="text/javascript" src="js/main.js"></script>

</html>