<?php
// array method
$arr = array(
    'Website' => array( // associative array
        'name' => 'PHP',
        'url' => 'http://php.net',
        'version' => '7.2',
    ),
    'Editor' => array( // indexed array
                'Chris',
                'Jim',
                'Lynn',
                'Jeff',
                'Joanna'
    ), // The index can be assigned automatically (index always starts at 0)
);

echo '<pre>';
print_r($arr);
echo '</pre>';
echo '<hr>';
echo gettype($arr);
echo '<hr>';
//indexed array
$indexed_arrays = array(
   'PHP',
    'http://php.net',
    'version7.2',
);
$arrlength = count($indexed_arrays);
for ($i = 0; $i < $arrlength; $i++) {
    echo $indexed_arrays[$i] . '<br>';
}
echo '<hr>';
// associative array
$associative_arrays = array(
    'name' => 'PHP',
    'url' => 'http://php.net',
    'version' => '7.2',
);
foreach ($associative_arrays as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
