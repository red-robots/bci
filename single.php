<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 

		while ( have_posts() ) : the_post(); 

			$postTitle = get_field('title');
			$city = get_field('city');
			$photo = get_field('photo');
			$desc = get_field('description');
			$size = 'banner';

		endwhile; // End of the loop.
		?>




<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		

			<article class="post featured-post">
				
				<header class="red-single">
					
					<h3><?php echo $postTitle; ?></h3>
					<div class="type"></div>
					<!-- <div class="city"><?php //echo $city; ?></div> -->
					<div class="excerpt">
						<?php echo $desc; ?>
					</div><!-- excerpt -->

					<div class="learnmore white lm-right">
						<!-- <a href="<?php the_permalink(); ?>">Learn More</a> -->
					</div>

					
				</header>
				

				<!-- <div class="link"><a href="<?php the_permalink(); ?>"></a></div> -->

				<?php if( have_rows('gallery') ) : ?>
					<section class="photo-gallery">
						<div class="flexslider">
							<ul class="slides">
							<?php while( have_rows('gallery') ) : the_row();

								$image = get_sub_field('image');
								$location = get_sub_field('location');
								$size = 'large';

							?>
								<li>
									<div class="gallery-image">
										<div class="location">
										<?php echo $location; ?>
										</div>
										<?php echo wp_get_attachment_image( $image, $size ); ?>
									</div>
								</li>
								
							<?php endwhile; ?>
							</ul>
						</div><!-- flexslider -->
					</section><!-- photo gallery -->
				<?php endif; ?>

			</article>




			<nav class="nav-single">
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav> <!-- .nav-single  -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php


// get_sidebar();
?>
</div>
<?php 
get_footer();
