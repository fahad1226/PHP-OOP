<?php

   class Student {

    
    public $name = "Fahaad";
    public $age = 21;
    public $university = "Premier University";
    public $cgpa = 3.64;
    public $Id = 1226;

        
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


   }

   class Teacher extends Student {

        public $salary = 50000;
        public $teach = 'Algorithm';
        public $name = "Minhaz Hosen";
        public $age = 29;

        public function Behaviour(){
           
            echo "name is " .$this->name;
            echo "<br>";
            echo "Age is ".$this->age;
            echo "<br>";
            echo "salay is {$this->salary}";
            echo "<br>";
            echo "teaching {$this->teach}";
            echo "<br>";
        }

   }


   $student1 = new Student();

   $student1->Behaviour();

   $teacher1 = new Teacher();
   $teacher1->Behaviour();





?>