<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cldigitaldesign-no-frameworks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96357854-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-96357854-2');
	</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
 
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cldigitaldesign-no-frameworks' ); ?></a>

	<header class="header-wrapper">
        <div class="main-header">

            <div class="name">
            
                <a href="#banner"><img class="header-logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/cldigitaldesign3.png" alt="cl digital design logo"></a>

                <div class="hamburger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>

            </div>

            <ul class="main-nav">
				<?php 
            
				$args = array(
					'theme_location' => 'menu-1',
				);
            
				?>
            
				<?php wp_nav_menu( $args ); ?>
                <!--<li><a href="#banner">Home</a></li>
                <li><a href="#expertise">Expertise</a></li>
                <li><a href="#work">Work</a></li>
                <li><a href="#contact-form">Contact</a></li>-->
            </ul>

        </div><!--/.main-header-->
    </header>
