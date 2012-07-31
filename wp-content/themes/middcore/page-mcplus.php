<?php
/*
Template Name: MiddCORE Plus
*/
?>
<?php get_header(); ?>

<?php the_post(); ?>
<!-- MiddCOREplus Template -->
<article id="post-<?php the_ID(); ?>" class="page bracket-page">
	<header class="entry-header">
		<h1 class="entry-title">MiddCORE<span class="lightblue">plus</span></h1>
	</header><!-- .entry-header -->
	<?php get_navbar() ?>
	<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
	<div class="entry whitebg">
		<div class="entry-content sansp">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
	
		</footer><!-- .entry-meta -->
	</div><!-- .entry -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>