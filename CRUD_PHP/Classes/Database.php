<?php

    class Database 
    {
        public static function connection(){
            $conn = mysqli_connect("localhost" , "root" , "" , "dbms");
            return $conn;
        }
    }


?>