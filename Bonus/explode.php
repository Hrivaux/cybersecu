<?php

$connexion = '20144,58000,65000';
$tabcon = explode(',', $connexion);

print_r($tabcon);

foreach($tabcon as $key=> $value){
    echo " <br> Mois".($key=1). "Nombre de connexion : $value";
}
?>