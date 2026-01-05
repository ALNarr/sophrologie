<?php
// app/views/layout/header.php

// BASE_URL fiable (fonctionne avec rewrite)
if (!defined('BASE_URL')) {
    $baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
    define('BASE_URL', $baseUrl);
}

// Titre par défaut si aucun contrôleur n'en donne
if (!isset($pageTitle) || $pageTitle === '') {
    $pageTitle = "Christel Cantois – Sophrologie";
}

$currentPage = $currentPage ?? '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <div class="logo">
            <a href="<?= BASE_URL ?>/accueil" class="logo-link">
                <img src="<?= BASE_URL ?>/assets/img/logo-maeva.png" alt="Christel Cantois – Sophrologue" class="logo-img">
                <span class="logo-text">CHRISTEL CANTOIS – SOPHROLOGUE</span>
            </a>
        </div>

        <nav class="main-nav">
            <a href="<?= BASE_URL ?>/accueil"
               class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Accueil</a>

               <a href="<?= BASE_URL ?>/sophrologie"
   class="nav-link <?= $currentPage === 'sophrologie' ? 'active' : '' ?>">Sophrologie</a>


            <a href="<?= BASE_URL ?>/seances"
               class="nav-link <?= $currentPage === 'seances' ? 'active' : '' ?>">Séances</a>

            <a href="<?= BASE_URL ?>/a-propos"
               class="nav-link <?= $currentPage === 'apropos' ? 'active' : '' ?>">À propos</a>

            <a href="<?= BASE_URL ?>/contact"
               class="nav-link <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
        </nav>
    </div>
</header>
<main class="site-main">