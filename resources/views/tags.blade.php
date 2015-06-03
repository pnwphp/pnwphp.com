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
        <div class="title">Tags</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    From continuous delivery to the cloud, PNWPHP will be covering a variety of PHP and PHP-related
                    topics, delivered by world-renowned speakers.
                </p>
                <p class="lead text-center" style="line-height: 250%">
                    @foreach ($tags as $tag => $count)
                        &ensp;<a class="btn btn-primary" href="./talks?tag={{ $tag }}">{{ $tag }} <span class="badge">{{ $count }}</span></a>&ensp;
                    @endforeach
                </p>
            </div>
        </div>
    </div>

    @include('sections.sponsors')
@stop
