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
									<a class="pagination" href="/blog">View All Posts &raquo;</a>
								</div>

								<!--- Posts Begin -->
								<?php

									 $args = array('posts_per_page' => 3,);
									 $homepage_posts = new WP_Query($args);

									 if($homepage_posts->have_posts()) :
											while($homepage_posts->have_posts()) :
												 $homepage_posts->the_post();
								?>
								<div class="cell small-12 medium-4 large-4 post">
									<span class="cat"><?php echo get_the_category_list(', ');?></span>
									<a href="<?php the_permalink();?>">
										<h2><?php the_title() ?></h2>
									</a>
									<span class="meta">By <?php echo get_the_author_posts_link();?></span>
									<?php the_excerpt()?>
									<a class="readmore" href="<?php the_permalink();?>">Read More...</a>
								</div>


								<?php
											endwhile;
									 else:
								?>

											Oops, there are no posts.

								<?php
							endif; ?>

							</div>
						</div> <!-- end grid-container -->
					</div> <!-- end .ntnWrapper -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>