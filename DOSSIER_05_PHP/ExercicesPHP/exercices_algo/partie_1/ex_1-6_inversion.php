<!-- INVERSION DE DEUX VALEURS -->

<?php
    $nb1 = readline('Veuillez saisir votre nombre 1 : ');
    $nb2 = readline('Veuillez saisir votre nombre 2 : ');
    $temp = $nb1;
    $nb1 = $nb2;
    $nb2 = $temp;
    echo "L'inversion des deux nombres donne nombre 1 = $nb1 et  nombre 2 = $nb2"
?>