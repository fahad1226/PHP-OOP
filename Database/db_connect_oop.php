<?php

    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "php-oop";
    $db_connect = new mysqli($host,$db_user,$db_password,$db_name);

    if (mysqli_connect_errno()) {
        echo "Connection Failed";
        exit();
    } else {
        echo "Connection Succesfull";
    }
    

?>