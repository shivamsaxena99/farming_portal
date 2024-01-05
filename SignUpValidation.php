<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kisaan_sashaktikaran_portal";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        echo " "; //Connect Successful
    }
    $name = $_POST['username'];
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];
    $cpassword = $_POST['usercpassword'];
    $dateofbirth = $_POST['userdateofbirth'];
    $gender = $_POST['usergender'];
    $state = $_POST['userstate'];
    $district = $_POST['userdistrict'];

    if ($password !== $cpassword) {
        echo "<script>alert('Confirm password not matched!');
        window.location.href='SignUP.php';</script>";
    }

    // Check whether this email exists
    $existSql = "select * from `signup` where email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {
        echo "<script>alert('Email already in use.');
              window.location.href='SignUP.php';</script>";
    } else {
        if (strlen($password) == 6 or strlen($password) > 6) {
            $sql = "INSERT INTO `signup` (`name`, `email`, `password`, `dateofbirth`, `gender`, `state`, `district`) VALUES ( '$name', '$email', '$password', '$dateofbirth', '$gender', '$state', '$district')";
            $result = mysqli_query($conn, $sql);
            echo "<script>alert('You have successfully registered.');
                  window.location.href='Home.php';</script>";
        } else {
            echo "<script>alert('Your password is less than 6 characters.');
                  window.location.href='SignUP.php';</script>";
        }
    }
}
