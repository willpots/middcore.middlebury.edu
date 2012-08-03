<?php get_header(); ?>
		<h1 class="entry-title">CORE<span class="lightblue">blog</span></h1>
		<?php get_navbar(); ?>
		<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
		<div id="primary">
			<div id="content" role="main">
				<?php if(is_home()): ?>
				<div class="category-grid">
					<?php  define('LEFT_CAT_ID', '1'); ?>
					<?php  define('RIGHT_CAT_ID', '4'); ?>
					<?php $category = get_category(LEFT_CAT_ID, 'ARRAY_A'); ?>
					<a href="<?php echo get_category_link($category['cat_ID']);?>">
					<div class="category-grid-item-accent">
						<div class="category-grid-item" style="background:url('/wp-content/uploads/category-images-ii/MiddCOREMiddlebury.jpg') no-repeat; background-size:cover; background-position:center;">
							<h2 class="category-grid-title" style="text-shadow: 3px 3px 4px #000;"><?php echo $category['name'] ?></h2>
							<p class="category-grid-description"><?php echo $category['description']; ?></p>
							<?php //ciii_category_images('category_ids='.LEFT_CAT_ID); ?>
							<?php // $posts = get_posts(array('category' => $category['cat_ID'], 'posts_per_page' => 3, 'numberposts' => 3 ));?>
<!--
							<div class="category-grid-mini">
								<?php //foreach($post as $posts): ?>
								<a href="<?php ///echo get_permalink($post->ID); ?>">
									<?php //echo get_the_post_thumbnail( $post->ID, "cat-mini"); ?>
								</a>
								<?php //endforeach; ?>
							</div><? ?>
-->
						</div>
					</div>
					</a>
					<?php $category = get_category(RIGHT_CAT_ID, 'ARRAY_A'); ?>
					<a href="<?php echo get_category_link($category['cat_ID']);?>">
					<div class="category-grid-item-accent">
						<div class="category-grid-item" style="background:url('/wp-content/uploads/category-images-ii/4.original.jpg') no-repeat; background-size:cover; background-position:center;">
							<h2 class="category-grid-title"><?php echo $category['name'] ?></h2>
							<p class="category-grid-description"><?php echo $category['description']; ?></p>
							<?php //ciii_category_images('category_ids='.LEFT_CAT_ID); ?>
							<?php // $posts = get_posts(array('category' => $category['cat_ID']));?>
						</div>
					</div>
					</a>
				</div>
			<? endif; ?>
				<div class="post-grid">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post-grid-accent">
						<article id="post-<?php the_ID() ?>"class="post-grid-item">
							<header>
								<h3 class="post-title-grid">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
										<?php the_title(); ?>
									</a>
								</h3>
							</header>
							<div class="post-content-grid">
							<? if(has_post_thumbnail()): ?>
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php the_post_thumbnail("gridnail"); ?>
								</a>
							<? endif; ?>
							<p class="excerpt">
								<?php the_excerpt(); ?>
							</p>
							</div>
							<footer class="post-meta-grid">
								<?php the_date(); ?> by <?php the_author_posts_link() ?>
								 | Posted in <?php the_category(', '); edit_post_link( "Edit This Post", " | "); ?>
							</footer>
						</article>
					</div>
					<?php endwhile; ?>
				</div>
				<?php middcore_content_nav('nav-below'); ?>
				<?php else: ?>

					<article id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h2 class="entry-title">Nothing found!</h2>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p>Sorry but we could not find what you were looking for!</p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-0 -->

				<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_footer(); ?>