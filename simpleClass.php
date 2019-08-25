<?php

   class Student {

    
       public $name;
       public $age;
       public $university = "Premier University";
       public $cgpa;

        
        public function Behaviour(){
            echo "Behavour Is Good<br>";
            echo "name is " .$this->name;
            echo "<br>";
            echo "Age is ".$this->age;
            echo "<br>";
            echo "university name is ".$this->university;
            echo "<br>";
            echo "cgpa is ".$this->cgpa;
        }

   }

   $student1 = new Student();

   $student1->name = "Fahad Bin Munir";
   $student1->age = 21;
   $student1->cgpa = 3.64;
   $student1->Behaviour();

?>