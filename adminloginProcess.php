<?php

session_start();
include "connection.php";

$uname = $_POST["un"];
$password = $_POST["pa"];

if (empty($uname)) {
    echo("Please Enter Your Admin Username");
} elseif (empty($password)) {
    echo ("Please Enter Your Admin Password");
}else{

    $rs = Database::search("SELECT * FROM `user` WHERE `username`='".$uname."' AND `password`='".$password."' AND `user_type_id`='1' AND `statues`='1' ");
    $num = $rs -> num_rows;

    if ($num == 1) {

    $data = $rs->fetch_assoc();
      
    echo("Success");

    $_SESSION["ad"] = $data;

    } else {
        echo("Inavalide Admin Username OR Password");
    }
    

}


?>