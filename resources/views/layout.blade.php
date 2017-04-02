<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>PNWPHP - Pacific Northwest PHP Conference</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/current.css">

    <script src='//maps.googleapis.com/maps/api/js?key=AIzaSyC3hIrVsO5oZw9ske9GwIETeUlemPE1LpY&sensor=false'></script>

</head>
<body>
<nav id="skip">
    <a href="#main-content">Go to Main Content</a>
    <a href="#site-search">Go to Site Search</a>
    <a href="#footer">Go to Footer</a>
</nav>
<div id="main-nav" class="nav-main navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-brand">
        <a href="/"><img src="img/logo-horizontal-160x50.png"/></a>
    </div>

    <nav id="main-menu" class="main-menu">
        <li><a href="/how-to-sponsor">Sponsors</a></li>
        <li><a href="http://cfp.pnwphp.com/">CFP</a></li>
    </nav>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    PNWPHP is brought to you by the Seattle PHP User Group (<a href="https://twitter.com/seaphp" target="_blank">@seaphp</a>),
                </p>
                <p>Copyright © 2015&ndash;<?php echo date('Y'); ?> SeaPHP User Group &mdash; All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-59945896-2', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
