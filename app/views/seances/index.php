<?php
// app/views/seances/index.php
require dirname(__DIR__) . '/layout/header.php';
?>

<section class="hero">
    <div class="container hero-inner">
        <div class="hero-text">
            <h1>Séances de sophrologie</h1>
            <p class="hero-subtitle">
                Des accompagnements sur mesure, en individuel, en groupe ou en entreprise, pour traverser le stress,
                les changements de vie et les périodes de questionnement avec plus de sérénité.
            </p>
            <p class="hero-desc">
                Les séances sont des moments privilégiés pour vous reconnecter à vos ressources, à votre corps et à vos
                émotions, dans un cadre sécurisant et respectueux. Elles peuvent se vivre au cabinet à Morges ou en
                ligne, selon vos besoins et vos possibilités.
            </p>
            <div class="hero-actions">
                <a href="<?= BASE_URL ?>/index.php?controller=contact&action=index#form" class="btn btn-primary">
                    Prendre rendez-vous
                </a>
                <a href="#types-de-seances" class="btn btn-ghost">
                    Découvrir les types de séances
                </a>
            </div>
        </div>
        <div class="hero-card">
            <h2>Un accompagnement progressif</h2>
            <p>
                Chaque accompagnement est personnalisé, progressif et centré sur vos besoins&nbsp;: gestion du stress,
                sommeil, émotions, confiance en soi, préparation à un examen ou à un entretien, périodes de transition,
                questionnements personnels ou professionnels.
            </p>
        </div>
    </div>
</section>

<section class="section section-soft" id="types-de-seances">
    <div class="container">
        <h2 class="section-title">Mes types de séances</h2>
        <p class="section-intro">
            La sophrologie peut se vivre de différentes façons, selon ce que vous traversez et ce qui vous convient le mieux.
        </p>

        <div class="cards-grid">
            <article class="card">
                <h3>Séances individuelles</h3>
                <p>
                    Un temps pour vous, en tête-à-tête, pour explorer ce que vous vivez, mettre des mots sur vos
                    ressentis et expérimenter des pratiques adaptées à votre situation.
                </p>
            </article>
            <article class="card">
                <h3>Séances de groupe & ateliers</h3>
                <p>
                    Découvrir la sophrologie dans un cadre convivial, autour de thématiques comme le stress, le
                    sommeil, les émotions ou la confiance en soi.
                </p>
            </article>
            <article class="card">
                <h3>Séances en ligne</h3>
                <p>
                    Bénéficier d’un accompagnement à distance, depuis chez vous, tout en conservant la qualité de
                    présence, d’écoute et de relation.
                </p>
            </article>
            <article class="card">
                <h3>Interventions en entreprise</h3>
                <p>
                    Programmes et ateliers sur mesure autour du bien-être au travail, de la gestion du stress et de la
                    prévention du burn-out.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div>
            <h2 class="section-title">Séances individuelles</h2>
            <p>
                Les séances individuelles sont un espace privilégié pour prendre le temps de vous poser, de déposer ce
                que vous vivez et d’explorer en douceur ce qui a besoin d’attention. Elles permettent de travailler
                sur une problématique précise (stress, sommeil, douleurs, émotions, transitions de vie, confiance en
                soi, etc.) ou sur un besoin plus global d’équilibre et de mieux-être.
            </p>
            <p>
                Grâce à des exercices de respiration, de détente corporelle et de visualisation, vous êtes invité·e à
                vous reconnecter à votre corps, à vos ressentis et à vos ressources intérieures. L’objectif est que
                vous puissiez progressivement vous approprier ces outils pour les utiliser de manière autonome dans
                votre quotidien.
            </p>
        </div>
        <div class="about-highlight">
            <h3>En pratique</h3>
            <p>
                • Lieu&nbsp;: au cabinet à Morges ou en ligne<br>
                • Format&nbsp;: accompagnement individuel, sur rendez-vous<br>
                • Public&nbsp;: adultes, adolescents, enfants (contenu adapté à l’âge)
            </p>
            <p>
                La durée et le nombre de séances sont adaptés à votre situation. L’accompagnement se construit ensemble,
                au fil des rencontres.
            </p>
            <p>
                <em>Les informations sur les tarifs seront précisées ici.</em>
            </p>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container about-grid">
        <div>
            <h2 class="section-title">Séances de groupe & ateliers</h2>
            <p>
                Les séances de groupe et les ateliers permettent de découvrir la sophrologie dans un cadre convivial,
                en partageant un moment avec d’autres personnes tout en respectant l’intimité de chacun. Le travail se
                fait autour de thématiques spécifiques&nbsp;: gestion du stress, sommeil, émotions, confiance en soi,
                équilibre au quotidien…
            </p>
            <p>
                Les pratiques proposées sont simples, accessibles et facilement réutilisables chez soi. Le groupe peut
                devenir un soutien, un lieu de partage et de motivation pour intégrer la sophrologie dans la vie de
                tous les jours.
            </p>
        </div>
        <div class="about-highlight">
            <h3>En pratique</h3>
            <p>
                • Séances de groupe en petit nombre<br>
                • Ateliers ponctuels ou cycles de plusieurs séances<br>
                • Thèmes définis à l’avance ou élaborés avec les participants / structures
            </p>
            <p>
                Ces formats peuvent être proposés en cabinet, en institution ou en entreprise.
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div>
            <h2 class="section-title">Séances en ligne</h2>
            <p>
                Pour les personnes qui ne peuvent pas se déplacer ou qui préfèrent rester chez elles, les séances en
                ligne offrent une alternative souple et confortable. Elles se déroulent de la même manière qu’une
                séance en présentiel, via une plateforme de visioconférence simple d’utilisation.
            </p>
            <p>
                Vous avez simplement besoin d’un endroit calme, d’une connexion internet stable et, idéalement, d’un
                siège ou d’un fauteuil dans lequel vous êtes à l’aise.
            </p>
        </div>
        <div class="about-highlight">
            <h3>En pratique</h3>
            <p>
                • Séances individuelles à distance<br>
                • Même qualité d’écoute et de présence qu’en cabinet<br>
                • Possibilité de combiner présentiel et en ligne selon vos besoins
            </p>
        </div>
    </div>
</section>

<section class="section section-soft">
    <div class="container about-grid">
        <div>
            <h2 class="section-title">Interventions en entreprise</h2>
            <p>
                La sophrologie est un outil précieux pour le monde du travail&nbsp;: elle contribue à la gestion du
                stress, à la prévention des risques psychosociaux et du burn-out, et à l’amélioration de la qualité de
                vie au travail.
            </p>
            <p>
                Les interventions sont construites sur mesure, en fonction des besoins de l’entreprise ou de
                l’institution&nbsp;: ateliers thématiques, cycles de séances, temps de ressourcement, accompagnement
                des équipes lors de périodes de changement, etc.
            </p>
        </div>
        <div class="about-highlight">
            <h3>En pratique</h3>
            <p>
                • Ateliers et programmes sur mesure<br>
                • Thèmes&nbsp;: stress, récupération, régulation émotionnelle, équilibre vie pro / vie perso, etc.<br>
                • Intervention possible en présentiel ou en ligne
            </p>
            <p>
                <em>Pour un devis ou une proposition adaptée à votre structure, n’hésitez pas à me contacter.</em>
            </p>
        </div>
    </div>
</section>

<section class="section" id="contact-seances">
    <div class="container">
        <h2 class="section-title">Envie de commencer un accompagnement&nbsp;?</h2>
        <p class="section-intro">
            Si vous souhaitez en savoir plus, poser une question ou prendre rendez-vous, je vous invite à me contacter.
            Nous pourrons échanger sur vos besoins et voir ensemble quel type de séance vous conviendrait le mieux.
        </p>
        <div class="hero-actions">
            <a href="<?= BASE_URL ?>/index.php?controller=contact&action=index#form" class="btn btn-primary">
                Prendre rendez-vous
            </a>
            <a href="<?= BASE_URL ?>/index.php?controller=home&action=index#contact" class="btn btn-ghost">
                Me contacter
            </a>
        </div>
    </div>
</section>

<?php
require dirname(__DIR__) . '/layout/footer.php';