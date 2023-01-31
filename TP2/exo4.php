<?php
echo "<h2>Question 1</h2>";
$chomage = array ('France' =>10.3, 'Allemagne' =>5.2, 'Belgique' =>8.4,
'Danemark' =>7.0, 'Espagne' =>26.1, 'Autriche' =>4.9 , 'Italie' =>12.2) ;

foreach ($chomage as $pays => $info) {
    echo ($pays . ' : ' . $info ."<br>");
}


echo "<h2>Question 2</h2>";

$chomage = array ('France' =>10.3, 'Allemagne' =>5.2, 'Belgique' =>8.4,
'Danemark' =>7.0, 'Espagne' =>26.1, 'Autriche' =>4.9 , 'Italie' =>12.2) ;
foreach ($chomage as $pays => $info) {

if ($info <=10 )
{
    echo ($pays . ' : ' . $info ."<br>");
}

}
echo "<h2>Question 3</h2>";


$tauxMin = min($chomage);
$paysMinchomage = array_search($tauxMin, $chomage);

echo " Le pays : $paysMinchomage a le taux de chomage le plus faible : $tauxMin";

echo "<h2>Question Bonus</h2>";

$moyennechomage = round(array_sum($chomage)/count($chomage), 1);
echo "La moyenne du taux de chomage est $moyennechomage";

echo "<h2>Quest je sais pas</h2>";
$connexion = '20144,58000,65000';
$tabcon = explode(',', $connexion);

print_r($tabcon);

?>