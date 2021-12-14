<?php
// get json data from file
$json = file_get_contents('example_json_data.json');
// decode json data
$data = json_decode($json, true);
// print data
echo '<pre>';
print_r($data);
echo '</pre>';
echo '<br>';
// print data
// foreach ($data as $key => $value) {
//     echo $value->color . '<br>';
//     echo $value->value . '<br>';
// }
