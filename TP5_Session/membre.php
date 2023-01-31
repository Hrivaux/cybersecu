<?php

if (isset($_SESSION))
{
    echo "Bienvenue ".$_SESSION['pseudo'].". Tu es bien connecté !";

}
else {
    Header('Location: index.php');
}


?>