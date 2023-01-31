<?php
// Connexion à la base de données
require_once ('sql.php');
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
    <style type="text/css">
#madiv{height:500pt;overflow:auto}
</style>
</head>
<body>



<div class="container">
  <form action="minichat_post.php" method="post"> 
    <p>Bonjour</p>
    <input type="text" placeholder="Pseudo" name="pseudo" id="pseudo"><br>
    <input type="text" placeholder="Message" name="message" id="message"><br>
    
    <input type="submit" value="Envoyer" />
</form>

  <div class="drops">
    <div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div>
  </div>
</div>


<div id="madiv" class="container2 form a p">
   <u> <h3 class=""> Les 10 derniers articles</h3> </u>
<?php


            $requete = ("SELECT * FROM article order by ID desc LIMIT 10");
            $reqarticles = $bdd->prepare($requete);
            $reqarticles->execute();


            $resultat = $reqarticles->fetchAll();


            if (!empty($resultat)) {
                foreach ($resultat as $article) {
                                                    

       echo '<p>'. htmlspecialchars($article['date_article']) . '</p><strong><p>' . htmlspecialchars($article['auteur_article']) . '</p></strong>' . htmlspecialchars($article['contenue']) . '</p>';?>
       <a href="commentaire.php?article=<?php echo $article['id'];?>">Commentaire</a>  <br>
<?php
}
            }






?>

</div>
    
</body>

</html>