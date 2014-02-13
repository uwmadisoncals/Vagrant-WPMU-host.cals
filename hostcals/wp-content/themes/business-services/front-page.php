<?php
/**
 * Template Name: Home
 * @package WordPress
 * @subpackage CALSv1
 */

get_header(); ?>

<div class="mobileScroll">
  <a href="#" class="mobileNavTriggerLarge" style="display: none;"></a> 
 
  <div id="main">

		<div id="primary">
			
			<div id="content" role="main">
			
				<!-- Start the Loop. -->
				<?php 

					the_content();
					query_posts( 'showposts=5&category_name=news-updates' );

					while ( have_posts() ) : the_post();
					    echo '<div><h3><a href="';
					    the_permalink();
					    echo '">';
					    the_title();
					    echo '</a></h3>';
					    the_content();
					    echo '</div>';
					endwhile;

					// Reset Query
					wp_reset_query();
				?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>