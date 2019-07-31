<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">
		<div class="page-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<header class="small-12 medium-12 large-12 cell">
						<h1 class="page-title"><?php the_title(); ?></h1>
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

					<?php
						// Test for Stories
						if (get_field('story_title')) {
							// if stories are detected
							get_template_part('parts/stories');
						}
						else {
							// do nothing
						}
					?>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>