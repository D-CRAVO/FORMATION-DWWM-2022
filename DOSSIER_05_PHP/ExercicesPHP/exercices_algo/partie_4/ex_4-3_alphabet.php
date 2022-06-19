<!-- DENOMBRER LES LETTRES DE L'ALPHABET DANS UN TABLEAU -->

<?php 

    $lg_texte = 5;
    do
    {
        $texte = readline ("Veuillez saisir votre texte de $lg_texte caractères minimum : ");
        $texte_lower = strtolower($texte);
        $lg_texte_lower = strlen($texte_lower);
        
        if (strlen($texte) < $lg_texte)
        {
            $resultat = "Veuillez saisir un texte plus long.\n";
        }
        else
        {
            $resultat = "Vous pouvez continuer.\n";
        }
        echo $resultat;
    }while (strlen($texte) < $lg_texte);

    $alphabet = "abcdefghijklmnopqrstuvwxyz";
    $lg_alphabet = strlen($alphabet);
    
    
    for ($i = 0; $i < $lg_alphabet; $i++)
    {
        $occurrences[$i] = 0;
    }

    for ($i = 0; $i < $lg_texte_lower; $i++)
    {
        for ($j = 0; $j < $lg_alphabet; $j++)
        {
            
            if ($texte_lower[$i] === $alphabet[$j])
            {
                $occurrences[$j] = $occurrences[$j] + 1;
            }
        }
    }

    $lg_occurrences = count($occurrences);
    for ($i = 0; $i < $lg_occurrences; $i++)
    {
        if ($occurrences[$i] !== 0)
        {
            echo "La lettre " . $alphabet[$i] ." est présente " . $occurrences[$i] ." fois.\n";
        }
    }
?>