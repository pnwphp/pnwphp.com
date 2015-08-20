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
                    Pacific Northwest PHP Conference currently has some funds to disburse for scholarships to bring locals from the Pacific Northwest.
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

                    <p>
                        <strong>Deadline</strong><br/>
                        Friday, August 28, 2015
                    </p>

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 scholarship-buttons">
                            <p>
                                <a class="btn btn-default btn-success" href="http://goo.gl/forms/KahYv83fcL" target="_blank">
                                    <i class="fa fa-info"></i> Fill Out Application Form
                                </a>
                            </p>
                            <br>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <p class="lead text-center">&mdash; Thank You to Our Scholarship Sponsors &mdash;</p>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p><strong>Want to donate to help with someones travel and ticket?</strong>
                            If you are interested in adding to the pool for the scholarship, we would be more than happy to help
                            more people from the area join the conference! For more info please contact <a href="mailto:tessa@seaphp.com">Tessa Mero</a>.
                            </p>

                            <div class="center-block">
                                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="H4NW9VRRPC3MG">
                                    <table align="center">
                                        <tr>
                                            <td><label><input type="hidden" name="on0" value="Scholarship Amount">Scholarship Amount</label></td>
                                            <td rowspan="2">
                                                <input type="hidden" name="currency_code" value="USD">
                                                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif"
                                                       border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1"
                                                     height="1">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select name="os0">
                                                    <option value="Topaz -">Topaz - $50.00 USD</option>
                                                    <option value="Emerald -">Emerald - $100.00 USD</option>
                                                    <option value="Ruby -">Ruby - $250.00 USD</option>
                                                    <option value="Sapphire -">Sapphire - $500.00 USD</option>
                                                    <option value="Diamond -">Diamond - $1,000.00 USD</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @include('single-sponsor', ['sponsor' => $conference->sponsors['ispottv']])
            @include('single-sponsor', ['sponsor' => $conference->sponsors['gosolid']])

        </div>
    </div>

    @include('sections.sponsors')
@stop
