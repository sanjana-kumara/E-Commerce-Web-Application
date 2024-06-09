<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$username = $_POST["u"];
$password = $_POST["p"];
$mobile = $_POST["m"];

if (empty($fname)) {
    echo ("Please Enter Your First Name");
}elseif (strlen($fname) > 20){
    echo ("First Name Shoud be Less Than 20 Charaters");
}elseif (empty($lname)){
    echo ("Please Enter Your Last Name");
}elseif (strlen($lname) > 20){
    echo ("Last Name Shoud be Less Than 20 Charaters");
}elseif (empty($email)){
    echo ("Please Enter Your Email Address");
}elseif (strlen($email) > 100){
    echo ("Email Address Shoud be Less Than 100 Charaters");
}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Your Email Address is Inavalide");
}elseif (empty($username)){
    echo ("Please Enter Your User Name");
}elseif (strlen($username) > 20){
    echo ("User Name Shoud be Less Than 20 Charaters");
}elseif (empty($password)){
    echo ("Please Enter Your Password");
}elseif (strlen($password) < 5 || strlen($password) > 45){
    echo ("Password Must Contain 5 - 45 Charaters");
}elseif (empty($mobile)) {
    echo ("Please Enter Your Mobile Number");
}elseif (strlen($mobile) != 10){
    echo ("Mobile Number Must Contain 10 Characters");
}elseif(!preg_match("/07[1,2,4,5,6,7,8]{1}[0-9]{7}/",$mobile)){
    echo ("Invalid Mobile Number");
}else{
    $rs = Database::search("SELECT * FROM `user` WHERE `username`='".$username."' AND `email`='".$email."' AND `mobile`='".$mobile."' ");
    $num = $rs->num_rows;

    if ($num == 1) {
        echo ("Enter Your Username OR Email Or Mobile Already Exists");
    } else {
        Database::iud("INSERT INTO `user` (`fname`,`lname`,`email`,`mobile`,`password`,`username`,`statues`)
        VALUES ('".$fname."','".$lname."','".$email."','".$mobile."','".$password."','".$username."','0') ");

        echo ("Success");

    }
     
}

?>