<!-- CONVERSION KILOMETRES MILES -->

<?php
    do
    {
        $kilometers = readline("Veuillez saisir votre valeur : ");
        if ($kilometers === 'q')
        {
            $result = "Goodbye !";
        }
        else 
        {
            $km = doubleval($kilometers);
            //$km = number_format($km, 2);
            $mi = doubleval(1.609 * $km);
            $result = "$km kms donnent $mi miles." . PHP_EOL;
        }
        echo $result;
    } while ($kilometers != 'q')
?>