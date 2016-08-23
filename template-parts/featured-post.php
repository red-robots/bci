<?php 
$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'project',
	'posts_per_page' => 1
	));
	if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

	$postTitle = get_field('title');
	$city = get_field('city');
	$photo = get_field('photo');
	$desc = get_field('description');
	$size = 'full';

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