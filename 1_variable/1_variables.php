<?php
$myVar;
$myVar = "Hello World"; // string data type
echo $myVar . "<br>";

$a = 1; // integer data type
$b = 2.5; // float data type
$c = $a + $b; // float data type
echo $c . "<br> <hr>" ;


// float type evaluated as string type
$aInt = 1234; // decimal number
$bInt = 0b10; // binary number (2 decimal)
$cInt = 0123; // octal number (83 decimal)
$dInt = 0x1A; // hexadecimal number (26 decimal)

$aFloat = 1.1234;
$bFloat = 3e2; // 3*10^2 = 300

$myBool = true; // boolean data type
$myBool = false; // boolean data type
$myNull = null; // null data type // null is a keyword //   variable is set to null

$answer = $myNull + $myBool; // null + boolean = null //numberic context (0)
echo $answer . "<br><hr>";
