<?php
/**************************
 * Relevant site functions
 *
 * NOTE! the_breadcrumb() function is credit of dimox.net, **NOT** will potter 
 *
 **************************
 */
add_theme_support( 'post-thumbnails' );
//add_image_size( "gridnail", 180, 100, false);

add_action( 'init', 'middcore_setup' );
add_theme_support( 'post-thumbnails' );

function middcore_setup() {
  set_post_thumbnail_size( 195, 130, true );
  add_image_size( 'gridnail', 195, 130, false);
  set_post_thumbnail_size( 72, 72, true );
  add_image_size( 'cat-mini', 72, 72, false);
}

function the_breadcrumb() {
 $delimiter = '&raquo;';
  $home = '<img src="'.get_bloginfo('stylesheet_directory').'/images/wheel.png" alt="Home" width="25" title="Home">'; // text for the 'Home' link
  $before = '<span class="current">'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 // !is_home() &&
  if ( !is_home() || is_paged() ) {
 
    echo '<div id="crumbs">';
 
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<a class="logo" href="' . $homeLink . '">' . $home . '</a> ';
    if(!is_home()) echo $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;
 
    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}
function get_navbar() {
?>
		<nav class="main-nav">
			<?php if(!is_front_page()) { ?>
			<div class="sub-menu">
				<a href="/" class="nav-link" title="The Wheel"><img src="<?php bloginfo('stylesheet_directory')?>/images/wheel.png" width="25" alt="Home" title="Home"></a>
				<ul>
					<li><a href="/inside-the-core" title="See what happens inside the CORE!">Inside the CORE</a></li>
					<li><a href="/about-middcore" title="What is MiddCORE?">About MiddCORE</a></li>
					<li><a href="/core-skills" title="CORE Skills">CORE Skills</a></li>
					<li><a href="/testimonials" title="Hear from MiddCORE mentors and students">Testimonials</a></li>
					<li><a href="/get-connected" title="Get Connected with MiddCORE!">Get Connected</a></li>
				</ul>
			</div>
			<?php }?>
			<a href="/blog" class="nav-link nav-link-big" title="Stay tuned for periodic MiddCORE updates">Blog</a>
			<a href="/middcore-plus" class="nav-link nav-link-big" title="MiddCORE's exciting new summer program">MiddCOREplus</a>
			<a href="/middcore-in-the-press" class="nav-link nav-link-big" title="See what MiddCORE students are doing!">MiddCORE in the Press</a>
		</nav>
<?php
}
function middcore_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<div class="nav-previous"><?php next_posts_link( __( 'Older posts <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Recent posts', 'twentyeleven' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}
?>