<?php
 $secretNumber = 453;
 if ($_POST['guess'] == $secretNumber) {
     echo "<p>Congratulations!!</p>";
 } else {
     echo "<p>Sorry!</p>";
 }
?>

<form action="" method="POST">
Guess: <input type="text" name="guess">
<input type="submit" name="submit" value="Submit">
</form>