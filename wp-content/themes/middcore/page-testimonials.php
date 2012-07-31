<?php
/*
Template Name: Testimonials
*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- Testimonials Template -->
<article id="post-<?php the_ID(); ?>" class="page bracket-page">
	<header class="entry-header">
		<h1 class="entry-title">CORE<span class="lightblue">testimonials</span></h1>
	</header><!-- .entry-header -->
	<?php get_navbar() ?>
	<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
	<div class="entry bracket-entry">
		<div class="entry-content two-col center">
			<?php //the_content(); ?>
			<a href="student-testimonials/" class="column">
				<img src="<?php echo get_stylesheet_directory_uri()?>/images/getconnected/beachball.png" alt="Faculty" width=300>
				<span class="subheading2">student testimonials</span>
			</a>
			<a href="mentor-testimonials/" class="column">			
				<img src="<?php echo get_stylesheet_directory_uri()?>/images/anttoombs.jpg" alt="Mentors" width=300> 
				<span class="subheading2">mentor testimonials</span>
			</a>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
	
		</footer><!-- .entry-meta -->
	</div><!-- .entry -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>