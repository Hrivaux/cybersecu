<?php 

$nom = $_POST['nom'];
$sexe = $_POST['sexe'];



if ($sexe != "femme" )

    echo " Bonjour Madame $nom, vous êtes une homme";

else 

    echo "Bonjour Monsieur $nom, vous êtes un femme";

?>