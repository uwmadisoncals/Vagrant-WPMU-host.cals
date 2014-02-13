<?php get_header(); ?>
<?php get_sidebar(); ?>


<div id="" class="content-area">
	<div id="main_content" class="calcHeight">
		<?php if ( have_posts() ) : ?>
			<header class="" id="">
				<h1 class="" id="" ><?php printf(__('Search Results for "%s" :','sustainabledairy'), '<span style="text-decoration:underline">'. get_search_query() . '</span>' )?></h1>
			</header>
			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('calcHeight'); ?>>
					<h2>
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<?php the_excerpt();?>
					<a href="<?php echo get_permalink(); ?>"> Read More...</a>
				</div>
			<?php endwhile;?>
		<?php else : ?>
			<!-- <php get_template_part('no-results', 'search');?>-->
			<p>SORRY</p>
		<?php endif?>


	</div><!-- #content -->
</div><!-- #primary -->
</div>

<?php get_footer(); ?>