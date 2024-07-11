<?php

//----------------------------------------PHP Built-in Functions--------------------------------------------------
// PHP has over 1000 built-in functions that can be called directly, from within a script, to perform a specific task.

// //----------------------------------------PHP User Defined Functions----------------------------
// Besides the built-in PHP functions, it is possible to create your own functions.

// 1_  A function is a block of statements that can be used repeatedly in a program.
// 2_  A function will not execute automatically when a page loads.
// 3_  function will be executed by a call to the function.

//   ---------------------------Call a Function------------------------------------------------------
// To call the function, just write its name followed by parentheses ():

//Example _ 1
// syntext to create yor own function and his name is myMessage() and inside the function print "hellow world" ;
// function myMessage() { 
//   echo "Hello world!<br>";
// }
// myMessage(); // function call
// myMessage(); // function call
// myMessage(); // function call
// myMessage(); // function call


//-----------------------------------------------PHP Function Arguments------------------------------------------
// Information can be passed to functions through arguments. An argument is just like a variable.
// Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.
// The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name, e.g. ("Jani"), and the name is used inside the function, which outputs several different first names, but an equal last name:

//Example _ 2

    // function familyName($fname) {
    //     echo "$fname Refsnes.<br>";
    //   }
      
    //   familyName("Jani");
    //   familyName("Hege");
    //   familyName("Stale");
    //   familyName("Kai Jim");
    //   familyName("Borge");


    //------------- The following example has a function with two arguments ($fname, $year):-------

// Example _ 3
// function familyName($fname, $year) {
//   echo "$fname was Born in $year <br>";
// }

// familyName("Ubaid", "2002");
// familyName("vishal", "2003");
// familyName("Junaid", "20047");

?>