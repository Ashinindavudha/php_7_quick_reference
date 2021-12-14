<?php
// read the json file
$json = file_get_contents('data.json');
// decode the json file // Convert to array

$data = json_decode($json, true);
// print the data
echo '<pre>';
print_r($data);
echo '</pre>';
//echo $data->name;
echo gettype($data);
echo '<br>';


// print the data
//print_r($data->age);
// foreach ($data as $key => $value) {
//     echo $key . ': ' . $value . '<br>';
// }
// Array to string conversion
$json = json_encode($data);
echo $json;
# https://raw.githubusercontent.com/bahamas10/css-color-names/master/css-color-names.json
