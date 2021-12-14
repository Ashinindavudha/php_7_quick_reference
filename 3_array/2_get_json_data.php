<?php
// get the json data
$json = file_get_contents('css-color-names.json');
var_dump($json);
echo '<br><hr>';
//print_r(json_decode($json, true));
$php_json_array = json_decode($json, true);
var_dump($php_json_array);
