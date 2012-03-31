<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
	<div id="header">
			<div id="masthead">
				<div id="branding" role="banner">
					<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
					<<?php echo $heading_tag; ?> id="site-title">
						<span>
							<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span></a>
						</span>
					</<?php echo $heading_tag; ?>>
					<div id="site-description"><?php bloginfo( 'description' ); ?></div>
				</div><!-- #branding -->
				<div id="search">
					<form method="get" id="searchform" action="search">
						<input type="text" value="Google Search" name="q" id="search_input" onfocus="this.value = this.value == this.defaultValue ? '' : this.value" onblur="this.value = this.value == '' ? this.defaultValue : this.value" />
						<input type="submit" id="search_button" value=""/>
					</form>
				</div><!-- #search -->
				<div id="access" role="navigation">
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</div><!-- #access -->
			</div><!-- #masthead -->
	</div><!-- #header -->
	<div id="footer" role="contentinfo">
		<?php if(!is_single()): ?>
		<div class="footer-sitemap">
			<ul>
				<li><a href="http://willerce.com/">Home</a></li>
				<li><a href="http://willerce.com/about">About</a></li>
				<li><a href="http://willerce.com/archives">Blog Archives</a></li>
				<li class="loc-hide"><a href="http://willerce.com/links">Links</a></li>
				<li class="loc-hide"><a href="http://willerce.com/themes">Themes</a></li>
			</ul>
			<ul>
				<li><a href="http://www.asp.net/">Develop</a></li>
				<li><a href="http://www.cnblogs.com/">CNBlogs</a></li>
				<li><a href="http://www.asp.net/">ASP.NET</a></li>
				<li><a href="http://www.asp.net/mvc">ASP.NET MVC 3</a></li>
				<li><a href="http://www.asp.net/web-pages">ASP.NET Web Pages </a></li>
				<li><a href="http://forums.asp.net/">ASP.NET Forums </a></li>
			</ul>
			<ul>
				<li><a href="http://willerce.com/links">Friends</a></li>
				<li><a href="http://blog.francistm.com">Francis Joe</a></li>
				<li><a href="http://tenllen.com/">Tenllen Xue</a></li>
				<li><a href="http://acterce.com">Acterce Zheng</a></li>
				<li><a href="http://www.loaderce.com/">Loaderce Liu</a></li>
				<li><a href="http://clyee.com/blog/">Jeff Clyee</a></li>
				<li><a href="http://wyjexplorer.cn/">汪宇杰</a></li>
			</ul>
			<ul>
				<li>Sites</li>
				<li><a href="http://www.aidingcan.com/" alt="爱订餐_福州外卖_快速的网络订餐">爱订餐</a></li>
				<li><a href="http://www.v2ex.com/">V2EX</a></li>
				<li><a href="https://github.com/">Github</a></li>
				<li><a href="http://www.wordpress.org">Wordpress</a></li>
			</ul>
			<ul>
				<li>Other</li>
				<li><a href="http://t.qq.com/willerce">Tencent Weibo</a></li>
				<li><a href="http://weibo.com/willerce">Sina Weibo</a></li>
				<li><a href="http://www.douban.com/people/willerce">Douban</a></li>
			</ul>
		</div>
		<?php endif; ?>
		<div id="colophon">
			<div id="site-info">
				<span>@ 2008 - <?php print date('Y'); ?> WILLERCE.COM, Theme By <a href="http://willerce.com" >willerce.jen</a></span>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->
		</div><!-- #colophon -->
	</div><!-- #footer -->

	<div class="soc-fixed">
        <a href="#" class="soc-chat" title="Top" ><span>Top</span></a>

		<?php if(false != get_option('azure_sns_facebook') || '' != get_option('azure_sns_facebook')) : ?>
			<a target="_blank" title="Facebook" href="https://www.facebook.com/<?php print get_option('azure_sns_facebook'); ?>" class="soc-facebook"><span>facebook page</span></a>
		<?php endif; ?>

		<?php if(false != get_option('azure_sns_twitter') || '' != get_option('azure_sns_twitter')) : ?>
			<a target="_blank" title="Twitter" href="http://twitter.com/#!/<?php print get_option('azure_sns_twitter'); ?>" class="soc-twitter"><span>visit twitter</span></a>
		<?php endif; ?>

		<?php if(false != get_option('azure_theme_feed') || '' != get_option('azure_theme_feed')) : ?>
			<a target="_blank" title="RSS Feed" href="<?php print get_option('azure_theme_feed'); ?>" class="soc-rss"><span>rss feeds</span></a>
		<?php endif; ?>

		<?php if(false != get_option('azure_sns_email') || '' != get_option('azure_sns_email')) : ?>
			<a target="_blank" title="Email" href="mailto:<?php print get_option('azure_sns_email'); ?>" class="soc-mail"><span>newsletter</span></a>
		<?php endif; ?>
    </div>

</div><!-- #wrapper -->

<?php if(false != get_option('azure_theme_ga') || '' != get_option('azure_theme_ga')) : ?>
<script type="text/javascript">
  var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php print get_option('azure_theme_ga'); ?>']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<?php endif; ?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
