<?php
/**
 * Template Name: Custom Page
 * @package WordPress
 * @subpackage CALSv1
 */

get_header(); ?>

<div class="mobileScroll">
  <a href="#" class="mobileNavTriggerLarge" style="display: none;"></a> 
 
  <div id="main">

		<div id="primary">
			
			<div id="content" role="main">
				<h1><?php the_title(); ?></h1>
				

				<div id="page-intro">
					<?php the_content(); ?>
				</div>

				<?php
				if( get_the_ID() == '13'){
					$args = array( 'post_type' => 'accounting', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '15') {
					$args = array( 'post_type' => '136-funds', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '24') {
					$args = array( 'post_type' => 'budget', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '50') {
					$args = array( 'post_type' => 'award-management', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '47') {
					$args = array( 'post_type' => 'purchasing', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '26') {
					$args = array( 'post_type' => 'travel', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '153') {
					$args = array( 'post_type' => 'forms', 'posts_per_page' => -1 );
				}

					
					$loop = new WP_Query( $args );
				?>
				<div id="sub-nav">

					<ul>

					<?php while ( $loop->have_posts() ) : $loop->the_post();
					   echo '<li><a href="#'.sanitize_title_with_dashes(get_the_title()).'">'.get_the_title().'</a></li>'; 
					endwhile;
					?>
					</ul>
				</div>


				<?php while ( $loop->have_posts() ) : $loop->the_post();

					echo '<section id="'.sanitize_title_with_dashes(get_the_title()).'">'; ?>

					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					</section>

				<?php endwhile; ?>
				<?php wp_reset_query(); ?> 
					
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>