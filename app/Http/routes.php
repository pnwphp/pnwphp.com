<?php

use App\Model\Talk;
use Illuminate\Http\Request;

$app->get('/', function() use ($app) {
    return page('home');
});

$app->get('sponsors', function() use ($app) {
    return page('sponsors');
});

$app->get('code-of-conduct', function() use ($app) {
    return page('code-of-conduct');
});

$app->get('venue', function() use ($app) {
    return page('venue');
});

$app->get('events', function() use ($app) {
    return page('events');
});

$app->get('schedule', function() use ($app) {
    return page('schedule');
});

$app->get('speakers', function(Request $request) use ($app) {
    return page('speakers');
});

$app->get('talks', function(Request $request) use ($app) {
    return page('talks', [
        'tagFilter' => function (Talk $talk) use ($request) {
            if ($query = $request->query->get('tag')) {
                return in_array($query, $talk->tags);
            } else {
                return true;
            }
        },
    ]);
});

function page($view, $args = [])
{
    global $app;
    return view($view, $args + ['conference' => $app['conference']]);
}
