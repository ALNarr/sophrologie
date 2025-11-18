<?php
// app/views/layout/header.php
if (!isset($pageTitle)) {
    $pageTitle = "Maeva Beauté";
}
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
    <a href="<?= BASE_URL ?>/index.php?controller=home&action=index">
        <img src="<?= BASE_URL ?>/assets/img/logo-maeva.png" alt="Maeva Sophrologie">
    </a>
    <span class="logo-text">Christel Sophrologie</span>
</div>
    <nav class="main-nav">
        <a href="?controller=home&action=index" class="nav-link active">Accueil</a>
        <a href="#" class="nav-link">Séances</a>
        <a href="#" class="nav-link">À propos</a>
        <a href="#" class="nav-link">Contact</a>
    </nav>
    </div>
</header>
<main class="site-main">