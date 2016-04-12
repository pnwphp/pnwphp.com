@extends('layout')

@section('content')
<div class="head-banner">
    <div class="bg"></div>
</div>
<div class="head-banner-content">
    <div>
        <h1>Pacific Northwest PHP</h1>
        <h2>September 15th–17th, 2016 &#8226 Seattle, WA</h2>
		&nbsp;
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="title">PNWPHP Conference 2016</div>
    <div class="container">

        <div class="row">
            <div class="col-md-2">
                <img class="center-block"  src="img/pnwphp.png" width="160" />
				&nbsp;
            </div>
            <div class="col-md-6">
                <p class="lead">
                    The <strong>Pacific Northwest PHP Conference</strong> is a <em>3-day</em> event for PHP developers
                    living in the Pacific Northwest region. We've invited world-renowned <strong>speakers</strong>
                    from the PHP community to teach about <strong>topics</strong> ranging from continuous
                    integration to the cloud. Join us for the amazing presentations, catered food, musical numbers,
                    the <strong>hackathon</strong>, and the <strong>live blog</strong>.
                </p>
            </div>
            <div class="col-md-4">
                <a href="https://twitter.com/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered text-center">
                    <tr class="bg-info">
                        <th class="text-center">SEP 14TH</th>
                        <th class="text-center">SEP 15TH</th>
                        <th class="text-center">SEP 16TH</th>
                        <th class="text-center">SEP 17TH</th>
                        <th class="text-center">SEP 18TH</th>
                    </tr>
                    <tr>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><em>SeaPHP Meetup</em></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>Workshops</strong></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>Conference</strong></li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li><strong>Conference</strong></li>
                                <li>Prizes</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li>WurstConSEA</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4">
                    <p class="text-center">PNWPHP is sponsored and organized by:</p>
                    <a target="_blank" href="http://www.seaphp.com" title="SeaPHP">
                        <img src="/img/logos/seaphp.jpg" alt="Seattle PHP" class="img-responsive center-block" />
                    </a>
            </div>
        </div>
    </div>
</div>


<div class="wrapper wrapper-dark">
    <div class="title">The Venue</div>
    <div id="venue" class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Seattle Center</h2>
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
                    <a href="http://www.cornish.edu/playhouse/" target="_blank">Cornish Playhouse</a> is the main PNWPHP conference venue at Seattle Center. <a href="http://www.seattlecenter.com/locations/detail.aspx?id=41">The Armory</a> is the PNWPHP Workshops venue. Seattle Center is the home of the Space Needle, EMP Museum, and Key Arena.
                </p>
                {{--<p class="lead"><a href="./venue"><i class="fa fa-hand-o-right"></i> More Details</a></p>--}}
            </div>
        </div>
    </div>
</div>


@stop
