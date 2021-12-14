<?php
// create json post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function get_data()
    {
        $name = $_POST['name'];
        $file_name = 'studentData' .'.json';
        if (file_exists($file_name)) {
            $current_data = file_get_contents($file_name);
            $array_data = json_decode($current_data, true);
            $extra = array(
                'name' => $_POST['name'],
                'branch' => $_POST['branch'],
                'year' => $_POST['year']
            );
            $array_data[] = $extra;
            echo "file exist <br/>";
            return json_encode($array_data);
        } else {
            $datae = array();
            $datae[] = array(
                'name' => $_POST['name'],
                'branch' => $_POST['branch'],
                'year' => $_POST['year']
            );
            echo "file not exist <br/>";
            return json_encode($datae);
        }
    }
    $file_name = 'studentData' .'.json';
    if (file_put_contents($file_name, get_data())) {
        header('location:index.php');
        echo 'Data successfully saved';
    } else {
        echo 'error';
    }
}
