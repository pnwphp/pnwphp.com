@extends('layout')

@section('content')
    <div class="wrapper wrapper-blue-dark">
        <div class="wrapper-content">
            <h2>{{ $page_title }}</h2>
            <div class="container">
                <div class="">
                    <p class="lead">
                        Great sponsors help make successful event possible. If you're
                        interested in sponsoring our upcoming 2017 conference on
                        September 7-9, please get in touch with us.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper wrapper-blue-navy">

        @foreach($sponsor_levels AS $sponsor_level)
        <div class="wrapper-content sponsor-level-community">
            <h2>{{ $sponsor_level->title }}</h2>
            <div class="sponsor-list">

                @foreach($sponsors[$sponsor_level->level] AS $sponsor_code)
                    @php
                     $sponsor = $sponsors[ $sponsor_code ];
                    @endphp
                <div class="sponsor-card">
                    <a href="{{ $sponsor->url }}" rel="nofollow">
                        <img alt="{{ $sponsor->name }}" src="https://dummyimage.com/300x300/c2c2c2/3a3a3a.png&text={{ $sponsor->name }}">

                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
@stop
