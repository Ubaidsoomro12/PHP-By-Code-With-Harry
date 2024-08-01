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
$sql="SELECT * FROM  `trip` WHERE `destination` = 'karachi' ";
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


//-----------UPDATE tha data using where clause --------------------
$sql=" UPDATE `trip` SET `destination`='hyderabad' WHERE `destination`= 'karachi'";
$result=mysqli_query($conn,$sql);
$affect= mysqli_affected_rows($conn);
if($result){
   echo "$affect Records updated successfully<br>";

  
}else{
    echo "Error updating record: ". mysqli_error($conn);
}

?>