<?php 

$mdp = $_POST['mdp'];

if ($mdp == "admin")
{
    echo "Bonjour Monsieur l'administrateur.";
}
else if($mdp == "manager")
{
    echo "Bonjour Monsieur le manager";
}
else if ($mdp == "users")
{
    echo "Bonjour Monsieur l'users";
}
else {
echo "Tu t'es trompé !!!!";
}
?>