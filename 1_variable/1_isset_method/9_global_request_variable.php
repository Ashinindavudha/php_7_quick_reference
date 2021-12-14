<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST Global Variable</title>
</head>
<body>
   <form name="form1" action="" method="POST">

Name : <input type="text" name="name"><br>
Password : <input type="text" name="pass"><br>
<input type="submit" name="submit" value="Login">

</form> 
<?php
echo "Your Username = " . $_REQUEST['name'];
echo "<br>";
echo "Your Password = " . $_REQUEST['pass'];
?>
</body>
</html>