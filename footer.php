<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thene_personnalise
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'thene_personnalise' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'thene_personnalise' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'thene_personnalise' ), 'thene_personnalise', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>

		</div><!-- .site-info -->
        <?php wp_nav_menu( array( 'theme_location' => 'menu-2') ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
