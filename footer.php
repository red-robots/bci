<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */


$address = get_field('address', 'option');
$direct_phone = get_field('direct_phone', 'option');
$lab_phone = get_field('lab_phone', 'option');
// $linkedin_link = get_field('linkedin_link', 'option');
// $ncpp_link = get_field('ncpp_link', 'option');
$sitemap_link = get_field('sitemap_link', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				
			<div class="col">
				<h3><?php bloginfo('name'); ?></h3>
				<div class="item">
					<?php echo $address; ?>
				</div><!-- item -->
				<div class="item">
					<?php 
						if( $direct_phone ) echo 'Direct: ' . $direct_phone;
						if( $direct_phone ) echo '<br>';
						if( $lab_phone ) echo 'Lab: ' . $lab_phone;
					 ?>
				</div><!-- item -->
				
			</div><!-- col -->

			<div class="col">
				<h3>Subsidiary of</h3>
				<?php 
				
				if( have_rows('subsidiaries', 'option') ) : while( have_rows('subsidiaries', 'option') ) : the_row(); 

						
						$logo = get_sub_field('subsidiary', 'option');
						$link = get_sub_field('subsidiary_link', 'option');
						$size = 'full';

						
				?>

					<div class="item">
						<?php if( $link ) echo '<a target="_blank" href="' . $link . '">';?>
							<?php echo wp_get_attachment_image( $logo, $size ); ?>
						<?php if( $link ) echo '</a>';?>
					</div>

			<?php endwhile; endif; ?>
			</div><!-- col -->

			<div class="col">
				<h3>Connect with us</h3>
				<?php 
				$linkedin_link = get_field('linkedin_link','option');

				if( $linkedin_link ) {
					echo '<div class="social"><a href="'. $linkedin_link . '">Linked In</a></div>';
				}

				if( have_rows('connections', 'option') ) : 

					echo '<section class="connections">';

					while( have_rows('connections', 'option') ) : the_row(); 

						$connect_logo = get_sub_field('connect_logo', 'option');
						$connect_link = get_sub_field('connect_link', 'option');
					
				?>

					<div class="conn-item">
						<?php if( $connect_link ) echo '<a target="_blank" href="' . $connect_link . '">';?>
							<?php echo wp_get_attachment_image( $connect_logo, $size ); ?>
						<?php if( $connect_link ) echo '</a>';?>
					</div>

			<?php endwhile; 

			echo '</div>';

			endif; ?>
				
			</div><!-- col -->
			

			</div><!-- .site-info -->

			<div class="footer-bottom">
				<div class="col">
					<div class="item">
					&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?>. All Rights Reserved.
				</div><!-- item -->
				</div>
				<div class="col">
					<div class="item">
						<a href="http://hubbard.com/">
							<img src="<?php bloginfo('template_url'); ?>/images/hubbard.png">
						</a>
					</div>
				</div>
				<div class="col">
					<div class="item">
					<?php echo '<a href="' . $sitemap_link . '">sitemap</a> | Site by <a target="_blank" href="http://bellaworksweb.com/">Bellaworks</a>'; ?>
				</div><!-- item -->
				</div>
			</div><!-- footer bottom -->

	</div><!-- wrapper -->
	</footer><!-- #colophon -->

</div><!-- #page -->
<?php the_field('google_analytics', 'option'); ?>
<?php wp_footer(); ?>

</body>
</html>
