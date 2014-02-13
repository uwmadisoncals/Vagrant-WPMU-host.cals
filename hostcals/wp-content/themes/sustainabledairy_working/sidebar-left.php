<!-- INCLUDES THE LEFT SIDEBAR ONLY (Used on everything BUT the Main page-->
<div id="the_asides">
		<div id="aside_primary" class="aside_primary calcHeight">

				<div id="aside_sect1">

				<h4 class="shadow">PROJECT OBJECTIVES</h4>

				<nav id="nav2" class="nav2">
					<?php wp_nav_menu( array( 'theme_location' => 'home_leftsidebar' ) ); ?>
					
				</nav>	<!-- END #nav2 -->

				<nav id="nav3" class="nav3">
					<?php wp_nav_menu( array( 'theme_location' => 'home_leftsidebar-2' ) ); ?>
					
				</nav>	<!-- END #nav2 -->

				</div> <!-- END #aside_sect1 -->

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
							<li><a href="#">University of Washington</a></li>
							<li><a href="#">North Carolina Agriculture &amp; Technology State University</a></li>
						</ul>
					</div><!-- End #educ_inst-->

					<div id="usda_ars">
						<h5>USDA-ARS</h5>
						<ul>
							<li><a href="#">Dairy Forage Research Center</a></li>
							<li><a href="#">North Atlantic Region</a></li>
							<li><a href="#">National laboratory for Agriculture and Environment</a></li>
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
			</div> <!-- END #aside_primary -->
</div> <!-- END #the_asides-->
		