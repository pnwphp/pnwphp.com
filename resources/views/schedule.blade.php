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
                    <h3>Friday - Sept 11, Conference Day 1</h3>
                </div>
            </div>
            <div class="schedule-wrapper">
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Welcome &amp; Keynote</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-6 col-md-offset-3">
                    <?php
                        $keynote_id = 'open-source-love';
                        $talk = $conference->talks[ $keynote_id ];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                    ?>
                        <p>9:00 - Welcome</p>
                        <p>9:15 - Keynote: <a href="#">{{ $speaker['name'] }}</a> on <a href="#">{{ $talk['title'] }}</a></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>10:15am - 12:00 Sessions</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['php-embark'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['clean-application-development'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['git-and-github-for-php-projects'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>12:15pm - 1:30 LUNCH</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>1:30pm - 2:30 Keynote</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-3 col-md-offset-5">
                    <?php
                        $talk = $conference->talks['cloud-is-the-new-normal'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>2:30pm - 3:30 Sessions</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['talmudic-maxims-to-maximize-your-growth-as-a-software-developer'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['demystifying-the-rest-api'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['magento-2-modernizing-an-open-source-ecommerce-powerhouse'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>3:30pm - 4:30 Sessions</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['project-triage'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['phpspec-behat-two-testing-tools-that-write-code-for-you'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['battled-hardened-laravel-lessons-in-scale'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>4:30pm - 5:30 Sessions</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['nosql-lightning-talks'];

                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['composer-stability-and-semantic-versioning-demystified'];

                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                    <div class="col-md-4">
                    <?php
                        $talk = $conference->talks['foundations-of-zend-framework-2'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>End of Day Keynote</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-3 col-md-offset-5">
                    <?php
                        $talk = $conference->talks['stronger-than-fear'];
                        $speaker = $conference->speakers[ $talk['speaker'] ];
                        echo view('session', [ 'talk' => $talk, 'speaker' => $speaker ] );
                    ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
