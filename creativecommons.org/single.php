<?php 

// "Single" template will always, by definition, have a single post.
// I'm quite sure this will not change, except on opposites day, perhaps.
if ( have_posts() )  {
	the_post();
} else {
	require (TEMPLATEPATH . '/404.php');
	exit();
}

?>

<?php get_header(); ?>

<body>
	<div id="container">
		<?php include 'page-nav.php'; ?>
		<div id="main" role="main">
			<div class="container">
				 <div class="row">
                <div class="col-md-8" id="post-<?php the_ID(); ?>">
				<div style="margin-top: 1em;"><h3><a href="/weblog">News</a></h3></div>
					<div class="first row">
						<?php edit_post_link("Edit This Post", '<p class="alignright edit">', '</p>'); ?>
						<h1><?php the_title(); ?></h1>
						<h4><?php the_author() ?>, <?php the_time('F jS, Y')?></h4>
					</div>
					
						<?php the_content(); ?>					
					<?php if ( get_the_tags() ) { ?>
					<div class="postTags"><?php the_tags(); ?></div>
					<?php } ?>
					<div class="comments"><?php // comments_template(); ?></div>
				
				</div>
				            <div class="col-md-4 well">
			    <p><strong><a href="<?php echo get_settings('home') . '/' . $category->slug; ?>/feed/rss">Subscribe to RSS</a></strong></p>
			    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) ?>
                                </div><!-- end of twelve columns omega -->
			</div><!-- end of .container -->
		</div><!--! end of #main -->
	</div><!--! end of #container -->

	<?php get_footer(); ?>
