<?php
// app/views/home/index.php
$pageTitle = $pageTitle ?? "Sophrologie – Maeva";
require dirname(__DIR__) . '/layout/header.php';
?>

<section class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <h1><?= htmlspecialchars($data['heroTitle'] ?? 'Sophrologie & bien-être', ENT_QUOTES, 'UTF-8') ?></h1>
            <p class="hero-subtitle">
                <?= htmlspecialchars($data['heroSubtitle'] ?? 'Un accompagnement personnalisé vers plus de sérénité.', ENT_QUOTES, 'UTF-8') ?>
            </p>
            <p class="hero-desc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent volutpat, neque et iaculis interdum,
                mi sem molestie nunc, vel feugiat mi massa vitae nunc. Vestibulum ante ipsum primis in faucibus orci
                luctus et ultrices posuere cubilia curae.
            </p>
            <div class="hero-actions">
                <a href="#" class="btn btn-primary">Prendre rendez-vous</a>
                <a href="#" class="btn btn-ghost">Découvrir la sophrologie</a>
            </div>
        </div>
        <div class="hero-card">
            <h2>Un espace pour souffler</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non nisl in ex viverra blandit.
                Suspendisse potenti. Donec id risus vel nisi faucibus vehicula.
            </p>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container">
        <h2 class="section-title">Pourquoi consulter en sophrologie ?</h2>
        <p class="section-intro">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et suscipit sapien. Pellentesque nec magna
            porttitor, tincidunt lectus at, pulvinar magna.
        </p>

        <div class="cards-grid">
            <article class="card">
                <h3>Gestion du stress</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet mauris nec interdum cursus.</p>
            </article>
            <article class="card">
                <h3>Sommeil & récupération</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet mauris nec interdum cursus.</p>
            </article>
            <article class="card">
                <h3>Émotions & confiance</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin laoreet mauris nec interdum cursus.</p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div>
            <h2 class="section-title">La sophrologie en quelques mots</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fringilla, urna et tempus consectetur,
                mauris lacus vulputate ligula, et ultricies justo ipsum nec orci. Donec euismod, nibh eget sollicitudin
                malesuada, nibh lorem aliquam enim, at convallis ligula augue quis neque.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis lorem sit amet risus hendrerit,
                eu varius turpis scelerisque.
            </p>
        </div>
        <div class="about-highlight">
            <h3>Une approche douce & personnalisée</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia, urna vitae scelerisque
                convallis, enim lacus feugiat arcu, quis fermentum tellus justo ut justo.
            </p>
        </div>
    </div>
</section>

<?php
require dirname(__DIR__) . '/layout/footer.php';
