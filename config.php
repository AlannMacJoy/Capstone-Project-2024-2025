<?php
    function connect(){
        $host = "localhost";
        $username = "u651643509_root";
        $password = "pErsonals//=261999";
        $database = "u651643509_v1";

        $con = new mysqli($host, $username, $password, $database);
        if($con->connect_error){
            echo $con->connect_error;
        }
        else{
            return $con;
        }
    }
?>