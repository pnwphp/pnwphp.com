<?php

$app->get('/', function() use ($app) {
    return view('home');
});

$app->get('sponsors', function() use ($app) {
    return view('sponsors');
});

$app->get('code-of-conduct', function() use ($app) {
    return view('code-of-conduct');
});

$app->get('venue', function() use ($app) {
    return view('venue');
});

// TODO:
/*
 * add routes for schedule (full, events, talks) and speakers, about page
 * */