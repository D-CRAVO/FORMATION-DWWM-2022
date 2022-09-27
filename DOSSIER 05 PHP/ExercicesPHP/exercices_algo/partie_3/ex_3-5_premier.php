<!-- NOMBRE PREMIER -->

<?php
    $nb = (int)readline("Veuillez saisir un nombre entier : ");
    if ($nb === 2)
    {
        $resultat = " Le nombre est premier";
    }
    else
    {
        do
        {
            $i = 2;
            $modulo = $nb % $i;
            if ($modulo === 0)
            {
                $resultat = "Le nombre n'est pas premier";
            }
            else
            {
                $resultat = " Le nombre est premier";
            }
        }while ($modulo !== 0 && $i > $nb - 1);

    }
    echo $resultat;
?>