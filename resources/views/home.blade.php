@extends('layout')

@section('content')
<?php
    $cfpUrl = 'http://cfp.pnwphp.com';
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
                                <li><strong>Meetup</strong></li>
                                <li><strong>Drinkup</strong></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>Workshops</strong></li>
                                <li><strong>Speaker Dinner</strong></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>Conference</strong></li>
                                <li><strong>Social</strong></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>Conference</strong></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>WurstConSEA</strong></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                &nbsp;
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
                    <a href="http://www.washington.edu/maps/#!/kne" target="_blank">University of Washington</a> is an excellent University, located in the heart of Seattle. The main conference will be held at <strong>Kane Hall</strong>, and the workshops in nearby <strong>Johnson Hall</strong>. 
                </p>
            </div>
        </div>
    </div>
</div>

 {{-- @include('sections.sponsors') --}}

@stop
