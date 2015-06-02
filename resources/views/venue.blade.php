@extends('layout')

@section('content')
    <div class="head-banner head-banner-sm">
        <div class="bg"></div>
    </div>
    <div class="head-banner-content head-banner-content-sm">
        <div>
            <h1>Pacific Northwest PHP</h1>
        </div>
    </div>

    <div class="wrapper wrapper-light">
        <div class="title">Venue</div>
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <p class="lead text-center">
                    PNWPHP will be hosted at Impact Hub Seattle, a cool co-working and event venue in the Pioneer Square
                    neighborhood of downtown Seattle, within walking distance of Pike Place Market, the Puget Sound
                    waterfront, the Seattle Underground Tour, Century Link Field, many hotels and restaurants, King
                    Street Station, and the SoundTransit Central Link light rail—for easy access to SeaTac (SEA)
                    airport. It is also only about 2 miles away from the Space Needle and Pacific Science Center. We
                    hope that you'll spend some time before or after the conference exploring our city.
                </p>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Impact Hub Seattle</h2>
                </div>
            </row>
            <div class="row">
                <div class="col-md-8">
                    <div id="location-map"></div>
                </div>
                <div class="col-md-4">
                    <p>
                        <img class="img-responsive img-thumbnail" src="img/impacthub.jpg" alt=""/>
                    </p>
                    <p class="lead">
                        <a href="http://www.impacthubseattle.com" target="_blank">Impact Hub Seattle</a> is a coworking
                        space, events space, and launch pad for purpose-driven ventures that create more value than they
                        capture. Impact hub is located in the historic Pioneer Square landmark.
                    </p>
                    <p><strong>Address: </strong></p>
                    <p>
                        220 2nd Ave S<br/>
                        Seattle, WA 98104
                    </p>
                    <p><a href="http://www.impacthubseattle.com/location" target="_blank">Get Directions and Parking information</a></p>
                </div>
            </div>
        </div>
    </div>

@stop
