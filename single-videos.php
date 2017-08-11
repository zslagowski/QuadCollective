<?php

get_header();

?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container qc-videos-single">

  <h1 class="text-center"><?php the_title(); ?></h1>

  <div class="qc-single-video-content">
    <?php the_content(); ?>
  </div>

  <?php
  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif; ?>

</div><!-- .container -->

<?php endwhile;

get_footer();
