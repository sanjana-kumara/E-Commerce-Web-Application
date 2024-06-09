<?php

include "connection.php";

$email = $_POST["e"];
$newpassword = $_POST["np"];
$retypepassword = $_POST["rp"];
$verification = $_POST["vc"];

echo($email);
echo($newpassword);
echo($retypepassword);
echo($verification);

if(empty($email)){
    echo("Please Enter Emali Address.");
}elseif(strlen($email) > 100){
    echo("Email Address Must Contain LOWER THAN 100 characters.");
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalied Email Address.");
}elseif(empty($newpassword)){
    echo("Enter New Password.");
}else if(strlen($newpassword) < 5 || strlen($newpassword) > 20){
    echo ("New Password Must Contain 5 to 20 Characters.");
}elseif(empty($retypepassword)){
    echo("Enter Retype Password.");
}else if(strlen($retypepassword) < 5 || strlen($retypepassword) > 20){
    echo ("Retype Password Must Contain 5 to 20 Characters.");
}elseif ($newpassword != $retypepassword) {
    echo ("Password Does Not Match.");
}else {
    
    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `vcode`='".$verification."' ");
    $n = $rs -> num_rows;

    if($n == 1){

        Database::iud("UPDATE `user` SET `password`='".$retypepassword."' WHERE `email`='".$email."' ");
        echo("Success");

    }else {
        echo("Inavalid Email Address Or Verification Code");
    }

}

?>