<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">

          <div class="footerTopWrap">
            <div class="grid-container">
              <div class="top-footer grid-x">

      						<div class="small-12 medium-8 large-8 cell newsletter">
                      <img class="graphic" src="<?php echo get_template_directory_uri();?>/assets/images/vtafter_graphic_mark.svg" alt="Vermont Afterschool Newsletter"/>
                    	<h4> Join Our Newsletter</h4>
                      <input placeholder="Enter your email"></input>
      	    			</div>

                  <div class="small-12 medium-4 large-4 cell latest-news">
                    <a href="http://www.facebook.com/pages/HowardCenter/106516727431" target="_blank"><span class="circle"><i class="fi-social-facebook"></i></span></a>
                    <a href="https://twitter.com/HowardCenterVT" target="_blank"><span class="circle"><i class="fi-social-twitter"></i></span></a>
      	    			</div>

      				</div> <!-- end #top-footer -->
            </div> <!-- end .grid-container -->
          </div> <!-- end .footerTopWrap -->

              <!-- Bottom Footer -->
            <div class="grid-container">
              <div class="bottom-footer grid-x grid-margin-x grid-padding-x">

                  <div class="small-12 medium-6 large-6 cell">
                    <h3> <?php the_field('first_column_title', 'option'); ?></h3>
                    <p>
                      <?php the_field('vermont_afterschool_about', 'option');?>
                    </p>
                  </div>

                  <div class="small-12 medium-6 large-3 cell">
                    <h3><?php the_field('second_column_title', 'option'); ?></h3>
                    <p>
                      <?php the_field('contact_information', 'option'); ?>
                    </p>
                  </div>

                  <div class="small-12 medium-6 large-3 cell">
                    <h2><?php the_field('third_column_title', 'option'); ?></h2>
                    <ul class="quickLinks">
                      <?php
                      // check if the repeater field has rows of data
                        if( have_rows('quick_links', 'option') ):

                          // loop through the rows of data
                            while ( have_rows('quick_links', 'option') ) : the_row();   ?>

                              <li> <a href="<?php the_sub_field('quick_link_link', 'option')?>"><?php the_sub_field('quick_link_text', 'option');?></a></li>   <?php

                            endwhile;

                        else :
                            // no rows found
                        endif;
                        ?>
                    </ul>

                  </div>

                <div class="small-12 medium-12 large-12 cell copy">
                  <p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. | <a href="/privacy-policy">Privacy Policy</a></p>
                </div>

              </div><!-- end .bottom-footer -->

            </div>

  				</footer> <!-- end .footer -->

  			</div>  <!-- end .off-canvas-content -->

  		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->