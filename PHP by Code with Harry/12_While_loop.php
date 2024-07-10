<?php
// -------------------------------------While loop in php---------------------------------
// while loop is used to execute a block of code repeatedly while a specified condition is true.

// if you want to print 1 to 100 numeric numbers so you must be used while loop because he will help you to print 1 to 100 in the 3 lor 4 lines of code.
// Example 1:
//$number = 0; // initialize variable and his value is 0.
//while ($number <= 100) // condition is true while $number is less than or equal to humndered.
//{
    //echo $number . "<br>"; // print values
   // $number++; // increment the value of $number by 1.
   // } // end of while loop.


//    Here i can do tow conditions by using && and operators so you know that and operators is true when both condition is true.
//    here you can see when i reached on 10 anf j reached on 50 according to  my condition j is terminated thats why my code was terminated. 
//    I hope you understand.
    // Example 2:
    $i = 0;
    $j = 0;
    while($i<5000 && $j<50){ 
        echo "The value of i is  ";
        echo $i+1;
        echo"<br>";
        echo $j+1;
        echo"<br>";
        $i++;
        $j+=5;
        } // end of while loop.
?>