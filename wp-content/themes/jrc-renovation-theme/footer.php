<?php
/**
 * Fichier footer.php
 * Pied de page du thème
 */
?>

	<footer class="site-footer">
		<div class="site-footer__inner">

			<div class="site-footer__brand">
				<img
					src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-jrc.png' ); ?>"
					alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
					class="site-footer__logo"
				>
				<p class="site-footer__tagline">Entretien toiture &middot; R&eacute;novation &middot; Zinguerie</p>
			</div>

			<div class="site-footer__contact">
				<h3 class="site-footer__title">Contact</h3>

				<ul class="site-footer__contact-list">
					<li class="site-footer__contact-item">
						<span class="site-footer__contact-icon" aria-hidden="true">&#128222;</span>
						<a href="tel:0664973619">06 64 97 36 19</a>
					</li>
					<li class="site-footer__contact-item">
						<span class="site-footer__contact-icon" aria-hidden="true">&#9993;</span>
						<a href="mailto:contact@jrc-travaux.com">contact@jrc-travaux.com</a>
					</li>
					<li class="site-footer__contact-item">
						<span class="site-footer__contact-icon" aria-hidden="true">&#128205;</span>
						<span><!-- TODO : remplacer par l'adresse postale réelle -->Adresse &agrave; compl&eacute;ter, Code postal Ville</span>
					</li>
				</ul>
			</div>

		</div>

		<div class="site-footer__bottom">
			<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Tous droits r&eacute;serv&eacute;s.</p>
		</div>
	</footer>

<?php wp_footer(); ?>
</body>
</html>
