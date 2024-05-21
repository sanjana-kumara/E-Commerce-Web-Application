<?php

session_start();
include "connection.php";

$username = $_POST["un"];
$password = $_POST["pa"];
$rememberme = $_POST["rm"];

if (empty($username)) {
    echo ("Please Enter Username");
} else if (empty($password)) {
    echo ("Please Enter Password");
} else {

    $rs = Database::search("SELECT * FROM `user` WHERE `username`='" . $username . "' AND `password`='" . $password . "' ");
    $num = $rs->num_rows;
    $data = $rs->fetch_assoc();

    if ($num == 1) {

        echo ("Success");

        $_SESSION["u"] = $data;

        if ($rememberme == "true") {
            setcookie("username", $username, time() + 60 * 60 * 24 * 365);
            setcookie("password", $password, time() + 60 * 60 * 24 * 365);
        } else {
            setcookie("username", "", -1);
            setcookie("password", "", -1);
        }
    } else {
        echo ("Invalide User");
    }
}
