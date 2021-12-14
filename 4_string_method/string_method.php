<?php
// create simple string
$str = "Hello World";
$str2 = "Hi Ashinindavudha";

echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo "Hello" . "World"; // concatenation
echo "<br>";
//string functions
echo "1 - ". "String length is : " . strlen($str) . '<br>' . PHP_EOL; // length of string
echo "2 - " ."String lowercase to uppercase : ".strtoupper($str) .'<br>' . PHP_EOL; // uppercase
echo "3 - " . trim($str2) . '<br>' . PHP_EOL; // trim
echo "4 - " . rtrim($str) . '<br>' . PHP_EOL; // rtrim
echo "5 - " . ltrim($str) . '<br>' . PHP_EOL; // ltrim
echo "6 - " . str_word_count($str) . '<br>' . PHP_EOL; // word count
echo "7 - " . strrev($str) . '<br>' . PHP_EOL; // reverse
echo "8 - " . strpos($str, 'World') . '<br>' . PHP_EOL; // find position
echo "9 - " . str_replace('World', 'Ashinindavudha', $str) . '<br>' . PHP_EOL; // replace
echo "10 - " . str_repeat($str, 2) . '<br>' . PHP_EOL; // repeat
echo "11 - " . str_shuffle($str) . '<br>' . PHP_EOL; // shuffle
echo "12 - " . strtolower($str) . '<br>' . PHP_EOL; // locase
echo "13 - " . ucfirst($str) . '<br>' . PHP_EOL; // ucfirst
echo "14 - " . ucwords($str) . '<br>' . PHP_EOL; // ucwords
echo "15 - " . substr($str, 2) . '<br>' . PHP_EOL; // substr
echo "16 - " . substr($str, 2, 4) . '<br>' . PHP_EOL; // substr
echo "17 - " . stripos($str, 'World') . '<br>' . PHP_EOL; // find position
echo "18 - " . str_ireplace('World', 'Ashinindavudha', $str) . '<br>' . PHP_EOL; // replace
