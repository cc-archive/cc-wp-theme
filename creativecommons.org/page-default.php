<?php 
/**
 * Template Name: Page Page
 *
 */
get_header(); ?>
<body>
	<div id="container">
        <?php include 'page-nav.php'; ?>
	<div class="container">
        <div id="main" role="main" class="row">
 <div class="col-md-8">

<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    
<?php 
if (have_posts()) { 
		the_post(); ?>



<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php edit_post_link("Edit This Page", '<p>', '</p>'); ?>

<?php } ?>

</div>




    
<?php 
if (have_posts()) { 
		the_post(); ?>



<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php edit_post_link("Edit This Page", '<p>', '</p>'); ?>

<?php } ?>

</div>



                <div class="col-md-4 well" style="margin-top: 1em;">
                   <?php get_sidebar(); ?>
                </div>


</div>
</div>



<?php get_footer(); ?>
