<?php
//A Class
class Post{

    //Properties
    public $username = "Louis Daemon";
    public $postTitle="A day at LA, New York, USA";
    public $postDesc="This is description";
    public $timeStamp="2 minutes ago.";

    //Methods

    // No arg method
    public function getUserName(){
        return "Hello World!";
    }
    // Arg Method
    public function hi($yourName){
        return "Hi! Dear ".$yourName;
    }
    public function getMaxNumber($num1, $num2){
        if($num1>$num2){
            return $num1." is greater than ".$num2;
        }else{
            return $num2." is greater than ".$num1;
        }
    }
    public function evenOdd($num){
        if($num==0){
            return "It is ZERO! ";
        }
        else if($num%2==0){
            return $num." is even."; 
        }
        else{
            return $num." is Odd.";
        }
    }
}

//Create a Object
$postOne = new Post;
//Accessint the member variables or methods using the object
// echo $postOne->username;
// echo "<br>";
// echo $postOne->getUserName();

// echo $postOne->hi('Shafin');
// echo $postOne->getMaxNumber(3,4);

echo $postOne->evenOdd(2);
?>