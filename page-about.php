<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.

			// Pull in featured post
			//get_template_part('template-parts/featured-post');

			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
$image = get_field('sidebar_image');
$size = 'full';
$sidebar_text = get_field('sidebar_text');
$sidebar_text_link = get_field('sidebar_text_link');


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
				if(have_rows('items')) : while(have_rows('items')) : the_row(); 
					$item = get_sub_field('item');
		?>
					<div class="download-row">
						<?php echo '<li>' . $item . '</li>'; ?>
					</div><!-- download row -->
		<?php 
			endwhile; endif; // sub repeater
		endwhile; endif; ?>

		<?php echo wp_get_attachment_image( $image, $size ); ?>


	<div class="learnmore white">
		<a href="<?php echo $sidebar_text_link; ?>"><?php echo $sidebar_text; ?></a>
	</div>


	</section>
</aside><!-- #secondary -->


<?php 
get_footer();
