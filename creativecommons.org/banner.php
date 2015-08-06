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

?>
<div id="top-banner top-banner-ks">
	<a style="display: block;" href="https://www.kickstarter.com/projects/creativecommons/made-with-creative-commons-a-book-on-open-business">
            <h1>Almost there &mdash; CC's book on open business models</h1>
		<button>Back us on Kickstarter</button>
	</a>
</div>