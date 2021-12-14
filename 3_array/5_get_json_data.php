<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <h1>Get Json Data From json file</h1>
    <?php
        $json_data = file_get_contents('example_json_data.json');
        $data = json_decode($json_data);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        // echo '<hr>';
        // foreach ($data as $key => $value) {
        //     echo $key . '<br>';
        //     echo $value->color . '<br>';
        //     echo $value->value . '<br>';
        //}
    ?>
    <h1 class="text">Display Json File Data in Table</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Color</th>
            <th>Value</th>
        </tr>
        
            <?php
                foreach ($data as $key => $value) {
                    echo '<tr>';
                    echo '<td>' . $key . '</td>';
                    echo '<td>' . $value->color . '</td>';
                    echo '<td>' . $value->value . '</td>';
                    echo '</tr>';
                }
            ?>
        
    </table>
</body>
</html>