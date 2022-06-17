<!-- MA RETRAITE -->

<?php
    $retraite = 60;
    $age = (int)readline('Veuillez saisir votre âge : ');
    if ($age > $retraite)
    {
        $annees = $age - $retraite;
        echo "Vous êtes à la retraite depuis $annees années.";
    }
    elseif($age === $retraite)
    {
        echo "C'est le moment de prendre votre retraite.";
    }
    elseif($age > 0)
    {
        $annees = $retraite - $age;
        echo "Il vous reste $annees années avant la retraite.";
    }
    else
    {
        echo "La valeur fournie n'est pas un âge valide.";
    }
?>