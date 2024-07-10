<?php
//-----------------------------------------------Do-While Loops----------------------------------------------
//Do-While Loops are similar to While Loops, except that the condition is checked at the end of the loop instead of the beginning
//. This means that the loop will always execute at least once, even if the condition is false .
//The do...while loop will always execute the block of code at least once, it will then check the condition, and repeat the loop while the specified condition is true.

//syntext:
    /*do{
      code to be executed;
        }
    while(condition);
    */
$a = 0; // if here i use another value like 50 then show out only 50 not 1 to 10 becasue loop will always execute at least once time
do{
    echo "$a <br>";
    $a++;
}while($a<10);


?>