<?php get_header(); ?>
		<h1 class="entry-title">CORE<span class="lightblue">blog</span></h1>
		<?php get_navbar(); ?>
		<div id="breadcrumbs"><?php the_breadcrumb(); ?></div>
		<div id="primary">
			<div id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID() ?>"class="post">
						<header>
							<h3 class="post-title">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
						</header>
					
						<div class="post-content"><?php the_content(); ?>
							<footer class="post-meta"><?php the_date(); ?> by <?php the_author_posts_link() ?> | Posted in <?php the_category(', '); ?> <?php edit_post_link( "Edit This Post", " | "); ?>	</footer>
							<div class="commentlist">
							<?php wp_list_comments(); ?>
							</div>
							<div class="commentform">
							<?php comment_form(array(
								"comment_notes_after"=>"", 
								'comment_field' => '<p class="comment-form-comment"><label style="display:block;" for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>')); ?>
							</div>
						</div>
					</article>
				<?php endwhile; ?>

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