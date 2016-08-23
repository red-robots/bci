<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<section class="blue-downloads">
		<?php if(have_rows('section')) : while(have_rows('section')) : the_row(); 
				$section_title = get_sub_field('section_title'); 
				?>
				<div class="download-col-1">
					<?php echo '<h2>' . $section_title . '</h2>'; ?>
				</div><!-- download col 1 -->

				

		<?php	// Sub Repeater
				if(have_rows('item')) : while(have_rows('item')) : the_row(); 
					$item = get_sub_field('item');
		?>
					<div class="download-row">
						<?php echo '<li>' . $item . '</li>'; ?>
					</div><!-- download row -->
		<?php 
			endwhile; endif; // sub repeater
		endwhile; endif; ?>
	</section>
</aside><!-- #secondary -->
