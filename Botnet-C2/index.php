<?php
if (!isset($_SESSION['login'])) {
    session_start();
}

$url = '';
if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}   

if (isset($url[0])) {
    $page = $url[0];
} else if (isset($_SESSION['login'])) {
    $page = 'accueil';
} else {
    $page = 'connexion';
}

switch ($page) {
    case "accueil":
        $titrePage = "Votre page d'accueil";
        $title = "BotnetC2 - Accueil";
        break;
    case "connexion":
        $titrePage = "Connexion";
        $title = "BotnetC2 - Connexion";
        break;
    case "donnees":
        $titrePage = "Votre module de données";
        $title = "BotnetC2 - Données";
        break;
     case "attaques":
        $titrePage = "Votre module d'Attaques";
        $title = "BotnetC2 - Attaques";
        break;
    default:
        break;
}

if (in_array($page, array('connexion'))) {
    ob_start();
    require "modules/$page/mod_$page.php";
    $pageContent = ob_get_clean();
    require 'layout_connexion.php';
}
else if (in_array($page, array('accueil', 'attaques', 'donnees', 'connexion'))) {
    ob_start();
    require "modules/$page/mod_$page.php";
    $pageContent = ob_get_clean();
    require 'layout.php';
}
else {
    http_response_code(404);
    die;
}