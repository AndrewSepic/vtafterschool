<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="content">

	<div class="page-header">
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-padding-x">
				<header class="article-header">
					<h1 class="page-title">Blog</h1>
				</header> <!-- end article header -->
			</div>
		</div>
	</div>

	<div class="grid-container">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">

			<main class="main small-12 medium-8 large-8 cell" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'single' ); ?>

			    <?php endwhile; else : ?>

			   		<?php get_template_part( 'parts/content', 'missing' ); ?>

			    <?php endif; ?>

			</main> <!-- end #main -->

			<?php if ( is_active_sidebar( 'blog' ) ) { ?>
    			<div id="blogsidebar" class="sidebar small-12 medium-4 large-3 cell" role="complementary">
        			<?php dynamic_sidebar('blog'); ?>
    			</div>
			<?php } ?>

		</div> <!-- end #inner-content -->
	</div> <!-- end .grid-container -->
</div> <!-- end #content -->

<?php get_footer(); ?>