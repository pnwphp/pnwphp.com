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
        <div class="title">Sponsors</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    Thank you to all of our sponsors who are making it possible to hold this event.
                </p>
            </div>
            @foreach ($conference->sponsors->sortBy('rank', SORT_REGULAR, true) as $sponsor)
                @include('single-sponsor', ['sponsor' => $sponsor])
            @endforeach
        </div>

        @include('sections.community-sponsors')
    </div>
@stop
