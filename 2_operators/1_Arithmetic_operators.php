<?php
// Arithmetic operators
$a = 4 + 2; // 6 // addition
echo "4 + 2 is: ". $a . '<br>';
$b = 4 - 2; // 2 // subtraction
echo "4 - 2 is: " . $b . '<br>';
$c = 4 * 2; // 8 // multiplication
echo "4 * 2 is: ". $c . '<br>';
$d = 4 / 2; // 2 // division
echo "4 / 2 is: " . $d . '<br>';
$e = 4 % 2; // 0 // modulus (division remainder)
echo "4 % 2 is:" . $e . '<br>';
$f = 4 ** 2; // 16 // exponentiation
echo "4 ** 2 is :" . $f . '<br>';
echo '<br> <hr>';
echo(5 % 3)."\n" . "<br>";           // prints 2
echo(5 % -3)."\n" . "<br>";          // prints 2
echo(-5 % 3)."\n" . "<br>";          // prints -2
echo(-5 % -3)."\n" . "<br>";         // prints -2
echo "<br><hr>";
$a = 42;
         $b = 20;
         
         $c = $a + $b;
         echo "Addtion Operation Result: $c <br/>";
         
         $c = $a - $b;
         echo "Substraction Operation Result: $c <br/>";
         
         $c = $a * $b;
         echo "Multiplication Operation Result: $c <br/>";
         
         $c = $a / $b;
         echo "Division Operation Result: $c <br/>";
         
         $c = $a % $b;
         echo "Modulus Operation Result: $c <br/>";
         
         $c = $a++;
         echo "Increment Operation Result: $c <br/>";
         
         $c = $a--;
         echo "Decrement Operation Result: $c <br/>";
