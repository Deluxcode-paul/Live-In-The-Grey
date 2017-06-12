<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LiveGrey
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-180x180.png" />


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php /* esc_html_e( 'Skip to content', 'livegrey' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			/*endif; ?>
		</div>.site-branding

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'livegrey' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); */?>
		</nav>#site-navigation
	</header>#masthead

	<div id="content" class="site-content"> -->

	<header>
		<div class="row">
			<div class="large-4 medium-4 columns">
				<div class="social-links">
					<a href="<?php echo get_field('facebook_url', 'option');?>">
						<i class="fa fa-facebook"></i>
					</a>
					<a href="<?php echo get_field('instagram_url', 'option');?>">
						<i class="fa fa-instagram"></i>
					</a>
					<a href="<?php echo get_field('twitter_url', 'option');?>">
						<i class="fa fa-twitter"></i>
					</a>
					<a href="<?php echo get_field('linkedin_url', 'option');?>">
						<i class="fa fa-linkedin"></i>
					</a>
					<a href="<?php echo get_field('pinterest_url', 'option');?>">
						<i class="fa fa-pinterest-p"></i>
					</a>
				</div>
			</div>
			<div class="large-4 medium-4 columns">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" style="background-image: url('<?php echo get_field('image_logo', 'option');?>');"></a>
			</div>
			<div class="large-4 medium-4 columns">
				<!-- <form>
					<input type="text" class="subscribe-field mail-check text-center" name="" placeholder="sign up for our newsletter">
				</form> -->
				
				<?php echo do_shortcode('[contact-form-7 id="89" title="Newsletter"]'); ?>
			</div>
		</div>
	</header>
