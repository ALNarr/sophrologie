<?php
// public/index.php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// URL de base (jusqu'au dossier public)
$baseUrl = rtrim(str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']), '/');

// On rend dispo partout
define('BASE_URL', $baseUrl);

// Autoload...
spl_autoload_register(function ($class) {
    $baseDir = dirname(__DIR__) . '/app/';
    $class = str_replace('\\', '/', $class);
    $paths = [
        $baseDir . 'controllers/' . $class . '.php',
        $baseDir . 'models/' . $class . '.php',
    ];

    foreach ($paths as $file) {
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});


// =========================================================================
// LE ROUTEUR (C'est ici que l'URL est analysée)
// =========================================================================

if (!empty($_GET['url'])) {
    
    // Notre dictionnaire de routes (URL tapée -> [Nom du Controller, Action])
    $routes = [
        ''            => ['HomeController', 'index'],
        'accueil'     => ['HomeController', 'index'],
        'seances'     => ['SeancesController', 'index'],
        'a-propos'    => ['AproposController', 'index'],
        'contact'     => ['ContactController', 'index'],
        'sophrologie' => ['SophrologieController', 'index'],
    ];

    $url = trim($_GET['url'], '/');

    // On regarde si l'URL demandée existe dans notre dictionnaire
    if (isset($routes[$url])) {
        $controllerName = $routes[$url][0];
        $actionName     = $routes[$url][1];
    } else {
        http_response_code(404);
        echo "Erreur 404 : La page '$url' est introuvable.";
        exit;
    }

} else {
    // URL racine (aucun paramètre) -> On charge l'accueil
    $controllerName = 'HomeController';
    $actionName     = 'index';
}

// =========================================================================

if (!class_exists($controllerName)) {
    http_response_code(404);
    echo "Erreur 404 : Le Controller '$controllerName' est introuvable.";
    exit;
}

$controller = new $controllerName();

if (!method_exists($controller, $actionName)) {
    http_response_code(404);
    echo "Erreur 404 : L'action '$actionName' est introuvable.";
    exit;
}

$controller->$actionName();