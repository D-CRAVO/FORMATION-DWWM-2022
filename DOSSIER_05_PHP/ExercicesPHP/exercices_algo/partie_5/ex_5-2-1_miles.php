<!-- CONVERSION KILOMETRES MILES -->

<?php
    do
    {
        $kilometres = readline("Veuillez saisir votre valeur : ");
        if ($kilometres === 'q')
        {
            $result = "Goodbye !";
        }
        else 
        {
            $km = $kilometres;
            $km = number_format($km, 2);
            $mi = 1.609 * $km;
            $result = "$km kms donnent $mi miles.\n";
        }
        echo $result;
    } while ($kilometres != 'q')
?>