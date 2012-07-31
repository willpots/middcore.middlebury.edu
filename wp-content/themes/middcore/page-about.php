<?php
/*
Template Name: About MiddCORE
*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- About MiddCORE Template -->
<article id="post-<?php the_ID(); ?>" class="page bracket-page">
	<header class="entry-header">
		<h1 class="entry-title"><span class="lightblue">about</span>MiddCORE</h1>
	</header><!-- .entry-header -->
	<?php get_navbar() ?>
	<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
	<div class="entry bracket-entry">
		<div class="entry-content larger">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
	
		</footer><!-- .entry-meta -->
	</div><!-- .entry -->
</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>