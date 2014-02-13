
<?php get_header(); ?>
<?php get_sidebar(); ?> <!-- AS Used on the everything BUT the Main page, has only the left sidebar-->
<div id="" class="content-area">
	<div id="main_content" class="calcHeight">
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<div id="" class="OuterPostWrap">
					<h1>
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<img src="<?php the_field('person_photo');?>" alt="Team-member photo" height="144" width="120">
					
					<div class="teammember-<?php the_field('objectives');?>"><h4>Objectives:</h4><?php the_field('objectives');?></div>
					<div class="<?php the_field('affiliations');?>"><h4>Affiliations:</h4><?php the_field('affiliations');?></div>
					<div class="<?php the_field('project_objectives');?>"><h4>Project Objectives:</h4><?php the_field('project_objectives');?></div>

					<div class="the_content"><h4>Bio:</h4><?php the_content();?></div>
			</div><!-- END .OuterPostWrap -->
			<?php endwhile; ?> 
			 <?php else : ?> 
		 		<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

</div>

<?php get_footer(); ?>