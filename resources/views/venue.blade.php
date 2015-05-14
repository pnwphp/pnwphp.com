@extends('layout')

@section('content')
    <div class="head-banner head-banner-sm">
        <div class="bg"></div>
    </div>
    <div class="head-banner-content head-banner-content-sm">
        <div>
            <h1>Venue</h1>
            <h2>Impact Hub Seattle</h2>
        </div>
    </div>

    <div class="wrapper wrapper-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id='location-map'></div>
                </div>
                <div class="col-md-4">
                    <p>
                        <img class="img-responsive img-thumbnail" src="img/impacthub.jpg" alt=""/>
                    </p>
                    <p class="lead">
                        <a href="http://www.impacthubseattle.com" target="_blank">Impact Hub Seattle</a> is a coworking space, events space, and launch pad for purpose-driven ventures that create more value than they capture. Impact hub is located in the historic Pioneer Square landmark.
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