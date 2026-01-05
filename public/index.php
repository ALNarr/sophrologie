<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Calcul de BASE_URL
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
define('BASE_URL', $baseUrl);

// Autoload très simple
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

// Routing via URL propre
if (!empty($_GET['url'])) {

    $routes = [
        ''         => ['HomeController', 'index'],
        'accueil'  => ['HomeController', 'index'],
        'seances'  => ['SeancesController', 'index'],
        'a-propos' => ['AproposController', 'index'],
        'contact'  => ['ContactController', 'index'],
        'sophrologie' => ['SophrologieController', 'index'],
    ];

    $url = trim($_GET['url'], '/');

    if (isset($routes[$url])) {
        [$controllerName, $actionName] = $routes[$url];
    } else {
        http_response_code(404);
        echo "Page introuvable.";
        exit;
    }

} else {
    // URL racine /
    $controllerName = 'HomeController';
    $actionName     = 'index';
}

if (!class_exists($controllerName)) {
    http_response_code(404);
    echo "Controller introuvable.";
    exit;
}

$controller = new $controllerName();

if (!method_exists($controller, $actionName)) {
    http_response_code(404);
    echo "Action introuvable.";
    exit;
}

$controller->$actionName();