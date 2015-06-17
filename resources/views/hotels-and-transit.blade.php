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

            <div class="col-md-8 col-md-offset-2">
                <h2 id="hotel-max"><a href="#">Hotel Max</a></h2>
                <div class="lead">
                    <span class="address">400 pine St </span>
                    <span class="address2"> Westlake Plaza</span>
                    <div class="locale">
                        <span class="city">Seattle</span>
                        <span class="state">WA</span>
                        <span class="zipcode">98101</span>
                    </div>
                </div>
                <div class="contact">
                   <span class="phone">(206) 555-1234</span>
                   <a href="#">Twitter</a>
                   <a href="#">Facebook</a>
                </div>

            </div>

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
                    On the day before the main conference event, we will be hosting a set of workshops to cover
                    some topics in depth. Tickets for the workshop day are sold separately for ONLY $49.
                </div>

                <h2 id="php-embark">Buses</h2>
                <div class="lead">
                    Seattle has an extensive Bus system. Here are a few great routes
                    to get you around downtown Seattle.
                </div>

                <div class="bus-routes">
                   A, B, C, D, E, 10, 11, 16
                </div>

            </div>

        </div>
    </div>

    @include('sections.sponsors')
@stop
