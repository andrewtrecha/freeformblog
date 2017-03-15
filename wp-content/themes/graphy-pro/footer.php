<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Graphy
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php get_sidebar( 'footer' ); ?>

		<?php if ( has_nav_menu( 'footer' ) || has_nav_menu( 'footer-social' ) || get_theme_mod( 'graphy_footer_text' ) || ! get_theme_mod( 'graphy_hide_credit' ) ) : ?>
		<div class="site-bottom">

			<?php if ( has_nav_menu( 'footer-social' ) ) : ?>
			<nav id="footer-social-link" class="footer-social-link social-link">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-social', 'depth' => 1, 'link_before'  => '<span class="screen-reader-text">', 'link_after'  => '</span>' ) ); ?>
			</nav><!-- #footer-social-link -->
			<?php endif; ?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav id="footer-navigation" class="footer-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' , 'depth' => 1 ) ); ?>
			</nav><!-- #footer-navigation -->
			<?php endif; ?>

		</div><!-- .site-bottom -->
		<?php endif; ?>

	</footer><!-- #colophon -->
	
	<?php if ( get_theme_mod( 'graphy_footer_text' ) || ! get_theme_mod( 'graphy_hide_credit' ) ) : ?>
		<div class="site-info">
			<div class="container">
				<?php if ( get_theme_mod( 'graphy_footer_text' ) ) : ?>
				<div class="site-copyright">
					<?php echo wp_kses_post( get_theme_mod( 'graphy_footer_text' ) ); ?>
				</div><!-- .site-copyright -->
				<?php endif; ?>
				<?php if ( ! get_theme_mod( 'graphy_hide_credit' ) ) : ?>
				<div class="site-credit">
					<?php printf( wp_kses( __( 'Powered by <a href="%1$s">%2$s</a>', 'graphy-pro' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( __( 'https://wordpress.org/', 'graphy-pro' ) ), 'WordPress' ); ?>
				<span class="site-credit-sep"> | </span>
					<?php printf( wp_kses( __( 'Theme: <a href="%1$s">%2$s</a> by %3$s', 'graphy-pro' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( __( 'http://themegraphy.com/wordpress-themes/graphy/', 'graphy-pro' ) ), 'Graphy', 'Themegraphy' ); ?>
				</div><!-- .site-credit -->
				<?php endif; ?>
			</div>
		</div><!-- .site-info -->
	<?php endif; ?>
	
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){
	$("#menu-item-51").addClass("visible-xs");
});
</script>
</body>
</html>
