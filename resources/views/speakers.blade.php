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
        <div class="title">Speakers</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    At PNWPHP, you'll have the opportunity to hear from world-renowned speakers from the PHP community
                    and companies like Amazon, AOL, Facebook, Google, Microsoft, Oracle, Zend, and more.
                </p>
            </div>
            @foreach ($conference->speakers->sortBy('name', SORT_REGULAR) as $speaker)
                <div class="row speakers">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-2">
                                    <img alt="{{ $speaker->name }}" src="{{ $speaker->avatar }}">
                                </div>
                                <div class="col-md-10">
                                    <h3 style="margin-top:0;">
                                        <a name="{{ $speaker->code }}" href="#{{ $speaker->code }}">{{ $speaker->name }}</a>
                                        @if ($speaker->twitter)
                                            <small> (<a href="twitter.com/{{ $speaker->twitter }}">{{ '@'.$speaker->twitter }}</a>)</small>
                                        @endif
                                    </h3>
                                    <p>{!! str_replace("\n\n", "<p/><p>", $speaker->bio) !!}</p>
                                    <h4>Talks</h4>
                                    <ul>
                                    @if ($speaker->code === 'jeremy-lindblom')
                                        <li>I'm your PNWPHP master of ceremonies!</li>
                                    @endif
                                    @forelse ($conference->talks->filter($talkFilter($speaker)) as $talk)
                                        <li>
                                            @if ($talk->type === 'keynote')
                                                <span class="label label-primary">KEYNOTE</span>
                                            @elseif ($talk->type === 'workshop')
                                                <span class="label label-warning">WORKSHOP</span>
                                            @elseif ($talk->type === 'hackathon')
                                                <span class="label label-info">HACKATHON</span>
                                            @elseif ($talk->type === 'meetup')
                                                <span class="label label-success">MEETUP</span>
                                            @endif
                                            <a href="{{ url('talks#' . $talk->code) }}">{{ $talk->title }}</a>
                                        </li>
                                    @empty
                                        <li>TBA</li>
                                    @endforelse
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('sections.sponsors')
@stop
