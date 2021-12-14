<?php

$var = '';

// This will evaluate to TRUE so the text will be printed.
if (isset($var)) {
    echo "This var is set so I will print.";
}

// In the next examples we'll use var_dump to output
// the return value of isset().

$a = "test";
$b = "anothertest";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = null;
var_dump(isset($foo));   // FALSE
echo "<br>";

$x = 0;
// True because $a is set
if (isset($x)) {
    echo "Variable 'a' is set.<br>";
}

$y = null;
// False because $b is NULL
if (isset($y)) {
    echo "Variable 'b' is set.";
}
