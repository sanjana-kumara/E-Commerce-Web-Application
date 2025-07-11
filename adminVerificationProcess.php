<?php

include "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;


$email = $_POST["e"];
$uname = $_POST["u"];

if (empty($uname)) {

    echo ("Username field should not be empty.");
} else {

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='" . $email . "' AND `user_name`='" . $uname . "' ");
    $admin_num = $admin_rs->num_rows;

    if ($admin_num > 0) {

        $code = uniqid();

        Database::iud("UPDATE `admin` SET `vcode`='" . $code . "' WHERE `email`='" . $email . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sanjananisalkumara@gmail.com';
        $mail->Password = 'phefocofkconvbno';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('sanjananisalkumara@gmail.com', 'Reset Password');
        $mail->addReplyTo('sanjananisalkumara@gmail.com', 'Reset Password');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Halgahawatta Hardware Admin Login Verification Code';
        $bodyContent = '<h1 style="color:blue;">Your Verification Code is ' . $code . '</h1>';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Verification code sending failed.';
        } else {
            echo 'Success';
        }
    } else {
        echo ("You are not a valid user.");
    }
    
}
