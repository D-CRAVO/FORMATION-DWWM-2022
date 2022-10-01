<!-- TRI D'UN TABLEAU -->

<?php
    $tableau_origine = [128,64,8,512,16,32,256];
    $tableau = $tableau_origine;
    $lg_tab = count($tableau);
    for ($i = 0; $i < $lg_tab; $i++)
    {
        for($j = $i; $j < $lg_tab; $j++)
        {
            if ($tableau[$j]<$tableau[$i])
            {
                $temp = $tableau[$i];
                $tableau[$i] = $tableau[$j];
                $tableau[$j] = $temp;
            }
        }
    }

    for ($i = 0; $i < $lg_tab; $i++)
    {
        echo " " . $tableau[$i];
    }
?>
