
<?php get_header(); ?>
<?php get_sidebar(); ?> <!-- AS Used on the everything BUT the Main page, has only the left sidebar-->
<div id="" class="content-area">
	<div id="main_content" class="calcHeight">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<div id="" class="OuterPostWrap">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="loopGen">
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<?php the_content();?>
				</div>
			</div><!-- END .OuterPostWrap -->
			<?php endwhile; ?> 
			 <?php else : ?> 
		 		<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>