<?php
//-----------------------------------------------------PHP switch Statement---------------------------------------
//The switch statement is used to perform different actions based on different conditions.
//Use the switch statement to select one of many blocks of code to be executed.

    // breack statment: 
    // The break statement can be used to terminate a switch statement.


//Syntext: 
/*
switch (expression) {
    case label1:
        //code block
        break; 
      case label2:
        //code block;
        break;
      case label3:
        //code block
        break;
      default:
        //code block
    }
*/

// Example: make a simple calculator
        echo "<h2>Week Names</h2>";
            $weekname = 5;
            
            

            switch($weekname){
                case 1:
                    echo"Today id Monday day";
                    break;
                case 2:
                    echo"Today id Tuesday day";
                    break;
                case 3:
                    echo"Today id Wednesday day";
                    break;
                case 4:
                    echo"Today id Thursday day";
                    break;
                case 5:
                    echo"Today id Friday day";
                    break;
                case 6:
                    echo"Today id Saturday day";
                    break;
                case 7:
                    echo"Today id Sunday day";
                    break;
                default:
                    echo "Invalid operator";      
            }

?>