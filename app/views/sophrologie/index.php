<?php
// app/views/sophrologie/index.php
require dirname(__DIR__) . '/layout/header.php';
?>

<!-- ==========================================
     INTRO AÉRÉE (Remplacement du gros pavé)
     ========================================== -->
<section class="section" style="padding-bottom: 2rem;">
    <div class="container" style="max-width: 900px;"> <!-- Plus étroit pour un texte plus lisible -->
        <h1 class="section-title" style="text-align: left; margin-bottom: 1.5rem;">La sophrologie en quelques mots</h1>

        <!-- Phrase d'accroche (Mise en avant) -->
        <p style="font-size: 1.25rem; color: var(--color-primary-dark); font-weight: 500; line-height: 1.6; margin-bottom: 2rem;">
            La sophrologie ne se limite pas à une simple méthode de relaxation. C'est une véritable invitation à mieux se connaître et à écouter ce qui se joue en soi.
        </p>

        <!-- Texte découpé en deux petits paragraphes simples -->
        <div style="font-size: 1.05rem; color: var(--color-text-body); line-height: 1.8;">
            <p style="margin-bottom: 1.5rem;">
                Elle permet de comprendre l'origine de ses difficultés et de mobiliser ses propres ressources pour avancer à son rythme.
            </p>
            <p style="margin-bottom: 1.5rem;">
                <strong>Votre rôle est central :</strong> en sophrologie, vous êtes pleinement acteur (ou actrice) de votre cheminement. L'objectif est de vous accompagner vers une recherche d'équilibre, de sens et d'épanouissement durable.
            </p>
        </div>
    </div>
</section>

<!-- ==========================================
     POURQUOI CONSULTER (Découpé en colonnes)
     ========================================== -->
<section class="section section-soft">
    <div class="container" style="max-width: 1000px;">
        <h2 class="section-title" style="text-align: left; margin-bottom: 2.5rem;">Pourquoi entreprendre un accompagnement ?</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2.5rem; margin-bottom: 3rem;">
            
            <!-- Cas 1 : Besoin de sens -->
            <div style="background: white; padding: 2.5rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--border-color);">
                <h3 style="color: var(--color-primary); margin-bottom: 1rem; font-size: 1.2rem;">Un besoin de profondeur</h3>
                <p style="margin: 0; font-size: 1rem;">Même lorsque tout semble aller « plutôt bien », une envie de se recentrer peut se faire sentir. Le besoin de ne plus dépendre des circonstances extérieures pour se sentir en équilibre et de renouer avec soi-même.</p>
            </div>

            <!-- Cas 2 : Fatigue/Stress -->
            <div style="background: white; padding: 2.5rem; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--border-color);">
                <h3 style="color: var(--color-primary); margin-bottom: 1rem; font-size: 1.2rem;">Une fatigue intérieure</h3>
                <p style="margin: 0; font-size: 1rem;">Parfois, la vie semble pesante. Le mental prend toute la place et la vitalité s'amenuise. L'accompagnement offre alors un espace sécurisant pour ralentir, arrêter de fuir dans l'action, et accueillir ce qui se vit en vous.</p>
            </div>
            
        </div>

        <!-- Conclusion de la section (Mise en exergue) -->
        <div style="background: white; padding: 2rem; border-left: 4px solid var(--color-primary); border-radius: 0 var(--radius-md) var(--radius-md) 0; box-shadow: var(--shadow-sm);">
            <p style="margin: 0; font-size: 1.05rem;">
                La sophrologie ne cherche pas à vous corriger, mais à vous <strong>révéler</strong>. Elle vous aide à renouer avec vos capacités naturelles d'adaptation et de régulation. Vous possédez déjà en vous les ressources nécessaires pour retrouver clarté et confiance.
            </p>
        </div>
    </div>
</section>

<!-- ==========================================
     BÉNÉFICES (Grille Figma 2x2 avec icônes)
     ========================================== -->
<section class="section">
    <div class="container">
        <h2 class="section-title" style="margin-bottom: 3rem; text-align: left;">Ce que la sophrologie peut vous apporter</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
            
            <!-- Bénéfice 1 -->
            <article class="card-service" style="flex-direction: row; gap: 1.5rem; align-items: flex-start; padding: 2.5rem;">
                <div class="icon-circle-filled" style="margin: 0; width: 50px; height: 50px; flex-shrink: 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"/><path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"/><path d="M15 13a4.5 4.5 0 0 1-3-4 4.5 4.5 0 0 1-3 4"/><path d="M17.599 6.5a3 3 0 0 0 .399-1.375"/></svg>
                </div>
                <div>
                    <h3 style="margin-top: 0; margin-bottom: 0.6rem; font-size: 1.25rem;">Gestion du stress et des émotions</h3>
                    <p style="margin: 0; font-size: 0.95rem;">Apprenez à reconnaître, accueillir et apaiser le stress, les tensions et les émotions envahissantes.</p>
                </div>
            </article>

            <!-- Bénéfice 2 -->
            <article class="card-service" style="flex-direction: row; gap: 1.5rem; align-items: flex-start; padding: 2.5rem;">
                <div class="icon-circle-filled" style="margin: 0; width: 50px; height: 50px; flex-shrink: 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                </div>
                <div>
                    <h3 style="margin-top: 0; margin-bottom: 0.6rem; font-size: 1.25rem;">Confiance et estime de soi</h3>
                    <p style="margin: 0; font-size: 0.95rem;">Développez une meilleure connaissance de vous-même et renforcez votre confiance intérieure.</p>
                </div>
            </article>

            <!-- Bénéfice 3 -->
            <article class="card-service" style="flex-direction: row; gap: 1.5rem; align-items: flex-start; padding: 2.5rem;">
                <div class="icon-circle-filled" style="margin: 0; width: 50px; height: 50px; flex-shrink: 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/></svg>
                </div>
                <div>
                    <h3 style="margin-top: 0; margin-bottom: 0.6rem; font-size: 1.25rem;">Préparation mentale</h3>
                    <p style="margin: 0; font-size: 0.95rem;">Préparez-vous sereinement à un examen, un événement important, ou une transition de vie.</p>
                </div>
            </article>

            <!-- Bénéfice 4 -->
            <article class="card-service" style="flex-direction: row; gap: 1.5rem; align-items: flex-start; padding: 2.5rem;">
                <div class="icon-circle-filled" style="margin: 0; width: 50px; height: 50px; flex-shrink: 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>
                </div>
                <div>
                    <h3 style="margin-top: 0; margin-bottom: 0.6rem; font-size: 1.25rem;">Sommeil et récupération</h3>
                    <p style="margin: 0; font-size: 0.95rem;">Retrouvez un sommeil de qualité et des moments de récupération profonde.</p>
                </div>
            </article>

        </div>
    </div>
</section>

<!-- ==========================================
     CTA FINAL (Prêt à commencer ?)
     ========================================== -->
<section class="section">
    <div class="container">
        <div class="cta-container" style="max-width: 800px; text-align: center; padding: 4rem 3rem;">
            <h2 style="margin-bottom: 1.5rem; font-size: 2rem;">Prêt(e) à commencer ?</h2>
            <p style="margin-bottom: 2.5rem; font-size: 1.05rem;">Si vous souhaitez découvrir comment la sophrologie peut vous accompagner dans votre démarche, n'hésitez pas à me contacter pour échanger ensemble.</p>
            <div class="hero-actions" style="justify-content: center;">
                <a href="<?= BASE_URL ?>/contact" class="btn btn-primary">Prendre rendez-vous</a>
                <a href="<?= BASE_URL ?>/seances" class="btn btn-outline">Voir les séances</a>
            </div>
        </div>
    </div>
</section>

<?php
require dirname(__DIR__) . '/layout/footer.php';
?>