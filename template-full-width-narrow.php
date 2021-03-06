<?php
/*
Template Name: Full Width Narrow (No Sidebar)
*/

get_header(); ?>

	<div class="content">
		<div class="page-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<header class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header> <!-- end article header -->
				</div>
			</div>
		</div>

		<div class="grid-container">

			<div class="inner-content grid-x grid-margin-x grid-padding-x">

			    <main class="main small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif; ?>

				</main> <!-- end #main -->

			</div> <!-- end #inner-content -->

		</div> <!-- end .grid-container -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
