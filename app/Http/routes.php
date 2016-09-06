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


$app->get('/2016/live-blog', function() use ($app) {
	$message_id = 'standard';

    return page('live', ['message_id' => $message_id] );
});



$app->get('jobs', function() use ($app) {
    return cfp-closingpage('jobs');
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

$app->get('what-to-expect', function() use ($app) {
    return page('what-to-expect');
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

$app->get('online-events', function() use ($app) {
    return page('online-events');
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
