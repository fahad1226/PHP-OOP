<?php

    include('db_connect_oop.php');

    $sql = "INSERT INTO profile (fname,lname,email,address) VALUES(?,?,?,?) ";

    $stmt = $db->prepare($sql);
    $stmt ->bind_param("ssss",$fname,$lname,$email,$address);
    $fname = "Abdullah";
    $lname = "Malek";
    $email = "abdullah@gmail.com";
    $address = "New York,America";
    $stmt ->execute();
    $stmt ->close();
   


?>