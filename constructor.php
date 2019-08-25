<?php

    class Animal {


        public $name;
        public $species;
        public $color;
        public $legs;
        public $eat;
        public $id;
        
        function __construct($name,$species,$color,$legs,$eat) {

            $this-> name = $name;
            $this-> species = $species;
            $this-> color = $color;
            $this-> legs = $legs;
            $this-> eat = $eat;
        
        }

        public function Behavior(){

            echo "name of this animal is ".$this->name."<br>";
            echo "species of this animal is ".$this->species."<br>";
            echo "color of this animal is ".$this->color."<br>";
            echo $this->name." animal has ".$this->legs."<br>";
            echo $this->name." animal eat ".$this->eat."<br>";
            echo "<br>";
            echo "<br>";
        }

        public function setId($id){
             $this->id = $id;
        }

        public function __destruct() {
            if (! empty($this->id)) {
                echo "id of this person is ".$this->id;
            }
        }

    }


    $anml1 = new Animal("Lion"," ‎P. leo","Brown","Four","Meat");
    $anml2 = new Animal("Tiger"," Panthera tigris","Brown","Four","Meat");
    $anml3 = new Animal("Cow"," ‎B. taurus","Any Color","Four","Grass");
    $anml1->Behavior();
    $anml2->Behavior();
    $anml3->Behavior();
    $anml3->setId(12);
    unset($anml3);


?>