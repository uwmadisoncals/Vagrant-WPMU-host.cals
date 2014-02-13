		<!-- INCLUDES BOTH LEFT AND RIGHT SIDEBAR,  this is the main page(click on the cow)-->

		<div id="the_asides clearfix">
		<div id="aside_primary" class="aside_primary calcHeight">
				
				<div id="aside_sect1">

		

				 <nav id="nav2" class="nav2">
					<?php wp_nav_menu( array( 'theme_location' => 'home_leftsidebar',
					'menu'=>'home_leftsidebar',
					'container'=>'',
					'depth'=>'0',
					'items_wrap' => '<h4 class="Nav2Title">PROJECT OBJECTIVES</h4><ul class=\"%2$s\">%3$s</ul>',
					'walker'=> new dd_span_Walker_Nav_Menu,
					'fallback_cb'=>'false'

					) ); ?>
					
				</nav>	<!-- END #nav2 -->


				<nav id="nav3" class="nav3">
					<?php wp_nav_menu( array( 'theme_location' => 'home_leftsidebar-2',
					'menu'=>'Partners Menu',
					'container'=>'',
					'depth'=>'0',
					'items_wrap' => '<h4 class="Nav3Title">PARTNERS</h4><ul class=\"%2$s\">%3$s</ul>',
					'walker'=> new dd_span_Walker_Nav_Menu,
					'fallback_cb'=>'false'

					) ); ?>	
				</nav>	<!-- END #nav3 -->
				
				<!-- #widgetArea_1-->
				<div class="widgetarea" id="widgetarea-1">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Widget Area One') ) : ?><?php endif; ?>
				</div> <!-- END #widgetArea_1 -->

				<!-- #widgetArea_2-->
				<!-- END #widgetArea_2 -->

				<?php /*

				<div id="aside_sect2">

					<h4>PARTNERS</h4>
					<div id="educ_inst">
						<h5>Educational Institutions</h5>
						<ul>
							<li><a href="#a">University of Wisconsin Madison</a></li>
							<li><a href="#b">Pennsylvania State University</a></li>
							<li><a href="#c">Cornell University</a></li>
							<li><a href="#d">University of Arkansas</a></li>
							<li><a href="#">University of Michigan</a></li>
							<li><a href="#">University of Maryland</a></li>
							<li><a href="#">Uinversity of Washington</a></li>
							<li><a href="#">North Carolina Agriculture &amp; Technology State University</a></li>
						</ul>
					</div><!-- End #educ_inst-->

					<div id="usda_ars">
						<h5>USDA-ARS</h5>
						<ul>
							<li><a href="#">Dairy Forage Research Center</a></li>
							<li><a href="#">North Atlantic Region</a></li>
							<li><a href="#">National Labratory for Agriculture and environment</a></li>
							<li><a href="#">National Agriculture Library</a></li>
						</ul>
					</div><!-- End #usda_ars-->
					<div id="industry">
						<h5>Industry</h5>
						<ul>
							<li><a href="#">Innovation Center for US Dairy</a></li>
							<li><a href="#">DNDC-Application Research and Training, LLC</a></li>
							<li><a href="#">AgInformatics, LLC</a></li>
						</ul>
					</div> <!-- End #industry-->
				</div> <!-- END aside_sect2 -->
				*/
				?>


			</div> <!-- END #aside_primary -->


<?php /*
<div id="aside_secondary" class="calcHeight"> <!--SECOND SIDEBAR -->
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, numquam, tempora, consectetur error cupiditate reprehenderit reiciendis facere quo alias ex molestiae id consequatur! Sint, ab, veritatis et dolorem quos odit!</p>

		<ul>
		<li>reprehenderit reiciendis facere quo alias ex molestiae id consequatur! Sint, ab, veritatis et dolorem quos odit</li>

		<li>reprehenderit reiciendis facere quo alias ex molestiae id consequatur! Sint, ab, veritatis et dolorem quos odit</li>

		<li>reprehenderit reiciendis facere quo alias ex molestiae id consequatur! Sint, ab, veritatis et dolorem quos odit</li>

		<li>reprehenderit reiciendis facere quo alias ex molestiae id consequatur! Sint, ab, veritatis et dolorem quos odit</li>	
		</ul>

		</div> <!-- END #aside_secondary, END SECOND SIDEBAR-->


*/ ?>


	</div> <!-- END #the_asides-->
		