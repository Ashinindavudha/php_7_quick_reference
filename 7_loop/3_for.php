<?php
// for loop
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}
echo '<br>';

$name= "ashin";
for ($i=1;$i<=5;$i++) {
    echo "Hello ". $name . "<br/>";
}


echo "<br>";
$sum=0;
for ($i=1;$i<=5;$i++) {
    $sum=$sum+$i;
    //echo "The sum of 1 to 5 = ".$sum;
}

echo "The sum of 1 to 5 = ".$sum;

echo "<br>";
$even="";
$odd="";

for ($i=1;$i<=50;$i++) {
    if ($i%2==0) {
        $even = $even . " " .$i ;
    } else {
        $odd = $odd . " " .$i;
    }
}

echo "The Even no = " . $even ."<br/>";
echo "The Odd no = " . $odd;

echo "<br>";

for ($i=1;$i<8;$i++) {
    for ($j=1;$j<=$i;$j++) {
        echo $i;
    }
    echo "<br/>";
}
