<?php
echo"First way to print array values uning for loops: <br><br>";
$arr = ["Ubaid","Saniya","Moye Moye","Safiya"];
for($i=0; $i < count($arr); $i++){
    echo $arr[$i]."<br>";
    
}
echo"better way to print an array by using (Foreach Loops): <br><br>";
foreach($arr as $v){ // All items of the first variable($arr) store in second variable($v) and print sequence of all items in the $arr
    echo $v."<br>";
    
}
//The most common use of the foreach loop, is to loop through the items of an array.
//For every loop iteration, the value of the current array element is assigned to the variabe $x. The iteration continues until it reaches the last array element.


?>