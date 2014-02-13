<?php
/**
 * Template Name: Home Page
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '2013-07-10' );

get_header(); ?>

<div class="mobileScroll">
<a href="#" class="mobileNavTriggerLarge" style="display: none;"></a>

<div class="collegeFeature">
  	<ul class="slides">
  		<li class="flipin">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/featurebar_img1.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>What do <span class="tan">you</span> think?</h2>
  				<a href="https://uwmadison.qualtrics.com/SE/?SID=SV_3sLTqafFeK3rTQ9">Take the library survey and let us know how we are doing.</a>
  			</div>
  			
  		</li>
  		<li class="flipin">
  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homefeature/featurebar_img2.jpg" alt="College Feature">
  			<div class="featureCaption">
  				<h2>Learning and growing <span class="yellow">together</span></h2>
  				
  				<a href="#">Find materials pertaining to your field of study. Ask a Librarian how.</a>
  			</div>
  			
  		</li>
  		
  	</ul>
  	
  	<a href="#" class="next">Next</a>
  	<a href="#" class="previous">Previous</a>
  	
  	<div class="timer">
  		<a href="#">Pause Slide Rotation</a>
	  	<div class="timerLeft">
	  	<div class="timer1"></div>
	  	</div>
	  	<div class="timerRight">
	  	<div class="timer2"></div>
	  	</div>
	  	
  	</div>
  </div>
  <div class='fluidHeight' style="display: none;">
			
			<div class = 'sliderContainer'>
			
				<div class = 'iosSlider'>
				
					<div class = 'slider'>
					
						
						
						
					
					</div>
				
				</div>
				
				
				
				<div class = 'scrollbarContainer'></div>
				
			</div>
		
		</div>
<!--		<div style="width:940px; margin: 0 auto;">
	<?php if (function_exists('muneeb_ssp_slider')) {muneeb_ssp_slider(159);} ?>	
		</div>-->
	<div id="main">

		<div id="primary">
			<div id="content" class="fullWidth" role="main">
				
				<div class="searchContainer">
					<form method="get" id="librarysearchform" action="http://search.library.wisc.edu/catalog">
						<label for="ls" class="assistive-text">Search</label>
						<input type="text" class="field" name="ls" id="ls" placeholder="Search the Catalog" x-webkit-speech="">
						<input type="submit" class="submit" name="submit" id="librarysearchsubmit" value="Search">
						<a href="#">More Search Options</a>
					</form>
					<div class="searchOptions">
						<a href="#" class="redButton searchToggle"><div class="searchImg"></div><div class="searchType">Books</div><div class="arrowDown"></div></a>
						<div class="results" style="display:none;">
							<ul>
								<li><a href="#">Articles</a></li>
								<li><a href="#">Books</a></li>
								<li><a href="#">Journals</a></li>
								<li><a href="#">Databases</a></li>
							</ul>
						</div>
					</div>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page-home' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>
				
			</div><!-- #content -->
			
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>