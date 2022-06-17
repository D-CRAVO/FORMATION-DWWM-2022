<!-- MA BICYCLETTE -->

<?php
    echo ("Les réponses seront 0 pour non et 1 pour oui.");
    $il_fait_beau = (boolean)readline("Fait-il beau temps ? ");
    if($il_fait_beau)
    {
        $bicyclette_endommagee = (boolean)readline("La bicyclette est-elle endommagée ? ");
        if($bicyclette_endommagee)
        {
            echo "Vous allez chez le garagiste pour faire réparer votre bicyclette.\n";
            $reparation_immediate = (boolean)readline("La réparation est-elle immédiate ? ");
            if($reparation_immediate)
            {
                $resultat = "Vous allez faire une balade à bicyclette.";
            }
            else
            {
                $resultat = "Vous allez à pied cueillir des joncs.";
            }
        }
        else
        {
            $resultat = "Vous allez faire une balade à bicyclette.";
        }
    }
    else
    {
        echo "Vous voulez relire Game of Throne.\n";
        $livre_salon = (bool)readline("Le livre est-il dans le salon ? ");
        if($livre_salon)
        {
            $resultat = "Vous relisez Game of Thrones.";
        }
        else
        {
            echo "Vous allez à la bibliothèque\n";
            $livre_disponible = (bool)readline("Le livre est-il disponible ? ");
            if($livre_disponible)
            {
                $resultat = "Vous empruntez Game of Thrones.";
            }
            else
            {
                $resultat = "Vous empruntez un roman policier.";
            }
        }
    }
    echo $resultat;
?>