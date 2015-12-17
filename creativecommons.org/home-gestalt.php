

<?php
/**
 * This gets buckets of content and has some defaults which allow for the
 * most generic buckets to be laid out for display. Carousels are also
 * buckets.
 */
function get_buckets ($bucket_type      = 'Bucket', 
                      $exclude_category = 'Case Studies, CC Store', 
                      $orderby          = 'rating',
                      $debug = false)
{
    $buckets = array();
    $bookmarks = get_bookmarks(array('orderby'        =>  $orderby,
                                     'category_name'  =>  $bucket_type ));
    $excluded_categories = explode(', ', $exclude_category);
    if ( empty($excluded_categories) )
        $excluded_categories[] = $exclude_category;

    foreach ($bookmarks as $b) 
    {
        $do_not_save = false;
        $book = get_bookmark($b->link_id);
        foreach ( $book->link_category as $term_id )
        {
            $link_terms = get_term_by('id', $term_id, 'link_category');
            if ( in_array($link_terms->name, $excluded_categories) )
            {
                $do_not_save = true;
            }
            $book->link_terms[] = $link_terms;
        }
        if ( ! $do_not_save )
            $buckets[] = $book;
    }
    return $buckets;
}

/**
 * Get the full output of a button for display in a bucket which also means
 * not only a button, but can also be a green button or text only button/link
 */
function get_button ($bucket, $link, $class = 'btn')
{
    $button_text            = '';
    $use_green_button       = false;
    $use_text_button        = false;

    if ( count($bucket->link_terms) > 1 )
    {
        foreach ($bucket->link_terms as $term)
        {
            // @TODO: The logic here is a bit nasty, but works.
            $button_text = '';
            // check if 'Green Button ' at front
            $replace_ct = 0;
            $button_text = str_ireplace('Green Button ', '', $term->name, 
                                        $replace_ct);
            if ( $replace_ct != 0 ) 
            {
                $use_green_button = true;
                break;
            }

            $replace_ct = 0;
            $button_text = str_ireplace('Text Button ', '', $term->name, 
                                        $replace_ct);
            if ( $replace_ct != 0 ) 
            {
                $use_text_button = true;
                break;
            }

            $replace_ct = 0;
            $button_text = str_ireplace('Button ', '', $term->name, 
                                        $replace_ct);
            if ( $replace_ct != 0) 
                break;
        }
    }
    // display the right class for the button
    return '<div class="bucket-follow">' . 
           '<a ' . ($use_text_button ? '' : 
                   ( 'class="' . $class . ($use_green_button ? ' primary"' : '"')
                   ) ) .  
           ' href="' . $link . '">' . $button_text . '</a></div>';
}

?>


<p id="cc-intro">Creative Commons helps you share your knowledge and creativity with the world.</p>
<p id="cc-subintro">We're helping to realize the full potential of the Internet—universal access to research and education, full participation in culture—to drive a new era of development growth, and productivity.</p>


<div class="first row well">

      <div class="col-md-4">

      <h2 style="font-size: 22px">
	We are proud to share Creative Commons' 2015 State of the Commons report
      </h2>

      <p>Creative Commoners have known all along that collaboration, sharing, and cooperation are a driving force for human evolution. And so for many it will come as no surprise that in 2015 we achieved a tremendous milestone: over 1.1 billion CC licensed photos, videos, audio tracks, educational materials, research articles, and more have now been contributed to the shared global commons.</p>

<p>We are proud to be a leader in the commons movement, and we hope you will join us as we celebrate all we have accomplished together this year.</p>

<p class="text-center"><a class="btn btn-lg btn-success" href="https://stateof.creativecommons.org/2015/">Read the report</a></p>

      </div>

      <div class="col-md-8">
      

                                                                                                             <p><a href="https://stateof.creativecommons.org/2015/"><img src="/wp-content/themes/creativecommons.org/img/sotc-2015-lg.png" alt="State of the Commons 2015" class="img-responsive" /></a></p>

												
      </div>






</div> <!--! end of "first row" -->

                                                                                                                                                                <div class="clearfix"></div>


<?php

/**
 * Output the generic six buckets. Really, this is all determined for onlyl
 * six buckets with the last two buckets, Case Studies and CC Store being
 * static. The Ratings in the bookmarks/links sectin of wordpress determines
 * the position of the boxes.
 */
function output_buckets () 
{
    $buckets = get_buckets();

    // Need at least four buckets, before the 2 custom buckets
    if ( count($buckets) < 4 )
    {
        $static_bucket = 'home-buckets.php';
        include $static_bucket;
        return;
    }

    // classes for the four first buckets, five and six are hardcoded
    $top_columns    = array('five columns alpha',
                            'six columns',
                            'five columns omega',
                            'five columns alpha' ); 
?>
					<div class="short row">
<?php
    $ct = 0;
    // print_r($buckets);
    foreach ($buckets as $bucket) 
    {
?>
						<div class="<?php echo $top_columns[$ct]; ?>">

						<div class="bucket">
						<div class="inner">
							<h3 class="title"><?php echo $bucket->link_name; ?></h3>
							<div class="content"> 
								<h6><?php echo $bucket->link_description; ?></h6>
                                <?php if ( !empty($bucket->link_image) )
                                {
                                ?>
													<div class="slide">
														<a href="<?php echo $bucket->link_rss; ?>">
														<img src="<?php echo $bucket->link_image; ?>" alt="<?php echo $bucket->link_name; ?>" />
														</a>
													</div>
                                <?php
                                } 
                                ?>
                                <?php echo nl2br($bucket->link_notes); ?>


                                                <?php echo get_button($bucket, $bucket->link_url); ?>

							</div> <!--! end of "content" --> 
						</div> <!--! end of "inner" -->
						</div> <!--! end of "bucket" -->

						</div> <!--! end of top_columns[$ct] -->

<?php

    if ($ct == 2 ) 
    {
?>
					</div> <!--! end of "short row" -->

					<div class="tall row">
<?php
    }

    if ( $ct == 3  )
    {
        output_case_studies();
        output_store();
        break;
    }

    $ct++;
    }
?>
					</div> <!--! end of "tall row" -->

<?php

} // end of output_buckets




//output_carousel();
output_buckets();

?>

