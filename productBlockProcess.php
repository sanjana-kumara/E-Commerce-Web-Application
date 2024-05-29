<?php

include "connection.php";

$pid = $_GET["status"];

// echo($status);

        $rs = Database::search("SELECT * FROM `product` WHERE `id`='".$pid."' "); 
        $num = $rs->num_rows;

if ($num == 1) {

    $d = $rs->fetch_assoc();

    if ($d['statues'] == 1) {
        // Deactivate
        
        Database::iud("UPDATE `product` SET `statues`='0' WHERE `id`='".$pid."' ");
        echo("Deactive");    

    } else if ($d['statues'] == 0) {
        // Activate
        
        Database::iud("UPDATE `product` SET `statues`='1' WHERE `id`='".$pid."' ");
        echo("Active");

    } 
       
    
} else {

    echo($status);
        
}


?>