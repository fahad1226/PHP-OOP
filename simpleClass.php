<?php

   class Student {

       

    public $name = "Fahaad";
    public $age = 21;
    public $university = "Premier University";
    public $cgpa = 3.64;
    public static $Id = 1226;
    public static $fav_place = "Peris";
        
        public function Behaviour(){
            echo "Behavour Is Good<br>";
            echo "name is " .$this->name;
            echo "<br>";
            echo "Age is ".$this->age;
            echo "<br>";
            echo "university name is ".$this->university;
            echo "<br>";
            echo "cgpa is ".$this->cgpa;
            echo "<br>";
            
        }

        public static function ShowStatic(){
            echo "Favorite Place is ".self::$fav_place."<br>";
            echo "ID is ".self::$Id."<br>";
        }

   }

   $student1 = new Student();

   $student1->Behaviour();

   Student::ShowStatic();


?>