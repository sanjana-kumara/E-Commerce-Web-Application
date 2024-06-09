<?php

include "connection.php";

$id = $_GET["id"];
// echo($id);

$rs = Database::search("SELECT * FROM `user` WHERE `id`='".$id."' "); 
$num = $rs->num_rows;

if ($num == 1) {

    $d = $rs->fetch_assoc();

    if ($d['statues'] == 1) {
        // Deactivate
        
        Database::iud("UPDATE `user` SET `statues`='0' WHERE `id`='".$id."' ");
        echo("Deactive");    

    } else if ($d['statues'] == 0) {
        // Activate
        
        Database::iud("UPDATE `user` SET `statues`='1' WHERE `id`='".$id."' ");
        echo("Active");

    }
  
       
    
} else {

        
}



?>