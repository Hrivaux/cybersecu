<?php 
include "sql.php";

$pseudo = $_POST["pseudo"];
$mdp = $_POST["mdp"];

if (isset($_POST['pseudo']) && isset($_POST['mdp']))
{
$check = $bdd->prepare("SELECT email FROM contact WHERE pseudo = ? AND mdp = ?");
	$check->execute(array($pseudo,$mdp));
	$data = $check->fetch();

    if ($data){
        @session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['email'] = $data['email'];
          Header ('Location : membre.php');
         
    }
} 
else 
{
echo " Echec tu n'es pas connecté à ta session";
}
?>