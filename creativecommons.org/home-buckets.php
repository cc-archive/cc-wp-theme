
<div class="row">
  
  <div class="col-md-6 well">

    <h3>How can I license my work?</h3>

     <p>There is no registration to use the Creative Commons
     licenses.</p>

     <p>Licensing a work is as simple as selecting which of the
     six licenses best meets your goals, and then marking your work in
     some way so that others know that you have chosen to release the
     work under the terms of that license.</p>

      <p> Our license-choosing tool can help you select the right license.</p>

      <p><a class="btn btn-primary" href="/choose/">Choose a License</a></p>

  </div> <!--! end of "six columns" -->

  <div class="col-md-6">

    <h3>Latest News from the Commons</h3>


<ul class="nav nav-pills nav-stacked">
 <?php
            $args1 = array( 'numberposts' => 5);
            global $post;
            $rand_posts1 = get_posts( $args1);

            foreach( $rand_posts1 as $post ) :
                setup_postdata($post);    ?> 
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

            <?php endforeach; 

            ?>

</ul>

  </div>

</div>

<div class="row">
<div class="col-md-6 well">
      <h3>Search the existing public commons for images, videos, text and music</h3>

<form action="https://search.creativecommons.org/" method="get">
<div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
      </span>
</div>
</form>


</div>

<!-- 
</div>

<div class="row">

 <div class="col-md-8 well">



		<h3>Support our work</h3>

		<p>CC is more than a license to share; it is a license for all of us to create a better world.<br />Invest in a more open future by supporting Creative Commons.</p>

<p><a class="btn btn-success btn-lg" href="https://donate.creativecommons.org"><span class="glyphicon glyphicon-lock"></span> Make a secure online donation</a></p>

</div> -->


<div class="col-md-6">

<h3>Get the CC newsletter</h3>

<p>Sign up for occasional email updates from Creative Commons</p>

<form style="margin: 0; padding: 0;" id="Edit" action="https://donate.creativecommons.org/civicrm/profile/create?gid=29&amp;reset=1" method="post" name="Edit">
<div class="input-group">
<input tabindex="0" id="email-Primary" class="form-control" maxlength="64" name="email-Primary" size="30" placeholder="mattl@example.com" type="email">
<span class="input-group-btn">
<input id="_qf_Edit_next" accesskey="S" name="_qf_Edit_next" class="btn btn-default" value="Subscribe" type="submit">
</span>
</div>
<div><input name="postURL" value="https://creativecommons.org/thank-you" type="hidden"><input name="cancelURL" value="https://creativecommons.org/newsletter" type="hidden"><input name="group[121]" value="1" type="hidden"><input name="_qf_default" value="Edit:cancel" type="hidden"></div>
</form>

</div>

</div>

<div class="row">
<div class="col-md-6">

		<h3>Global Summit 2015</h3>	

	<p><img src="https://c2.staticflickr.com/8/7536/15754131282_3ece693d52_h.jpg" class="img-responsive" /></p>

	<p>October 14 — October 17th 2015 in Seoul, Korea</p>
	<p>Grow the commons &middot; Build the movement</p>

	<p><a class="btn btn-primary" href="https://donate.creativecommons.org/civicrm/event/info?reset=1&id=11">Register now</a></p>

    
  </div> <!--! end of "six columns" -->

  <div class="col-md-6">


      
	<h3>Buy CC merchandise</h3>
	
	<p><img src="/wp-content/uploads/2015/07/badges.jpg" style="max-height: 256px" alt="CC Buttons" /></p>

	<p>Show that you love to share! Support CC with t-shirts for your loved ones, vinyl stickers for your laptop, buttons, and lapel pins.</p>

	<p><a class="btn btn-primary" href="http://store.creativecommons.org">Visit the Store</a></p>


    
  </div> <!--! end of "col-md-4 well well" -->
</div> <!--! end of "tall row" -->
