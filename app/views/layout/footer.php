<?php
// app/views/layout/footer.php
?>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <!-- Colonne 1 -->
            <div>
                <a href="<?= BASE_URL ?>/accueil" class="footer-logo">
                    CHRISTEL CANTOIS
                    <span>Sophrologue</span>
                </a>
                <p style="margin-top: 1.5rem; font-size: 0.95rem;">Un accompagnement bienveillant pour retrouver équilibre, sérénité et confiance en soi.</p>
            </div>

            <!-- Colonne 2 -->
            <div>
                <h4 class="footer-title">Contact</h4>
                <ul class="footer-contact">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                        <span>contact@christelcantois.fr</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <span>+41 79 368 39 11</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <span>Cabinet de sophrologie<br>Chem. du Cottage 1<br>1110 Morges</span>
                    </li>
                </ul>
            </div>

            <!-- Colonne 3 -->
            <div>
                <h4 class="footer-title">Suivez-moi</h4>
                <div class="social-links">
                    <a href="#"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></a>
                    <a href="#"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg></a>
                    <a href="#"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg></a>
                </div>
                <h4 class="footer-title" style="margin-bottom: 0.8rem;">Horaires d'ouverture</h4>
                <ul class="hours">
                    <li>Lundi - Vendredi : 9h - 19h</li>
                    <li>Samedi : 9h - 13h</li>
                    <li>Dimanche : Fermé</li>
                </ul>
            </div>
        </div>
        <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 2rem; text-align: center; font-size: 0.85rem; color: #7f8c8d;">
            <span>© <?= date('Y'); ?> Christel Cantois – Tous droits réservés.</span>
        </div>
    </footer>

</body>
</html>