<!-- MA RETRAITE -->

<?php
    $retraite = 60;
    $age = (int)readline("Veuillez saisir votre âge : ");
    switch($age)
        {
            case($age > $retraite):
                $annees = $age - $retraite;
                $resultat = "Vous êtes à la retraite depuis $annees années.";
                break;
            case($age === $retraite):
                $resultat = "C'est le moment de prendre votre retraite.";
                break;
            case($age > 0):
                $annees = $retraite - $age;
                $resultat = "Vous êtes à $annees années de la retraite.";
                break;
            default :
                $resultat = "La valeur fournie n'est pas un âge valide.";
                break;
        }
    echo $resultat;
?>
