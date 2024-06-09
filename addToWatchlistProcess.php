<?php

session_start();
include "connection.php";

if(isset($_SESSION["u"])){

    if(isset($_GET["pid"])){

        $user = $_SESSION["u"]["id"];
        $pid = $_GET["pid"];
 
        $watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `user_id`='".$user."' AND `product_id`='".$pid."' ");
        $watchlist_num = $watchlist_rs->num_rows;

        if($watchlist_num == 1){

            $watchlist_data = $watchlist_rs->fetch_assoc();
            $list_id = $watchlist_data["wa_id"];

            Database::iud("DELETE FROM `watchlist` WHERE `wa_id`='".$list_id."'");
            echo ("removed");

        }else{

            Database::iud("INSERT INTO `watchlist`(`user_id`,`product_id`) VALUES ('".$user."','".$pid."')");
            echo ("added");
            
        }

    }else{
        echo ("Something went wrong. Please try again later.");
    }
}else{
    echo ("Please Login First.");
}

?>