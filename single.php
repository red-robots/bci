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
		?>

	<section class="home-banner">
		<?php echo wp_get_attachment_image( $photo, $size ); ?>
	</section>


<div class="wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php  the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="type"><?php echo $postTitle; ?></div>
					<div class="city"><?php echo $city; ?></div>
					<?php echo $desc; ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
endwhile; // End of the loop.

get_sidebar();
?>
</div>
<?php 
get_footer();
