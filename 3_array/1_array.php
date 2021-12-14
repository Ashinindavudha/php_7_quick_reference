<?php
// array
// create array
$fruits = ['apple', 'banana', 'orange'];
// print array
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// out put  
/* 
array(3) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(6) "banana"
  [2]=>
  string(6) "orange"
} */

# ------------------------------------- 
// get element by index
echo $fruits[0]; // output apple

// set element by index
$fruits[0] = 'pear';
// check if array has element at index 2 
echo '<pre>';
var_dump(isset($fruits[2])); // output true
echo '</pre>'; // bool(true)

// print the length of array
echo count($fruits) .'<br>'; // output 3

// add element at the end of array

array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/* 
array(2) {
  [0]=>
  string(4) "pear"
  [1]=>
  string(6) "banana"
}
*/

// add element at the beginning of array
array_unshift($fruits, 'mango');
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/*
array(3) {
  [0]=>
  string(6) "mango"
  [1]=>
  string(4) "pear"
  [2]=>
  string(6) "banana"
}
*/
// remove element at the beginning of array
array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/*
array(2) {
  [0]=>
  string(4) "pear"
  [1]=>
  string(6) "banana"
}
*/
// split the string into array
$str = 'apple,banana,orange';
$arr = explode(',', $str);  
echo '<pre>';
var_dump($arr);
echo '</pre>';
/*
array(3) {
  [0]=>
  string(5) "apple"
  [1]=>
  string(6) "banana"
  [2]=>
  string(6) "orange"
}
*/

// combine array into string
echo implode(',', $arr); // output apple,banana,orange

// check if array element exist in the array
echo '<pre>';
var_dump(in_array('banana', $fruits)); // output true
echo '</pre>';

// search element in array
echo '<pre>';
var_dump(array_search('banana', $fruits)); // output 1
echo '</pre>';

// merge two array
$vegetables = ['cucumber', 'potato'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump(...$fruits, ...$vegetables);    
echo '</pre>';
/*
array(5) {
  [0]=>
  string(6) "mango"
  [1]=>
  string(4) "pear"
  [2]=>
  string(6) "banana"
  [3]=>
  string(9) "cucumber"
  [4]=>
  string(5) "potato"
}
*/

// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';
/*
array(3) {
  [0]=>
  string(4) "pear"
  [1]=>
  string(6) "banana"
  [2]=>
  string(6) "orange"
}
*/

# -------------------------------------
// associative array
$person = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 30,
    'hobbies' => ['reading', 'coding', 'swimming'],
    'address' => [
        'street' => 'Main street',
        'city' => 'London',
        'country' => 'UK'
    ]
];

// get element by key
echo $person['name']; // output John
//set element by key
$person['name'] = 'Jane';
// null coalescing assignment operator
if (!isset($person['email'])) {
    $person['email'] = 'Unknown';
}
$person['email'] ??= 'Uknown';
echo $person['email']; // output Unknown

// check if array has specific key
echo '<pre>';
var_dump(isset($person['age'])); 
echo '</pre>';

// print the key of array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
/*
array(5) {
  [0]=>
  string(3) "age"
  [1]=>
  string(6) "hobbies"
  [2]=>
  string(7) "address"
  [3]=>
  string(4) "name"
  [4]=>
  string(7) "surname"
}   
*/
// print the value of array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';
/*
array(5) {
  [0]=>
  int(30)
  [1]=>
  array(3) {
    [0]=>
    string(6) "reading"
    [1]=>
    string(6) "coding"
    [2]=>
    string(7) "swimming"
  }
  [2]=>
  array(3) {
    [street]=>
    string(12) "Main street"
    [city]=>
    string(5) "London"
    [country]=>
    string(2) "UK"
  }
  [3]=>
  string(4) "Jane"
  [4]=>
  string(7) "Unknown"
}
*/
// sorting associative array by key, value
ksort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';
/*
array(5) {
  [0]=>
  int(30)
  [1]=>
  array(3) {
    [0]=>
    string(6) "reading"
    [1]=>
    string(6) "coding"
    [2]=>
    string(7) "swimming"
  }
  [2]=>
  array(3) {
    [street]=>
    string(12) "Main street"
    [city]=>
    string(5) "London"
    [country]=>
    string(2) "UK"
  }
  [3]=>
  string(4) "Jane"
  [4]=>
  string(7) "Unknown"
}
*/