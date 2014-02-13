
<!--DANIEL,NOTE TO SELF, THis page is not being rendered anywhere on the site! Maybe it needs to be configured on the dash? -->

<?php 
if ( is_front_page() && is_home() ){
	// Default homepage
} elseif ( is_front_page()){
?>

	<?php get_header(); ?>
	<?php get_sidebar("left"); ?>
	<div id="" class="content-area">
		<div id="main_content" class="">

	<!-- THIS LOOP GETS THE home Page Contents -->
	<?php 

		$args=array(
		'post_type'=>'page',
		'posts_per_page'=>'1',
		'pagename'=>'home',
		);

	 $custom_query = new WP_Query($args);

	while($custom_query->have_posts()) : $custom_query->the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_content();?>
		</div><!--END #main_content -->

		<?php endwhile; ?>
		<?php wp_reset_postdata();

	?>
</div><!--END .content-area -->

<div id="" class="content-area">
	<div id="main_content" class="">

	<!-- THiS LOOP GETS LATEST 3 posts -->
		<?php 
		
      	$sticky = get_option( 'sticky_posts' );

		$args=array(
		'post_type'=>'post',
		//'p'=>$sticky[0],
		'posts_per_page'=>'3',
		'orderby'=>'date',
		'order'=>'ASC',
		//'tag'=>'news',   //need to determine how to use tagslug or category name 
		'category_name'=>'news',
		);

	 $custom_query = new WP_Query($args);

	while($custom_query->have_posts()) : $custom_query->the_post(); ?>

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
			<h3><?php the_time('F j, Y'); ?></h3>
			<?php the_content();?>
			<p><?php the_tags(); ?></p>
		</div> <!--END #main_content -->

		<?php endwhile; ?>
		<?php wp_reset_postdata();

	?>
</div> <!--END .content-area -->
<?php get_footer(); ?> 


<?php
} elseif ( is_home()){
	//Blog page
} else {
	//everything else
}
?>