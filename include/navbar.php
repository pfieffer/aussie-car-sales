<nav class="navbar">
    <div class="logo">
      <a href="#"><img src="images/logo.png" alt="Logo" /></a>
    </div>
    <ul class="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="buy.php">Buy</a></li>
      <!-- TODO: Check if logged in and if logged in, take to addcar.html else go to login.php -->
      <?php 
        session_start();
        if(isset($_SESSION['user_id'])){
            echo "<li><a href='addcar.php'>Sell</a></li> ";
        } else {
          echo "<li><a href='login.php'>Sell</a></li> ";
        }
         ?>
      <li><a href="about.php">About</a></li>
    </ul>
    <ul class="nav-right">
        <?php 
        if(isset($_SESSION['user_id'])){
            echo "<li><a href='logout.php'>Logout</a></li>";
            echo "<li><a href='profile.php'>Profile</a></li>";
        } else {
            echo "<li><a href='login.php'>Login</a></li>";
            echo "<li><a href='signup.php'>Sign Up</a></li>";
        }
        ?>
    </ul>
  </nav>