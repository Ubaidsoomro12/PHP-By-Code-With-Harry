<?php
//----------------------------Way to connect to the DataBase
//----------------------------There are two way to connect database
//1.MySqli Extention 
    //==>(i) Procetural way:
    //==>(ii) OOP way:
//2.PDO Using mysqli

    //Both MySQLi and PDO have their advantages:
    // PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.
    // So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.
    // Both are object-oriented, but MySQLi also offers a procedural API.


    // That's why i will use MySqli Extention.
   
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
echo "Connected successfully";
?>
