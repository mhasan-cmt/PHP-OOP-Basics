<?php
    
    

    // check connection 
    if(mysqli_connect_error()){
        die("Connection error!".mysqli_connect_error());        
    }else{
        echo "Connection successful!";
        insertStudent("Mahmudul Hasan", "940199", "CMT", "A", "17-18");
    }
    

    function insertStudent($name, $roll, $department, $group, $session){
        // Create a mysqli connection
        $con=new mysqli("localhost", "root", "", "studentdb");
        $query = "INSERT INTO `students`(`sname`, `roll`, `department`, `group`, `session`) VALUES ('$name','$roll','$department','$group','$session')";
        if($con->query($query)=== TRUE){
            $last_insert_id=$con->insert_id;
            echo "<br>New Record Inserted Successfully!";
            echo "<br> Insert Id:".$last_insert_id;
            $con->close();
        }else{
            echo "ERROR: ".$query."<br>".$con->error;
            $con->close();
        };
    }
    
?>