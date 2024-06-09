<?php

include "connection.php";

$list_id = $_GET["wid"];

$watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `wa_id`='".$list_id."'");
$watchlist_num = $watchlist_rs->num_rows;

if($watchlist_num > 0){

    Database::iud("DELETE FROM `watchlist` WHERE `wa_id`='".$list_id."'");
    echo ("success"); 

}else{

    echo ("No Watchlist Items");
    
}

?>