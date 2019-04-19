<!DOCTYPE html>
<head>
<title>Table DEMO </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
</html>



<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$db = "Supplies";


//Create a connection
$connection = new mysqli($servername, $username, $password, $db);

if($connection->connect_error){
die("Connection failed: " .$connection->connect_error);
}
echo 'Successful: Connected to MySql Workbench Database <br>';


//Create a DATABASE
// $sql = "Create DATABASE IF NOT EXISTS SUPPLIES";
// if($connection->query($sql) === TRUE){
//     echo 'Database Created';
// }
// else{
//     echo 'Error Creating Database' .$connection->error;
// }

// $connection->close();



//Create A table
// $sql = "Create Table carpentry(
//     item_number INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
//     item_name VARCHAR(65) NOT NULL,
//     item_cost DECIMAL(5,2) NOT NULL,
//     input_date DATETIME NOT NULL DEFAULT NOW()
// )";


// if($connection->query($sql) === TRUE){
//     echo 'Successful: Table carpentry created';
// }
// else{
//     echo 'Error creating table' .$connection->error;
// }

// $connection->close();


//INSERT DATA INTO MYSQL
// $sql= "INSERT INTO carpentry(item_name, item_cost,input_date)
//        VALUES('measuring tape', 29.99, NOW() ),
//              ('Ladder', 109.10, NOW() ),
//              ('Hammer', 94.95, NOW() ),
//              ('Utility Knife', 4.94, NOW() ),
//              ('Glue', 50.09, NOW() )

// ";

// if($connection->query($sql) === TRUE){
//     echo 'Successful: Records inserted into table carpentry';
// }
// else{
//     echo 'Error inserting records into table carpentry' .$connection ->error;
// }

// $connection->close();

//Display/Fetch Data from Table
$sql = 'SELECT item_number, item_name, item_cost, input_date from carpentry';
$result = $connection->query($sql);
echo '<table class= "table text-center" border="1">
<tr>
<th class="bg-success"> Item Number </th>
<th> Item Name </th>
<th> Item Cost </th>
<th> System Date </th>

</tr>';

if($result->num_rows > 0){
    //Fetch Data to display in each row
    while($row = $result-> fetch_assoc()){
        echo"<tr>       
        <td>". $row["item_number"]."</td>
        <td>". $row["item_name"]."</td>
        <td>". $row["item_cost"]."</td>
        <td>". $row["input_date"]."</td>
       </tr>";
    }
    echo "</table>";
}
echo "4 results";

$connection-> close();



?>
