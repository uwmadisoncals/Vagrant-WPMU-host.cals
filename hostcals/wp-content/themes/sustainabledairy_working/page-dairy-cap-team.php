<?php /*

<?php get_header(); ?>
<?php get_sidebar(); ?> <!-- AS Used on the everything BUT the Main page, has only the left sidebar-->
<div id="" class="content-area">
	<div id="main_content" class="calcHeight">
	
	
	<?php
	$args=array(
		'post_type'=>'teammember'
	);
	$iterationCount=0;

	$the_query = new WP_Query($args);
	?>	

		<?php if ( have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div id="<?php echo the_slug(); ?>" class="OuterPostWrap">
					
					<?php echo '<script>console.log('.$iterationCount.');</script>';
						$iterationCount += 1;
					?>

					<h1>
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<img src="<?php the_field('person_photo');?>" alt="Team-member photo" height="144" width="120">
					<div class="teamFieldWrap">
						<div class="teammember-<?php the_field('objectives');?>"><h4>Objectives:</h4><?php the_field('objectives');?></div>
						<div class="<?php the_field('affiliations');?>"><h4>Affiliations:</h4><?php the_field('affiliations');?></div>
						<div class="<?php the_field('project_objectives');?>"><h4>Project Objectives:</h4><?php the_field('project_objectives');?></div>
					</div>
					<div class="clearfix"></div>
					<div class="the_content"><h4>Bio:</h4><?php the_content();?></div>
					<?php
					$mySlug=the_slug();
					if (get_field("is_sticky")){
						echo '<script>$("div#main_content").prepend($("#'. $mySlug . '"));
								console.log("$mySlug now says '.$mySlug .'.");
						</script> ';
					} 
						
					?>
				
			</div><!-- END .OuterPostWrap -->
			
			<?php endwhile; else : ?> 
		 		<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div><!-- #content -->
	</div>

</div>

<?php get_footer(); ?>

*/?>







<?php get_header(); ?>
<?php get_sidebar(); ?> <!-- AS Used on the everything BUT the Main page, has only the left sidebar-->
<div id="" class="content-area">
	<div id="main_content" class="calcHeight">
	
	
	<?php
	$args=array(
		'post_type'=>'teammember',
		'meta_key'=>'pageorder',
		'orderby'=>'meta_value_num',
		'order'=>'ASC'
	);
	

	$the_query = new WP_Query($args);
	?>	

		<?php if ( have_posts() ) : ?>

			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div id="<?php echo the_slug(); ?>" class="OuterPostWrap">
					
					
					<h1>
						<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
					</h1>
					<img src="<?php the_field('person_photo');?>" alt="Team-member photo" height="144" width="120">
					<div class="teamFieldWrap">
						<div class="teammember-<?php the_field('objectives');?>"><h4>Objectives:</h4><?php the_field('objectives');?></div>
						<div class="<?php the_field('affiliations');?>"><h4>Affiliations:</h4><?php the_field('affiliations');?></div>
						<div class="<?php the_field('project_objectives');?>"><h4>Project Objectives:</h4><?php the_field('project_objectives');?></div>
					</div>
					<div class="clearfix"></div>
					<div class="the_content"><h4>Bio:</h4><?php the_content();?></div>
				
				
			</div><!-- END .OuterPostWrap -->
			
			<?php endwhile; else : ?> 
		 		<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

		</div><!-- #content -->
	</div>

</div>

<?php get_footer(); ?>