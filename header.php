<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>
<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
	    <?php } ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/foundation-icons/foundation-icons.css" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">

			<!-- Load off-canvas container. Feel free to remove if not using. -->
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>

			<div class="off-canvas-content" data-off-canvas-content>

				<header class="header" role="banner">

          <!-- Logo & Call Buttons -->
         <div class="grid-container">
           <div class="headerMain grid-x">


               <div class="cell small-12 large-8">
                  <a href="<?php echo home_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/vtafter_logo.svg" alt="<?php echo get_bloginfo( 'name' );?>"/></a>
                  <img class="tagline" src="<?php echo get_template_directory_uri(); ?>/assets/images/VTA_tag.png" alt="Strengthening Programs & Empowering Youth"/>
               </div>

               <div class="cell small-12 medium-6 large-4 utility hide-for-small-only">
                 <nav role="navigation">
                     <?php vtas_utility_links(); ?>
                   </nav>
               </div>

              </div>
            </div>

            <div class="navWrap">
              <div class="grid-container">

    					 <!-- This navs will be applied to the topbar, above all content
    						  To see additional nav styles, visit the /parts directory -->
    					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
             </div>
           </div>
				</header> <!-- end .header -->