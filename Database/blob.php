<?php

    include('db_connect_oop.php');


    $sql = "INSERT INTO photo (image) VALUES(?) ";
    $stmt = $db->prepare($sql);
    $stmt ->bind_param("b",$image);
    $image = file_get_contents("lion.png");
    $stmt ->send_long_data(0,$image);
    $stmt ->execute();



?>