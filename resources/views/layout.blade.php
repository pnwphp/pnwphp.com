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
<?php $bodyClass = (isset($bodyClass)) ? $bodyClass : ''; ?>
<body class="<?php echo bodyClass($bodyClass); ?>">
<nav id="skip" class="nav-skip">
    <a href="#main-content">Go to Main Content</a>
    <a href="#site-search">Go to Site Search</a>
    <a href="#footer">Go to Footer</a>
</nav>
<div id="main-nav" class="nav-main navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-brand">
        <a href="/"><img src="/img/logo-horizontal-160x50.png"/></a>
    </div>

    <nav id="main-menu" class="menu-main">
        <ul>
            <li><a href="/how-to-sponsor">Sponsor Us</a></li>
            <li><a href="http://cfp.pnwphp.com/">CFP</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <nav class="menu-footer">
           <ul>
               <li><a href="/code-of-conduct">Code of Conduct</a></li>
               <li><a href="/accessibility">Accessibility</a></li>
           </ul>
        </nav>
        <nav class="menu-archive">
            <ul>
                <li><a href="http://twitter.com/seaphp">@seaphp</a></li>
                <li><a href="http://twitter.com/pnwphp">@pnwphp</a></li>
            </ul>
        </nav>
    </div>
    <div class="copyright">
        <p>
            The Pacific Northwest PHP Conference is brought to you by the Seattle PHP User Group (<a href="https://twitter.com/seaphp" target="_blank">@seaphp</a>),
        </p>
        <p>Copyright © 2015 &mdash; <?php echo date('Y'); ?> SeaPHP User Group<br>
            All Rights Reserved</p>
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
