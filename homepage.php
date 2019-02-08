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
						<div class="grid-container">
							<div class="cell small-12 medium-12 large-12 home-1">
								<h2>We Are Vermont Afterschool</h2>
								<p>A staewide non-profit The grid defaults to the full width of the available space. To contain it use the grid-container class. The container will be centered and have a max-width equal to your $grid-container setting (1200px by default), along with padding on the left/right equal to half your $grid-container-padding setting.</p>
							</div>
						</div>
					</div><!-- end .firstWrapper -->

					<!-- Second Section -->
					<div class="secondWrapper">
						<div class="grid-container">
							<div class="cell small-12 medium-12 large-12 home-2">
								<div class="cell small-12 medium-6 large-6 large-offset-6 medium-offset-6">
									<h2>Why We Do This Work</h2>
									<p>A staewide non-profit The grid defaults to the full width of the available space. To contain it use the grid-container class. </p>
									<a class="button">Impacts</a>
								</div>
							</div>
						</div>
					</div><!-- end .secondWrapper -->

					<!-- Third Section -->
					<div class="thirdWrapper">
						<div class="grid-container">
							<div class="cell small-12 medium-12 large-12 home-3">
								<div class="cell small-12 medium-6 large-6">
									<h2>We Rely on Colloboration</h2>
									<p>A staewide non-profit The grid defaults to the full width of the available space. To contain it use the grid-container class. </p>
									<a class="button orange">Join Us</a> <a class="button">Learn More</a>
								</div>
								<div class="cell small-12 medium-6 large-6 home-3">
									Logos go hero
								</div>
							</div>
						</div>
					</div><!-- end .third -->

					<div class="ntnWrapper">
						<div class="grid-container">
							<div class="grid-x grid-padding-x ntn">
								<div class="cell small-12 medium-12 large-12 header">
									<h5>What you Need to Know</h5>
									<a class="pagination">View All Posts &raquo;</a>
								</div>


									<div class="cell small-12 medium-4 large-4 post">
										<span class="cat">Opinion</span>
										<h2>Post Title With Two Lines</h2>
										<span class="meta">By Author, Position</span>
										<p class="excerpt">It was recently public radio fundraising time here in Vermont. Im a big VErmont Public Radio fan and have been knonw to stay tuned through their repeated membership pitches.</p>
										<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
									</div>
							</div>
						</div> <!-- end grid-container -->
					</div> <!-- end .ntnWrapper -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>