<?php
/**
 * Template Name: Archives
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
			<div class="page-content">
				<div class="content">
					<div id="expand_collapse"><a id="" href="#">Expand All / Collapse All</a></div>
					<div id="archives"><?php archives_list(); ?></div>
				</div>
			</div><!-- .entry-content -->
		</div><!-- #post-## -->

		<?php comments_template( '', true ); ?>

	<?php endwhile; ?>
	</div><!-- #content -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		 $('#archives ul li ul.archives-monthlisting').hide();
		 $('#archives ul li ul.archives-monthlisting:first').show();
		 $('#archives ul li span.archives-yearmonth').click(function(){$(this).next().slideToggle('fast');return false;});
		 $('#expand_collapse').toggle(
		 function(){
			$('#archives ul li ul.archives-monthlisting').slideDown('fast');
		 },
		 function(){
			$('#archives ul li ul.archives-monthlisting').slideUp('fast');
		 });
	</script>
</div><!-- #container -->
<?php get_footer(); ?>
