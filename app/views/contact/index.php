<?php
// app/views/contact/index.php
require dirname(__DIR__) . '/layout/header.php';
?>

<section class="section">
    <div class="container contact-layout">
        <div class="contact-info">
            <h1>Contact & prise de rendez-vous</h1>
            <p class="contact-intro">
                Pour toute question, prise de rendez-vous ou renseignement, vous pouvez me contacter via le formulaire
                ci-contre ou par téléphone / e-mail. Je vous répondrai dès que possible.
            </p>

            <div class="contact-block">
                <h2>Coordonnées</h2>
                <p><strong>Christel Cantois – Sophrologue</strong></p>
                <p>
                    <em>Chem. du Cottage 1<br>
                    1110 Morges</em>
                </p>
                <p>
                    Tél&nbsp;: <a href="tel:+41793683911">+41 79 368 39 11</a><br>
                    E-mail&nbsp;: <a href="mailto:contact@christel-sophrologie.ch">contact@christel-sophrologie.ch</a>
                </p>
            </div>

            <div class="contact-block">
                <h2>Horaires</h2>
                <p>
                    <em>Horaires à préciser ici (par ex. en journée, certains soirs, etc.).</em>
                </p>
            </div>

            <div class="contact-block">
                <h2>Informations pratiques</h2>
                <p>
                    Les séances ont lieu sur rendez-vous uniquement. En cas d’empêchement, merci de prévenir le plus
                    tôt possible.
                </p>
            </div>
        </div>

        <div class="contact-form-wrapper" id="form">
            <h2>Envoyer un message</h2>

            <?php if (!empty($success)) : ?>
                <div class="contact-alert contact-alert-success">
                    Merci pour votre message. Je vous répondrai dès que possible.
                </div>
            <?php endif; ?>

            <?php if (!empty($errors)) : ?>
                <div class="contact-alert contact-alert-error">
                    Merci de vérifier les informations ci-dessous.
                </div>
            <?php endif; ?>

            <form method="post" class="contact-form">
            <div class="form-grid">
                <div class="form-field">
                    <label for="name">Nom / Prénom <span class="req">*</span></label>
                    <input type="text" id="name" name="name" placeholder="Votre nom"
                        value="<?= htmlspecialchars($old['name'], ENT_QUOTES, 'UTF-8') ?>">
                    <?php if (!empty($errors['name'])) : ?>
                        <p class="form-error"><?= htmlspecialchars($errors['name'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-field">
                    <label for="email">E-mail <span class="req">*</span></label>
                    <input type="email" id="email" name="email" placeholder="votre@email.ch"
                        value="<?= htmlspecialchars($old['email'], ENT_QUOTES, 'UTF-8') ?>">
                    <?php if (!empty($errors['email'])) : ?>
                        <p class="form-error"><?= htmlspecialchars($errors['email'], ENT_QUOTES, 'UTF-8') ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-field">
                    <label for="phone">Téléphone</label>
                    <input type="text" id="phone" name="phone" placeholder="+41 …"
                        value="<?= htmlspecialchars($old['phone'], ENT_QUOTES, 'UTF-8') ?>">
                </div>

                <div class="form-field">
                    <label for="subject">Objet</label>
                    <input type="text" id="subject" name="subject" placeholder="Prise de rendez-vous, question…"
                        value="<?= htmlspecialchars($old['subject'], ENT_QUOTES, 'UTF-8') ?>">
                </div>
            </div>

            <div class="form-field">
                <label for="message">Votre message <span class="req">*</span></label>
                <textarea id="message" name="message" rows="7"
                        placeholder="Expliquez brièvement votre besoin (stress, sommeil, émotions, etc.)"><?= htmlspecialchars($old['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                <?php if (!empty($errors['message'])) : ?>
                    <p class="form-error"><?= htmlspecialchars($errors['message'], ENT_QUOTES, 'UTF-8') ?></p>
                <?php endif; ?>
            </div>

            <label class="checkbox">
                <input type="checkbox" name="rgpd" required>
                <span>J’accepte que mes données soient utilisées pour traiter ma demande.</span>
            </label>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Envoyer le message</button>
                <p class="contact-note">* Champs obligatoires</p>
            </div>
        </form>
        </div>
    </div>
</section>

<?php
require dirname(__DIR__) . '/layout/footer.php';