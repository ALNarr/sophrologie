<?php
// app/views/layout/header.php

if (!defined('BASE_URL')) {
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $baseUrl = rtrim(str_replace('/index.php', '', $scriptName), '/');
    define('BASE_URL', $baseUrl);
}

// Si jamais aucun titre n’a été donné par un contrôleur
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
            <a href="<?= BASE_URL ?>/index.php?controller=home&action=index" class="logo-link">
                <img src="<?= BASE_URL ?>/assets/img/logo-maeva.png" alt="Christel Cantois – Sophrologue" class="logo-img">
                <span class="logo-text">CHRISTEL CANTOIS – SOPHROLOGUE</span>
            </a>
        </div>
        <nav class="main-nav">
            <a href="<?= BASE_URL ?>/index.php?controller=home&action=index"
               class="nav-link <?= $currentPage === 'home' ? 'active' : '' ?>">Accueil</a>

            <a href="<?= BASE_URL ?>/index.php?controller=seances&action=index"
                class="nav-link <?= $currentPage === 'seances' ? 'active' : '' ?>">Séances</a>

            <a href="<?= BASE_URL ?>/index.php?controller=apropos&action=index"
               class="nav-link <?= $currentPage === 'apropos' ? 'active' : '' ?>">À propos</a>

            <a href="<?= BASE_URL ?>/index.php?controller=contact&action=index"
                class="nav-link <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact</a>
        </nav>
    </div>
</header>
<main class="site-main">