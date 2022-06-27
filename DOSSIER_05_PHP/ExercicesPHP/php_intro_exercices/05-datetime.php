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
/* function getToday() : string
{
    $date = date("d/m/Y");
    echo 'Affichage 1 ' . $date . PHP_EOL;
    return $date;
}

// Recovery of the result.
$result = getToday();

// Display the result.
echo 'Affichage 2 ' . $result . PHP_EOL; */


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

    $dateControl = new DateTime($date);
    try {
        $dateControl = new DateTime($date);
        echo 'Vous pouvez continuer ' . PHP_EOL;
        $control = true;

    } catch(Exception $ex) {
        $control = false;
        echo 'Veuillez saisir une date au bon format' . PHP_EOL;
    }

  /*  $dateControl = explode('-', $date);

    $day = $dateControl[2];
    $month = $dateControl[1];
    $year = $dateControl[0];
    $control = checkdate($month, $day, $year);

    if (!$control)
    {
        $result = 'Veuillez saisir une date au bon format' . PHP_EOL;
    }
    else 
    {
        $result = 'Vous pouvez continuer' . PHP_EOL;
    }

    echo $result . PHP_EOL;*/
}while(!$control);

// $date = new DateTime($date);

/**
 * Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
 * Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
 * Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé »
 *
 * @param  string $date au format Y-m-d
 * @return string
 * @author David CRAVO <contact@davidcravo.fr>
 */
function getTimeLeft(string $date) : string
{
    $date = new DateTime($date);
    $today = new DateTime();
    $today->setTime(0, 0, 0);

    if($date < $today)
    {
        $result = 'Evènement passé';
    }
    else if ($date === $today)
    {
        $result = 'Aujourd\'hui';
    }
    else
    {
        $interval = $today->diff($date);
        $y = $interval->format('%y');
        $m = $interval->format('%m');
        $d = $interval->format('%d');

        $result = 'Dans ';
        if($d > 1) {
            $result .= $d.' jours ';
        }else if ($d > 0){
            $result .= $d.' jour ';
        }
        if($m > 0) {
            $result .= $m . ' mois ';
        }
        if($y > 1) {
            $result .= $y . ' années ';
        }else if ($y > 0) {
            $result .= $y . ' année ';
        }

        $result .= '.';

        /* if (($y === '0') && ($m === '0') && ($d !== '0'))
        {
            $result = 'Dans ' . $d . ' jours.'; 
        }
        else if (($y !== '0') && ($m === '0') && ($d === '0'))
        {
            $result = 'Dans ' . $y . ' années.'; 
        }
        else if (($y === '0') && ($m !== '0') && ($d !== '0'))
        {
            $result = 'Dans ' . $m . ' mois et ' . $d . ' jours.'; 
        }
        else if (($y !== '0') && ($m !== '0') && ($d === '0'))
        {
            $result = 'Dans ' . $y . ' années et ' . $m . ' mois.'; 
        }
        else if (($y !== '0') && ($m === '0') && ($d !== '0'))
        {
            $result = 'Dans ' . $y . ' années et ' . $d . ' jours.'; 
        }
        else 
        {
            $result = 'Dans ' . $y . ' années, ' . $m . ' mois et ' . $d . ' jours.'; 
        }*/
    }
    return $result;
}

echo getTimeLeft($date).  PHP_EOL;




// **********************************************************************************
echo PHP_EOL . 'Exercice 5.B Contrôle de saisie de la date *** VERSION 2.' . PHP_EOL;


$date = (readline('Veuillez saisir votre date au format aaaa-mm-jj : '));

/**
 * Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
 * Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
 * Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé »
 *
 * @param  string $date
 * @return string
 * @author David CRAVO <contact@davidcravo.fr>
 */
function getTimeLeft2($date) : string
{
    $dateControl = explode('-', $date);
    $day = $dateControl[2];
    $month = $dateControl[1];
    $year = $dateControl[0];
    $control = checkdate($month, $day, $year);

    if (!$control)
    {
        $result = 'Veuillez saisir une date au bon format' . PHP_EOL;
    }
    else 
    {
        $date = new DateTime($date);
        $today = new DateTime();
        $today -> setTime(0, 0, 0);
    
        if($date < $today) 
        {
            $result = 'Evènement passé';
        }
        else if ($date === $today)
        {
            $result = 'Aujourd\'hui';
        }
        else
        {
            $interval = $today->diff($date);
            $y = $interval->format('%y');
            $m = $interval->format('%m');
            $d = $interval->format('%d');

    
            if (($y === '0') && ($m === '0') && ($d !== '0'))
            {
                $result = 'Dans ' . $interval->format('%d') . ' jours.'; 
            }
            else if (($y !== '0') && ($m === '0') && ($d === '0'))
            {
                $result = 'Dans ' . $interval->format('%y') . ' années.'; 
            }
            else if (($y === '0') && ($m !== '0') && ($d !== '0'))
            {
                $result = 'Dans ' . $interval->format('%m') . ' mois et ' . $interval->format('%d') . ' jours.'; 
            }
            else if (($y !== '0') && ($m !== '0') && ($d === '0'))
            {
                $result = 'Dans ' . $interval->format('%y') . ' années et ' . $interval->format('%m') . ' mois.'; 
            }
            else if (($y !== '0') && ($m === '0') && ($d !== '0'))
            {
                $result = 'Dans ' . $interval->format('%y') . ' années et ' . $interval->format('%d') . ' jours.'; 
            }
            else 
            {
                $result = 'Dans ' . $interval->format('%y') . ' années, ' . $interval->format('%m') . ' mois et ' . $interval->format('%d') . ' jours.'; 
            }
        }
    }
    return $result;
}

echo getTimeLeft2($date).  PHP_EOL;



// **********************************************************************************
echo PHP_EOL . 'Exercice 5.B Contrôle de saisie de la date *** VERSION 3.' . PHP_EOL;

/**
 * Si la date est ultérieure à la date du jour, la fonction retourne la différence en années/mois/jours.
 * Si la date est égale à la date du jour, la fonction retourne « Aujourd'hui ».
 * Si la date est antérieur à la date du jour, la fonction retourne « Évènement passé »
 *
 * @param  string $date
 * @return string
 * @author David CRAVO <contact@davidcravo.fr>
 */
function getTimeLeft3($date) : string
{
    do
    {
        do
        {
            // Recovery of user data
            $date = (readline('Veuillez saisir votre date au format aaaa-mm-jj : '));
            if (strlen($date) < 10)
            {
                echo 'Veuillez saisir au moins 10 caractères' . PHP_EOL;
            }
        }while (strlen($date) < 10);
        
        try 
        {
            $dateControl = new DateTime($date);
            //echo '$dateControl 303 : ' . $dateControl->format('Y-m-d') . PHP_EOL;
            $control = true;
        } 
        catch(Exception $ex) 
        {
            $control = false;
            echo 'Veuillez saisir une date au bon format' . PHP_EOL;
        }

    }while(!$control);

        //echo '$date avant DateTime 314 : ' . $date . PHP_EOL;

        $date = new DateTime($date);
        $today = new DateTime();
        $today->setTime(0, 0, 0);

        //echo '$date après DateTime 320 : ' . $date->format('Y-m-d') . PHP_EOL;
        print_r($date);
        print_r($today);

        if($date < $today)
        {
            $result = 'Evènement passé';
        }
        else if ($date === $today)
        {
            $result = 'Aujourd\'hui';
        }
        else
        {
            $interval = $today->diff($date);
            $y = $interval->format('%y');
            $m = $interval->format('%m');
            $d = $interval->format('%d');

            $result = 'Dans ';
            if($y > 1) {
                $result .= $d.' jours ';
            }else if ($d > 0){
                $result .= $d.' jour ';
            }
            if($m > 0) {
                $result .= $m . ' mois ';
            }
            if($y > 1) {
                $result .= $y . ' années ';
            }else if ($y > 0) {
                $result .= $y . ' année ';
            }

            $result .= '.';
        }
    return $result;
}

echo getTimeLeft3($date);