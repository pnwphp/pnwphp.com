@extends('layout')

@section('content')
    <div class="head-banner head-banner-sm">
        <div class="bg"></div>
    </div>
    <div class="head-banner-content head-banner-content-sm">
        <div>
            <h1>Pacific Northwest PHP</h1>
            <h2>Schedule</h2>
        </div>
    </div>

    <div class="wrapper wrapper-light">
        <div class="container">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Wednesday, September 9 &mdash; Meetup Day</h3>
                </div>
            </div>
            <div class="schedule-wrapper">

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>
                            SeaPHP Meetup &amp; Conference Kickoff - 6:30pm&ndash;9:00
                            <small>(TUNE Event Space)</small> -
                            <a href="http://www.meetup.com/seaphp/events/222390720/">RSVP on meetup.com</a>
                        </p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>SeaPHP Drink-up - 9:00pm&ndash;11:00 <small>(Belltown Pub)</small></p>
                    </div>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Thursday, September 10 &mdash; Workshop Day</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>TBA</h3>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Friday, September 11 &mdash; Conference Day 1</h3>
                </div>
            </div>
            <div class="schedule-wrapper">

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Registration & Coffee - 8:00am&ndash;9:00 <small>(Lobby)</small></p>
                        <hr/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 schedule-header">
                        <strong>Main Event Room (1st Floor)</strong>
                    </div>
                    <div class="col-md-3 schedule-header">
                        <strong>Learning Studio 1 (3rd Floor)</strong>
                    </div>
                    <div class="col-md-3 schedule-header">
                        <strong>Learning Studio 2 (4th Floor)</strong>
                    </div>
                    <div class="col-md-3 schedule-header">
                        <strong>Globe Room (2nd Floor)</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <hr>
                        <p>Welcome &amp; Morning Keynote - 9:00am&ndash;9:50 <small>(Main Event Room)</small></p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'emcee', 'message' => 'Welcome to PNWPHP'])
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'open-source-love'])
                    </div>
                </div>

                @include('breakout-sessions', [
                    'time' => '10:00am-10:50',
                    'talks' => [
                        'making-the-world-a-smarter-place-through-iot',
                        'inside-laravel-5.1',
                        'why-are-databases-so-difficult',
                    ]
                ])

                @include('breakout-sessions', [
                    'time' => '11:00am-11:50',
                    'talks' => [
                        'massively-scaling-wordpress-in-the-cloud-a-case-study',
                        'from-procedural-to-object-oriented-php-in-drupal',
                        'from-dev-to-dev-management',
                    ]
                ])

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Lunch - 12:00pm&ndash;1:30 <small>(Main Event Room)</small></p>
                        <hr/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Afternoon Keynote - 1:30pm&ndash;2:20 <small>(Main Event Room)</small></p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'cloud-is-the-new-normal'])
                    </div>
                </div>

                @include('breakout-sessions', [
                    'time' => '2:30pm-3:20',
                    'talks' => [
                        'talmudic-maxims-to-maximize-your-growth-as-a-software-developer',
                        'demystifying-the-rest-api',
                        'magento-2-modernizing-an-open-source-ecommerce-powerhouse',
                    ]
                ])

                @include('breakout-sessions', [
                    'time' => '3:30pm-4:20',
                    'talks' => [
                        'project-triage',
                        'phpspec-behat-two-testing-tools-that-write-code-for-you',
                        'battled-hardened-laravel-lessons-in-scale',
                    ]
                ])

                @include('breakout-sessions', [
                    'time' => '4:30pm-5:20',
                    'talks' => [
                        'nosql-lightning-talks',
                        'composer-stability-and-semantic-versioning-demystified',
                        'foundations-of-zend-framework-2',
                    ]
                ])

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Evening Keynote - 5:30pm-6:30 <small>(Main Event Room)</small></p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'stronger-than-fear'])
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Evening Social - 6:30pm&ndash;10:00</p>
                    </div>
                </div>
            </div>

			<br>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Saturday, September 12 &mdash; Conference Day 2</h3>
                </div>
            </div>
            <div class="schedule-wrapper">

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Registration & Coffee - 8:00am&ndash;9:00 <small>(Lobby)</small></p>
                        <hr/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 schedule-header">
                        <strong>Main Event Room (1st Floor)</strong>
                    </div>
                    <div class="col-md-3 schedule-header">
                        <strong>Learning Studio 1 (3rd Floor)</strong>
                    </div>
                    <div class="col-md-3 schedule-header">
                        <strong>Learning Studio 2 (4th Floor)</strong>
                    </div>
                    <div class="col-md-3 schedule-header">
                        <strong>Globe Room (2nd Floor)</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <hr/>
                        <p>Morning Keynote - 9:00am&ndash;9:50 <small>(Main Event Room)</small></p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'eating-elephpants'])
                    </div>
                </div>

                @include('breakout-sessions', [
                    'time' => '10:00am-10:50',
                    'talks' => [
                        'refactoring-101',
                        'integrating-joomla-with-the-php-community',
                        'tba',
                    ]
                ])

                @include('breakout-sessions', [
                    'time' => '11:00am-11:50',
                    'talks' => [
                        'symfony-create-mmorpg',
                        'an-introduction-to-containers-and-docker-for-php-developers',
                        'monolith-to-microservices-lessons-from-the-trenches',
                    ]
                ])

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Lunch - 12:00pm&ndash;1:30 <small>(Main Event Room)</small></p>
                        <hr/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Afternoon Keynote - 1:30pm&ndash;2:20 <small>(Main Event Room)</small></p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'sara-golemon-keynote'])
                    </div>
                </div>

                @include('breakout-sessions', [
                    'time' => '2:30pm-3:20',
                    'talks' => [
                        'anatomy-of-a-type-system',
                        'building-extraordinary-packages',
                        'async-php-with-react',
                    ]
                ])

                @include('breakout-sessions', [
                    'time' => '3:30pm-4:20',
                    'talks' => [
                        'smelly-tests',
                        'building-your-api-utility-belt',
                        'navigating-your-git-repository',
                    ]
                ])

                @include('breakout-sessions', [
                    'time' => '4:30pm-5:20',
                    'talks' => [
                        'drinking-from-the-firehose',
                        'never-stop-pushing-strategies-and-tools-for-delivering-continuously',
                        'hello-psr-7',
                    ]
                ])

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Evening Keynote - 5:30pm-7:00 <small>(Main Event Room)</small></p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'down-the-rabbit-hole'])
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'emcee', 'message' => 'Raffle and Closing Comments'])
                    </div>
                </div>

            </div>

        </div>
    </div>

    @include('sections.sponsors')
@stop
