@extends('layout')

@section('content')
<div class="head-banner">
    <div class="bg"></div>
</div>
<div class="head-banner-content">
    <div>
        <h1>Pacific Northwest PHP</h1>
        <h2>September 10th–12th, 2015 &#8226 Seattle, WA</h2>
        <a href="https://nomadphp.com/pnwphp-videos/" target="_blank" class="btn btn-lg btn-info">
            <i class="fa fa-video-camera"></i>&ensp;Buy PNWPHP 2015 Videos
        </a>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="title">PNWPHP Conference</div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="img/pnwphp.png" width="160" />
            </div>
            <div class="col-md-6">
                <p class="lead">
                    The <strong>Pacific Northwest PHP Conference</strong> is a <em>3-day</em> event for PHP developers
                    living in the Pacific Northwest region. We've invited world-renowned <a href="./speakers">speakers</a>
                    from the PHP community to teach about <a href="./tags">topics</a> ranging from continuous
                    integration to the cloud. Join us for the amazing presentations, catered food, musical numbers,
                    the <a href="./events-hackathon">hackathon</a>, and the <a href="./live">live blog</a>.
                </p>
            </div>
            <div class="col-md-4">
                <a href="https://twitter.com/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
                </a>
                <a href="http://joind.in/event/view/3451" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-star-half-o"></i>&ensp;Rate Talks on Joind.in
                </a>
                <a href="https://gitter.im/pnwphp/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-users"></i>&ensp;Chat w/ Us on Gitter
                </a>
                <a href="http://eepurl.com/9bHLT" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-envelope"></i>&ensp;Join the Mailing List
                </a>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-md-8">
                <table class="table table-bordered text-center">
                    <tr class="bg-info">
                        <th class="text-center">SEP 9TH</th>
                        <th class="text-center">SEP 10TH</th>
                        <th class="text-center">SEP 11TH</th>
                        <th class="text-center">SEP 12TH</th>
                        <th class="text-center">SEP 13TH</th>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#seaphp-meetup">Meetup</a></li>
                                <li><a href="./events#seaphp-drinkup">Drinkup</a></li>
                            </ul>
                        </td>
                        <td rowspan="2">
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#pnwphp-workshops">Workshops</a></li>
                                <li><a href="./events-hackathon">Hackathon</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#conference">Conference</a></li>
                                <li><a href="./events#uncon">UnCon</a></li>
                                <li><a href="./events#social">Social</a></li>
                                <li><a href="./events#social">JeoPHPardy</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#pnwphp">Conference</a></li>
                                <li><a href="./events#uncon">UnCon</a></li>
                                <li>Prizes</li>
                                <li><a href="./events#podcast-devhell">Podcasts</a></li>
                            </ul>
                        </td>
                        <td rowspan="2">
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#wurstcon">WurstConSEA</a></li>
                            </ul>
                        </td>
                    </tr>
                    {{--<tr class="bg-success">
                        <th colspan="2" class="text-center"><a href="./online-events">Live Stream</a></th>
                    </tr>--}}
                </table>
            </div>
            <div class="col-md-4">
                @if ($sponsor = $conference->sponsors->filter(function ($sponsor) {return $sponsor->rank >= 1070;})->random(1))
                    <p class="text-center">PNWPHP is sponsored in part by:</p>
                    <a target="_blank" href="{{ $sponsor->url }}" title="{{ $sponsor->name }}">
                        <img src="{{ $sponsor->logo }}" alt="{{ $sponsor->name }}" class="img-responsive center-block" />
                    </a>
                @endif
            </div>
        </div>
        <div class="row visible-xs-block">
            <div class="col-md-8">
                <h3>EVENTS: </h3>
                <hr>

                <p><strong>WED, SEP 9TH</strong></p>
                <ul>
                    <li><a href="./events#seaphp-meetup">Meetup</a></li>
                    <li><a href="./events#seaphp-drinkup">Drinkup</a></li>
                </ul>
                <p><strong>THU, SEP 10TH</strong></p>
                <ul>
                    <li><a href="./events#pnwphp-workshops">Workshops</a></li>
                    <li><a href="./events-hackathon">Hackathon</a></li>
                </ul>
                <p><strong>FRI, SEP 11TH</strong></p>
                <ul>
                    <li><a href="./events#conference">Conference</a></li>
                    <li><a href="./events#uncon">UnCon</a></li>
                    <li><a href="./events#social">Social</a></li>
                    <li><a href="./events#social">JeoPHPardy</a></li>
                    <li><a href="./online-events">Live Stream</a></li>
                </ul>
                <p><strong>SAT, SEP 12TH</strong></p>
                <ul>
                    <li><a href="./events#pnwphp">Conference</a></li>
                    <li><a href="./events#uncon">UnCon</a></li>
                    <li>Prizes</li>
                    <li><a href="./events#podcast-devhell">Podcasts</a></li>
                    <li><a href="./online-events">Live Stream</a></li>
                </ul>
                <p><strong>SUN, SEP 13TH</strong></p>
                <ul>
                    <li><a href="./events#wurstcon">WurstConSEA</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                @if ($sponsor = $conference->sponsors->filter(function ($sponsor) {return $sponsor->rank >= 1070;})->random(1))
                    <p class="text-center">PNWPHP is sponsored in part by:</p>
                    <a target="_blank" href="{{ $sponsor->url }}" title="{{ $sponsor->name }}">
                        <img src="{{ $sponsor->logo }}" alt="{{ $sponsor->name }}" class="img-responsive center-block" />
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>

{{--
<div class="wrapper wrapper-light">
    <div class="title">Registration</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="text-center">Workshop Day</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$49</strong></p>
                        <p>
                            Choose one of the following:<br>
                            <a href="./events#pnwphp-workshops">Two Half-day Workshops</a><br>
                            <a href="./events-hackathon">AWS Hackathon &amp; Workshop</a>
                        </p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new"><i class="fa fa-ticket"></i> REGISTER NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="text-center">Live Video Stream</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$39</strong></p>
                        <p>Watch our <a href="./online-events">live video stream</a> from the main conference track,
                            including 16 presentations from some amazing speakers.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new#ticket_type_54dd586d49a161a49e00000c"><i class="fa fa-ticket"></i> REGISTER NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="text-center">Main Conference</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>SOLD OUT</strong></p>
                        <p>The conference is full, but there is still room to RSVP for our
                            <a href="http://www.meetup.com/seaphp/events/222390720/">PNWPHP Kickoff Meetup</a>
                            with Cal Evans on 9/9 if you'll be in town.
                        </p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-default" href="https://pnwphp2015.busyconf.com/bookings/new"><i class="fa fa-ticket"></i> SOLD OUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
--}}

<div class="wrapper wrapper-dark">
    <div class="title">The Venue</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Impact Hub Seattle</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id="location-map"></div>
            </div>
            <div class="col-md-4">
                <p>
                    <img class="img-responsive img-thumbnail" src="img/impacthub.jpg" alt=""/>
                </p>
                <p class="lead">
                    <a href="http://www.impacthubseattle.com" target="_blank">Impact Hub Seattle</a> is a coworking space, events space, and launch pad for purpose-driven ventures that create more value than they capture. Impact hub is located in the historic Pioneer Square landmark.
                </p>
                {{--<p class="lead"><a href="./venue"><i class="fa fa-hand-o-right"></i> More Details</a></p>--}}
            </div>
        </div>
    </div>
</div>

@include('sections.sponsors')

@stop
