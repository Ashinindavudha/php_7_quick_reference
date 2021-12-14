<?php
//array_merge()
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

$merge = array_merge($arr, ['Websit'], $arr ['Editor']);
echo '<pre>';
print_r($merge);
echo '</pre>';

echo '<br>';
echo '<hr>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';

/*
We may often want to check if a certain value is in one of our arrays.
 Recall from our example above that we assigned an indexed array of
 friends to the ‘friends’ key of our example array. Let’s see if ‘Jeff’
 was included.
 */
