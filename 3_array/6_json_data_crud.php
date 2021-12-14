<?php
include('includes/head.php');
// load json data
$json = file_get_contents('json_crud_data.json');
// decode json data to associative array
$data = json_decode($json);
//add new data
// $data[] = array(
//     'Code' => '4',
//     'Name' => 'LinThu',
//     'Sports' => 'Football'
// );
// encode array to json data
//file_put_contents('json_crud_data.json', json_encode($data));
// display the json file record
// foreach ($data as $key => $value) {
//     echo  $key . "<br/>";
//     echo  $value->Code . "<br/>";
//     echo  $value->Name . "<br/>";
//     echo  $value->Sports . "<br/>";
// }
# https://www.kodingmadesimple.com/2017/05/add-update-delete-read-json-file-php.html
# https://stackoverflow.com/questions/55265626/append-form-data-to-json-file-using-php
# https://www.geeksforgeeks.org/how-to-append-data-in-json-file-through-html-form-using-php/


?>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Sports</th>
    </tr>
    <?php
    foreach ($data as $key => $value) {
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $value->Code . "</td>";
        echo "<td>" . $value->Name . "</td>";
        echo "<td>" . $value->Sports . "</td>";
        echo "</tr>";
    }
    ?>
</table>