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
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-dark">
                        <p>September 9/9</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="seaphp-meetup"><a href="./events#seaphp-meetup">SeaPHP Meetup</a></h2>
                <div class="lead">
                    If you're in town early, please join us for our
                    <a href="http://www.meetup.com/seaphp/events/222390720/">September SeaPHP Meetup</a>, and help
                    us kick off the conference celebration. Our meetup will be hosted by one of our wonderful
                    sponsors, <a href="http://www.tune.com/">TUNE</a>.
                </div>

                <h2 id="seaphp-drinkup"><a href="./events#seaphp-drinkup">SeaPHP Drinkup</a></h2>
                <div class="lead">
                    More info coming soon.
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-dark">
                        <p>September 9/10</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="pnwphp-workshops"><a href="./events#pnwphp-workshops">PNWPHP Workshops</a></h2>
                <div class="lead">
                    On the day before the main conference event, we will be hosting a set of workshops to cover
                    some topics in depth. Tickets for the workshop day are sold separately for ONLY $49.
                </div>

                <h2 id="php-embark"><a href="./events#php-embark">PHP Embark</a></h2>
                <div class="lead">
                    If you are new to PHP or programming, then you should sign up for PHP Embark, a day-long workshop
                    designed to help you hit the ground running with web development in PHP. Tickets for PHP Embark are
                    sold separately for ONLY $49.
                </div>

                <h2 id="aws-hackathon"><a href="./events#aws-hackathon">AWS Workshop &amp; Hackathon</a></h2>
                <div class="lead">
                    Are you interested in Amazon Web Services or cloud computing? AWS is sponsoring and helping SeaPHP
                    to provide an AWS workshop to teach you about running your PHP apps on AWS and using the
                    <a href="https://github.com/aws/aws-sdk-php">AWS SDK for PHP</a> in your apps. Following the
                    workshop in the morning, attendees will team up for a hackathon to showcase their newly learned
                    skills. AWS credits, pizza, beer, &amp; prizes included. Tickets for the AWS workshop/hackathon day
                    are sold separately for ONLY $49. Limited availability.
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-dark">
                        <p>September 9/11&ndash;9/12</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="conference"><a href="./events#conference">PNWPHP Conference</a></h2>
                <div class="lead">
                    The main conference event will take place over two days with 30 presentations, 6 keynotes, catered
                    lunches, musical numbers, swag from sponsors, and quality networking time.
                </div>

                <h2 id="uncon"><a href="./events#uncon">UnCon</a></h2>
                <div class="lead">
                    Running alongside the main conference, there will be an open room where anyone can present. This
                    provides first-time speakers an opportunity to give it a shot or seasoned speakers to test out
                    new presentation ideas. You could even use the room for a group discussion
                    (<abbr title="Birds of a Feather">BoF</abbr>). Attendees can sign up for speaking slots in the UnCon
                    room on the morning of each conference day.
                </div>

                <h2 id="social"><a href="./events#social">Evening Social</a></h2>
                <div class="lead">
                    On the first night of the conference (9/11), we will have a social activity with games, food, drinks, and
                    more. So linger longer and get to know others in the PHP community.
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-dark">
                        <p>September 9/13</p>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-md-offset-2">
                <h2 id="wurstcon"><a href="./events#wurstcon">WurstConSEA</a></h2>
                <div class="lead">
                    The <em>wurst</em> PHP conference ever is assembling in Seattle on the day after PNWPHP to follow
                    <a href="https://twitter.com/jmikola">Jeremy Mikola</a> around town and consume quality sausages.
                    This <em>tour de sausage</em> will include a stops at street vendors and in the famous
                    <a href="http://www.pikeplacemarket.org/">Pike Place Market</a>. See
                    <a href="http://wurstcon.com/">http://wurstcon.com/</a> for details about the debauchery of past
                    <a href="https://twitter.com/hashtag/WurstCon">#wurstcon</a>'s.
                </div>
            </div>
        </div>
    </div>

    @include('sections.sponsors')
@stop
