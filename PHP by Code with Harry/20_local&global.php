<?php
echo" <b>Scope  of Local And global variables<\b> <br><br>";

// --------------------------------Example Globale Variable-------------------------------------
// The global keyword is used to access a global variable from within a function.
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
echo"Scope   global variables <br>";
$a = 50;// Globle variable
function printvalue(){
    $a = 100; //Local variable
    echo "<br>This is Local Variable: $a <br>";

}
echo " This id Globale Variable: $a";
printvalue();
?>
