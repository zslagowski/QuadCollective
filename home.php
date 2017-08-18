<?php get_header(); ?>

<div class="container qc-main-blog-page">
  <div class="row qc-home-blog-header-title text-center">

    <h1 class="qc-main-blog-header"><img src="https://www.quadcollective.com/wp-content/uploads/2017/08/QC-Logo-Stamp-Middle-Green.png" alt="" width="150" height="150" /> <?php echo get_the_title(13); ?></h1>
  </div>

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
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h5><?php the_author(); ?> <span class="qc-blog-date"><?php the_date(); ?></span></h5>
          <a href="<?php the_permalink(); ?>">
            <p><?php the_excerpt(); ?></p>
          </a>
        </div> <!-- col-md-6 -->
  
      </div> <!-- row -->
  
  
    <?php endwhile; endif; ?>
  </div>
  <div class="col-md-4 text-center">
    <h2 class="widget-blog-home-sidebar-title">Check Out Some of Our Recommendations</h2>
    <?php dynamic_sidebar('blog-home-sidebar'); ?>
  </div>
</div> <!--container-->

<div class="qc-submit-blog text-center">
  <a href="https://quadcollective.com/blog-submission">Submit Your Own Story Here</a>
</div>
<?php get_footer();
