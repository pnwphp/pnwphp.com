<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PNWPHP - Pacific Northwest PHP Conference</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/styles.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.jsdelivr.net/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-brand-centered">
                <a href="http://pnwphp.com"><img src="/img/logo-horizontal-160x50.png"/></a>
            </div>
        </div>

        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li> <a herf="http://pnwphp.com/2016/">2016</a> </li>
                <li> <a href="http://pnwphp.com/2016/schedule/">Schedule</a> </li>
                <li><a href="http://pnwphp.com/2016/schedule/#venue">Venue</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://pnwphp.com/2016/sponsors/">Sponsors</a></li>
                <li><a href="http://pnwphp.com/2016/speakers/">Speakers</a></li>
            </ul>
        </div>

    </div>
</div>

<div class="head-banner-content">
    <div class="bg"></div>
	<h1>Pacific Northwest PHP</h1>
	<h2>September 15th–17th, 2016 <span class="location">Seattle, WA</span></h2>

    <?php if ( ! empty( $message)  ): ?>
	<div class="message-important">
	    <?php echo $message; ?>
	</div>
    <?php endif; ?>
    <div>
        <div>
            <a href="http://twitter.com/pnwphp" target="_blank" class="btn btn-info">
                <i class="fa fa-twitter"></i>&ensp;Follow @PNWPHP
            </a>
            &emsp;
            <a href="https://pnwphp2016.dryfta.com/en/" class="btn btn-lg btn-default">
                <i class="fa fa-ticket"></i>&ensp;PNWPHP 2016 Website
            </a>
            &emsp;
            <a href="http://pnwphp.com/2016/tickets" target="_blank" class="btn btn-info">
                <i class="fa fa-video-camera"></i>&ensp;Buy Tickets 
            </a>
        </div>
    </div>
</div>

@yield('content')
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    PNWPHP is brought to you by the Seattle PHP User Group (<a href="http://twitter.com/seaphp" target="_blank">@seaphp</a>),
                </p>
                <p>Copyright © 2015 SeaPHP User Group — All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/scripts.min.js"></script>

<script>
    (function(){
        $('.bs-component [data-toggle="popover"]').popover();
        $('.bs-component [data-toggle="tooltip"]').tooltip();

        google.maps.event.addDomListener(window, 'load', init);
        var map;
        function init() {
            var mapOptions = {
                center: new google.maps.LatLng(47.624317, -122.352438),
                zoom: 15,
                draggable : false,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}],
            };
            var mapElement = document.getElementById('location-map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var locations = [
                ['Cornish Playhouse', 'undefined', 'undefined', 'undefined', 'undefined', 47.624317, -122.352438, 'http://mapbuildr.com/assets/img/markers/solid-pin-red.png']
            ];
            for (i = 0; i < locations.length; i++) {
                if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
                if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
                if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
                if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
                if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][5], locations[i][6]),
                    map: map,
                    title: locations[i][0],
                    desc: description,
                    tel: telephone,
                    email: email,
                    web: web
                });
            }

        }
    })();
    window.onload=function(){if(window.location.hash)window.scrollTo(0,window.scrollY-80);};
</script>
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
