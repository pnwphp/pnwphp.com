<?php

use Illuminate\Http\Request;

$app->get('/', function() use ($app) {
	$currentDate = date('Y-m-d');

	if ( $currentDate <= '2016-06-01' ) {
		$message_id = 'cfp-closing';
	} else if ( $currentDate >= '2016-07-01' &&  $currentDate <= '2016-07-17' ) {
		$message_id = 'early-bird-closing';
	} else {
		$message_id = 0;
	}

    return page('landing-2016', ['message_id' => $message_id]);
});

// 2016 Website
$app->get('/2016/', function() use ($app) {
    dryfta();
});
$app->get('/2016/call-for-papers', function() use ($app) {
    dryfta('call-for-papers_1462157073');
});
$app->get('/2016/tickets', function() use ($app) {
    dryfta('buy-tickets');
});
$app->get('/2016/speakers', function() use ($app) {
    dryfta('speakers');
});
$app->get('/2016/schedule', function() use ($app) {
    dryfta('program-schedule');
});
$app->get('/2016/code-of-conduct', function() use ($app) {
    dryfta('code-of-conduct_1456806894');
});

$app->get('/2016/sponsors', function() use ($app) {
    dryfta('sponsors');
});

$app->get('/2016/live-blog', function() use ($app) {
	$message_id = 'standard';

    return page('live', ['message_id' => $message_id] );
});

/*
 * 2015 URLs
 */

$app->get('jobs', function() use ($app) {
	// @TODO: Fix this
    return cfp-closingpage('jobs');
});


$app->get('sponsors', function() use ($app) {
    dryfta('sponsors');
});

$app->get('code-of-conduct', function() use ($app) {
	dryfta('14731931811/about-1473196711/code-of-conduct-1456806894');
});

$app->get('venue', function() use ($app) {
	dryfta('14731931811/about-1473196711/venue-1456444816');
});

$app->get('what-to-expect', function() use ($app) {
    return page('what-to-expect');
});

$app->get('events', function() use ($app) {
	dryfta('program-schedule');
});

$app->get('hotels-and-transit', function() use ($app) {
	dryfta('14731931811/about-1473196711/hotels-amp-transit-1456530150/documents');
});

$app->get('scholarship', function() use ($app) {
    dryfta('buy-tickets');
});

$app->get('schedule', function() use ($app) {
    dryfta('schedule');
});

$app->get('events-hackathon', function() use ($app) {
    dryfta('schedule');
});

$app->get('online-events', function() use ($app) {
    return page('live');
});

$app->get('speakers', function() use ($app) {
    // Redirect the 2015 url to 2016 page
    dryfta('speakers');
});

$app->get('tags', function(Request $request) use ($app) {
    // Redirect the 2015 url to 2016 page
    dryfta('schedule');
});

$app->get('talks', function(Request $request) use ($app) {
    // Redirect the 2015 url to 2016 page
    dryfta('schedule');
});

$app->get('live', function(Request $request) use ($app) {
    return page('live');
});

function page($view, $args = [])
{
    global $app;
    return view($view, $args + ['conference' => $app['conference']]);
}

function dryfta($path = '')
{
    $base = 'https://pnwphp2016.dryfta.com/en';
    header('HTTP/1.1 301 Moved Permanently');
    header("Location: {$base}/{$path}");
    exit;
}


