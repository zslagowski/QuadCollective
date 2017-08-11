<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GEMM_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://use.fontawesome.com/4c52521bb5.js"></script>
<link href="https://fonts.googleapis.com/css?family=Arvo:400,700|Lato:400,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Give+You+Glory" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gemm-framework' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="row qc-top-row">
            <div class="col-xs-12 col-sm-3 col-md-5 col-lg-5">
                <div class="site-branding">
                    <div class="qc-logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_header_image(); ?>"/></a>
                    </div>
                </div><!-- .site-branding -->
            </div><!-- .col-md-3 -->

            <div class="col-sm-9 col-md-7 col-lg-7 text-center">

                <nav class="navbar" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button"  class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div><!--end navbar-header-->

                        <div class="collapse navbar-collapse menu-primary" id="bs-example-navbar-collapse-1">
                            <?php
                            wp_nav_menu( array(
                                'menu'              => '',
                                'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => '',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                            ?>

                        </div><!--end navbar-colapse-->
                    </div><!--end container-->
                </nav>
        </div><!--col-md-8-->
      </div><!-- row -->
			<hr>
			<div class="row qc-icon-row">
				<div class="text-right col-md-12">
					<i class="qc-search-icon"><?php get_search_form('Search'); ?></i>
					<a href="https://quadcollective.com/cart"><i class="fa fa-shopping-cart fa-2" aria-hidden="true"></i></a>
				</div>
			</div>
  </div>  <!--.row-->
	</header><!-- #masthead -->


	<div id="content" class="site-content">
