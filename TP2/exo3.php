<?php

$coup = 0;


do  {
    $coup++;
    $a = rand(1,1000);
    $b = rand(1,1000);
    $c = rand(1,1000);
    echo "$a-$b-$c <br>";
    }

while ($a%2 == 1 || $b%2 == 0 || $c%2 == 0);


echo "Vous avez trouver en $coup";

?>