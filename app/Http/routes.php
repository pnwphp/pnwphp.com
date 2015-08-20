<?php

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

$app->get('hotels-and-transit', function() use ($app) {
    return page('hotels-and-transit');
});

$app->get('scholarship', function() use ($app) {
    return page('scholarship');
});

$app->get('schedule', function() use ($app) {
    return page('schedule');
});

$app->get('events-hackathon', function() use ($app) {
    return page('hackathon');
});

$app->get('speakers', function() use ($app) {
    $talkFilter = function ($speaker) {
        return function ($talk) use ($speaker) {
            return $speaker['code'] === $talk['speaker']
               || (is_array($talk['speaker']) && in_array($speaker['code'], $talk['speaker'], true));
        };
    };
    return page('speakers', ['talkFilter' => $talkFilter]);
});

$app->get('tags', function(Request $request) use ($app) {
    $tags = [];
    foreach ($app['conference']->talks as $talk) {
        foreach ($talk['tags'] as $tag) {
            if (isset($tags[$tag])) {
                $tags[$tag]++;
            } else {
                $tags[$tag] = 1;
            }
        }
    }
    arsort($tags);

    return page('tags', ['tags' => $tags]);
});

$app->get('talks', function(Request $request) use ($app) {
    return page('talks', [
        'tagFilter' => function ($talk) use ($request) {
            return ($query = $request->query->get('tag'))
                ? in_array($query, $talk['tags'])
                : true;
        },
    ]);
});

function page($view, $args = [])
{
    global $app;
    return view($view, $args + ['conference' => $app['conference']]);
}
