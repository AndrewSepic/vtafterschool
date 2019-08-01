<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

 get_header(); ?>

 	<div class="content">
 		<div class="page-header">
 			<div class="grid-container">
 				<div class="grid-x grid-margin-x grid-padding-x">
 					<header class="article-header">
 						<h1 class="page-title">Blog</h1>
 					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
 					</header> <!-- end article header -->
 				</div>
 			</div>
 		</div>

 		<div class="grid-container">

 			<div class="inner-content grid-x grid-margin-x grid-padding-x">

 			    <main class="main small-12 medium-8 large-8 cell" role="main">

 			    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 						<!-- To see additional archive styles, visit the /parts directory -->
 						<?php  get_template_part( 'parts/loop', 'archive' ); ?>

 					<?php endwhile; ?>

 						<?php joints_page_navi(); ?>

 					<?php else : ?>

 						<?php get_template_part( 'parts/content', 'missing' ); ?>

 					<?php endif; ?>

 				</main> <!-- end #main -->

				<?php if ( is_active_sidebar( 'blog' ) ) { ?>
	    			<div id="blogsidebar" class="sidebar small-12 medium-4 large-3 cell" role="complementary">
	        			<?php dynamic_sidebar('blog'); ?>
	    			</div>
				<?php } ?>
				
 		    </div> <!-- end #inner-content -->

 	</div> <!-- end #content -->

 <?php get_footer(); ?>