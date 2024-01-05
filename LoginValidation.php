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

    //to prevent from mysqli injection 
    $name = stripcslashes($name);
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $name = mysqli_real_escape_string($conn, $name);
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "select *from `signup` where name = '$name' and email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $name;
        $_SESSION['useremail'] = $email;
        echo "<script>alert('Login successful.');
              window.location.href= 'Home.php';</script>";
    } else {
        echo "<script>alert('Login failed. Invalid name,email or password.');
              window.location.href= 'Login.php';</script>";
    }
}
