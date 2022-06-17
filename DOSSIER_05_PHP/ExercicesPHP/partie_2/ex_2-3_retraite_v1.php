<!-- MA RETRAITE -->

<?php
    $retraite = 60;
    $age = (int)readline('Veuillez saisir votre âge : ');
    if ($age > $retraite)
    {
        $annees = $age - $retraite;
        $resultat = "Vous êtes à la retraite depuis $annees années.";
    }
    elseif($age === $retraite)
    {
        $resultat = "C'est le moment de prendre votre retraite.";
    }
    elseif($age > 0)
    {
        $annees = $retraite - $age;
        $resultat = "Il vous reste $annees années avant la retraite.";
    }
    else
    {
        $resultat = "La valeur fournie n'est pas un âge valide.";
    }
    echo $resultat
?>