<!-- RECHERCHE DES DIVISEURS D'UN NOMBRE -->

<?php
    $nb = readline("Veuillez saisir un nombre : ");
    for ($i = 2; $i < $nb; $i++)
    {
        if ($nb % $i === 0)
        {
            echo " $i";
        }
    }
?>