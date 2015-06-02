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
        <div class="title">Events</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    We are excited about hosting PNWPHP here in Seattle, WA. We want to make this a memorable experience
                    for everyone involved, so we are turning this conference into nearly a week long celebration.
                    Join us in all the fun!
                </p>

                <h2 id="seaphp-meetup"><a href="./events#seaphp-meetup">SeaPHP Meetup (9/9)</a></h2>
                <div class="lead">
                    If you're in town early, please join us for our
                    <a href="http://www.meetup.com/seaphp/events/222390720/">September SeaPHP Meetup</a>, and help
                    us kick off the conference celebration. Our meetup will be hosted by one of our wonderful
                    sponsors, <a href="http://www.tune.com/">TUNE</a>.
                </div>

                <h2 id="seaphp-drinkup"><a href="./events#seaphp-drinkup">SeaPHP Drinkup (9/9)</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>

                <h2 id="pnwphp-workshops"><a href="./events#pnwphp-workshops">PNWPHP Workshops (9/10)</a></h2>
                <div class="lead">
                    On the day before the main conference event, we will be hosting a set of workshops to cover
                    some topics in depth. Tickets for the workshop day are sold separately for ONLY $49.
                </div>

                <h2 id="php-embark"><a href="./events#php-embark">PHP Embark (9/10)</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>

                <h2 id="aws-hackathon"><a href="./events#aws-hackathon">AWS Workshop &amp; Hackathon (9/10)</a></h2>
                <div class="lead">
                    Are you interested in Amazon Web Services or cloud computing? AWS is teaming up with SeaPHP to
                    provide an AWS workshop to teach you about running your PHP apps on AWS and using the
                    <a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP</a> in your apps. Following the
                    workshop in the morning, attendees will team up for a hackathon to showcase their newly learned
                    skills. AWS credits, pizza, beer, &amp; prizes included. Tickets for the AWS workshop/hackathon day
                    are sold separately for ONLY $49. Limited availability.
                </div>

                <h2 id="conference"><a href="./events#conference">PNWPHP Conference (9/11&ndash;9/12)</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>

                <h2 id="uncon"><a href="./events#uncon">UnCon (9/11&ndash;9/12)</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>

                <h2 id="social"><a href="./events#social">Evening Social (9/11)</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>

                <h2 id="wurstcon"><a href="./events#wurstcon">WurstCon Seattle (9/13)</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>
            </div>
        </div>
    </div>

    @include('sections.sponsors')
@stop
