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
$linkedin_link = get_field('linkedin_link', 'option');
$ncpp_link = get_field('ncpp_link', 'option');
$sitemap_link = get_field('sitemap_link', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				
			<div class="col">
				<h3><?php bloginfo('name'); ?></h3>
			</div><!-- col -->

			<div class="col">
				
			</div><!-- col -->

			<div class="col">
				
			</div><!-- col -->
			

			</div><!-- .site-info -->
	</div><!-- wrapper -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
