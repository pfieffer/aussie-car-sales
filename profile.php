<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Profile</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>

<body>
    <?php
    include('include/navbar.php');

    $user_id = $_SESSION['user_id'];

    include('include/connection.php');
    $sql = "SELECT * FROM users where id='$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $fullName = $row['full_name'];
    session_start();
    $_SESSION['full_name'] = $fullName;
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['phone_number'] = $row['phone_number'];

    ?>


    <div class="container">
        <h2 class="gradient-heading">Seller profile</h2>

        <div class="row">
            <div class="col-3">
                Name
            </div>
            <div class="col-9">
                <?php $fullName = $_SESSION['full_name'];
                echo $fullName; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Username
            </div>
            <div class="col-9">
                <?php $username = $_SESSION['username'];
                echo $username; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Email
            </div>
            <div class="col-9">
                <?php $email = $_SESSION['email'];
                echo $email; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Address
            </div>
            <div class="col-9">
            <?php $address = $_SESSION['address'];
                echo $address; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Phone Number
            </div>
            <div class="col-9">
            <?php $phone = $_SESSION['phone_number'];
                echo $phone; ?>
            </div>
        </div>
    </div>


    <?php
    include('include/footer.php');
    ?>

</body>

</html>