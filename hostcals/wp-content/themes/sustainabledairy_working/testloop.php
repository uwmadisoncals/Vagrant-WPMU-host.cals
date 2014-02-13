<!-- TUTORIAL ON WP_QUERY, see http://digwp.com/2011/05/loops/ -->
	<?php 

	$args=array(
	'post_type'=>'post',
	'posts_per_page'=>'3',
	'orderby'=>''
	'order'=>'ASC'
	);

 $custom_query = new WP_Query($args);

while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content();?>
	</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata();
