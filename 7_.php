<?php


/*
----------------------- PHP Data types ---------------------------------
1. String
2. Integer
3. Float
4. Boolean
5. Array
7. NULL
*/

// String: Sequece of characters 
    $name="Ubaid";
    $cast ="Soomro";
    echo"my name is $name and my cast is $cast";
    echo "<br><br>";

    // Integer: non-decimal number
    $age=20;
    echo "my age is $age";
    echo "<br><br>";

    // Float: decimal number
    $height=5.5;
    echo "my height is $height";
    echo "<br><br>";

    // Boolean: true or false
    $isMale=true;
    echo "I am male $isMale";
    echo "<br><br>";

    // Array: Multipile values in a single variables
    $fruits=array("apple","orange","banana");
    echo var_dump($fruits);
    echo "<br><br>";

    echo var_dump('My favzorit fruite is '.$fruits[0],$fruits[1],$fruits[2]);   

// The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).


?>