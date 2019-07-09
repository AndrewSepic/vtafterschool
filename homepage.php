<?php
/*
Template Name: Homepage
*/

get_header(); ?>

	<div class="content">

		<div class="grid-x grid-margin-x heroWrapper">
			<?php $hero = get_field('hero_section', 'option');

				if ( $hero ): ?>
					<div id="hero" style="background-image: url('<?php echo $hero['hero_image']['url']; ?>')">
						<!-- <img src="" alt="Vermont Afterschool" /> -->
						<div class="grid-container">
							<div id="heroTitle" class="cell small-12 large-4">
								<span class="intro"><?php echo $hero['intro']; ?></span>
								<h4><?php echo $hero['headline']; ?></h4>
								<span class="outro"><?php echo $hero['outro']; ?></span>
							</div>
						</div>
					</div>
				<?php endif; ?>
		</div>


			<div class="inner-content grid-x grid-margin-x">
		    <main class="main small-12 medium-12 large-12 cell" role="main">

					<!-- First Section -->
					<div class="firstWrapper">
						<div class="arrow"></div>
						<div class="grid-container">
							<div class="grid-x home-1">
								<div class="cell small-12 medium-12 large-8 large-offset-2">
									<h2><?php the_field('block_title_1', 'options');?></h2>
									<p><?php the_field('block_content_1', 'options');?></p>
								</div>
							</div>
						</div>
					</div><!-- end .firstWrapper -->

					<!-- Second Section -->
					<div class="secondWrapper">
						<div class="arrow"></div>
						<div class="grid-container">
							<div class="grid-x home-2">
								<div class="cell small-12 medium-6 large-5 large-offset-6 medium-offset-6">
										<h2><?php the_field('block_title_2', 'options');?></h2>
										<p><?php the_field('block_content_2', 'options');?></p>
										<a href="<?php the_field('button_link', 'options');?>"class="button"><?php the_field('button_text', 'options');?></a>
								</div>
							</div>
						</div>
					</div><!-- end .secondWrapper -->

					<!-- Third Section -->
					<div class="thirdWrapper">
						<div class="arrow"></div>
						<div class="grid-container">
							<div class="grid-x home-3">
								<div class="cell small-12 medium-6 large-5 large-offset-1">
									<h2><?php the_field('block_title_3', 'options');?></h2>
									<p><?php the_field('block_content_3', 'options');?></p>
									<a href="<?php the_field('button_link_1', 'options');?>" class="button orange"><?php the_field('button_text_2', 'options');?></a> <a href="<?php the_field('button_link_2', 'options');?>" class="button"><?php the_field('button_text_2', 'options');?></a>
								</div>
								<div class="cell small-12 medium-6 large-5">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/logos.jpg" alt="collaborators"/>
								</div>
							</div>
						</div>
					</div><!-- end .third -->

					<div class="noteWrapper">
						<div class="grid-container">
							<div class="grid-x grid-padding-x grid-margin-x noteworthy">
								<div class="cell small-12 medium-12 large-12 header">
									<h5>Noteworthy</h5>
									<a class="pagination">View All Posts &raquo;</a>
								</div>


									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">Opinion</span>
										<h2>Post Title With Two Lines</h2>
										<span class="meta">By Author, Position</span>
										<?php // get_template_part( 'parts/content', 'byline' ); ?>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>

									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">News</span>
										<h2>Call for Youth Art</h2>
										<span class="meta">By Author, Position</span>
										<?php // get_template_part( 'parts/content', 'byline' ); ?>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>

									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">Data Digest</span>
										<h2>Weapons & School Violence</h2>
										<span class="meta">By Author, Position</span>
										<?php // get_template_part( 'parts/content', 'byline' ); ?>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php //the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>
							</div>
						</div> <!-- end grid-container -->
					</div> <!-- end .ntnWrapper -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>