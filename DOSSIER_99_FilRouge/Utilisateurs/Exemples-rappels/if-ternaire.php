<?php
// page : définir la page à afficher.

/*
$_GET[] = valeurs transmises par l'url
*/
echo '<pre>' . var_export($tableau, true);


// si le paramètre 'page' dans l'url n'est pas vide
if (!empty($_GET['page']))
{
    $page = $_GET['page'];
}
else
{
    $page = 'home';
}

$page = !empty($_GET['page']) ? $_GET['page'] : 'home';

$page = $_GET['page'] ?? 'home';