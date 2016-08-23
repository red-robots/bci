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

				<div class="download-col-2">Saftey Data Sheets</div>
				<div class="download-col-2">Technical Sheets</div>

		<?php	// Sub Repeater
				if(have_rows('item')) : while(have_rows('item')) : the_row(); 
					$title = get_sub_field('title');
					$description = get_sub_field('description');
					$safety_data_sheets = get_sub_field('safety_data_sheets');
					$technical_sheets = get_sub_field('technical_sheets');
		?>
					<div class="download-row">
						<div class="download-col-1">
							<?php 
								echo '<li>';
								echo $title; 
								echo '<br>';
								echo $description;
								echo '</li>';
							?>
						</div><!-- download col 1 -->

						<div class="download-col-2">
							<div class="download">
								<a href="<?php echo $safety_data_sheets; ?>">
									<i class="fa fa-2x fa-download" aria-hidden="true"></i>
								</a>
							</div><!-- download -->
						</div><!-- download-col-2 -->

						<div class="download-col-2">
							<div class="download">
								<a href="<?php echo $technical_sheets; ?>">
									<i class="fa fa-2x fa-download" aria-hidden="true"></i>
								</a>
							</div><!-- download -->
						</div><!-- download-col-2 -->
					</div><!-- download row -->
		<?php 
		endwhile; endif; // sub repeater
		endwhile; endif; ?>
	</section>
</aside><!-- #secondary -->
