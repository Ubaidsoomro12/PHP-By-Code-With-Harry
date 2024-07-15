

<?php
echo"Multidimentional  Array: <br>";
$cars = array (
  array("Toy66ootta",22,18),
  array("BMW",15,13),
  array("Honda",5,2),
  array("Land Rover",17,15)
); 
// Example_1 for print
echo $cars[0][0];
echo"<br>";
echo $cars[0][1];
echo"<br>";
echo $cars[0][2];
echo"<br>";
echo $cars[1][0];
echo"<br>";
echo $cars[1][2];
echo"<br>";
echo $cars[1][2];
echo"<br>";
// Example_2 for print
    
for ($row = 0; $row < count($cars); $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>


