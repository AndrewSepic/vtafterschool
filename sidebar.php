<?php
/**
 * The sidebar containing the main widget area
 */
 ?>

<div id="sidebar1" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

  <?php
  $rows = get_field('sidebar_images', 'option');
	$rand_row = $rows[ array_rand($rows)];
	$rand_image = $rand_row['sidebar_image']; ?>

	<div id="sidebar-images" class="widget_media_image">
    <img src="<?php echo $rand_image; ?>" alt="Vermont Afterschool Image"/>
  </div>

  <div class="sidebarACF">
    <h4 class="widgettitle"><?php the_field('sidebar_title');?></h4>
    <p><?php the_field('sidebar_content');?></p>
  </div>

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php endif; ?>

</div>
