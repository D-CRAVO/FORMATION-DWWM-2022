<!-- JEU DE LA FOURCHETTE -->

<?php 
    $min = 0;
    $max = 100;
    $mystere = rand(0, 100);
    $essais = 0;
    do
    {
        echo "Le nombre mystère est compris entre $min et $max.\n";
        $saisi = (int)readline("Veuillez saisir votre nombre : ");
        $reussite = ($mystere === $saisi);
        if ($saisi < $mystere)
        {
            $min = $saisi;
        }
        else
        {
            $max = $saisi;
        }
        $essais++;
    }while (!$reussite);
    echo "Vous avez trouvé en $essais essais."
?>