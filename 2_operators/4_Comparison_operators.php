<?php
// Comparison operators
$x = (2 == 3);  // false // equal to
$x = (2 != 3);  // true  // not equal to
$x = (2 <> 3);  // true  // not equal to (alternative)
$x = (2 === 3); // false // identical
$x = (2 !== 3); // true  // not identical
$x = (2 > 3);   // false // greater than
$x = (2 < 3);   // true  // less than
$x = (2 >= 3);  // false // greater than or equal to
$x = (2 <= 3);  // true  // less than or equal to
$x = (1 ==  "1"); // true  (same value)
$x = (1 === "1"); // false (different types)

$x = 1 <=> 1; // 0 (1 == 1)
$x = 1 <=> 2; //-1 (1 < 2)
$x = 3 <=> 2; // 1 (3 > 2)

//https://www.tutorialspoint.com/php/php_operator_types.html
