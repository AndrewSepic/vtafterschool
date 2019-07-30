<?php
/*
Template Name: Conference Template
*/

get_header(); ?>

	<div class="content">
		<div class="page-header">
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-padding-x">
					<header class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell">
						<?php if (! is_page( 'vermont-afterschool-conference')) {
							?>
							<h3 class="confLead">Vermont Afterschool Conference:</h3>
							<?php
							}
							?>
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header> <!-- end article header -->
				</div>
			</div>
		</div>

		<!-- Conference nav -->
		<div class="grid-container confNav">
				<div class="grid-x">
					<div class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell">
						<?php vtas_conference_nav(); ?>
					</div>
				</div>
		</div>
		<!-- end Conference nav -->

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
