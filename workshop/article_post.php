<?php


// Connexion à la base de données
require_once ('sql.php');



// Insertion du message à l'aide d'une requête préparée

$req = $bdd->prepare('INSERT INTO article (titre, contenue, auteur_article, date_article) VALUES(?, ?, ?, ?)');

$req->execute(array($_POST['pseudo'], $_POST['message']));



// Redirection du visiteur vers la page du minichat

header('Location: minichat.php');

?>