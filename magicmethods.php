<?php

    class Students {

        public function Details(){
            echo "I am a student";
        }
        
        public function __get($nm){  // catch the undefined property
            echo "<br>";
            echo "$nm does not exist";
        }
    
    }

 

    $st = new Students();
    $st->Details();

    $st->Fahad;



?>