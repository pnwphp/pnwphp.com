@extends('layout')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>

@section('content')
    <div class="head-banner head-banner-sm">
        <div class="bg"></div>
    </div>
    <div class="head-banner-content head-banner-content-sm">
        <div>
            <h1>Jobs at PNWPHP</h1>
        </div>
    </div>

    <div class="wrapper wrapper-light">
        <h2 class="title">Jobs</h2>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                Learn about the great jobs in the PHP Community here at PNWPHP.
                </p>
            </div>
            @foreach ($conference->jobs->shuffle() as $job)
                <div class="row talks">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3>{{ $job->title }}</h3>
                                <p>
                                <strong>Contact:</strong>  {{ $job->contact_name }} &lt;{{ $job->contact_email }}&gt;<br>
                                <strong>Location:</strong>  {{ $job->location }}<br>
                                <strong>Company:</strong> <a href="{{ $job->company_url }}">{{ $job->company_name }}</a>
                                </p>
                                <p>{!! str_replace("\n\n", "<p/><p>", $job->description) !!}</p>
                                <p>
                                <strong>Learn more</strong> about the <a href="{{ $job->url }}">{{ $job->title }}</a> job.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('sections.sponsors')
@stop
