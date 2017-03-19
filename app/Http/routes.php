<?php

use Illuminate\Http\Request;

$app->get('/', function() use ($app) {
    $currentDate = date('Y-m-d');

    /*
    if ( $currentDate <= '2016-06-01' ) {
        message_id = 'cfp-closing';
    } else if ( $currentDate >= '2016-07-01' &&  $currentDate <= '2016-07-17' ) {
        $message_id = 'early-bird-closing';
    }
     */

    $message_id = '';

    return page('home', ['message_id' => $message_id]);
});


/**
 * Some URLs need to be year specific. Others don't.
 *
 * @todo organize routes into years.
 *
 */

/*
 * Global
 */
$app->get('/code-of-conduct', function() use ($app) {
    return page('code-of-conduct');
});

$app->get('/sponsors', function() use ($app) {
    return page('sponsors');
});

/*
 * 2017 Site URLs
 */



/*
 * 2016 Site URLs
 */
$app->get('/2016/', function() use ($app) {
    $dryfta = new \App\Dryfta();
    $dryfta->redirect();
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

$app->get('/2016/schedule', function() use ($app) {
    dryfta('schedule');
});

$app->get('/2016/events-hackathon', function() use ($app) {
    dryfta('schedule');
});

$app->get('/2016/speakers', function() use ($app) {
    // Redirect the 2015 url to 2016 page
    dryfta('speakers');
});

$app->get('/2016/tags', function(Request $request) use ($app) {
    // Redirect the 2015 url to 2016 page
    dryfta('schedule');
});

$app->get('/2016/talks', function(Request $request) use ($app) {
    // Redirect the 2015 url to 2016 page
    dryfta('schedule');
});


/*
 * 2015 Site URLs
 */

/*
$app->get('jobs', function() use ($app) {
	// @TODO: Fix this
    return cfp-closingpage('jobs');
});
 */




$app->get('/2015/what-to-expect', function() use ($app) {
    return page('what-to-expect');
});

$app->get('/2015/events', function() use ($app) {
	dryfta('/program-schedule');
});

$app->get('/2015/hotels-and-transit', function() use ($app) {
	dryfta('14731931811/about-1473196711/hotels-amp-transit-1456530150/documents');
});

$app->get('/2015/scholarship', function() use ($app) {
    dryfta('buy-tickets');
});

$app->get('/2015/online-events', function() use ($app) {
    return page('live');
});

$app->get('/2015/live', function(Request $request) use ($app) {
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


