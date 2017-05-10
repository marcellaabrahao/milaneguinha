<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		<!-- </div>
	</div>#wrapper -->

	<footer id="footer" role="contentinfo">
	<section class="menufooter">
		<div class="container">
			<div class="row">
				<div class="col-md-8">Menu</div>
				<div class="col-md-4">Social</div>
			</div>
		</div>
	</section>


		<section class="creditos">
			<div class="container">
				<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?></p>
			</div><!-- .container -->	
		</section>
		
	</footer><!-- #footer -->

	<?php wp_footer(); ?>
</body>
</html>
