<?php

class Database{

    public static $connection;

    public static function setupConnection(){

        if (!isset(Database::$connection)) {
            
            Database::$connection = new mysqli("localhost","root","Sanjana123!$","halgahawatta","3306");

        }

    }

    public static function iud($q){

        Database::setupConnection();
        Database::$connection -> query($q);

    }

    public static function search($q){

        Database::setupConnection();
        $resultSet = Database::$connection -> query($q);
        return $resultSet;

    }

}

?>