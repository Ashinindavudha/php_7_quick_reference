<?php
 $secretNumber = 453;
 $_POST['guess'] = 442;
 if ($_POST['guess'] == $secretNumber) {
     echo "<p>Congratulations!</p>";
 } elseif (abs($_POST['guess'] - $secretNumber) < 10) {
     echo "<p>You're getting close!</p>";
 } else {
     echo "<p>Sorry!</p>";
 }
?>

<form action="" method="POST">
Guess: <input type="text" name="guess">
<input type="submit" name="submit" value="Submit">
</form>