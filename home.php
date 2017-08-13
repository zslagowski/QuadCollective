<?php get_header(); ?>

<div class="container qc-main-blog-page">

  <h1 class="text-center qc-main-blog-header"><?php echo get_the_title(13); ?></h1>

  <div class="row">
    <div class="col-sm-12 qc-blog-categories-list text-center">
      <ul class="list-items categories">
       <?php $category_ids = get_all_category_ids();
       $args = array( 'orderby' => 'slug', 'parent' => 0 );
       $categories = get_categories( $args );
       foreach ( $categories as $category ) {
       echo '<li><a href="http://localhost/quadcollective/category/' . $category->slug . '" rel="bookmark">' . $category->name . '</a></li>'; } ?>
      </ul>
    </div>
  </div>

  <div class="col-md-8">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="row qc-main-blog-row">
  
        <div class="col-md-12 text-center">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
        </div> <!-- col-md-6 -->
  
        <div class="col-md-12">
          <h2><?php the_title(); ?></h2>
          <h5><?php the_author(); ?> <span class="qc-blog-date"><?php the_date(); ?></span></h5>
          <a href="<?php the_permalink(); ?>">
            <p><?php the_excerpt(); ?></p>
          </a>
        </div> <!-- col-md-6 -->
  
      </div> <!-- row -->
  
  
    <?php endwhile; endif; ?>
  </div>
  <div class="col-md-4 text-center">
      <?php dynamic_sidebar('blog-home-sidebar'); ?>
  </div>
</div> <!--container-->

<div class="qc-submit-blog text-center">
  <a href="https://quadcollective.com/blog-submission">Submit Your Own Story Here</a>
</div>
<?php get_footer();
