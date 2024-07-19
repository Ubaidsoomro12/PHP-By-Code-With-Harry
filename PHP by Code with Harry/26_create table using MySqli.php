<?php

// Define database path
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "ubaid"; // now here we specify database name because we use specific database for create inside the table. 


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname); 
//mysqli_connect(): function opens a new connection to the MySQL server.

// Check connection 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); 
  //die():: if connection wass not successfull.
  // mysqli_connect_errno():: function returns the error code from the last connection error.
  // ! ::	True if $x is not true
}
echo "Connected successfully<br>";

//Create table in the Database
$sql= "CREATE TABLE `u1` (`s_no` INT(5) NOT NULL , `name` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `pass` INT(9) NOT NULL , PRIMARY KEY (`s_no`))";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Table created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($conn);

}


?>