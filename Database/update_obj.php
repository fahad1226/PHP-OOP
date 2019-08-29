<?php
    
    include('db_connect_oop.php');


    $sql = "UPDATE profile SET fname = 'Jim' , lname = 'Hopper' WHERE id='1' ";

    $result = $db->query($sql);

  


?>