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
                <div class="row sponsors">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <a href="{{ $sponsor->url }}" target="_blank" alt="{{ $sponsor->name }}">
                                        <img class="img-thumbnail img-responsive" alt="{{ $sponsor->name }}" src="{{ $sponsor->logo }}">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <h3 style="margin-top:0;">
                                        <a name="{{ $sponsor->code }}" href="#{{ $sponsor->code }}">{{ $sponsor->name }}</a>
                                        <small> ({{ $sponsor->label }})</small>
                                    </h3>
                                    <p>{!! str_replace("\n\n", "</p><p>", $sponsor->about) !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
