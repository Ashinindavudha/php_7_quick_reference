<?php
//open file abc.txt
$myfile = fopen("data/data.txt", "w");

$text = "Yatanabon Academy";

fwrite($myfile, $text);

fclose($myfile);

/*
The fwrite() function has first parameter is file name and the second parameter is text to be written in file.

fwrite() function example
For write context to file we must use fopen() function to open the file and then use fwrite() function for write to file.
*/
