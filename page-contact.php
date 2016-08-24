<?php
/**
 * Template Name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$office = get_field('office'); 
$sales = get_field('sales'); 
$map = get_field('map'); 


?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<div class="contact-col">
						<?php echo $office; ?>
					</div>
					<div class="contact-col">
						<?php echo $sales; ?>
					</div>
					<div class="contact-map">
						<?php echo $map; ?>
					</div>
				</div><!-- .entry-content -->

			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
?>
</div>
<?php
get_footer();
