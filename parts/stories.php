<?php
/**
 * The template is for displaying the enewsletter sign up modal
 *
 *  It contains the code to bring in ACF field to allow client to add embed code.
 *
 *
 */
?>
<div class="stories grid-x grid-padding-x grid-margin-x">

  <div class="small-12 medium-4 large-4 cell">
    <img src="<?php the_field('story_image');?>"alt="Afterschool Story"/>
  </div>

  <div class="small-12 medium-8 large-8 cell story">
      <h2><?php the_field('story_title');?></h2>
      <div class="story-text"><?php the_field('story_text');?></div>
      <blockquote><?php the_field('story_testimonial');?>
        <span class="author"><?php the_field('client_name');?></span>
      </blockquote>
  </div>

</div>