<?php
try
      {
	   $bdd = new PDO('mysql:host=localhost;dbname=bdcontact', 'root', '');
       $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $bdd->exec("SET CHARACTER SET utf8");
      }
    catch(Exception $e)
     {
      die('Erreur : '.$e->getMessage());
     }
?>