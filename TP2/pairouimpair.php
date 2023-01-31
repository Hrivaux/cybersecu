<?php 

$nombre = $_POST['nombre'];

if ($nombre%2 == 0)
{
    echo "$nombre est pair";
}
else 
{
    echo "$nombre est impair";
}

echo " Afficher 10 valeurs après vtre nombre : $nombre <br> <br>";
$i = 1;

do{
    echo ($nombre +2*$i)."  <br>";
    $i++;

} while ($i <= 10);
?>