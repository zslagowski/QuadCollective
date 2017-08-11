<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package GEMM_Framework
 */

get_header(); ?>

	<section id="primary" class="content-area search-content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'gemm-framework' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->
			<div class="row">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post(); ?>

					<div class="container">
						<div class="col-md-4">
							<a href="<?php the_permalink(); ?>">
								<h2><?php the_title(); ?></h2>
								<p><?php the_post_thumbnail('large'); ?></h2>
							</a>
						</div>
					</div>

				<?php endwhile; ?>

			</div>

			<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
