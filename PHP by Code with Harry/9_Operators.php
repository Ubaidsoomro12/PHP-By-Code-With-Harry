<?php
//Operators in PHP
//---------------------------------Arithmetic Operators
// + Addition
// - Subtraction
// * Multiplication
// / Division
// % Modulus (Remainder)
// ** Exponentiation (Power)

// ++ Increment
// -- Decrement

    // Example:
$a=5;
$b=15;
echo"for A + B the result is: ".$a+$b."<br>";
echo"for A - B the result is: ".$a-$b."<br>";
echo"for A * B the result is: ".$a*$b."<br>";
echo"for A / B the result is: ".$a/$b."<br>";
echo"for A % B the result is: ".$a%$b."<br>";
echo"for A ** B the result is: ".$a**$b."<br>";
//-------------------------------- Assignment Operators
// = Assigns value of right side operand to left side operand   
    // Example:
    
    echo"value 5 assign into x is: ".$a."<br>";

//----------------------------------- Comparision Operators
// == Equal to
// != Not equal to
// < Less than
// > Greater than
// <= Less than or equal to
// >= Greater than or equal to
    // Example:

    echo"for A == B the result is: ";
    echo var_dump($a==$b)."<br>";
    echo"for A != B the result is: ";
    echo var_dump($a!=$b)."<br>";
    echo"for A < B the result is: ";
    echo var_dump($a<$b)."<br>";
    echo"for A > B the result is: ";
    echo var_dump($a>$b)."<br>";
    echo"for A <= B the result is: ";
    echo var_dump($a<=$b)."<br>";
    echo"for A >= B the result is: ";
    echo var_dump($a>=$b)."<br>";



// ---------------------------------Logical Operators
// && And
// || Or
// ! Not
    // Example:
    $x=50;
    $y=40;
  if($x == 50 && $y ==50 ){ // When both condition are true the result is true otherwise false
    echo "The result is true <br>";
  }
  else{
    echo "The result is false <br>";
    }
  if($x == 50 || $y ==50 ){ // if only one condition are true the result is true.
    echo "The result is true <br>";
  }
  else{
    echo "The result is false <br>";
    }
  if(!$x == 50){ // if the condition are true the result is False.
    echo "The result is true <br>";
  }
  else{
    echo "The result is false <br>";
    }

   
// for mor details: https://www.w3schools.com/php/php_operators.asp






?>