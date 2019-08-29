<?php

    include('db_connect_oop.php');

    $sql = "SELECT fname,email,lname FROM profile ORDER BY id";

    $stmt = $db->prepare($sql);
    $stmt -> execute();
    $stmt ->bind_result($fname,$email,$lname);

    while($stmt->fetch()) {
        echo "$fname ";
        echo "<br>";
        echo "$lname";
        echo " <br>";
        echo "$email";
    }








?>