<?php

// Define database path
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "dbubaid"; // now here we specify database name because we use specific database for create inside the table. 


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

$sql="SELECT * FROM  `trip`";
$result=mysqli_query($conn,$sql);

// -------------- fint the number of recordes returned--------
//myysqli_num_rows():: function returns the number of rows in which inside the database.
$record = mysqli_num_rows($result);
echo "Number of records: " . $record . "<br><br>";

//-------------------- Display the rows returned by the sqli query -------------------
//------------    I want to display recordes when the  number of rows is greater then 0 ---------- 
//------------- mysqli_fetch_assoc() function fetches a result row as an associative array & he will fetch recordes one by one untill our database recordes ends.------------------
if($record > 0){
  //--------- here you can see we fetch recordes one by one like 1 row then 2 row then 3 row -------------------------
        // $row = mysqli_fetch_assoc($result);
        // echo "id:- ". $row["id"]. " - Name:- ". $row["name"]. " Des:- ".$row["destination"]. "<br>";
        // $row = mysqli_fetch_assoc($result);
        // echo "id:- ". $row["id"]. " - Name:- ". $row["name"]. " Des:- ".$row["destination"]. "<br>";
        // $row = mysqli_fetch_assoc($result);
        // echo "id:- ". $row["id"]. " - Name:- ". $row["name"]. " Des:- ".$row["destination"]. "<br>";

  //------- we can fetch recordes in a batter way using whlile loop ------------------------
  while($row = mysqli_fetch_assoc($result)){
    echo "id:- ". $row["id"]. " - Name:- ". $row["name"]. " Des:- ".$row["destination"]. "<br>";
    echo"<br>";
    
  }

  }
?>