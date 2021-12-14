<html>
<head>
<title>PHP Read file</title>
</head> 
<body>
<FORM method="POST">

<input type="submit" name="Submit1" value="Read File">
</FORM>

<?php
if (isset($_POST['Submit1'])) {
    $filename = fopen("data/data.txt", "r");

    if ($filename == true) {
        $filesize = filesize("data/data.txt");
        $filecontent = fread($filename, $filesize);
        fclose($filename);

        echo(" File Content = $filecontent <br>");
        echo("File size : $filesize bytes");
    } else {
        echo "Error !! Try again" ;
    }
}
?>
<!-- 
    PHP Read file – fread() function
The fread() function used to reads from an open file. 
The read() function has two arguments.
The first name of the file and second parameter specifies 
the maximum size of file to read. 
-->
</body>
</html>