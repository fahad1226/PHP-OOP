<?php

    class Animal {
        public $Name;
        public $Legs;
        public $Color;
        public $Species;

        function __construct($Name,$Legs,$Color,$Species) {
            $this->Name = $Name;
            $this->Legs = $Legs;
            $this->Color = $Color;
            $this->Species = $Species;
        }

        public function Show(){
            echo "Name of this animal is ".$this->Name;
            echo "<br>";
            echo $this->Name." Has ".$this->Legs." legs";
            echo "<br>";
            echo $this->Name." has ".$this->Color." Color";
            echo "<br>";
            echo $this->Name." Belongs to ".$this->Species." Species";
            echo "<br>";
        }

    }



    class Cow extends Animal {  //inherit Animal class

        public $ear = "long";


        public function Show(){
            echo "Name of this animal is ".$this->Name;
            echo "<br>";
            echo $this->Name." Has ".$this->Legs." legs";
            echo "<br>";
            echo $this->Name." has ".$this->Color." Color";
            echo "<br>";
            echo $this->Name." Belongs to ".$this->Species." Species";
            echo "<br>";
            echo $this->Name." Has ".$this->ear." ear";
        }

    }


    
    $anml1 = new Animal('Lion',4,'Brown','P .Leo');
    $anml1 -> Show();
    $cow1 = new Cow('York',4,'black','yr cow');
    $cow1->Show();


?>