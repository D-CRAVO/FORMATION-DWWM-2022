<?php
// page : définir la page à afficher.

/*
$_GET[] = valeurs transmises par l'url
*/
echo '<pre>' . var_export($_GET, true).'</pre>';

// si le paramètre 'page' dans l'url n'est pas vide
$page = $_GET['page'] ?? 'home';

switch($page)
{
    case 'home':
            // charger le fichier 'home.php'
            require '../View/home.php';
        break;
    case 'profile':
            // charger le fichier 'profile.php
            require '../View/profile.php';
        break;
    case 'groups':
            require '../View/groups.php';
        break;
    default:
            require '../View/erreur404.php';
        break;
}