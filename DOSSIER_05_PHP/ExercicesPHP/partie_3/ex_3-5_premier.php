<!-- NOMBRE PREMIER -->

<?php
    $nb = (int)readline("Veuillez saisir un nombre entier : ");
    if ($nb === 2)
    {
        $resultat = " 1 Le nombre est premier";
    }
    else
    {
        do
        {
            $i = 2;
            $modulo = $nb % $i;
            if ($modulo === 0)
            {
                $resultat = " 2 Le nombre n'est pas premier";
            }
            else
            {
                $resultat = " 3 Le nombre est premier";
            }
        }while ($modulo !== 0 && $i > $nb - 1);

    }
    echo $resultat;
?>