<?php

$app->get('/', function() use ($app) {
    return view('home', get_sponsor_data($app));
});

$app->get('sponsors', function() use ($app) {
    return view('sponsors', get_sponsor_data($app));
});

$app->get('code-of-conduct', function() use ($app) {
    return view('code-of-conduct');
});

$app->get('venue', function() use ($app) {
    return view('venue');
});

$app->get('schedule', function() use ($app) {
    return view('schedule');
});

function get_sponsor_data($app)
{
    return [
        'sponsors' => $app['conference']->sponsors->sortBy('rank', SORT_REGULAR, true),
        'communitySponsors' => $app['conference']->communitySponsors->sortBy('rank', SORT_REGULAR, true),
    ];
}

// TODO:
/*
 * add routes for schedule (full, events, talks) and speakers, about page
 * */
