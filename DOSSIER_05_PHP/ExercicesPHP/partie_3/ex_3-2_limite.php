<!-- CONTROLER LA SAISIE AVEC LIMITE -->

<?php
    $mdp_enregistre = "formation";
    $nb_saisie = 3;
    do
    {
        $mdp_saisi = (string)readline("Veuillez saisir votre mot de passe : ");
        if ($mdp_saisi !== $mdp_enregistre)
        {
            $nb_saisie--;
        }
    }while($mdp_saisi !== $mdp_enregistre && $nb_saisie > 0);
    
    if ($nb_saisie === 0)
    {
        $resultat = "Votre compte est bloqué.";
    }
    else
    {
        $resultat = "Vous êtes connecté.";
    }
    echo $resultat;
?>