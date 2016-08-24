<?php
/**
 * Template Name: Techniques
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

$section_title = get_field('section_title');

// Hovers
$fog_seal = get_field('fog_seal');
$pavement_sealer = get_field('pavement_sealer');
$chip_seal = get_field('chip_seal');
$microsurfacing = get_field('microsurfacing');
$thin_lift_hot_mix_overlay = get_field('thin_lift_hot_mix_overlay');
$cape_seal = get_field('cape_seal');
$full_depth_reclamation = get_field('full_depth_reclamation');
$recyclflex = get_field('recyclflex');

?>
<div class="wrapper">
	<div id="primary" class="content-area-full">
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


	<!-- 

		Hover Titles graph

	-->

	
</div><!-- wrapper -->
<section class="grey grey-wrap">

	<h2><?php echo $section_title; ?></h2>

	<div class="graph-cont">
		<div class="graph">
			<img src="<?php bloginfo('template_url'); ?>/images/graph.png" />
		</div><!-- graph -->

<!-- Visible tags -->
		<div class="fog-seal graph-titles wow zoomIn" data-wow-duration=".5s" data-graph="fog-seal">
			Fog Seal
		</div>
		<div class="fog-seal-hover graph-hover" data-graph="fog-seal">
			<?php echo $fog_seal; ?>
		</div>
<!-- Hovers -->
		<div class="pavement-sealer graph-titles  wow zoomIn" data-wow-duration=".5s" data-graph="pavement-sealer">
			pavement sealer
		</div>
		<div class="pavement-sealer-hover graph-hover" data-graph="pavement-sealer">
			<?php echo $pavement_sealer; ?>
		</div>
<!-- Hovers -->
		<div class="chip-seal graph-titles  wow zoomIn" data-wow-duration=".5s" data-graph="chip-seal">
			chip seal
		</div>
		<div class="chip-seal-hover graph-hover" data-graph="chip-seal">
			<?php echo $chip_seal; ?>
		</div>

<!-- Hovers -->
		<div class="microsurfacing graph-titles  wow zoomIn " data-wow-duration=".5s" data-graph="microsurfacing">
			microsurfacing
		</div>
		<div class="microsurfacing-hover graph-hover" data-graph="microsurfacing">
			<?php echo $microsurfacing; ?>
		</div>

<!-- Hovers -->
		<div class="thin-lift-hot-mix-overlay graph-titles  wow zoomIn" data-wow-duration=".5s" data-graph="thin-lift-hot-mix-overlay">
			thin lift hot mix overlay
		</div>
		<div class="thin-lift-hot-mix-overlay-hover graph-hover" data-graph="thin-lift-hot-mix-overlay">
			<?php echo $thin_lift_hot_mix_overlay; ?>
		</div>

<!-- Hovers -->
		<div class="cape-seal graph-titles  wow zoomIn" data-wow-duration=".5s" data-graph="cape-seal">
			cape seal
		</div>
		<div class="cape-seal-hover graph-hover" data-graph="cape-seal">
			<?php echo $cape_seal; ?>
		</div>

<!-- Hovers -->
		<div class="full-depth-reclamation graph-titles  wow zoomIn" data-wow-duration=".5s" data-graph="full-depth-reclamation">
			full depth reclamation
		</div>
		<div class="full-depth-reclamation-hover graph-hover" data-graph="full-depth-reclamation">
			<?php echo $full_depth_reclamation; ?>
		</div>

<!-- Hovers -->
		<div class="recyclflex graph-titles  wow zoomIn" data-wow-duration=".5s" data-graph="recyclflex">
			recyclflex
		</div>
		<div class="recyclflex-hover graph-hover" data-graph="recyclflex">
			<?php echo $recyclflex; ?>
		</div>


	</div><!-- graph-cont -->
</section>

<div class="wrapper">
	<?php get_template_part('template-parts/featured-post'); ?>
</div><!-- wrapper -->

<?php
get_footer();
