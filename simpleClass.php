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
            echo "<br>";
            echo "<br>";
        }

   }

   $student1 = new Student(); //object created for first student 

   $student1->name = "Fahad Bin Munir";
   $student1->age = 21;
   $student1->cgpa = 3.64;
   $student1->Behaviour();

   
   $student2 = new Student(); //object created for second student

   $student2->name = "Rasik Hawk";
   $student2->age = 21;
   $student2->cgpa = 3.10;
   $student2->Behaviour();

?>