<?php

	// We need to switch the Analytics source based on which site this banner 
	// shows up on.
	switch ($_SERVER['HTTP_HOST']) {
		case 'wiki.creativecommons.org': 
			$analytics_source = 'ccwiki';
			break;
		case 'search.creativecommons.org':
			$analytics_source = 'ccsearch';
			break;
		case 'labs.creativecommons.org':
			$analytics_source = 'cclabs';
			break;
		case 'creativecommons.net':
			$analytics_source = 'ccnet';
			break;
		default:
			$analytics_source = 'ccorg';
	}

$x = rand(1,1);

switch ($x) {
    case 1:
        ?>
        <div id="top-banner">
	<a style="display: block;" href="https://donate.creativecommons.org/?utm_campaign=2015fund&utm_source=ccsite_header2015">
		<h1 style="font-size: 16px; line-height: 19px; width: 80%; padding: 34px 0;">If each person reading this today gave $3, our fundraising drive would be done by midnight tonight. </h1>
		<button>Donate</button>
	</a>
	</div>
	<?php 
        break;
	case 2:
	?>
        <div id="top-banner">
	  <a style="display: block"><h1>Get updates from Creative Commons.</h1>
		<form style="display: inline-block; height: 50px; margin: 25px 3em;
     text-decoration: none; -webkit-transition: all .3s ease-in-out; -moz-transition: all .3s ease-in-out; -ms-transition: all .3s ease-in-out; -o-transition: all .3s ease-in-out; transition: all .3s ease-in-out;" id="Edit" action="https://donate.creativecommons.org/civicrm/profile/create?gid=29&amp;reset=1" method="post" name="Edit">
		  <p><input tabindex="0" id="email-Primary" class="input-lg" maxlength="64" name="email-Primary" size="15" placeholder="mattl@example.com" type="email">&nbsp; <input class="btn-lg btn-primary" id="_qf_Edit_next" accesskey="S" name="_qf_Edit_next" value="Subscribe" type="submit"></p>
		  <div><input name="postURL" value="https://creativecommons.org/thank-you" type="hidden"><input name="cancelURL" value="https://creativecommons.org/newsletter" type="hidden"><input name="group[121]" value="1" type="hidden"><input name="_qf_default" value="Edit:cancel" type="hidden"></div>
		</form></a>
	</div>
        <?php
        break;
	}

	
?>


