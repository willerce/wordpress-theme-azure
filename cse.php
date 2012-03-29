<?php
/**
 * Template Name: CSE
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
<style type="text/css">
	#wrapper .gsc-result-info {padding-left: 0;}
	#wrapper .gsc-thinWrapper{width:100%;}
	#wrapper .content #cse,
	#wrapper .content #cse tr td,
	#wrapper .content table{
		margin:0;
		padding:0;
		border:none 0px;
		vertical-align: top;
	}
	#wrapper .gsc-adBlock,
	#wrapper .gsc-branding,
	#wrapper .gsc-resultsHeader{
		display:none;
	}
	.gsc-input{
		height:25px;
		padding-left:15px;
	}
	#wrapper .gsc-search-button {
		width: 100px;
		height:31px;
		line-height:31px;
		padding:0;
		margin:0 0 0 10px;
	}
	#wrapper .gs-title{
		padding: 1px;
	}
	#wrapper .gs-snippet b,
	#wrapper .gs-title b{
		color: #CC0033;
		font-weight:normal;
	}
	#wrapper .gs-snippet{
		margin:5px 0 0 0;
		line-height:20px;
	}
	#wrapper .gs-webResult .gs-visibleUrl-short {
		display:none;
	}
	#wrapper .gs-webResult div.gs-visibleUrl-long{
		display:block;
		color:#006D44;
	}
	#wrapper .gsc-cursor-box {margin-top: 20px;}
	#wrapper .gsc-cursor div {padding: 5px 9px; background: #62A9DC;text-decoration: none;color: #fff;font-weight: bold;}
	#wrapper .gsc-cursor div:hover {background: #87BEE7;}
</style>
<div id="container">
	<div id="content" role="main">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="entry-content">
			<div class="content">
				<div id="cse">正在从Google 加载搜索结果......</div>
				<script src="http://www.google.com/jsapi" type="text/javascript"></script>
				<script type="text/javascript">
					google.load('search', '1', {language : 'zh-CN'});
					google.setOnLoadCallback(function() {
						var customSearchControl = new google.search.CustomSearchControl('000781799544238967949:oohavusdw4g');
						customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
						customSearchControl.draw('cse');
						var match = location.search.match(/q=([^&]*)(&|$)/);
						if(match && match[1]){
							var search = decodeURIComponent(match[1]);
							customSearchControl.execute(search);
						}
					}, true);
				</script>
			</div>
		</div><!-- .entry-content -->
		<?php endwhile; ?>
	
	</div><!-- #content -->
</div><!-- #container -->
<?php get_footer(); ?>
