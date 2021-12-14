<html>
<head>
<title>PHP File create/write Example</title>
</head>
<body>

<FORM method="POST">

Enter String : <input type="text" name="name"> <br/>
<br/>
<input type="submit" name="Submit1" value="Write File">
</FORM>
<?php

if (isset($_POST['Submit1'])) {
    //open file abc.txt in append mode
    $myfile = fopen("abc.txt", "a");

    $text = $_POST["name"];

    fwrite($myfile, $text);

    fclose($myfile);
}

?>

</body>
</html>