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


// Route très simple : ?controller=home&action=index
$controllerName = isset($_GET['controller']) ? ucfirst(strtolower($_GET['controller'])) . 'Controller' : 'HomeController';
$actionName     = isset($_GET['action']) ? $_GET['action'] : 'index';

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