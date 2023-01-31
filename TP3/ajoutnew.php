ajoutnews.php
Qui a accès

Propriétés système
Type
HTML
Taille
1 Ko
Espace de stockage utilisé
1 Ko
Emplacement
05_Base_de_Donnees
Propriétaire
Faouzi Tchenar
Date de modification
28 oct. 2021 par Faouzi Tchenar
Ouvert
18:41 par moi
Date de création
18:23
Pas de description
Téléchargement autorisé pour les lecteurs
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

<body>

    <?php

    if (isset($_POST['ajouter'])) {

        //echo "Vous etes autoriser à ajouter la news";

        // Etape 1  : connexion à la basse de données
        try {

            $connexion = new PDO('mysql:host=localhost;dbname=dbnews;charset=utf8', 'root', '');

            // echo 'accès avec succès à  la base de données ';
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }

        // Etape 2 : récupération des données du formulaire

        $auteur = $_POST['auteur'];
        $titre = $_POST['titre'];
        $contenu =  $_POST['contenu'];

        // Etape 3 : Ajouter les données du formulaire dans la table tnews

        if (!empty($auteur) && !empty($titre) && !empty($contenu)) {

            $reponse = $connexion->prepare("INSERT INTO tnews(auteur,titre,contenu) VALUES (:a,:t,:c)");

            $reponse->execute(array('a'=>$auteur,'t'=> $titre, 'c'=>$contenu));


            include "affichernews.php";
        } else {

            header('Location: ajoutnews.html');
        }
    }



    ?>

</body>

</html>