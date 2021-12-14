<?php
//in_array() method
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

$result = in_array('Jim', $arr['Editor']);
print_r($result); // true or (1)
/*
We may often want to check if a certain value is in one of our arrays.
 Recall from our example above that we assigned an indexed array of
 friends to the ‘friends’ key of our example array. Let’s see if ‘Jeff’
 was included.
 */
