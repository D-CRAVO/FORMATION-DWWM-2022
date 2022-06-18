<!-- RECHERCHER UNE LETTRE DANS UNE PHRASE -->

<?php
    do
    {
        $phrase = readline("Veuillez saisir votre phrase terminée par un point : ");
        $lg = strlen($phrase);
        
        $occurrences = 0;
        if ($lg <2)
        {
            $resultat = "Votre phrase doit contenir au moins un caractère.\n";
        }
        else if ($phrase[$lg-1] !== '.')
        {
            $resultat = "Votre phrase doit se terminer par un point.\n";
        }
        else
        {
            $resultat = "Vous pouvez continuer.\n";
        }
        echo $resultat;
    }while ($lg<2 || $phrase[$lg-1] !== '.');
    
    $lettre = readline("Veuillez saisir votre caractère : ");
    for ($i = 0; $i < $lg; $i++)
            {
                if($lettre === $phrase[$i])
                {
                    $occurrences++;
                }
            }

    echo "La lettre $lettre apparaît $occurrences fois dans la phrase."
?>