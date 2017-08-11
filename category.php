<?php

get_header(); ?>


<h1 class="qc-main-videos-page container text-center"><?php single_cat_title(); ?></h1>

<div id="primary" class="content-area">
  <main id="main" class="site-main site-main-video" role="main">


    <div class="row">
    <?php
    while ( have_posts() ) : the_post(); ?>

        <div class="col-lg-5 col-md-5 col-sm-12 qc-main-videos-content">
          <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <h5><?php the_author(); ?> <span class="qc-blog-date"><?php the_date(); ?></span></h5>
            <?php the_post_thumbnail('large'); ?>
          </a>
        </div> <!-- col-md-6 -->


    <?php endwhile; ?>
  </row>
  </main><!-- main -->
</div> <!--.content-area -->

<?php
dynamic_sidebar('videos-sidebar');
get_footer( 'category' );
 ?>
