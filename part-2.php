<?php
    class Plane{
        public $doors=2;

        //setter
        public function setDoors($doors){
            $this->doors=$doors;
        }
        //getter
        public function getDoors(){
            return $this->doors;
        }
    }

    // $p1=new Plane;

    // $p1->setDoors(3);   
    // echo $p1->getDoors();

    class Student{

        //Properties
        public $name;
        public $department;
        public $cgpa;

        //getter setters
        public function getName(){
            return $this->name;
        }
        public function getDepartment(){
            return $this->department;
        }
        public function getCgpa(){
            return $this->cgpa;
        }
        public function setName($name){
            $this->name=$name;
        }
        public function setDepartment($department){
            $this->department=$department;
        }
        public function setCgpa($cgpa){
            $this->cgpa=$cgpa;
        }

    }
    $st1=new Student;

    $st1->setName('Rahim');
    $st1->setDepartment('MT');
    $st1->setCgpa('3.15');

    echo "Name: ".$st1->getName();
    echo "<br>Department: ".$st1->getDepartment();
    echo "<br>CGPA: ".$st1->getCgpa();
?>