
<?php get_header(); ?>
		<header id="front-header">
			<div class="site-header">MiddCORE</div>
			<div class="tagline">Confidence for the Road Ahead</div>
		</header>

		<article>
			<div id="wheel-container">
				<canvas id="wheel" width="500" height="500">
				
				<div class="image-container">
				<img src="<?php bloginfo('template_directory')?>/images/canvas.png" 
					alt="MiddCORE Principles" 
					draggable="false"
					height="500"
					usemap="#wheelmap"
					width="500">
				<map name="wheelmap">
					<area shape="rect" coords="194,7,509,89" href="/get-connected" alt="Get Connected" title="Get Connected"    />
					<area shape="rect" coords="194,88,509,170" href="/testimonials" alt="Testimonials" title="Testimonials"    />
					<area shape="rect" coords="354,173,510,212" href="/core-skills" alt="COREskills" title="COREskills"    />
					<area shape="rect" coords="434,211,510,259" href="/core-skills" alt="COREskills" title="COREskills"    />
					<area shape="rect" coords="255,214,432,287" href="/about-middcore" alt="About MiddCORE" title="About MiddCORE"    />
					<area shape="rect" coords="261,307,438,380" href="/inside-the-core" alt="Inside the CORE" title="Inside the CORE"    />
					<area shape="rect" coords="698,698,700,700" href="http://www.image-maps.com/index.php?aff=mapped_users_8201112211718019" alt="Image Map" title="Image Map" />
				</map>
				</div>
				<br />		
				</canvas>
			</div>
		</article>
		<?php get_navbar() ?>
<?php get_footer(); ?>
