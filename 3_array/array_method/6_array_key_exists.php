<?php
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
echo "\n";
echo '<br>';
if (array_key_exists('third', $search_array)) {
    echo "The 'third' element is in the array";
} else {
    echo "The 'third' element is not in the array";
}
/*
array_key_exists() will search for the keys in the first dimension only.
Nested keys in multidimensional arrays will not be found.
*/
# array_key_exists vs isset;
//array_key_exists() is used to check if a key exists in an array.
//isset() is used to check if a variable is set.
//isset() will return false if the variable is null.
//array_key_exists() will return false if the variable is null.
$search_array = array('first' => null, 'second' => 4);

// returns false
isset($search_array['first']);

// returns true
array_key_exists('first', $search_array);
