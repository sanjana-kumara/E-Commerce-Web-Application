<?php

include "connection.php";

if (isset($_GET["pid"])) {

    $pid = $_GET["pid"];

    $description = $_POST["pd"];
    $price = $_POST["pr"];
    $quntity = $_POST["qu"];
    $delivery_cost = $_POST["dc"];
    $discount = $_POST["dis"];

    Database::iud("UPDATE `product` SET `description`='" . $description . "' , `price`='" . $price . "',`quantity`='" . $quntity . "',
`delivery_cost`='" . $delivery_cost . "', `Discount`='" . $discount . "' ");

    echo ("Product has been Updateed");

    $file_length = sizeof($_FILES);

    if ($file_length <= 4 && $file_length > 0) {
        
        $allowed_image_extensions = array("image/jpeg", "image/png", "image/svg+xml");

        $img_rs = Database::search("SELECT * FROM `product_img` WHERE `img_path`='".$pid."' ");

        $img_num = $img_rs->num_rows;

        for ($y=0; $y < $img_num; $y++) { 
           
            $img_data = $img_rs->fetch_assoc();

            unlink($img_data["img_path"]);
            Database::iud("DELETE FROM `product_img` WHERE `product_id`='".$pid."' ");

        }

        for ($x=0; $x < $file_length; $x++) { 
            
            if (isset($_FILES["i"+$x])) {
                
                $img_file = $_FILES["i".$x];
                $file_extention = $img_file["type"];

                if (in_array($file_extention,$allowed_image_extensions)) {
                    
                    $new_img_extention;

                    if ($file_extention == "image/jpeg") {
                        $new_img_extention = ".jpeg";
                    } else if ($file_extention == "image/png"){
                        $file_extention = ".png";
                    }else if ($file_extention == "image/svg+xml"){
                        $file_extention = ".svg";
                    }
                    
                    $file_name = "resource//product_img//".$pid."_".$x."_".uniqid().$new_img_extention;

                    move_uploaded_file($img_file["temp_name"],$file_name);

                    Database::iud("INSERT INTO `product_img`(`img_path`,`product_id`) VALUES ('".$file_name."','".$pid."')");

                }else {
                    
                    echo("Invalide Image Type");

                }

            }
            
        }

        
    } else {
        
        echo("Inavalide Image Count");

    }
    

}
