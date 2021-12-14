<?php
// define a function called `sum` that will
// receive a list of numbers as an argument.

function sum($numbers)
{
    // initialize the variable we will return
    $sum = 0;
    // sum up the numbers in the list
    foreach ($numbers as $number) {
        $sum += $number;
    }
    // return the sum to the user of the function
    return $sum;
}

// example of how to use the function
echo sum([1,2,3,4,5,6,7,8,9,10]);
