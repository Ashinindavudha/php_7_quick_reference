<?php

function Sum($num, $num1)
{
    echo $num + $num1;
}
Sum(3, 5);

echo "<br>";
function hello($name)
{
    echo $name;
}
hello("Hello World");
echo "<br>";
function world()
{
    echo "World";
}
world();

echo "<br>";
function calcSaleTax($price, $tax)
{
    $total = $price + ($price * $tax);
    echo $total;
}
calcSaleTax(100, 0.1);
echo "<br>";
echo "<hr>";
$d = 10;

for ($i = 2; $i < $d; $i++) {
    //echo $i * 12 . "<br>";
    for ($j = 2; $j < $i; $j++) {
        echo $i * $j . "<br>";
    }
}
