<!-- Note to self, Daniel, this is the main page, click on the cow-->
<?php get_header(); ?>
<?php get_sidebar(); ?> <!-- AS Used on the Main page, has both left and right sidebars-->

	</div><!--#primary -->


	<div id="main_content" class="calcHeight" >
		 <?php if (function_exists( 'muneeb_ssp_slider')) {muneeb_ssp_slider( 214 );} ?>
		

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('calcHeight'); ?>>
					<h1 class="loopGen">
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<div class="featuredImage"><?php echo catch_that_image();?></div>
					<?php the_excerpt();?>
				</div>
			<?php endwhile; ?> 
			 <?php else : ?> 
			 	<!-- Sample Comment -->
		 		<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>

</div> 

<?php get_footer(); ?>
