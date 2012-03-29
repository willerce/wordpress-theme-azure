<?php
/**
 * Template Name: Links
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage iBluety
 * @since iBluety 0.9
 */

get_header(); ?>
<div id="container">
	<div id="content" role="main">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<div class="content">
							<ul id="links">
								<?php wp_list_bookmarks('categorize=1&category_orderby=id&before=<li>&after=</li>&show_images=0&show_description=0&orderby=name&title_before=<h3>&title_after=</h3>'); ?>
							</ul>
						</div>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

	<?php endwhile; ?>
	</div><!-- #content -->
</div><!-- #container -->

<?php get_footer(); ?>
