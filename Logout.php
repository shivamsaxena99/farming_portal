<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
       echo "<script>alert('You have already logout.');
             window.location.href= 'Home.php';</script>";
       exit;
} else

       echo "<script>alert('Logout Successful.');
       window.location.href= 'Home.php';</script>";
session_destroy();
