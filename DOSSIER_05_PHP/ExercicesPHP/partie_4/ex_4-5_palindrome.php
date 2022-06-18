<!-- PALINDROME -->

<?php
    
    do
    {
        $chaine_originale = readline ("Veuillez saisir votre chaîne de caractères terminée par un point : ");
        $lg_originale = strlen($chaine_originale);

        if ($chaine_originale === "")
        {
            $result = "Veuillez saisir au moins un caractère.\n";
        }
        else if ($chaine_originale[$lg_originale - 1] !== '.')
        {
            $result = "Veuillez terminer par un point.\n";
        }
        else if ($chaine_originale === '.')
        {
            $result = "La phrase est vide.\n";
        }
        else if ($lg_originale <3)
        {
            $result = "Veuillez saisir au moins deux caractères.\n";
        }
        else
        {
            $result = "Vous pouvez continuer.\n";
        }
        echo $result;
    }while (($chaine_originale === "") || ($chaine_originale[$lg_originale - 1] !== '.') || ($chaine_originale === '.') || ($lg_originale <3));
    
    $caractere_indesirable = [" ", "."];
    $chaine = str_replace($caractere_indesirable, "", $chaine_originale);
    $lg_chaine = strlen($chaine);
    
    do
    {
        $i = 0;
        if ($chaine[$i] !== $chaine[$lg_chaine -$i - 1])
        {
            $result = "La chaîne de caratères n'est pas un palindrome.";
        }
        else
        {
            $result = "La chaîne de caractères est un palindrome.";
            $i++;
        }
    }while ($chaine[$i] !== $chaine[$lg_chaine -$i -1] || $chaine[$i] > $chaine[$lg_chaine -$i - 1]);
    echo $result;
?>