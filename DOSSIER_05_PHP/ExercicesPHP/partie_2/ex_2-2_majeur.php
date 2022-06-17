<!-- ES-TU MAJEUR ? -->

<?php
    $majeur = 18;
    $age = (int)readline('Veuillez saisir votre âge : ');
    if($age >= $majeur)
    {
        echo 'Vous êtes majeur';
    }
    elseif( $age > 0)
    {
        echo 'Vous êtes mineur';
    }
    else
    {
        echo 'Vous n\'êtes pas encore né';
    }
?>