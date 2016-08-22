<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 


// get homepage
$post = get_post(2); 
setup_postdata( $post );
 
	$image = get_field('banner');
	$size = 'full';

	$welcome_text = get_field('welcome_text');
	$about_text = get_field('about_text');
	$about_link = get_field('about_link');
	$our_core_values_description = get_field('our_core_values_description');
	$featured_project = get_field('featured_project');
 



	if( $image ) { 
?>

		<section class="home-banner">
			<?php echo wp_get_attachment_image( $image, $size ); ?>
		</section>

	<?php } ?>


	<div id="primary" class="">
		<main id="main" class="site-main" role="main">


		<section class=" sections about ">
			<h2>About Us</h2>
			<div class="desc">
			<?php echo $about_text; ?>
			</div><!-- desc -->
			<div class="learnmore">
				<a href="<?php echo $about_link; ?>">
					learn more <i class="fa fa-caret-right fa-2x" aria-hidden="true"></i>
				</a>
			</div>
		</section>

		<section class="sections grey values">
			<div class="wrapper">
				<div class="flex">

					<header class="title">
						<h2>Our Core Values</h2>
						<div class="desc">
							<?php echo $our_core_values_description; ?>
						</div><!-- desc -->
					</header>
				
					<?php if(have_rows('our_core_values')) : while(have_rows('our_core_values')) : the_row(); 

						$title = get_sub_field('title');
						$icon = get_sub_field('icon');
						$desc = get_sub_field('summary');
					?>


					<div class="blue-box-cont">
						<div class="blue-box">
							<div class="icon">
								<?php echo wp_get_attachment_image( $icon, $size ); ?>
							</div><!-- icon -->
							<h3><?php echo $title; ?></h3>
							<?php echo $desc; ?>
						</div><!-- blue-box -->
					</div><!-- blue box cont -->

				<?php endwhile; endif; ?>
				</div><!-- flex -->
			</div><!-- wrapper -->
		</section>

		<section class=" sections post wrapper">
			<?php 
				wp_reset_postdata();

				if( $featured_project != '' ) :
					$post = $featured_project; 
					setup_postdata( $post );

					$postTitle = get_field('title');
					$city = get_field('city');
					$photo = get_field('photo');
					?>

					<article class="post">
						<header class="red">
							
							<h3><?php the_title(); ?></h3>
							<div class="type"><?php echo $postTitle; ?></div>
							<div class="city"><?php echo $city; ?></div>
							<div class="excerpt">
								<?php echo $desc; ?>
							</div><!-- excerpt -->

							<div class="learnmore  lm-right">
								Learn More <i class="fa fa-caret-right fa-2x" aria-hidden="true"></i>
							</div>

							
						</header>
						<div class="photo">
							<?php echo wp_get_attachment_image( $photo, $size ); ?>
						</div><!-- photo -->

						<div class="link"><a href="<?php the_permalink(); ?>"></a></div>
						
					</article>

				<?php 
				wp_reset_postdata();
				else : 

					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'project',
					'posts_per_page' => 1,
					'paged' => $paged,
				));
					if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

					$postTitle = get_field('title');
					$city = get_field('city');
					$photo = get_field('photo');
					$desc = get_field('description');

					?>

					<article class="post">
						<header class="red">
							
							<h3><?php the_title(); ?></h3>
							<div class="type"><?php echo $postTitle; ?></div>
							<div class="city"><?php echo $city; ?></div>
							<div class="excerpt">
								<?php echo $desc; ?>
							</div><!-- excerpt -->

							<div class="learnmore  lm-right">
								Learn More <i class="fa fa-caret-right fa-2x" aria-hidden="true"></i>
							</div>

							
						</header>
						<div class="photo">
							<?php echo wp_get_attachment_image( $photo, $size ); ?>
						</div><!-- photo -->

						<div class="link"><a href="<?php the_permalink(); ?>"></a></div>

					</article>

				<?php 
				endwhile;
				endif;

				endif; // if post was picked

			 ?>
		</section>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
wp_reset_postdata();

get_footer();
