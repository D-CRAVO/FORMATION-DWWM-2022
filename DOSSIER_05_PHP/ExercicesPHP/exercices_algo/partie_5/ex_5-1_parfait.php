<!-- CALCUL DES NOMBRES PARFAITS --> 

<?php
    $compteur = 0;
    $nb = 6;
    do
    {
        $somme = 0;
        for ($i = 1; $i < $nb - 1; $i++)
        {
            if ($nb % $i === 0)
            {
                $somme += $i;
            }
        }
        if ($somme === $nb)
        {
            $compteur++;
            echo "$nb est un nombre parfait.\n";
        }
        $nb++;
    }while($compteur <4);
    
?>