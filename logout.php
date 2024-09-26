<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();

// Output JavaScript to alert and redirect
echo '<script type="text/javascript">
    alert("You have been logged out.");
    window.location.href = "index.php"; // Redirect to the home page
    </script>';
?>