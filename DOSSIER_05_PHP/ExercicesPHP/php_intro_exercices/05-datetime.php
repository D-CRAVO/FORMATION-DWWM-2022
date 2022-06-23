<?php

// ***************************************************************************
echo PHP_EOL . 'Exercice 5.A Afficher et retourner la date du jour' . PHP_EOL;
// Créer une fonction « getToday() ». Cette fonction doit afficher et retourner la date du jour au format d/m/Y sous forme de 
// chaine de caractères (exemple : 21/10/2020).

/**
 * Display and return the date of the day.
 *
 * @return string
 * @author David CRAVO <contact@davidcravo.fr>
 */
function getToday() : string
{
    $date = date("d/m/Y");
    echo 'Affichage 1 ' . $date . PHP_EOL;
    return $date;
}

// Recovery of the result.
$result = getToday();

// Display the result.
echo 'Affichage 2 ' . $result . PHP_EOL;


// ********************************************************************
echo PHP_EOL . 'Exercice 5.B Contrôle de saisie de la date.' . PHP_EOL;
// Créer une fonction « getTimeLeft() » acceptant un argument de type string et qui retourne une chaine de caractère.
// La valeur de l'argument représente une date au format Y-m-d (ex: 2020-11-23). 
// La fonction doit vérifier si la date fournie est valide (bon format, date cohérente).
// Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
// Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
// Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé ».

// Recovery of user data
// $date = (readline('Veuillez saisir votre date au format aaaa-mm-jj : '));
// echo '$date : ' . $date . PHP_EOL;

// $dateControl = explode('-', $date);
// print_r($dateControl);
// //echo $dateControl[0] . '/' . $dateControl[1] . '/' . $dateControl[2] . PHP_EOL;

// $day = $dateControl[2];
// $month = $dateControl[1];
// $year = $dateControl[0];
// // checkdate(int $month, int $day, int $year): bool
// $control = checkdate($month, $day, $year);
// echo 'ok ' . $control . PHP_EOL;
// echo 'not ' . !$control . PHP_EOL;

// //echo date_format(DateTimeInterface $date, 'Y-m-d');

// $date2 = new DateTime ($date);
// $date3 = $date2->format('Y-m-d');
// echo '$date3 : ' . $date3 . PHP_EOL;

// function getTimeLeft($date) : string
// {
//     // $dateOfDay = new DateTime(2020-01-30);
//     // $dateOfDay = $dateOfDay->format('Y-m-d');

//     $dateOfDay = '2020-01-30';
//     $date1 = strtotime($dateOfDay);
//     $date2 = strtotime($date);
//     $diff = $date2 - $date1;
//     return $diff / 86400;
// }

// echo 'Résultat ' . getTimeLeft($date3) . ' jours.' . PHP_EOL;

// echo date("m") . PHP_EOL;
// echo date("M") . PHP_EOL;
// echo date("n") . PHP_EOL;

do
{
    // Recovery of user data
    $date = (readline('Veuillez saisir votre date au format aaaa-mm-jj : '));
    echo '$date : ' . $date . PHP_EOL;

    $date = new DateTime($date);
    // echo '$date : ' . $date . PHP_EOL;
    print_r($date);

    $day = $date->format('d');
    $month = $date->format('m');
    $year = $date->format('y');
    
    $control = checkdate($month, $day, $year);
    if (!$control)
    {
        $result = 'Veuillez saisir une date au bon format' . PHP_EOL;
    }
    else {
        $result = 'Vous pouvez continuer' . PHP_EOL;
    }
    echo $result . PHP_EOL;
}while(!$control);


function getTimeLeft($date) : string
{
    $today = new DateTime();

    if($date->format('ymd') < $today->format('ymd')) 
    {
        $result = 'Evènement passé';
    }
    else if (($date->format('Ymd')) === ($today->format('Ymd')))
    {
        $result = 'Aujourd\'hui';
    }
    else
    {
        $interval = $today->diff($date);

        if (($interval->format('%y') === '0') && ($interval->format('%m') === '0'))
        {
            $result = 'Dans ' . $interval->format('%d') . ' jours.'; 
        }
        else if ($interval->format('%y') === '0')
        {
            $result = 'Autre ! Au boulot !';
            $result = 'Dans ' . $interval->format('%y') . ' années et ' . $interval->format('%m') . ' mois et ' . $interval->format('%d') . ' jours.'; 
        }
        else if ($interval->format('%d') === '0')
        {
            $result = 'Dans ' . $interval->format('%y') . ' années et ' . $interval->format('%m') . ' mois.'; 
        }
        else
        {
            $result = 
        }
    }


    
    //$interval_compare = intval($interval);
    //echo '$interval : ' . $interval . PHP_EOL;
    // print_r($interval);
    // echo '**********************' . PHP_EOL;
    // echo $interval->format('%y');
    // echo PHP_EOL . '**********************' . PHP_EOL;


    // switch($interval)
    // {
    //     case ($interval < 0) :
    //         $result = 'Evènement passé.';
    //         break;
    //     case ($interval === 0) :
    //         $result = 'Aujourd\'hui.';
    //         break;
    //     default :
    //         $result = 'Dans ' ;
    // }
    //echo $result . PHP_EOL;

    // if ($interval->format('%y') > 0)
    // {
    //     $result = 'Aujourd\'hui.';
    // }
    

    return $result;

}

echo getTimeLeft($date).  PHP_EOL;