<?php
    class Test{
        //a constant
        private const PI=3.1416;
        // public const PI=3.1416;
        
        public function getPiValue(){
            return self::PI;
        }
    }

    // Accessing a Public Constant
    // echo Test::PI;
    //Accessing a Private Constant
    echo (new Test)->getPiValue();
?>