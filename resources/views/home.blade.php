@extends('layout')

@section('content')
<div class="head-banner">
    <div class="bg"></div>
</div>
<div class="head-banner-content">
    <div>
        <h1>Pacific Northwest PHP</h1>
        <h2>September 10th–12th, 2015 &#8226 Seattle, WA</h2>
        <a class="btn btn-lg btn-info" target="_blank" href="https://pnwphp2015.busyconf.com/bookings/new">REGISTER NOW <i class="fa fa-ticket"></i></a>
    </div>
</div>

<div class="wrapper wrapper-white">
    <div class="title">PNWPHP</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">
                    Join us in Seattle this September for the Pacific Northwest PHP conference, the ultimate event for PHP developers in the Pacific Northwest.<br/><br/>Our 3-day event will be overflowing with awesome as we hear from world-renowned speakers from the PHP community and companies like Amazon, AOL, Facebook, Google, Microsoft, Oracle, Zend, and more.
                </p>
                <div class="alert alert-info">
                    <p class="lead text-center">
                        Official Conference Hashtag: <a href="https://twitter.com/hashtag/pnwphp?f=realtime" target="_blank">#PNWPHP</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="separator separator-dark">
                    <p>Events</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">
                    Along with the conference, we'll also be having a full day of <em>workshops</em> and a <em>hackathon</em> before the conference, an <em>uncon</em>, <em>social events</em>, <em>musical numbers</em>, <em>catered food</em>, and more.
                </p>
                <table class="table table-bordered text-center">
                    <tr>
                        <th class="text-center">SEP 9TH</th>
                        <th class="text-center">SEP 10TH</th>
                        <th class="text-center">SEP 11TH</th>
                        <th class="text-center">SEP 12TH</th>
                        <th class="text-center">SEP 13TH</th>
                    </tr>
                    <tr>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li>SeaPHP Meetup</li>
                                <li>Post-Meetup Drinkup</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li>Workshops</li>
                                <li>PHP Embark</li>
                                <li>AWS Hackathon</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li>PNWPHP Conference</li>
                                <li>UnCon</li>
                                <li>Catered Lunch</li>
                                <li>Evening Social</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li>PNWPHP Conference</li>
                                <li>UnCon</li>
                                <li>Catered Lunch</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled text-center">
                                <li>WurstConSEA</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th class="text-center">$5</th>
                        <th class="text-center">$49</th>
                        <th colspan="2" class="text-center">See below</th>
                        <th class="text-center">Free</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-light">
    <div class="title">Registration</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="text-center">FOR STUDENTS</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$129 <s>$149</s></strong><br><small><em>Early Bird Pricing</em> until June 15th</small></p>
                        <p>Available to full and part time students; student ID required at the event.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new">REGISTER NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="text-center">FOR INDIVIDUALS</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$199 <s>$249</s></strong><br><small><em>Early Bird Pricing</em> until June 15th</small></p>
                        <p>Available to attendees who are paying for their own tickets.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new">REGISTER NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="text-center">FOR EMPLOYEES</h4>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead"><strong>$349</strong><br><small><em>Corporate Pricing</em></small></p>
                        <p>Available to attendees whose tickets are being paid for or reimbursed by their company/employer.</p>
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-lg btn-block btn-info" href="https://pnwphp2015.busyconf.com/bookings/new">REGISTER NOW</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    <p class="lead text-center"><strong>NOTE:</strong> The Workshops and AWS Hackathon require a separate <strong>$49</strong> ticket.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-dark">
    <div class="title">The Venue</div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Impact Hub Seattle</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div id='location-map'></div>
            </div>
            <div class="col-md-4">
                <p>
                    <img class="img-responsive img-thumbnail" src="img/impacthub.jpg" alt=""/>
                </p>
                <p class="lead">
                    <a href="http://www.impacthubseattle.com" target="_blank">Impact Hub Seattle</a> is a coworking space, events space, and launch pad for purpose-driven ventures that create more value than they capture. Impact hub is located in the historic Pioneer Square landmark.
                </p>
                <p class="lead"><a href="./venue"><i class="fa fa-hand-o-right"></i> More Details</a></p>
            </div>
        </div>
    </div>
</div>

<div class="wrapper wrapper-light">
    <div class="title">Stay Up-to-date</div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead">
                    The Seattle PHP User Group (<a href="http://twitter.com/seaphp" target="_blank">@seaphp</a>), PDX
                    PHP Users Group (<a href="http://twitter.com/phpdx" target="_blank">@phpdx</a>), and Vancouver PHP
                    Meetup (<a href="http://twitter.com/phpvancouver" target="_blank">@phpvancouver</a>) invite PHP
                    developers everywhere, and of all skill levels, to come learn, network, and hack together with us
                    in Seattle at the first PNWPHP.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <a href="http://eepurl.com/9bHLT" target="_blank" class="btn btn-lg btn-info btn-block">Join the
                    Mailing List <i class="fa fa-envelope"></i></a>
            </div>
        </div>
    </div>
</div>

@include('sections.sponsors')

@stop
