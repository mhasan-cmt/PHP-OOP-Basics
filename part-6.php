<?php
    class Student{
        public $name;
        public $roll;
        public $group;

        public function setName($name){
            $this->name=$name;
        }
        public function setRoll($roll){
            $this->roll=$roll;
        }
        public function setGroup($group){
            $this->group=$group;
        }
        public function getName(){
            return $this->name;
        }
        public function getRoll(){
            return $this->roll;
        }
        public function getGroup(){
            return $this->group;
        }
    }
    $student1=new Student;

    $student1->setName("Shafin");
    echo $student1->getName();
?>