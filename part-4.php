<?php
    class MyClass{
        public $a="Hello!";
        private $b="HI!";
        protected $c="GoodBye!";


        //Accessing private variables with public methods
        public function getB(){
            return $this->b;
        }
    }
    class DemoClass extends MyClass{
        public function h(){
            return $this->c;
        }
    }

    echo (new DemoClass)->h();
?>