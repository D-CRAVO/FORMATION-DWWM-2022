<!-- INTERVALLE ENTRE DEUX NOMBRES -->

<?php
    $a = (int)readline("Veuillez saisir le nombre A : ");
    $b = (int)readline("Veuillez saisir le nombre B : ");
    if($a > $b)
    {
        for($i= $a - 1; $i > $b; $i --)
        {
            echo " $i";
        }
    }
    else
    {
        for($i = $a + 1; $i < $b; $i ++)
        {
            echo " $i";
        }
    }
?>

