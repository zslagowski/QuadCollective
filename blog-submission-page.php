<?php
/*
 * Template Name: Blog Submission Template
 */

 get_header();

 ?>

 <div class="container qc-blog-submission-container">

   <h1 class="text-center"><?php the_title(); ?></h1>

   <div class="qc-our-story-content">
     <?php
       $args = array(
         'pagename' => 'Blog Submission'
       );

       $query = new WP_Query( $args );

       if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

       the_content();

       endwhile; endif; wp_reset_postdata();
     ?>
   </div>


 </div>


 <?php

 get_footer();

 ?>
