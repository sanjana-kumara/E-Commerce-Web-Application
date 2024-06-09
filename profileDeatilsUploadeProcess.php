<?php

include "connection.php";
session_start();

$user = $_SESSION["u"];

$first_name = $_POST["fn"];
$last_name = $_POST["ln"];
$password = $_POST["pa"];
$email = $_POST["em"];
$line_1 = $_POST["ln1"];
$line_2 = $_POST["ln2"];
$city = $_POST["ct"];
$districe = $_POST["dis"];
$postal_code = $_POST["ps"];
$mobile_no = $_POST["mb"];

$user_rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "' ");
$user_num = $user_rs->num_rows;

if ($user_num == 1) {

    $user_data = $user_rs->fetch_assoc();

    if (empty($first_name)) {
        echo ("Please Enter Your First Name");
    } elseif (strlen($first_name) > 20) {
        echo ("First Name Shoud be Less Than 20 Charaters");
    } elseif (empty($last_name)) {
        echo ("Please Enter Your Last Name");
    } elseif (strlen($last_name) > 20) {
        echo ("Last Name Shoud be Less Than 20 Charaters");
    } elseif (empty($email)) {
        echo ("Please Enter Your Email Address");
    } elseif (strlen($email) > 100) {
        echo ("Email Address Shoud be Less Than 100 Charaters");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo ("Your Email Address is Inavalide");
    } elseif (empty($password)) {
        echo ("Please Enter Your Password");
    } elseif (strlen($password) < 5 || strlen($password) > 45) {
        echo ("Password Must Contain 5 - 45 Charaters");
    } elseif (empty($mobile_no)) {
        echo ("Please Enter Your Mobile Number");
    } elseif (strlen($mobile_no) != 10) {
        echo ("Mobile Number Must Contain 10 Characters");
    } elseif (!preg_match("/07[1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile_no)) {
        echo ("Invalid Mobile Number");
    } else if (empty($line_1)) {
        echo ("Please Enter Your Address Line 01");
    } elseif (strlen($line_1) > 50) {
        echo ("Please Enter Address Line 01 Shuld be less than 50 Characters");
    } else if (empty($line_2)) {
        echo ("Please Enter Your Address Line 02");
    } elseif (strlen($line_2) > 50) {
        echo ("Please Enter City Shuld be less than 50 Characters");
    } else if (empty($city)) {
        echo ("Please Enter Your city");
    } elseif (strlen($city) > 50) {
        echo ("Please Enter City Shuld be less than 50 Characters");
    } else if (empty($districe)) {
        echo ("Please Enter Your Distric");
    } elseif (strlen($districe) > 50) {
        echo ("Please Enter Distric Shuld be less than 50 Characters");
    } else if (empty($postal_code)) {
        echo ("Please Enter Your Postal Code");
    } elseif (strlen($postal_code) > 50) {
        echo ("Please Enter Postal Code Shuld be less than 50 Characters");
    } else {

        Database::iud("UPDATE `user` SET `mobile`='" . $mobile_no . "',`password`='" . $password . "',
        `email`='" . $email . "',`address_line_01`='" . $line_1 . "',`address_line_02`='" . $line_2 . "',
        `city`='" . $city . "',`District`='" . $districe . "',`Postal_code`='" . $postal_code . "' WHERE `email`='" . $user["email"] . "' ");
    }

    if (sizeof($_FILES) == 1) {

        $image = $_FILES["im"];
        $file_type = $image["type"];
        $allowed_extention_type = array("image/jpeg", "image/png", "image/svg+xml");

        
        if (in_array($file_type, $allowed_extention_type)) {
            $new_file_type;

            if ($file_type == "image/jpeg") {
                $new_file_type = ".jpeg";
            } else if ($file_type == "image/png") {
                $new_file_type = ".png";
            } else if ($file_type == "image/svg+xml") {
                $new_file_type = ".svg";
            }

            $file_name = "resource//profile_img//" . $first_name . "_" . uniqid() . $new_file_type;
            move_uploaded_file($image["tmp_name"], $file_name);

            $profile_img_rs = Database::search("SELECT * FROM `profile_img` WHERE `user_id`='" . $user["id"] . "'");

            if ($profile_img_rs->num_rows == 1) {

                Database::iud("UPDATE `profile_img` SET `img_path`='" . $file_name . "' WHERE `user_id`='" . $user["id"] . "' ");
                echo ("Upadated");
            } else {

                Database::iud("INSERT INTO `profile_img`(`img_path`,`user_id`) VALUES ('" . $file_name . "','" . $user["id"] . "') ");
                echo ("Saved");
            }

            $rs = Database::search("SELECT * FROM `user` ='" . $user_data["id"] . "' ");
            $d = $rs->fetch_assoc();
            $_SESSION["u"] = $d;

        }

    } else if (sizeof($_FILES) == 0) {

        echo ("You Have not Select any Images");

    } else {

        echo ("You Must Select only 01 Profile image.");

    }

} else {

    header("location:index.php");
    
}
