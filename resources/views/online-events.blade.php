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
        <div class="title">Live Events</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h2 id="live-stream">
                    <a href="/online-events#live-stream">Live Stream</a>
                    <a class="btn btn-default btn-info pull-right" href="https://pnwphp2015.busyconf.com/bookings/new#ticket_type_54dd586d49a161a49e00000c">
                        <i class="fa fa-ticket"></i> Register Now
                    </a>
                </h2>
                <div class="lead">
                    <strong>PNWPHP is broadcasting live on September 11th &amp; 12th.</strong><br>
                    <a href="https://pnwphp2015.busyconf.com/bookings/new#ticket_type_54dd586d49a161a49e00000c">
                    Register as a &ldquo;Virtual Attendee&rdquo;</a> to get access to the live stream from our main
                    event room. Live stream attendees will also get access to the videos<sup><a href="#footnote">&dagger;</a></sup>
                    once they are published.
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="live-blog">
                    <a href="/live">Live Blog</a>
                    <a class="btn btn-default btn-info pull-right" href="/live">
                        <i class="fa fa-link"></i> Check it Out
                    </a>
                </h2>
                <div class="lead">
                    In our live blog, we'll give you a play-by-play of the whole conference, so it'll feel like you are
                    right there with us. Add if you are with us, you be able to get a peek at what happened in the other
                    sessions that are happening concurrently. Keep your browsers open to the live blog during the event
                    to catch every nugget of wisdom and cool picture or tweet.
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="hashtag">
                    <a href="https://twitter.com/hashtag/PNWPHP">#PNWPHP on Twitter</a>
                    <a class="btn btn-default btn-info pull-right" href="https://twitter.com/hashtag/PNWPHP">
                        <i class="fa fa-twitter"></i> Join the Conversation
                    </a>
                </h2>
                <div class="lead">
                    One of the best parts of a <a href="https://twitter.com/hashtag/php">#PHP</a> conference is the
                    conversations that happen on Twitter. Our <a href="/speakers">speakers</a> are all pretty active on
                    Twitter, and many of the conference announcements will happen on there as well. Follow
                    <a href="https://twitter.com/PNWPHP">@PNWPHP</a> and keep a watch on the
                    <a href="https://twitter.com/hashtag/PNWPHP">#PNWPHP</a> hashtag so you don't miss out on anything.
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="gitter-chat">
                    <a href="https://gitter.im/pnwphp/PNWPHP">Chat with Attendees</a>
                    <a class="btn btn-default btn-info pull-right" href="https://gitter.im/pnwphp/PNWPHP">
                        <i class="fa fa-users"></i> Join the Conversation
                    </a>
                </h2>
                <div class="lead">
                    We will have an open chat room going during the conference using <a href="https://gitter.im">Gitter</a>,
                    so that you can easily communicate with other attendees, discuss things about your sessions, and
                    ask questions to the PNWPHP speakers and organizers. In fact, it's already open, so
                    <a href="https://gitter.im/pnwphp/PNWPHP">join us now</a> (they even have
                    <a href="https://gitter.im/apps">mobile apps</a>).
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <hr>
                <p id="footnote" class="small"><sup>&dagger;</sup> There are two talks that will <em>not</em> be
                included in the published videos, but will be shown during the live stream.</p>
            </div>
        </div>
    </div>

    @include('sections.sponsors')
@stop
