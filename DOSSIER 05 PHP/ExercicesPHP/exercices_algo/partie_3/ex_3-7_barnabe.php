<!-- BARNABE FAIT SES COURSES -->

<?php 
    $somme_depart = readline("Veuillez saisir la somme de départ : ");
    $somme = $somme_depart;
    $magasins = 0;
    do 
    {
        $somme = $somme - ($somme/2 + 1);
        $magasins++;
    }while ($somme > 1);
    echo "Barnabé a visité " . ($magasins + 1) . " magasins.";
?>
