<?php
/*
Template Name: Get Connected
*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- Get Connected Template -->
<article id="post-<?php the_ID(); ?>" class="page bracket-page">
	<header class="entry-header">
		<h1 class="entry-title"><span class="lightblue">get</span>connected</h1>
	</header><!-- .entry-header -->
	<?php get_navbar() ?>
	<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
	<div class="entry bracket-entry">
		<div class="entry-content three-col center">
			<?php //the_content(); ?>
			<a href="faculty/" class="column">
				<img src="<?php echo get_stylesheet_directory_uri()?>/images/getconnected/jessica_holmes.jpg" alt="Faculty" width=200>
				<span class="subheading2">Faculty &amp; Staff</span>
			</a>
			<a href="mentors/" class="column">			
				<img src="<?php echo get_stylesheet_directory_uri()?>/images/getconnected/ernie_parizeau.png" alt="Mentors" width=200> 
				<span class="subheading2">Mentors</span>
			</a>
			<a href="students/" class="column">			
				<img src="<?php echo get_stylesheet_directory_uri()?>/images/getconnected/students.jpg" alt="Students" width=200>
				<span class="subheading2">Students</span>
			</a>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
	
		</footer><!-- .entry-meta -->
	</div><!-- .entry -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>