<!-- RECHERCHER UN NOMBRE DANS UN TABLEAU -->

<?php
    $tableau = [8,16,32,128,256,512];
    $nb = (int)readline("Veuillez sasir votre nombre : ");
    $lg = count($tableau);
    $i = 0;
    do
    {
        $cond = ($nb === $tableau[$i]);
        if (!$cond)
        {
            $resultat = "Nombre non trouvé";
            $i++;
        }
        else 
        {
            $resultat = "Nombre trouvé à l'indice $i dans le tableau.";
        }
    }while(!$cond && $i<$lg);
    echo $resultat;
     
?>