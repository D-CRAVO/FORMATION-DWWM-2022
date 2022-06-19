<!-- TRI DE NOMBRES -->

<?php
    $nb1 = readline('Veuillez saisir le nombre 1 : ');
    $nb2 = readline('Veuillez saisir le nombre 2 : ');
    if ($nb1 < $nb2)
    {
        echo "Le tri des nombres $nb1 et $nb2 dans l'ordre croissant donne : $nb1 et $nb2";
    }
    else
    {
        echo "Le tri des nombres $nb1 et $nb2 dans l'ordre croissant donne : $nb2 et $nb1";
    }
?>