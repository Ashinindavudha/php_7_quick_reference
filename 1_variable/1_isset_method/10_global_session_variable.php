<?php
session_start();
?>
<html>
<head>
<title>PHP Session Example</title>
</head>
<body>

<form method="POST">

Enter Name : <input type="text" name="name"> <br/> 
<br/>
<input type="submit" name="Submit1" value="Session">
<input type="submit" name="Submit2" value="View Seesion">
<input type="submit" name="Submit3" value="Destroy Session">
</form>

<?php
if (isset($_POST['Submit1'])) {
    $_SESSION["sname"]=$_POST["name"];
}

if (isset($_POST['Submit2'])) {
    if (isset($_SESSION["sname"])) {
        echo "The Session Value = " . $_SESSION["sname"];
    } else {
        echo "All Sessions Destoyed !!";
    }
}
if (isset($_POST['Submit3'])) {
    session_destroy();
}
?>

</body>
</html>