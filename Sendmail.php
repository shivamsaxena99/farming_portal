<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

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
    $email = $_POST['useremail'];
    //to prevent from mysqli injection 
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($conn, $email);

    $sql = "select *from `signup` where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $userid = $row['id'];
        $username = $row['name'];
        $to_email = $email;
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
        //Server settings
        $mail->SMTPDebug = 2;                                       //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'shivamsaxena8200@gmail.com';           //SMTP username
        $mail->Password   = 'ftdn hbnv lsrf jfva';                  //SMTP password
        $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('shivamsaxena8200@gmail.com', 'Shivam Saxena');
        //$mail->addAddress('joe@example.net', 'Joe User');                   //Add a recipient
        $mail->addAddress($to_email);                                         //Name is optional
        //$mail->addAddress('ellen@example.com');                             //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');                      //Add attachments
        //$mail->addAttachment('C:\wamp64\www\Kisaan Portal 1\Logo.png');    //Optional name

        //Content
        $mail->isHTML(true);                                                 //Set email format to HTML
        $mail->Subject = "Kisaan Sashaktikaran Portal Team";
        $mail->Body    = "Dear " . $username . "," . "<br>" . "Click here too reset your password http://localhost/kisaan%20Portal/Reset%20password.php?id=$userid" . "<br>" . "Wish you all the best!" . "<br>" . "<br>" . "Regards" . "<br>" . "Kisaan Sashaktikaran Portal Team" . "<br>" . "India";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if ($mail->send()) {
            echo "<script>alert('Password reset link has been sent to your email.');
        window.location.href='Home.php';</script>";
        } else {
            echo "Failed to send password reset email.... Mailer Error: {$mail->ErrorInfo}";
            "<script>window.location.href='Login.php';</script>";
        }
    } else {
        echo "<script>alert('This Email does not exist.');
    window.location.href='Home.php';</script>";
    }
}
