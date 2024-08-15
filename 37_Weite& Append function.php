

<?php

     //The fopen() function opens a file and returns a file pointer resource, or FALSE on error.
    //The fwrite() writes to an open file.
   //The function will stop at the end of the file (EOF) or when it reaches the specified length, whichever comes first.
    echo"File successfully run ";
//    $file = fopen("test.txt","w"); // open text file with write mode and store in variable. 
//  fwrite($file,"Hello World 1. \n"); // write what you want in text file.
//  fwrite($file,"Hello World 2. \n"); // write another what you want in text file.
//  fwrite($file,"Hello World 3. \n"); // write another what you want in text file.
//  fwrite($file,"Hello World 4. \n"); // write another what you want in text file.
 
// fclose($file); // close the file.

//======================================= Appending to a file in php ===============================================
 // The FILE_APPEND flag is used to append data to the file instead of overwriting it.
 $file = fopen("test.txt","a"); // open text file with append mode and store in variable.
 fwrite($file,"Hello World 5. \n"); // write what you want in text file.
fclose($file);

?>

