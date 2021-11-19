<?php
    class BaseClass{
        public $test="Hi";

        public function welcome(){
            return $test."! Welcome the Site.";
        }
    }
    class ChildClass extends BaseClass{
        
    }
  echo (new ChildClass)->test;
?>