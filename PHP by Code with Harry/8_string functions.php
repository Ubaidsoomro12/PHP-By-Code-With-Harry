<?php

$name="Ubaid is good boy";
echo"$name";
echo" <br>";
echo"my string lenth is: " .strlen($name); //strlen():Returns the length of a string
echo" <br>";
echo str_word_count($name); //str_word_count():	Count the number of words in a string
echo" <br>";
echo strrev($name); //strrev():	Reverses a string
echo" <br>";
        //Variable name, Starting point 
echo strpos($name,"is"); //strpos():	Returns the position of the first occurrence of a string inside another string (case-sensitive)
echo" <br>";
            // position, //Replace, //Variable name.
echo str_replace("Ubaid", "Junaid", $name); //str_replace():	Replaces some characters in a string (case-sensitive)
echo" <br>";
echo str_repeat($name, 12); //str_repeat()	Repeats a string a specified number of times
echo" <br>";

//and many more link: https://www.w3schools.com/php/php_ref_string.asp
?>