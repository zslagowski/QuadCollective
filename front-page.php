<?php get_header();

$args = array (
    'pagename' => 'home'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
	<div class="qc-frontpage-header-image-top" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="qc-header-text-paralax text-center">
      <img class="aligncenter wp-image-142 size-thumbnail text-center" src="https://www.quadcollective.com/wp-content/uploads/2017/08/QC-Logo-Stamp-Middle-Green.png" alt="" width="150" height="150" />
      When you go from this <img class="qc-emoji-icons" src="https://www.quadcollective.com/wp-content/uploads/2017/04/running-man-emoji-e1492099202708.png">to this <img class="qc-emoji-icons" src="https://www.quadcollective.com/wp-content/uploads/2017/04/wheelchair-emoji-e1492099189795.png"><br />
      You need answers.<br />
      <em><strong><span style="font-family:'Arvo';">Welcome Home</span></strong></em>
    </div>
  </div>
<?php }
?>


<div class="container qc-frontpage">
    <?php the_content(); ?>
</div>
<?php endwhile; endif; wp_reset_postdata(); ?>

<section id="qc-frontpage-tiles-section" class="qc-frontpage-tiles-section">
  <div class="container">
    <div class="col-md-4 qc-frontpage-social-feed">
      <div class="col-xs-12 qc-frontpage-tiles">
        <div class="qc-front-page-social-feed-scroll text-center"><?php dynamic_sidebar('qc-homepage-facebook-sidebar'); ?></div>
      </div>
    </div>
    <div class="col-md-4 qc-frontpage-recent-posts">
      <div class="col-xs-12 qc-frontpage-tiles">
        <h2 class="text-center">
          Recent Posts
        </h2>

        <?php $query = new WP_Query( array(
          'posts_per_page' => 6,
          'post_type' => array( 'post', 'videos')
         ) ); ?>

          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


                  <div class="qc-main-blog row">
                      <div class="qc-front-posts-posts">
                        <a class="qc-frontpage-tile-blog-thumbnail col-xs-3 text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                        <a class="qc-frontpage-tile-blog-title col-xs-9" href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                      </div>
                  </div>


          <?php endwhile; else : ?>
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
    </div>
    <div class="col-md-4 qc-frontpage-ads">
      <div class="col-xs-12 qc-frontpage-tiles">
        <h2 class="text-center">
          Recommendations
        </h2>
        <div class="text-center"><?php dynamic_sidebar('qc-homepage-ad-sidebar'); ?></div>
      </div>
    </div>
  </div> <!--container-->
</section>
<?php
get_footer();
