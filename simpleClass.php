<?php

   class Student {

    
       public $name;
       public $age;
       public $university = "Premier University";
       public $cgpa;
       const NAME = "Fahad Bin MUnir";

        
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

        public function ShowConstant(){   //  className::ConstantName
            echo "<br>";
            echo "contsnat name is ".Student::NAME;
        }

   }

   $student1 = new Student();

   $student1->name = "Fahad Bin Munir";
   $student1->age = 21;
   $student1->cgpa = 3.64;
   $student1->Behaviour();
   $student1->ShowConstant();

?>