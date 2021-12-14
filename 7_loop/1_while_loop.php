<?php
// while loop
$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}

echo '<br>';
echo '<hr>';

$even="";
$odd="";
$i=1;

while ($i<=20) {
    if ($i%2==0) {
        $even = $even . " " .$i ;
    } else {
        $odd = $odd . " " .$i;
    }

    $i++;
}

echo "The Even no = " . $even ."<br/>";
echo "The Odd no = " . $odd;

echo "<br>";
echo '<hr>';

$i=1;

while ($i<=5) {
    $j=1;
    while ($j<=$i) {
        echo $i;
        $j++;
    }
    echo "<br/>";
    $i++;
}

echo '<br>';
echo '<hr>';

$i=1;
while ($i<=5) {
    $j=5;

    while ($j>=$i) {
        echo $j;
        $j=$j-1;
    }

    echo "<br/>";
    $i++;
}
