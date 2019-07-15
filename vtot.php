<?php
/*
Template Name: VT9to26
*/

get_header(); ?>

	<div class="content">
		<div class="vtot">
			<div class="grid-container">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/9to26logo.png" alt="Vermont 9 to 26 Coalition"/>
			</div>
		</div>
		<div class="page-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<!--<div class="introText"><?php //the_field('intro_text');?></div>-->
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
				?>
				<div class="stories grid-x grid-padding-x grid-margin-x">

					<div class="small-12 medium-4 large-4 cell">
						<img src="<?php the_field('story_image');?>"alt="Afterschool Story"/>
					</div>

					<div class="small-12 medium-8 large-7 cell story">
							<h2><?php the_field('story_title');?></h2>
							<div class="story-text"><?php the_field('story_text');?></div>
							<blockquote><?php the_field('story_testimonial');?>
								<span class="author"><?php the_field('client_name');?></span>
							</blockquote>
					</div>

				</div>
				<?php
			}
			else {
				// do nothing
			}
			?>

	</div> <!-- end #content -->

<?php get_footer(); ?>