@extends('layout')

@section('content')
    <div class="head-banner head-banner-sm">
        <div class="bg"></div>
    </div>
    <div class="head-banner-content head-banner-content-sm">
        <div>
            <h1>Pacific Northwest PHP</h1>
            <h2>AWS Workshop/Hackathon</h2>
        </div>
    </div>

    <div class="wrapper wrapper-light">

        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>
                        AWS Workshop &amp; Hackathon
                        <a class="btn btn-info pull-right" href="https://pnwphp2015.busyconf.com/bookings/new">
                            <i class="fa fa-ticket"></i> REGISTER NOW
                        </a>
                    </h2>
                    <p class="lead">
                        Amazon Web Services (AWS) is sponsoring an AWS-themed workshop and hackathon for PNWPHP. There
                        will be 4 awesome presentations in the morning followed by an afternoon and evening of hacking,
                        food, free AWS credits, and prizes.
                    </p>
                    <p>
                        <strong>Note:</strong> This event takes place at one of the Amazon buildings:
                        <strong>1918 8th Ave., Seattle, WA 98101 (3rd floor).</strong>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 id="hackathon-schedule">Schedule <small>(September 10th, 2015)</small></h2>
                </div>
            </div>
            <div class="schedule-wrapper col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="text-center schedule-header">
                        <p>Registration & Coffee - 8:00am&ndash;9:00</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="text-center schedule-header">
                        <p>AWS Workshop - 9:00am&ndash;12:00</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'php-approach-to-infrastructure'])
                    </div>
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'using-the-aws-sdk-for-php'])
                    </div>
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'async-requests-and-promises-sdk'])
                    </div>
                    <div class="col-md-12">
                        @include('session', ['talk_id' => 'running-php-on-aws'])
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>Lunch - 12:00pm&ndash;1:00</p>
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>AWS Hackathon - 1:00pm&ndash;11:00</p>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        <div class="session">
                            <p>Begin Hacking (1:00pm)</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        <div class="session">
                            <p>Dinner Arrives (6:00pm)</p>
                        </div>
                    </div>
                </div>
                <div class="row schedule-row">
                    <div class="col-md-12">
                        <div class="session">
                            <p>Demos &amp; Awards (10:00pm)</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center schedule-header">
                        <p>See you at PNWPHP!</p>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 id="hackathon-details">Details</h2>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">What is included in this event?</h3>
                        </div>
                        <div class="panel-body">
                            This AWS Workshop/Hackathon will include:
                            <ul>
                                <li>Four technical presentations by AWS engineers and architects.</li>
                                <li>Food, including lunch, dinner, drinks, and snacks.</li>
                                <li>AWS credits and access to the <a href="http://aws.amazon.com/activate/">AWS Activate</a> program.</li>
                                <li>Great networking opportunity with other AWS and PHP enthusiasts.</li>
                                <li>Cool prizes for the top projects.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">When and where is this event?</h3>
                        </div>
                        <div class="panel-body">
                            The AWS Workshop/Hackathon will take place on September 10th, 2015&mdash;the day before the
                            main PNWPHP conference. The Workshop/Hackathon is being held at one of the Amazon buildings
                            (about 1.5 miles away from the main PNWPHP conference venue) located at
                            <a href="https://www.google.com/maps/place/1918+Eighth+Avenue,+1918+8th+Ave,+Seattle,+WA+98101">1918 8th Avenue, 1918 8th Ave, Seattle, WA 98101</a>,
                            on the 3rd floor.
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Do I need a ticket to PNWPHP to attend this event?</h3>
                        </div>
                        <div class="panel-body">
                            <strong>No.</strong> The AWS Workshop/Hackathon is a standalone event that requires a
                            separate ticket. You can attend this event, PNWPHP, or both. This event does, however, occur
                            at the same time as the PNWPHP workshops, so you have to choose between the workshops or
                            this event. Please head to the
                            <a href="https://pnwphp2015.busyconf.com/bookings/new">registration page</a> to get your
                            tickets for the Workshop/Hackathon.
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    @include('sections.sponsors')
@stop
