<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar('about');
?>
</div><!-- wrapper -->
<div class="wrapper">
	<?php
	// Pull in featured post
	get_template_part('template-parts/featured-post');
	?>
</div>
<?php 
get_footer();
