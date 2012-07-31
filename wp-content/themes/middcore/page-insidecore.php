<?php
/*
Template Name: Inside the Core
*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- Inside the Core Template -->
<article id="post-<?php the_ID(); ?>" class="page bracket-page">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<?php get_navbar() ?>
	<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
	<div class="entry  bracket-entry">
		<div class="entry-content">
			<?php //the_content(); ?>
			<div class="center centered">
			</div>
				<div id="slides" class="slideshow">
				<div class="slides_container">
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_01.jpg" height="300" alt="Slide 01">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_02.jpg" height="300"  alt="Slide 02">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_03.jpg" height="300"  alt="Slide 03">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_04.jpg" height="300"  alt="Slide 04">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_05.jpg" height="300"  alt="Slide 05">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_06.jpg" height="300"  alt="Slide 06">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_07.jpg" height="300"  alt="Slide 07">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_08.jpg" height="300"  alt="Slide 08">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_09.jpg" height="300"  alt="Slide 09">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_10.jpg" height="300"  alt="Slide 10">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_11.jpg" height="300"  alt="Slide 11">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_12.jpg" height="300"  alt="Slide 12">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_13.jpg" height="300"  alt="Slide 13">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_14.jpg" height="300"  alt="Slide 14">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_15.jpg" height="300"  alt="Slide 15">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_16.jpg" height="300"  alt="Slide 16">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_17.jpg" height="300"  alt="Slide 17">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_18.jpg" height="300"  alt="Slide 18">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_19.jpg" height="300"  alt="Slide 19">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_20.jpg" height="300"  alt="Slide 20">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_21.jpg" height="300"  alt="Slide 21">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_22.jpg" height="300"  alt="Slide 22">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_23.jpg" height="300"  alt="Slide 23">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_24.jpg" height="300"  alt="Slide 24">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_25.jpg" height="300"  alt="Slide 25">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_26.jpg" height="300"  alt="Slide 26">
					</div>																					
					<div class="slide">																		
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow/Image_27.jpg" height="300"  alt="Slide 27">
					</div>																					
				</div>
			</div><!-- #slides -->
			<script>
				$(function(){
					$('#slides').slides({
						preload: true,
						preloadImage: '<?php bloginfo('stylesheet_directory'); ?>/images/loading.gif',
						play: 2500,
						pause: 2500,
						hoverPause: true,
						/*animationStart: function(current){
							if (window.console && console.log) {
								// example return of current slide number
								console.log('animationStart on slide: ', current);
							};
						},
						animationComplete: function(current){
							if (window.console && console.log) {
								// example return of current slide number
								console.log('animationComplete on slide: ', current);
							};
						},*/
						generatePagination: false
					});
				});
			</script>
			<div class="page-content">
			<p style="text-align: center;">MiddCORE is a four-week course during Winter Term that encourages students to leverage their liberal arts analytical skills to address challenges in both for-profit and non-profit organizations.</p>
			</div>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
	
		</footer><!-- .entry-meta -->
	</div><!-- .entry -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>