<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Multimedia </title>
</head>
<body>

<h2> Saisie d'un seuil </h2> <br>
   <form name="formminichat" action="multimedia.php" method="post">
      <fieldset>
            <legend> Minichat </legend>

            <label> Renseignez un seuil </label>
            <input type="integer" placeholder="tapez votre seuil" name="seuil" /> <br> <br>

            <label> Renseignez un minimum </label>
            <input type="integer" placeholder="tapez votre seuil" name="seuilmin" /> 

            <label> Renseignez un maximum </label>
            <input type="integer" placeholder="tapez votre seuil" name="seuilmax" /> <br> <br>

            <label> Renseignez une marque </label>
            <select name="choix_categorie">
            <option value="Canon"> Canon </option>
            <option value="ASUS"> Asus </option>
            <option value="Nikon"> Nikon </option>
            <option value="LDLC "> LDLC </option>
            </select> <br> <br>
<input type="submit" name="Envoyer" value="Envoyer" />
      </fieldset>
   </form>

<!-- Afficher les articles dont le prix est inférieur à 500e -->
<div>
<?php
if (!isset ($_POST['Envoyer']))
{
   echo 'Saisir le formulaire';
}
else
{
   require_once "sql.php";

   //Afficher les articles dont le prix est inférieur à 500e
   if (empty($_POST['seuil']))
   {
      echo '1 - Rien pour les prix articles inférieur à <br> <br>';
   }
   else
   {
      htmlspecialchars($prix=$_POST['seuil']);

      $listeprix0="SELECT * FROM article Where prix <= $prix";
      $listeprix0=$bdd->query($listeprix0);

      echo "1 - Les prix articles inférieur à X : <br>";

      while ($data = $listeprix0->fetch()) 
      {
         echo "<div> <strong>". $data['id_article']." : </strong>";
         echo $data['prix']."<br><br>";
      }
   }
//Afficher les articles dont le prix est entre X et X
   if (empty($_POST['seuilmin']) || empty($_POST['seuilmax']))
   {
      echo '2 - Rien pour prix article entre à et à <br> <br>';
   }
   else
   {
      htmlspecialchars($prixmin=$_POST['seuilmin']);
      htmlspecialchars($prixmax=$_POST['seuilmax']);

      $listeprix1="SELECT * FROM article Where prix BETWEEN  $prixmin AND $prixmax";
      $listeprix1=$bdd->query($listeprix1);

      echo "2 - Les articles entre X et X sont : <br>";

      while ($data = $listeprix1->fetch()) 
      {
         echo "<div> <strong>". $data['id_article']." : </strong>";
         echo $data['prix']."<br><br>";
      }
   }
//Afficher les articles selon la catégorie   //leur code, leur désignation et leur prix
   if (empty($_POST['choix_categorie']))
   {
      echo '3 - Rien pour article de la catégorie <br> <br>';
   }
   else
   {
      htmlspecialchars($categorie=$_POST['choix_categorie']);

      $listearticle="SELECT * FROM article Where marque = '$categorie'";  //LIKE ou =
      $listearticle=$bdd->query($listearticle);

      echo "3 - Les articles de la catégorie ".$categorie." sont : <br>";

      while ($data = $listearticle->fetch()) 
      {
         echo "<div> <strong>". $data['id_article']." : </strong>";
         echo $data['designation']."";
         echo $data['prix']."<br><br>";
      }
   }
}
?>
</div>
</body>
</html>