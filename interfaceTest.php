<?php

    interface School {
        public function mySchool();
    
    }
    interface College {
        public function myCollege();
    }

    interface University {
        public function myUniversity();
    }

    class Student implements School,College,University {
        public function mySchool(){
            echo "I love my school";
            echo "<br>";
        }

        public function myCollege(){
            echo "I love my college";
            echo "<br>";
        }

        public function myUniversity() {
            echo "I love my university";
            echo "<br>";
        }
    }

    class Teacher implements School,College,University {
        public function mySchool(){
            echo "I'm a school teacher";
            echo "<br>";
        }

        public function myCollege(){
            echo "I'm a college teacher";
            echo "<br>";
        }

        public function myUniversity() {
            echo "I'm a university lecturer";
            echo "<br>";
        }
    }


    $stdnt1 = new Student;

    $stdnt1->mySchool();
    $stdnt1->myCollege();
    $stdnt1->myUniversity();

    $tchr1 = new Teacher;
    $tchr1->mySchool();
    $tchr1->myCollege();
    $tchr1->myUniversity();