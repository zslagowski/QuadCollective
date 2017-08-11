<?php get_header();

$args = array (
    'pagename' => 'home'
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
	<div class="qc-frontpage-header-image-top" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
    <div class="qc-header-text-paralax text-center">
      <img class="aligncenter wp-image-142 size-thumbnail text-center" src="https://quadcollective.com/wp-content/uploads/2017/04/QC-Logo-Stamp-Middle-Green.png" alt="" width="150" height="150" />
      When you go from this <img class="qc-emoji-icons" src="https://quadcollective.com/wp-content/uploads/2017/04/running-man-emoji-e1492099202708.png">to this <img class="qc-emoji-icons" src="https://quadcollective.com/wp-content/uploads/2017/04/wheelchair-emoji-e1492099189795.png"><br />
      You need answers.<br />
      <em><strong><span style="font-family:'Arvo';">Welcome Home</span></strong></em>
    </div>
  </div>
<?php }
?>


<div class="container qc-frontpage">
    <?php the_content(); ?>
</div><?php endwhile; endif; wp_reset_postdata(); ?><section id="qc-front-recent-posts" class="">    <div class="container">        <h2 class="text-center qc-recent-posts-front">Recent Posts</h2>        <?php $query = new WP_Query( array( 'posts_per_page' => 3 ) ); ?>        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                <div class="qc-main-blog row">                    <div class="col-md-5 qc-front-posts-post-thumbnail text-center"><a href="<?php the_permalink('medium'); ?>"><?php the_post_thumbnail(); ?></a></div>                    <div class="col-md-7">                      <div class="rb-front-posts-title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>                      <div class="rb-front-posts-meta"><h5><span class="qc-blog-date"><?php echo get_the_date(); ?></span> | <?php the_category( ' | '); ?></h5></div>                      <div class="rb-front-posts-excerpt"><p><?php the_excerpt(); ?></p></div>                    </div>                </div>        <?php endwhile; else : ?>            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>        <?php endif; ?>    </div> <!--container--></section>
<?php
get_footer();