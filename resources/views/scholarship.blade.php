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
        <div class="title">Scholarship Application</div>
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <p class="lead text-center">
                    Pacific Northwest PHP Conference currently has some funds to disburse in scholarship funds to bring locals from the Pacific Northwest.
                </p>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p>The PNWPHP team will select, contact, and award the recipients. The award will include 1 conference ticket, hotel if you are not nearby, and a train/bus ticket, if you are unable to drive.</p>
                    <strong>Requirements</strong>
                    <ul>
                        <li>Must be in Washington/Oregon/Idaho area</li>
                        <li>18+ years or older</li>
                        <li>You have true financial need for this scholarship, and wouldn't be able to attend otherwise</li>
                    </ul>


                    <strong>Deadline</strong><br/>
                    Friday, August 28, 2015

                    <strong>Want to donate to help with someones travel and ticket?</strong>
                    If you are interested in adding to the pool for the scholarship, we would be more than happy to help
                    more people from the area join the conference! Please contact <a href="mailto:tessa@seaphp.com">Tessa Mero</a>.
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2 scholarship-buttons">
                    <a class="btn btn-default btn-info" href="#">
                        <i class="fa fa-money"></i> Donate
                    </a>
                    <a class="btn btn-default btn-success" href="#">
                        <i class="fa fa-info"></i> Fill Out Application Form
                    </a>
                </div>
            </div>

        </div>
    </div>

    @include('sections.sponsors')
@stop
