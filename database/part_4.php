<?php
// Select DATA 

//CREATE AND CHECK THE CONNECTION
$con=new mysqli("localhost", "root","", "studentdb");
if(mysqli_connect_error()){
    die("ERROR: ".mysqli_connect_error());
}else{
    // Preparing the query
    $query="SELECT * FROM `students` ";

    // Shoot the query and keep the results in a variable
    $result = $con->query($query);

    if($result->num_rows > 0){
        echo "
        <table width='600px' border=1 style=text-align:center;>
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Department</th>
            <th>Group</th>
            <th>Session</th>
        </tr>
        </thead>
        </table>
        ";
        while($row = $result->fetch_assoc()){
            echo "
            <table width='600px' border=1 style=text-align:center;>
                    <tbody>
                        <tr>
                            <td>$row[id]</td>
                            <td>$row[sname]</td>
                            <td>$row[roll]</td>
                            <td>$row[department]</td>
                            <td>$row[group]</td>
                            <td>$row[session]</td>
                        </tr>
                    </tbody>
                </table>
            ";
        }
    }else{
        echo "0 results!";
        $con->close();
    }
}
?>