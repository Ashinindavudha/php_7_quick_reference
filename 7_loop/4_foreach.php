<?php
//  foreach loop
$arr = array(1,2,3,4,5);
foreach ($arr as $value) {
    echo $value;
}

echo "<br>";
// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}
echo "<br>";

// Iterate Over associative array.
$person = [
    'name' => 'Ashin',
    'surname' => 'Indavudha',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . '<br>';
}

echo "<br>";
echo "<hr>";

$even="";
$odd="";
$arr = array(1,2,3,4,5);
foreach ($arr as $value) {
    if ($value%2==0) {
        $even=$even ." " . $value;
    } else {
        $odd=$odd . " ".$value;
    }
}
echo "The even elements are = " .$even . "<br/>";
echo "The odd elements are = " .$odd ;
