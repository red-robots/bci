<?php
/**
 * Template Name: Sitemap
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile; // End of the loop.

			wp_nav_menu( array( 'theme_location' => 'sitemap' ));

			
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
?>
</div>
<?php
get_footer();
