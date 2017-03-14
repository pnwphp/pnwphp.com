@extends('layout')

@section('content')
<?php
    $cfpUrl = 'https://cfp.pnwphp.com';
?>
<div class="head-banner">
    <div class="bg"></div>
</div>
<div class="head-banner-content">
    <div>
        <h1>Pacific Northwest PHP</h1>
        <h2>September 7th–9th, 2017 &#8226 Seattle, WA</h2>
        <a href="<?php echo $cfpUrl; ?>" target="_blank" class="btn btn-lg btn-info">
            Submit Your CFP
        </a>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="title">PNWPHP Conference</div>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="/img/pnwphp.png" width="160" />
            </div>
            <div class="col-md-6">
                <p class="lead">
                The <strong>Pacific Northwest PHP Conference</strong> is a
                3-day event in the Pacific Northwest region of the
                United States for PHP and Web developers. Our past conferences
                have included <strong>world renown speakers</strong> from the PHP community, about a
                <strong>wide range of topics</strong> &mdash; from APIs to unit
                testing. <strong>Become a part</strong> of our upcoming 2017 conference &mdash;
                <a href="<?php echo $cfpUrl; ?>">Submit your CFPs</a> to become a speaker.
                </p>
            </div>
            <div class="col-md-4">
                <a href="https://twitter.com/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
                </a>
                <a href="https://twitter.com/seaphp" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @SeaPHP
                </a>
            </div>
        </div>
        <div class="row hidden-xs">
            <div class="col-md-8">
                <table class="table table-bordered text-center">
                    <tr class="bg-info">
                        <th class="text-center">Sep 6th</th>
                        <th class="text-center">Sep 7th</th>
                        <th class="text-center">Sep 8th</th>
                        <th class="text-center">Sep 9th</th>
                        <th class="text-center">Sep 10th</th>
                    </tr>
                    <tr>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#seaphp-meetup">Meetup</a></li>
                                <li><a href="./events#seaphp-drinkup">Drinkup</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#pnwphp-workshops">Workshops</a></li>
                                <li><a href="./events#speaker-dinner">Speaker Dinner</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#conference">Conference</a></li>
                                <li><a href="./events#social">Social</a></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><a href="./events#pnwphp">Conference</a></li>
                                <li>Prizes</li>
                            </ul>
                        </td>
                        <td>
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
                &nbsp;
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


<div class="wrapper wrapper-dark">
    <div class="title">The Venue</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>University of Washington</h2>
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
                    <a href="http://www.washington.edu/maps/#!/kne" target="_blank">University of Washington</a> is an excellent University, located in the heart of Seattle.
                </p>
                {{--<p class="lead"><a href="./venue"><i class="fa fa-hand-o-right"></i> More Details</a></p>--}}
            </div>
        </div>
    </div>
</div>

 {{-- @include('sections.sponsors') --}}

@stop
