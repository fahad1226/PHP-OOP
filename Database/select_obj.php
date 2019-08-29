<?php
    include('db_connect_oop.php');

        
    $sql = "SELECT * FROM profile";
    $result = $db->query($sql);

    while($data = $result->fetch_object())
    {
        echo "<pre>";
        echo $data->fname;
        echo "</pre>";
    }




?>