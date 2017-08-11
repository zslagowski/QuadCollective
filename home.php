<?php get_header(); ?>

<div class="container qc-main-blog-page">

  <h1 class="text-center qc-main-blog-header"><?php echo get_the_title(13); ?></h1>

  <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row qc-main-blog-row">

      <div class="col-md-6">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
      </div> <!-- col-md-6 -->

      <div class="col-md-6">
        <a href="<?php the_permalink(); ?>">
          <h2><?php the_title(); ?></h2>
          <h5><?php the_author(); ?> <span class="qc-blog-date"><?php the_date(); ?></span></h5>
          <p><?php the_excerpt(); ?></p>
        </a>
      </div> <!-- col-md-6 -->

    </div> <!-- row -->


  <?php endwhile; endif; ?>
</div> <!--container-->

<div class="qc-submit-blog text-center">
  <a href="https://quadcollective.com/blog-submission">Submit Your Own Story Here</a>
</div>
<?php get_footer();
