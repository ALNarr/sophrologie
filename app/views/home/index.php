<?php
// app/views/home/index.php
require dirname(__DIR__) . '/layout/header.php';
?>

        <!-- HERO SECTION -->
        <section class="hero">
            <div class="container hero-inner">
                <div class="hero-text">
                    <h1>Un souffle pour vous apaiser, <span class="text-primary">un espace pour vous retrouver</span></h1>
                    <p>Retrouvez calme, confiance et sérénité grâce à des séances de sophrologie adaptées à vos besoins.</p>
                    <div class="hero-actions">
                        <a href="<?= BASE_URL ?>/contact" class="btn btn-primary">Prendre rendez-vous</a>
                        <a href="#approche" class="btn btn-outline">Découvrir</a>
                    </div>
                </div>
                <div class="hero-image">
                    <!-- Assure-toi que cette image est bien dans ton dossier img/ -->
                    <img src="<?= BASE_URL ?>/assets/img/iStock-1297929618.jpg" alt="Galets zen sur l'eau">
                </div>
            </div>
        </section>

        <!-- RETROUVER ÉQUILIBRE -->
        <section class="section">
            <div class="container">
                <div class="section-center">
                    <h2 class="section-title">Retrouver équilibre et sérénité</h2>
                    <p class="section-subtitle">Chaque personne est unique. Mon accompagnement est bienveillant, intuitif et adapté à vos besoins.</p>
                </div>

                <div class="grid-3">
                    <article class="card">
                        <div class="icon-circle-filled">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"/><path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"/><path d="M17.599 6.5a3 3 0 0 0 .399-1.375"/></svg>
                        </div>
                        <h3>Gestion du stress & des émotions</h3>
                        <p>Apprenez à reconnaître, accueillir et apaiser le stress, les tensions et les émotions envahissantes pour retrouver plus de calme et de clarté intérieure.</p>
                    </article>

                    <article class="card">
                        <div class="icon-circle-filled">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                        </div>
                        <h3>Sommeil & récupération</h3>
                        <p>Restaurez un sommeil plus serein, favorisez l'endormissement et instaurez des rituels qui soutiennent votre équilibre au quotidien.</p>
                    </article>

                    <article class="card">
                        <div class="icon-circle-filled">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                        </div>
                        <h3>Confiance en soi & transitions</h3>
                        <p>Se préparer à un examen, un changement important, ou traverser une période de transition en s'appuyant sur ses ressources et sa résilience.</p>
                    </article>
                </div>
            </div>
        </section>

        <!-- MON APPROCHE -->
        <section class="section" id="approche">
            <div class="container approach-block">
                <div class="approach-header">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/></svg>
                    <h2>Mon approche</h2>
                </div>
                <p>Chaque personne est unique. Mon accompagnement est <strong>bienveillant, intuitif et adapté</strong> à vos besoins. Que ce soit pour apaiser le stress, améliorer le sommeil, préparer un examen ou un entretien, ou pour développer votre confiance et mieux vous connaître, je vous propose des outils simples à utiliser au quotidien.</p>
                <p>Les séances sont des moments privilégiés pour vous reconnecter à vos ressources, à votre corps et à vos émotions, dans un cadre sécurisant et respectueux.</p>
            </div>
        </section>

        <!-- MES SERVICES -->
        <section class="section">
            <div class="container">
                <div class="section-center">
                    <h2 class="section-title">Mes services</h2>
                    <p class="section-subtitle">Des formats variés pour répondre à vos besoins, que vous soyez seul(e), en groupe ou en entreprise.</p>
                </div>

                <div class="grid-3">
                    <article class="card-service">
                        <div class="icon-square-outline">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        </div>
                        <h3>Séances individuelles</h3>
                        <p>Un accompagnement personnalisé en cabinet ou à distance, pour avancer à votre rythme dans un cadre bienveillant et confidentiel.</p>
                        <ul class="service-list">
                            <li>Séance d'1h environ</li>
                            <li>En présentiel ou visio</li>
                            <li>Suivi personnalisé</li>
                        </ul>
                        <a href="<?= BASE_URL ?>/seances" class="btn btn-outline btn-full">En savoir plus</a>
                    </article>

                    <article class="card-service">
                        <div class="icon-square-outline">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        </div>
                        <h3>Séances de groupe</h3>
                        <p>Des ateliers collectifs pour partager un temps de ressourcement, découvrir la sophrologie et bénéficier de la dynamique de groupe.</p>
                        <ul class="service-list">
                            <li>Petits groupes (6-8 pers.)</li>
                            <li>Thématiques variées</li>
                            <li>Ambiance bienveillante</li>
                        </ul>
                        <a href="<?= BASE_URL ?>/seances" class="btn btn-outline btn-full">En savoir plus</a>
                    </article>

                    <article class="card-service">
                        <div class="icon-square-outline">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                        </div>
                        <h3>Interventions en entreprise</h3>
                        <p>Des ateliers sur mesure pour vos équipes : gestion du stress, cohésion, prévention des risques psychosociaux et qualité de vie au travail.</p>
                        <ul class="service-list">
                            <li>Sur site ou en ligne</li>
                            <li>Programmes adaptés</li>
                            <li>Accompagnement RH</li>
                        </ul>
                        <a href="<?= BASE_URL ?>/contact" class="btn btn-outline btn-full">En savoir plus</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- CTA FINAL -->
        <section class="section">
            <div class="container">
                <div class="cta-container">
                    <div class="cta-title-wrap">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/></svg>
                        <h2>Commencer votre parcours</h2>
                    </div>
                    <p>Faire le premier pas vers le mieux-être peut sembler difficile, mais il est souvent le plus libérateur. Je vous invite à prendre rendez-vous ou à me contacter pour échanger sur vos besoins et découvrir comment la sophrologie peut vous accompagner.</p>
                    <div class="cta-actions">
                        <a href="<?= BASE_URL ?>/contact" class="btn btn-primary">Prendre rendez-vous</a>
                        <a href="<?= BASE_URL ?>/contact" class="btn btn-outline">Me contacter</a>
                    </div>
                </div>
            </div>
        </section>

<?php
require dirname(__DIR__) . '/layout/footer.php';
?>