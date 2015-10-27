
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
    <h3>Find CC material</h3>
      <p>Search the existing public commons for images, videos, text and music</p>

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

		<h3>CC's Global Summit: Relive the magic!</h3>	

	<p><a href="https://summit.creativecommons.org/2015/streaming/"><img src="/wp-content/themes/creativecommons.org/img/cc-global-2015-streaming.png" class="img-responsive" /></a></p>

<p>Check out <a href="https://summit.creativecommons.org/2015/streaming/">videos from our Global Summit keynotes and programs</a>, all packed with ideas, debates, lessons learned, best practices, big wins, and more. Enjoy.</p>                                                          

<p><small>Photo by <a href="https://www.flickr.com/photos/ter-burg/22229045322/in/album-72157659914327401/">Sebastiaan ter Berg</a>, <a href="https://creativecommons.org/licenses/by/2.0/legalcode">CC BY 2.0</a></small></p>
    
  </div> <!--! end of "six columns" -->

  <div class="col-md-6">


      
	<h3>Thank you to Private Internet Access</h3>
	
	<p><a href="http://privateinternetaccess.com" target="_blank"><img src="/wp-content/themes/creativecommons.org/img/cc-global-2015-pia.png" class="img-responsive" style="max-height: 256px" alt="" /></a></p>

        <p>We are proud to thank our lead sponsor <a href="http://privateinternetaccess.com" target="_blank">Private Internet Access</a> for its support of CC's 2015 Global Summit.</p>

    
  </div> <!--! end of "col-md-4 well well" -->
</div> <!--! end of "tall row" -->
