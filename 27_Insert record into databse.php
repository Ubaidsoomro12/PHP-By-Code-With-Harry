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
}else{
echo "Connected successfully<br>";
}
// ---------------- Insert data Into tha database table------------------------------------------------ 
//------------------------------------------First Query------------------------------------------------
//$sql = "INSERT INTO `u` (`s_no`,`name`,`email`,`pass`) VALUES ('2','ubaid','ubaid@gmail.com', '132')";// First time query wass successfully run but second time not run because our `s_no` column is (primary key)
//------------------------------------------Second  Query----------------------------------------------
//$sql = "INSERT INTO `u` (`name`,`email`,`pass`) VALUES ('ubaid','ubaid@gmail.com', '132')";// here i do not use any `s_no` column and values but he will automaticallu runn every time because we use (Auto Increament)  

  //------------------------------------------Third  Query-----------------------------------------------
$N='Sami';
$E='sami@gmail.com';
$P='123';
$sql = "INSERT INTO `u` (`name`,`email`,`pass`) VALUES ('$N','$E', '$P')";// here we get value using variable
  

$result=mysqli_query($conn,$sql);
if($result){
    echo "Table created successfully";
    }
    else{
        echo "Error creating table: " . mysqli_error($conn);

}


?>