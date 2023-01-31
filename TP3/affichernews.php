<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

<body>
    <h1> Afficahge des news </h1>




    <?php

    // Etape 1  : connexion à la basse de données
    try {

        $connexion = new PDO('mysql:host=localhost;dbname=dbnews;charset=utf8', 'root', '');

        // echo 'accès avec succès à  la base de données ';
    } catch (Exception $e) {

        die('Erreur : ' . $e->getMessage());
    }


    // Etape 2 : récupération des données de la base de données

    $sql = "SELECT * FROM tnews order by titre";

    $reponse = $connexion->query($sql);

    // Etape 3 : Afficher les données 

    while ($data = $reponse->fetch()) {

        echo $data['id'] . "<br/>";

        echo "<em> titre : " . $data['titre'] . "</em><br/>";

        echo "<strong>" . $data['contenu'] . " </strong><br/><hr/>";
    }



    ?>
</body>

</html>