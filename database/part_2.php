<?php

//Mulit Query execution

    //CREATE AND CHECK THE Connection
    $con=new mysqli("localhost", "root","", "studentdb");
    if(mysqli_connect_error()){
        die("ERROR: ".mysqli_connect_error());
    }else{
        // preparing the queries
        $query ="INSERT INTO `students`(`sname`, `roll`, `department`, `group`, `session`) VALUES ('Hasan Mahmud','90872','Power','B','17-18')";
        $query .=";"."INSERT INTO `students`(`sname`, `roll`, `department`, `group`, `session`) VALUES ('Abdul Karim','90874','Power','B','17-18')";
        $query .=";"."INSERT INTO `students`(`sname`, `roll`, `department`, `group`, `session`) VALUES ('Hamidul Islam','90762','Civil','A','17-18')";
    
        //time to shoot
        if($con->multi_query($query)===TRUE){
            echo "All RECORDS INSERTED!";
        }else{
            echo "ERROR: ".$query."<br>".$con->error;
        }
    }
    $con->close();
?>