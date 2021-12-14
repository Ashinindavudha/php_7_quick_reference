<?php
$array1 = array(0 => 100, "color" => "red");
echo '<pre>';
print_r($array1);
echo '</pre>';
echo '<br>';
echo '<hr>';

$array2 = array("blue", "red", "green", "blue", "blue");
echo '<pre>';
print_r($array2);
echo '</pre>';
echo '<br>';
echo '<hr>';

$array3 = array("color" => array("blue", "red", "green"),
               "size"  => array("small", "medium", "large"));
echo '<pre>';
print_r($array3);
echo '</pre>';
echo '<br>';
echo '<hr>';
