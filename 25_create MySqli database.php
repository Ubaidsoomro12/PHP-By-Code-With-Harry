<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//mysqli_connect(): function opens a new connection to the MySQL server.

// Check connection 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); 
  //die():: if connection wass not successfull.
  // mysqli_connect_errno():: function returns the error code from the last connection error.
  // ! ::	True if $x is not true
}
echo "Connected successfully<br>";

//Create Database
$sql= "CREATE DATABASE Ubaid2";
$result=mysqli_query($conn,$sql);// mysqli_query():: function sends a query to the database server.
// check or the connection successe
if ($result) {
  echo "Database created successfully <br>";
  } else {
    echo"Database was not create successfull <br>";
  }
echo "The result is ";
echo var_dump($result); // var_dump():: function to get the information to the variable and return true if the database does not exist .
echo "<br>";

?>