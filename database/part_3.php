<?php

//Prepare Statements

//CREATE AND CHECK THE CONNECTION
$con=new mysqli("localhost", "root","", "studentdb");
if(mysqli_connect_error()){
    die("ERROR: ".mysqli_connect_error());
}else{

    // Prepare and bind the parameters
    $statement = $con->prepare("INSERT INTO `students`(`sname`, `roll`, `department`, `group`, `session`) VALUES (?,?,?,?,?)");
    $statement->bind_param("sssss",$name,$roll, $department,$group,$session);


    // set parameters and execute
    $name="Shahed Rahman";
    $roll='943422';
    $department="ET";
    $group="A";
    $session="17-18";
    $statement->execute();

    $name="Ariful Islam";
    $roll='944245';
    $department="ET";
    $group="A";
    $session="17-18";
    $statement->execute();

    echo "New Record inserted via prepare statements...";

    $statement->close();
    $con->close();
}

?>