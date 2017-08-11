<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GEMM_Framework
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container">
				<div class="row">
					<div class="qc-footer-icons col-md-6 text-center">
						<?php

						$query = new WP_Query( array( 'post_type' => 'qc_footer_social' ) );

						if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
						
						?>

						<a href="<?php the_field('qc-sm-footer-link'); ?>" target="__blank"><i class="fa <?php the_field('qc-footer-icon-class'); ?>" aria-hidden="true"></i></a>
						
						<?php endwhile; endif; wp_reset_postdata; ?>
					</div>
					<div class="col-md-6 qc-copyright text-center">
						<img class="qc-footer-logo" src="https://quadcollective.com/wp-content/uploads/2017/03/QC-Logo-Stamp-Orange.png"/> Quad Collective Copyright
					</div>	
				</div> <!-- row -->	
			</div> <!-- container -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
