<?php get_header(); ?>

<?php the_post(); ?>
<!-- Default Template -->
<article id="post-<?php the_ID(); ?>" class="page bracket-page">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
	<div class="entry">
		<div class="entry-content whitebg sansp">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
	
		</footer><!-- .entry-meta -->
	</div><!-- .entry -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php get_footer(); ?>