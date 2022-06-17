<!-- CONTROLER LA SAISIE -->

<?php
    do
    {
        $prenom = readline("Veuillez saisir votre prénom : ");
    }while (strlen($prenom) < 2);
    echo "Bonjour $prenom";
?>