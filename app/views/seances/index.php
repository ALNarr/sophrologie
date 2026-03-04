<?php
// app/views/seances/index.php
require dirname(__DIR__) . '/layout/header.php';
?>

<!-- ==========================================
     HERO SECTION (Séances)
     ========================================== -->
<section class="section" style="padding-bottom: 2rem;">
    <div class="container" style="max-width: 900px; margin: 0 auto 0 0;">
        <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem; letter-spacing: -0.02em;">Séances de sophrologie</h1>
        
        <p style="font-size: 1.2rem; color: var(--color-text-body); margin-bottom: 2rem; line-height: 1.6;">
            Des accompagnements sur mesure pour traverser le stress et les changements de vie avec plus de sérénité.
        </p>
        
        <p style="font-size: 1.05rem; color: var(--color-text-body); margin-bottom: 3rem; line-height: 1.8;">
            Les séances sont des moments privilégiés pour vous reconnecter à vos ressources, à votre corps et à vos émotions. Elles peuvent se vivre au cabinet à Morges ou en ligne.
        </p>
    </div>

    <div class="container">
        <!-- Carte encadrée "Un accompagnement progressif" -->
        <div style="background: var(--color-surface); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 3rem; box-shadow: var(--shadow-sm); margin-bottom: 3rem;">
            <h2 style="font-size: 1.6rem; margin-bottom: 1rem;">Un accompagnement progressif</h2>
            <p style="font-size: 1.05rem; margin: 0; color: var(--color-text-body);">
                Chaque accompagnement est <strong>personnalisé</strong> et centré sur vos besoins : santé, émotions, confiance en soi, préparation aux examens, transitions de vie.
            </p>
        </div>

        <!-- Boutons d'action -->
        <div class="hero-actions">
            <a href="<?= BASE_URL ?>/contact" class="btn btn-primary">Prendre rendez-vous</a>
            <a href="#types-seances" class="btn btn-outline">Découvrir les types de séances</a>
        </div>
    </div>
</section>

<!-- ==========================================
     DÉTAIL DES SÉANCES
     ========================================== -->
<section class="section" id="types-seances">
    <div class="container">

        <!-- 1. SÉANCES INDIVIDUELLES -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 4rem; align-items: start; margin-bottom: 6rem;">
            <!-- Colonne texte -->
            <div>
                <div class="icon-circle-filled" style="width: 56px; height: 56px; margin: 0 0 1.5rem 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </div>
                <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Séances individuelles</h2>
                <p style="font-size: 1.05rem; color: var(--color-text-body); margin-bottom: 1.5rem; line-height: 1.7;">
                    Les séances individuelles sont un espace privilégié pour prendre le temps de vous poser, de déposer ce que vous vivez et d'explorer en douceur ce qui a besoin d'attention. Elles permettent de travailler sur une problématique précise ou sur un besoin global de mieux-être.
                </p>
                <p style="font-size: 1.05rem; color: var(--color-text-body); margin: 0; line-height: 1.7;">
                    Entre séances de respiration, de détente corporelle et de visualisation, vous êtes invité(e) à vous reconnecter à votre corps, à vos ressentis et à vos ressources intérieures.
                </p>
            </div>
            
            <!-- Colonne "En pratique" -->
            <div class="card" style="text-align: left; padding: 3rem;">
                <h3 style="font-size: 1.3rem; margin-bottom: 2rem;">En pratique</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0;">
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Lieu : au cabinet à Morges ou en ligne</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect width="15" height="14" x="1" y="5" rx="2" ry="2"/></svg>
                        <span>Format : accompagnement individuel sur rendez-vous</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        <span>Publics : adultes, adolescents, enfants</span>
                    </li>
                </ul>
                <div style="border-top: 1px solid var(--border-color); padding-top: 1.5rem;">
                    <p style="font-size: 0.9rem; color: var(--color-muted); margin: 0;">Les informations sur les tarifs seront précisées lors de la prise de contact.</p>
                </div>
            </div>
        </div>

        <!-- 2. SÉANCES DE GROUPE -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 4rem; align-items: start; margin-bottom: 6rem;">
            <!-- Colonne texte -->
            <div>
                <div class="icon-circle-filled" style="width: 56px; height: 56px; margin: 0 0 1.5rem 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Séances de groupe & ateliers</h2>
                <p style="font-size: 1.05rem; color: var(--color-text-body); margin-bottom: 1.5rem; line-height: 1.7;">
                    Les séances de groupe permettent de découvrir la sophrologie dans un cadre convivial, en partageant un moment avec d'autres personnes tout en respectant l'intimité de chacun. Le travail se fait autour de thématiques spécifiques : gestion du stress, sommeil, émotions.
                </p>
                <p style="font-size: 1.05rem; color: var(--color-text-body); margin: 0; line-height: 1.7;">
                    L'atelier collectif est un temps de ressourcement, de détente et de partage. Vous bénéficiez de la dynamique du groupe, tout en avançant à votre propre rythme.
                </p>
            </div>
            
            <!-- Colonne "En pratique" -->
            <div class="card" style="text-align: left; padding: 3rem;">
                <h3 style="font-size: 1.3rem; margin-bottom: 2rem;">En pratique</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span>Séances en petit nombre</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                        <span>Ateliers ponctuels ou cycles de plusieurs séances</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                        <span>Thématiques variées selon les besoins</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- 3. INTERVENTIONS ENTREPRISE -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 4rem; align-items: start; margin-bottom: 4rem;">
            <!-- Colonne texte -->
            <div>
                <div class="icon-circle-filled" style="width: 56px; height: 56px; margin: 0 0 1.5rem 0; background: var(--color-primary);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                </div>
                <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Interventions en entreprise</h2>
                <p style="font-size: 1.05rem; color: var(--color-text-body); margin-bottom: 1.5rem; line-height: 1.7;">
                    J'interviens auprès des entreprises, associations et structures pour proposer des ateliers de sophrologie sur mesure : gestion du stress, cohésion d'équipe, prévention des risques psychosociaux, qualité de vie au travail.
                </p>
                <p style="font-size: 1.05rem; color: var(--color-text-body); margin: 0; line-height: 1.7;">
                    Ces interventions peuvent prendre la forme d'ateliers ponctuels, de cycles réguliers ou d'accompagnement individuel des collaborateurs.
                </p>
            </div>
            
            <!-- Colonne "En pratique" -->
            <div class="card" style="text-align: left; padding: 3rem;">
                <h3 style="font-size: 1.3rem; margin-bottom: 2rem;">En pratique</h3>
                <ul style="list-style: none; padding: 0; margin: 0 0 2rem 0;">
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Sur site ou en ligne, selon vos besoins</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" x2="8" y1="13" y2="13"/><line x1="16" x2="8" y1="17" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                        <span>Programmes adaptés à vos objectifs</span>
                    </li>
                    <li style="display: flex; gap: 1rem; align-items: flex-start; margin-bottom: 1.2rem; font-size: 1.05rem;">
                        <svg width="20" height="20" style="color: var(--color-primary); margin-top: 0.2rem; flex-shrink: 0;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                        <span>Accompagnement des équipes et des dirigeants</span>
                    </li>
                </ul>
                <a href="<?= BASE_URL ?>/contact" class="btn btn-outline btn-full">Demander un devis</a>
            </div>
        </div>

    </div>
</section>

<!-- ==========================================
     CTA FINAL (Questions)
     ========================================== -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <div style="background: var(--color-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 4rem 2rem; text-align: center; max-width: 900px; margin: 0 auto;">
            <h2 style="font-size: 1.8rem; margin-bottom: 1.5rem;">Une question ? Besoin d'échanger ?</h2>
            <p style="font-size: 1.05rem; color: var(--color-text-body); margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.7;">
                N'hésitez pas à me contacter pour discuter de vos besoins. Je serai ravie de vous accompagner dans votre démarche.
            </p>
            <a href="<?= BASE_URL ?>/contact" class="btn btn-primary">Me contacter</a>
        </div>
    </div>
</section>

<?php
require dirname(__DIR__) . '/layout/footer.php';
?>