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
        <div class="title">Talks</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    From <a href="./talks?tag=continuous-delivery">continuous delivery</a> to
                    <a href="./talks?tag=cloud">the cloud</a>, PNWPHP will be covering a variety of PHP and PHP-related
                    topics, delivered by world-renowned speakers.
                </p>
            </div>
            @foreach ($conference->talks->filter($tagFilter)->sortBy('title', SORT_REGULAR) as $talk)
                <div class="row talks">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3>
                                    <a name="{{ $talk->code }}" href="#{{ $talk->code }}">{{ $talk->title }}</a>
                                </h3>
                                <p>Presented by <a href="./speakers#{{ $talk->speaker }}">{{ $conference->speakers->get($talk->speaker)->name }}</a></p>
                                @if ($talk->tags)
                                    <p>
                                        @foreach ($talk->tags as $tag)
                                            <a href="./talks?tag={{ $tag }}"><i class="fa fa-tag"></i> {{ $tag }}</a>&emsp;
                                        @endforeach
                                    </p>
                                @endif
                                <p>{!! str_replace("\n\n", "<p/><p>", $talk->description) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('sections.sponsors')
@stop
