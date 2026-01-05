<?php
// app/views/home/index.php
require dirname(__DIR__) . '/layout/header.php';
?>

<section class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <h1><?= htmlspecialchars($data['heroTitle'] ?? 'Sophrologie & bien-être', ENT_QUOTES, 'UTF-8') ?></h1>
            <p class="hero-subtitle">
                <?= htmlspecialchars($data['heroSubtitle'] ?? 'Un accompagnement bienveillant vers plus de sérénité.', ENT_QUOTES, 'UTF-8') ?>
            </p>
            <p class="hero-desc">
                La vie peut parfois être stressante, fatigante ou confuse. Entre obligations professionnelles,
                personnelles et émotions intenses, il est facile de perdre le contact avec soi-même. La sophrologie
                est une méthode douce et accessible qui vous aide à retrouver calme, confiance et bien-être, au
                quotidien et dans les moments importants de votre vie.
            </p>
            <div class="hero-actions">
                <a href="<?= BASE_URL ?>/index.php?controller=contact&action=index#form" class="btn btn-primary">
                    Prendre rendez-vous
                </a>
                <a href="<?= BASE_URL ?>/sophrologie" class="btn btn-ghost">Découvrir la sophrologie</a>

            </div>
        </div>
        <div class="hero-card">
            <h2>Un accompagnement en douceur</h2>
            <p>
                À travers des séances individuelles, de groupe ou en ligne, je vous accompagne pour traverser les
                périodes de stress, de transition, de questionnement ou de fatigue, et vous aider à renouer avec vos
                ressources intérieures.
            </p>
        </div>
    </div>
</section>

<section class="section section-soft" id="approche">
    <div class="container">
        <h2 class="section-title">Retrouver équilibre, sérénité et confiance</h2>
        <p class="section-intro">
            Chaque personne est unique. Mon accompagnement est bienveillant, intuitif et adapté à vos besoins.
            Que ce soit pour apaiser le stress, améliorer le sommeil, préparer un examen ou un entretien, ou
            développer votre confiance en vous, je vous propose des outils simples à utiliser au quotidien.
        </p>

        <div class="cards-grid">
            <article class="card">
                <h3>Gestion du stress & des émotions</h3>
                <p>
                    Apprendre à reconnaître, accueillir et apaiser le stress, les tensions et les émotions
                    envahissantes, pour retrouver plus de calme et de clarté intérieure.
                </p>
            </article>
            <article class="card">
                <h3>Sommeil & récupération</h3>
                <p>
                    Restaurer un sommeil plus serein, favoriser l’endormissement et la récupération, et installer des
                    rituels qui soutiennent votre équilibre au quotidien.
                </p>
            </article>
            <article class="card">
                <h3>Confiance en soi & transitions de vie</h3>
                <p>
                    Se préparer à un examen, un entretien, un changement important, ou traverser une période de
                    transition en s’appuyant sur ses ressources et ses capacités.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h1>Bienvenue</h1>

        <p>
            La vie peut parfois être stressante, fatigante ou confuse. Entre obligations professionnelles,
            personnelles et émotions intenses, il est facile de perdre le contact avec soi-même.
            La sophrologie est une méthode douce et accessible qui vous aide à retrouver calme, confiance
            et bien-être, au quotidien et dans les moments importants de votre vie.
        </p>

        <h2>🌱 Mon approche</h2>

        <p>
            Chaque personne est unique. Mon accompagnement est bienveillant, intuitif et adapté à vos besoins.
            Que ce soit pour apaiser le stress, améliorer le sommeil, préparer un examen ou un entretien,
            ou pour développer votre confiance et mieux vous connaître, je vous propose des outils simples
            à utiliser au quotidien.
        </p>

        <p>
            Les séances sont des moments privilégiés pour vous reconnecter à vos ressources, à votre corps
            et à vos émotions, dans un cadre sécurisant et respectueux.
        </p>

        <h2>✨ Mes services principaux</h2>

        <ul>
            <li>Séances individuelles – sur rendez-vous au cabinet ou en ligne</li>
            <li>Séances de groupe et ateliers – pour expérimenter la sophrologie dans un cadre convivial</li>
            <li>Interventions en entreprise – gestion du stress, bien-être au travail et prévention du burn-out</li>
        </ul>

        <p>
            Chaque accompagnement est personnalisé, progressif et centré sur vos besoins.
        </p>

        <h2>🤝 Commencer votre parcours</h2>

        <p>
            Faire le premier pas vers le mieux-être peut sembler difficile, mais il est souvent le plus libérateur.
            Je vous invite à prendre rendez-vous ou à me contacter pour échanger sur vos besoins et découvrir
            comment la sophrologie peut vous accompagner.
        </p>

        <div class="hero-actions">
            <a href="<?= BASE_URL ?>/contact#form" class="btn btn-primary">Prendre rendez-vous</a>
            <a href="<?= BASE_URL ?>/contact#form" class="btn btn-ghost">Me contacter</a>
        </div>
    </div>
</section>


<section class="section section-soft">
    <div class="container">
        <h2 class="section-title">Mes services</h2>
        <p class="section-intro">
            Les accompagnements sont progressifs, personnalisés et centrés sur vos besoins. Ils s’adressent aux
            adultes, aux adolescents, aux enfants ainsi qu’aux entreprises et institutions.
        </p>

        <div class="cards-grid">
            <article class="card">
                <h3>Séances individuelles</h3>
                <p>
                    Un temps pour vous, en tête-à-tête, pour explorer ce que vous vivez, mettre des mots sur vos
                    ressentis et expérimenter des outils de sophrologie que vous pourrez réutiliser au quotidien.
                </p>
                <p><strong>Au cabinet à Morges ou en ligne.</strong></p>
            </article>

            <article class="card">
                <h3>Séances de groupe & ateliers</h3>
                <p>
                    Découvrir la sophrologie dans un cadre convivial et sécurisant, en petit groupe, autour de thèmes
                    comme le stress, le sommeil, les émotions ou la confiance en soi.
                </p>
            </article>

            <article class="card">
                <h3>Interventions en entreprise</h3>
                <p>
                    Ateliers et programmes sur mesure pour favoriser le bien-être au travail, la gestion du stress,
                    la prévention du burn-out et le développement des ressources individuelles et collectives.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div>
            <h2 class="section-title">Qui suis-je&nbsp;?</h2>
            <p>
                Après plusieurs années comme enseignante, mon propre parcours m’a rappelé l’importance d’écouter mes
                besoins et de prendre soin de moi. Une période difficile est devenue une opportunité de me
                rencontrer vraiment, de me reconstruire et de découvrir que la guérison était possible.
            </p>
            <p>
                En cherchant une approche qui me permette d’être actrice de ma transformation, je me suis
                naturellement tournée vers la sophrologie. J’ai choisi de me former à l’Institut de Sophrologie
                du Sud-Ouest (ISSO), à Toulouse, où j’ai obtenu mon diplôme privé de sophrologue, et j’ai ensuite
                approfondi ma pratique par plusieurs spécialisations (enfants et adolescents, monde du travail,
                personnes âgées, gestion du stress, troubles du sommeil, douleurs, addictions…).
            </p>
        </div>
        <div class="about-highlight">
            <h3>Envie d’en savoir plus&nbsp;?</h3>
            <p>
                Je serai heureuse d’échanger avec vous pour voir comment la sophrologie peut vous accompagner dans ce
                que vous vivez aujourd’hui.
            </p>
            <div class="hero-actions">
                <a href="<?= BASE_URL ?>/index.php?controller=contact&action=index#form" class="btn btn-primary">
                    Prendre rendez-vous
                </a>
                <a href="#" class="btn btn-ghost">Me contacter</a>
            </div>
        </div>
    </div>
</section>

<?php
require dirname(__DIR__) . '/layout/footer.php';
