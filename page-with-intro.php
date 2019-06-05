<?php
/*
Template Name: Page with Header Intro
*/

get_header(); ?>

	<div class="content pageIntro">
		<div class="page-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<div class="introText"><?php the_field('intro_text');?></div>
					</header> <!-- end article header -->
				</div>
			</div>
		</div>

		<div class="grid-container">
			<div class="inner-content grid-x grid-margin-x grid-padding-x">
	    	<main class="main small-12 large-8 medium-8 cell" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'page' ); ?>

		    <?php endwhile; endif; ?>

				</main> <!-- end #main -->

	    <?php get_sidebar(); ?>

			</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>