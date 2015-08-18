@extends('layout')

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
<script src="//joind.in/widget/widget.php"></script>

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
                    From continuous delivery to the cloud, PNWPHP will be covering a variety of PHP and PHP-related
                    topics, delivered by world-renowned speakers.<br><a href="./tags"><i class="fa fa-search"></i> See all the topics.</a>
                </p>
            </div>
            @foreach ($conference->talks->filter($tagFilter)->sortBy('title', SORT_REGULAR) as $talk)
                <div class="row talks">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3>
                                    <a name="{{ $talk->code }}" href="#{{ $talk->code }}">{{ $talk->title }}</a>
                                    @if ($talk->type === 'keynote')
                                        <span class="label label-primary">KEYNOTE</span>
                                    @elseif ($talk->type === 'workshop')
                                        <span class="label label-warning">WORKSHOP</span>
                                    @elseif ($talk->type === 'hackathon')
                                        <span class="label label-info">HACKATHON</span>
                                    @elseif ($talk->type === 'meetup')
                                        <span class="label label-success">MEETUP</span>
                                    @endif
                                </h3>
                                <p>
                                    Presented by
                                    @if(is_array($talk->speaker))
                                        @foreach($talk->speaker as $speaker)
                                            <a href="./speakers#{{ $speaker }}">
                                                {{ $conference->speakers->get($speaker)->name }}
                                            </a>&ensp;
                                        @endforeach
                                    @else
                                        <a href="./speakers#{{ $talk->speaker }}">
                                            {{ $conference->speakers->get($talk->speaker)->name }}
                                        </a>
                                    @endif
                                </p>
                                @if ($talk->tags)
                                    <p>
                                        @foreach ($talk->tags as $tag)
                                            <a href="./talks?tag={{ $tag }}"><i class="fa fa-tag"></i> {{ $tag }}</a>&emsp;
                                        @endforeach
                                    </p>
                                @endif
                                <p>{!! str_replace("\n\n", "<p/><p>", $talk->description) !!}</p>
                                @if($talk->reviewId !== '')
                                    <p>
                                        <script type="application/javascript">
                                            joindin.draw({{ $talk->reviewId }});
                                        </script>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('sections.sponsors')
@stop
