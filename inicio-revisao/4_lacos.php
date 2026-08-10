<?php

//laço FOR - Exemplo aplicado em tabuada

for ($i = 1; $i <=10; $i++) {
    echo "8 x $i =" .(8 * $i) . "<br>";
}


//while
echo "<br>";
$n = 8;

while ($n > 0) {
    echo $n . "<br>";
    $n --;
}


echo "<br>";
$j = 0;
do {
    echo "J vale $j <br>";
    $j++;
} while ($j <= 10);
