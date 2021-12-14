<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset function</title>
</head>
<body>
    <form method="post">

Enter value1 :<input type="text" name="num1"><br/>
Enter value2 :<input type="text" name="num2"><br/>
<input type="submit" value="Sum" name="submit"><br/><br/>

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        if (isset($num1) && isset($num2)) {
            echo "Sum of $num1 and $num2 is ".($num1+$num2);
        }
    }
    echo "<br/>";
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    echo "<br/>";
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";

    echo "<br/>";
    echo "<pre>";
    var_dump($_SERVER);
    echo "</pre>";

    echo "<br/>";
    echo "<pre>";
    var_dump($_REQUEST);
    echo "</pre>";



    ?>
</body>
</html>