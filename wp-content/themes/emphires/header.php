<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.0
 */
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublie')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="<?php echo esc_url('https://gmpg.org/xfn/11') ?>">
<?php wp_head(); ?>
</head>
<style>
	.cspt-responsive-header-bgcolor-white{
		/* background-image: url("http://localhost/candidature/code_candidature/bg.jpg");
        background-position: 0;
        background-repeat: repeat-y;
        background-size: cover; */
		background-color: #333;
	}
</style>
<body <?php body_class(); ?>>
<?php cspt_preloader(); ?>
<?php 
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>
<div id="page" class="site cspt-parent-header-style-<?php echo esc_attr(cspt_get_base_option('header-style')); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'emphires' ); ?></a>
	<header id="masthead" class="site-header cspt-header-style-<?php echo esc_attr(cspt_get_base_option('header-style')); ?>">
		<?php get_template_part( 'theme-parts/header/header-style',	cspt_get_base_option('header-style') ); ?>
		<?php cspt_header_slider(); ?>
		<?php get_template_part( 'theme-parts/header/title-bar',	cspt_get_base_option('header-style') ); ?>
	</header><!-- #masthead -->
	<div class="site-content-contain <?php cspt_site_content_class(); ?>">
		<div class="site-content-wrap">
			<div id="content" class="site-content container">
				<?php if( cspt_check_sidebar() == true ){ ?>
					<div class="row multi-columns-row">
				<?php } ?>

				<?php
				$unique_id		= esc_attr( uniqid( 'search-form-' ) ); 
				$placeholder	= cspt_get_base_option('header-search-placeholder');
				$btn_text		= cspt_get_base_option('header-search-btn-text');
				?>
				<div class="cspt-header-search-form-wrapper">
					<div class="cspt-search-close"><i class="cspt-base-icon-cancel"></i></div>
					<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
					<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<label for="<?php echo esc_attr($unique_id); ?>">
							<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'emphires' ); ?></span>
						</label>
						<input type="search" id="<?php echo esc_attr($unique_id); ?>" class="search-field" placeholder="<?php echo esc_attr($placeholder); ?>" value="<?php echo get_search_query(); ?>" name="s" />
						<button type="submit" class="search-submit"><?php echo esc_html($btn_text); ?></button>
					</form>
				</div>
