<?php
/**
 * Template Name: Two Columns
 *
 */
get_header(); 
?>
<body>
	<div id="container">
        <?php include 'page-nav.php'; ?>

        <div id="main" role="main">
            <div class="container">
    <div class="row">
                        <div class="col-md-6"><!-- for about page -->
<?php 
if (have_posts()) { 
		the_post(); ?>

                        <h1><?php the_title(); ?></h1>

			            <?php the_content(); ?>
			            <?php edit_post_link("Edit This Page", '<p>', '</p>'); ?>
                        </div>
                        <?php
                        $second_column = get_post_meta( $post->ID, 'second_column', true );

                        if ( !empty($second_column) ) :
                        ?>
                        <div class="col-md-6">
                        <?php echo $second_column; ?>
                        </div>
                        <?php endif; ?>

<?php } ?>
                </div>
            </div><!--! end of .container -->
		</div><!--! end of #main -->
<?php get_footer(); ?>
