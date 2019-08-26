<?php

    // include('Classes/c.php');
    // include('Classes/java.php');
    // include('Classes/javascript.php');




    // function __autoload($classname) {    // autoload function to load class without including all single files.
    //     echo "$classname";
    //     include "Classes/".$classname.".php";   --->> One way
    // }

    spl_autoload_register(function($classname){   // -->> most populer way to auto load classes
        include "Classes/".$classname.".php";
    });

    $js = new JavaScript();
    $java = new java();
    $c = new C();

?>