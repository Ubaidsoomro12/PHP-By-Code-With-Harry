<?php
// Define database path
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "dbubaid"; // now here we specify database name because we use specific database for create inside the table. 


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname); 

// Check connection 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); 
  
}else{
echo "Connected successfully<br>";
}

// select query to select all the records from the table where destination is hyderabad.
// WHERE CLAUSE ::The WHERE clause is used to filter records. It is used to extract only those records that fulfill a specified condition.
$sql="SELECT * FROM  `trip` ";
$result=mysqli_query($conn,$sql);

$record = mysqli_num_rows($result);
echo "Number of records: " . $record . "<br><br>";

//------------ if you want to print id in series wise 
$no= 1;
if($record > 0){
    while($row = mysqli_fetch_assoc($result)){
      echo "id:- ". $no. ".  Name:- ". $row["name"]. ". Des:- ".$row["destination"]. "<br>";
      echo"<br>";
      $no ++;
    }
  
}
//---- Delete recodes from the database --------------------------
//LIMIT:  The LIMIT clause is used to specify the number of records to return.
//The LIMIT clause is useful on large tables with thousands of records. Returning a large number of records can impact performance.  

$sql="DELETE  FROM  `trip` WHERE `destination` = 'hyderabad' LIMIT 2 ";
$result=mysqli_query($conn,$sql);

$affect= mysqli_affected_rows($conn);
if($result){
   echo "$affect Records delete successfully<br>";
}else{
    echo "Error delete record: ". mysqli_error($conn);
}



?>