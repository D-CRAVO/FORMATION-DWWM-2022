<!-- TRI DE NOMBRES++ -->

<?php
    // Acquisition des données utilisateurs.
    $a = (int)readline('Veuillez saisir le nombre a : ');
    $b = (int)readline('Veuillez saisir le nombre b : ');
    $c = (int)readline('Veuillez saisir le nombre c : ');
    if($a > $b)
    {
        if($b > $c)
        {
            $resultat = "$a > $b > $c";
        }
        elseif($a > $c)
        {
            $resultat = "$a > $c > $b";
        }
        else
        {
            $resultat = "$c > $a > $b";
        }
    }
    else
    {
        if($a > $c)
        {
            $resultat = "$b > $a > $c";
        }
        elseif($c > $b)
        {
            $resultat = "$c > $b > $a";
        }
        else
        {
            $resultat = "$b > $c > $a";
        }
    }
    echo $resultat;
?>