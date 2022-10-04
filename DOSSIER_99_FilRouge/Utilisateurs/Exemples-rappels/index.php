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
         require '../Controller/ProfileController.php';
         $controller = new Users\Controller\ProfileController();
         $controller->index();            
        break;
    case 'groups':
        require '../Controller/GroupController.php';
        $controller = new GroupController();
        $controller->index();
        break;
    default:
            require '../View/erreur404.php';
        break;
}