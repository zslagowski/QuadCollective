<?php
/* Template Name: Video Page Template */

get_header();
?>

<h1 class="text-center qc-main-videos-header"><?php echo get_the_title(15); ?></h1>

<div id="primary" class="content-area">
  <main id="main" class="site-main site-main-video" role="main">
    <div class="container qc-main-videos-page">

      <?php
        $args = array(
            'post_type' => 'videos'
          );

        $query = new WP_Query($args);

      if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="col-lg-5 col-md-4 col-sm-12 qc-main-videos-content">
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
              <h5><?php the_author(); ?> <span class="qc-blog-date"><?php the_date(); ?></span></h5>
              <?php the_post_thumbnail('large'); ?>
            </a>
          </div> <!-- col-md-6 -->


      <?php endwhile; endif; ?>
    </div> <!--container-->
  </main><!-- main -->
</div> <!--.content-area -->

<?php
dynamic_sidebar('videos-sidebar');
get_footer();
