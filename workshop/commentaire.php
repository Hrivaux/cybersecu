<?php
// Connexion à la base de données
require_once ('sql.php');

$id_article = htmlentities(trim($_GET['article']));
$id_article = (int) $id_article;

if ($id_article && $id_article != 0) {
?>
<!DOCTYPE html>
<lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet"> 
    <title>MiniChat</title>
</head>
<body>



<div class="container">
    
  <form action="minichat_post.php" method="post"> 
  <h1 class=""> Article</h1>
  <hr>
  <?php


$requete = ("SELECT * FROM article WHERE id = $id_article");
$reqarticles = $bdd->prepare($requete);
$reqarticles->execute();


$resultat = $reqarticles->fetchAll();


if (!empty($resultat)) {
    foreach ($resultat as $article) {
                                        

        echo '' . htmlspecialchars($article['auteur_article']) . ' le  : ' . htmlspecialchars($article['date_article']) . '';
        echo '<p><strong>' . htmlspecialchars($article['titre']) . '</p>'; 
        
        echo ($article['contenue']);
?>
<br>
<?php
}
}?>
<br><br>
<h1 class=""> Commentaire</h1>
  <hr>
<?php
$requete = ("SELECT * FROM commentaire WHERE id = $id_article");
$com = $bdd->prepare($requete);
$com->execute();


$resultat = $com->fetchAll();


if (!empty($resultat)) {
    foreach ($resultat as $commentaire) {
                                        

        echo   htmlspecialchars($commentaire['auteur']) . ' le  : ' . htmlspecialchars($commentaire['date_commentaire']) .'<br>';
        echo  htmlspecialchars($commentaire['commentaire']); 
        
        
?>
<br>
<?php
}
}

?>
<a href="article.php"> Retour sur la page des articles</a>
</form>

 
</div>



    
</body>
<?php 
}

else {

    header('Location: article.php');
}
?>
</html>