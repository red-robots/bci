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

$title = get_field('title');
$image = get_field('image');
$size = 'full';
$technique_overview = get_field('technique_overview');


?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<section class="blue-downloads">

		
			<?php echo '<h2>' . $title . '</h2>'; ?>
		

		<?php echo wp_get_attachment_image( $image, $size ); ?>

		<?php echo $technique_overview; ?>

		<?php if(have_rows('techniques')) : while(have_rows('techniques')) : the_row(); 
				$technique_title = get_sub_field('technique_title');
				$technique_description = get_sub_field('technique_description');
				?>
				<div class="item">
					<?php 
						echo '<li>';
						echo $technique_title; 
						echo '<br>';
						echo $technique_description;
						echo '</li>';
					?>
				</div>

		
		<?php 
	
		endwhile; endif; ?>
	</section>
</aside><!-- #secondary -->
