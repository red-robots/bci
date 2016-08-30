<?php
/**
 * Template Name: Facility
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

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


			<?php 

				$images = get_field('gallery');

				if( $images ): ?>
				    <div id="slider" class="flexslider">
				        <ul class="slides">
				            <?php foreach( $images as $image ): ?>
				                <li>
				                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				                    <p><?php echo $image['caption']; ?></p>
				                </li>
				            <?php endforeach; ?>
				        </ul>
				    </div>
				    
				<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<section class="blue-downloads">

<?php 

$sidebar_text_link = get_field('sidebar_text_link');
$sidebar_link = get_field('sidebar_link');
$image = get_field('sidebar_image');
$size = 'full';

echo wp_get_attachment_image( $image, $size ); ?>

<div class="learnmore white">
	<a href="<?php echo $sidebar_link; ?>"><?php echo $sidebar_text_link; ?></a>
</div>
	</section>
</aside>


<?php
get_footer();
