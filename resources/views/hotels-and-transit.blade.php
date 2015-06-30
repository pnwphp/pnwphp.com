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
        <div class="title">Hotels & Transit</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    We want to help you enjoy your experience in Seattle.
                    To make things easier for you, we've compiled a list of some nearby hotels,
                    and some transit options for those that don't want to drive.
                </p>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-dark">
                        <p>Hotels</p>
                    </div>
                </div>
            </div>

            @foreach ($conference->hotels as $hotel)
            <div class="col-md-8 col-md-offset-2">
                <h2 id="hotel-max"><a href="#">{{ $hotel->name }}</a></h2>
                <div class="lead">
                    <span class="address">{{ $hotel->address }}</span>
                    <span class="address2">{{ $hotel->address2 }}</span>
                    <div class="locale">
                        <span class="city">{{ $hotel->city }}</span>
                        <span class="state">{{ $hotel->state }}</span>
                        <span class="zipcode">{{ $hotel->zipcode }}</span>
                    </div>
                    <span class="distance">{{ $hotel->distance }}</span>
                </div>
                <div class="contact">
                   <span class="phone">{{ $hotel->tel }}</span>
                   @if ($hotel->twitter_url)
                       <a href="{{ $hotel->twitter_url }}">Twitter</a>
                   @endif
                   @if ($hotel->facebook_url)
                        <a href="{{ $hotel->facebook_url }}">Facebook</a>
                   @endif
                </div>

            </div>
            @endforeach

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-dark">
                        <p>Transit</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="light-rail">Light Rail</h2>
                <div class="lead">
                    The <a href="http://www.soundtransit.org/Schedules/Link-light-rail?tab=Map">Link Light Rail</a>
                    is the most cost effective way to get from Sea-Tac airport to Downtown Seattle.
                    For $2.50, you can get to Downtown in about 40 minutes.
                </div>

                <h2 id="php-embark">Buses</h2>
                <div class="lead">
                    Seattle has an extensive Bus system. There are several great routes to get you
                    around downtown Seattle. The bus routes of interest depend upon
                    which neighborhood you'll be staying in. We recommend getting a hotel room
                    or AirBNB in Seattle's Downtown or Belltown neighborhoods.
                </div>

                <div class="bus-routes">
                   C, D, E, 16 are a few of the most convenient routes, as they are convenient
                   for getting to and from the venue.
                </div>

            </div>

        </div>
    </div>

    @include('sections.sponsors')
@stop
