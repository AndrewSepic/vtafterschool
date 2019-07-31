<?php
/*
Template Name: Impact Page
*/

get_header(); ?>

	<div class="content pageIntro">
		<div class="page-header">
			<div class="grid-container">
				<div class="grid-x dataPoints">
					<div class="small-12 medium-12 large-12 cell">
						<header class="article-header">
							<h2 class="page-title"><?php the_field('impactHeader'); ?></h2>
						</header>
					</div>

					<div class="small-12 medium-6 large-5 cell">
						<div class="bigNumber"><?php the_field('bigNumber1');?></div>
						<div class="dataSummary"><?php the_field('dataSummary1');?></div>
					</div>

					<div class="small-12 medium-6 large-5 cell">
						<div class="bigNumber"><?php the_field('bigNumber2');?></div>
						<div class="dataSummary"><?php the_field('dataSummary2');?></div>
					</div>

					<div class="small-12 medium-6 large-5 large-offset-1 cell">
						<div class="bigNumber"><?php the_field('bigNumber3');?></div>
						<div class="dataSummary"><?php the_field('dataSummary3');?></div>
					</div>

					<div class="small-12 medium-6 large-5 cell">
						<div class="bigNumber"><?php the_field('bigNumber4');?></div>
						<div class="dataSummary"><?php the_field('dataSummary4');?></div>
					</div>

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

	</div> <!-- end #content -->

<?php get_footer(); ?>