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
                    	<h4> Join Our Newsletter <i class="fi-arrow-right"></i></h4>
                      <a class="button" data-open="emailsignup">Sign Up!</a>
      	    			</div>

                  <div class="small-12 medium-4 large-3 cell social">
                    <a href="https://twitter.com/VTAfterschool" target="_blank"><span class="circle"><i class="fi-social-twitter"></i></span></a>
                    <a href="https://www.facebook.com/VTafterschool" target="_blank"><i class="fi-social-facebook"></i></a>
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
                    <h3><?php the_field('third_column_title', 'option'); ?></h3>
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

          <!-- Modal/reveal for signup form -->
          <div class="reveal" id="emailsignup" data-reveal>
            <h2>Stay Connected with Vermont Afterschool</h2>
            <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup">
              <form action="https://vermontafterschool.us1.list-manage.com/subscribe/post?u=17e00c5c58980ea074c0aec28&amp;id=c7b7e51221" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
              <div id="mc_embed_signup_scroll">
              <div class="mc-field-group">
              	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
              </label><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL"></div>
              <div class="mc-field-group">
              	<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
              </label><input type="text" value="" name="FNAME" class="required" id="mce-FNAME"></div>
              <div class="mc-field-group">
              	<label for="mce-LNAME">Last Name  <span class="asterisk">*</span></label><input type="text" value="" name="LNAME" class="required" id="mce-LNAME"></div>
              <div class="mc-field-group">
              	<label for="mce-MMERGE3">Organization Affiliation  <span class="asterisk">*</span></label><input type="text" value="" name="MMERGE3" class="required" id="mce-MMERGE3"></div>
              <div class="mc-field-group input-group">

              Which topics would you like to hear about?
              <ul>
               	<li><input type="checkbox" value="4" name="group[4473][4]" id="mce-group[4473]-4473-0"><label for="mce-group[4473]-4473-0">General News</label></li>
               	<li><input type="checkbox" value="1" name="group[4473][1]" id="mce-group[4473]-4473-1"><label for="mce-group[4473]-4473-1">Advocacy and Action Alerts</label></li>
               	<li><input type="checkbox" value="2" name="group[4473][2]" id="mce-group[4473]-4473-2"><label for="mce-group[4473]-4473-2">STEM</label></li>
               	<li><input type="checkbox" value="64" name="group[4473][64]" id="mce-group[4473]-4473-3"><label for="mce-group[4473]-4473-3">VT9to26 Coalition</label></li>
              </ul>
              </div>
              <div id="mce-responses" class="clear">
              <div class="response" id="mce-error-response" style="display:none"></div>
              <div class="response" id="mce-success-response" style="display:none"></div>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_17e00c5c58980ea074c0aec28_c7b7e51221" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
              </div>
              </form></div>
              <script type="text/javascript" src="//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js"></script><script type="text/javascript">(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
              <!--End mc_embed_signup-->


            <button class="close-button" data-close aria-label="Close modal" type="button">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

  			</div>  <!-- end .off-canvas-content -->

  		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->