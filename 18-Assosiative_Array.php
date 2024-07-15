<?php
echo"Simple Array: <br><br>";
$arr=array(" 1_Ubaid <br>","2_Junaid <br>","3_Vishal <br><br>");
echo $arr[0];
echo $arr[1];
echo $arr[2];
//echo $arr[3]; // Show arror because index number 3 element does not exist in $arr

echo"Assosiative Array: <br>";

//Associative arrays are arrays that use named keys that you assign to them.
//To access an array item you can refer to the key name.
//Example_1
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];


echo"<br>";
echo"<br>";

// Example_2
//  Multidimentional  Array
echo"Multidimentional   Array: <br>";

$cars = array(
    array('brand' => 'Toyota', 'name' => 'Corolla', 'year' => 2019),
    array('brand' => 'Honda', 'name' => 'City', 'year' => 2022),
    array('brand' => 'Suzuki', 'name' => 'Caltus', 'year' => 2023)
);
echo $cars[0]['name']; // Outputs: Corolla
echo"<br>";
echo $cars[1]['name']; // Outputs: City
echo"<br>";
echo $cars[2]['name']; // Outputs: Caltus
echo"<br>";
echo"<br>";

// Example_3
// Accessing values by using foreach loop
$favcolor=array('Ubaid'=>'Red','Junaid'=>'Green','Vishal'=>'Yellow', 100=>'Hundered',);
foreach ($favcolor as $key => $value) {
    echo("'$key' farvriout color is '$value' <br>");
}

?>