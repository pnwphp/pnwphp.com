<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PNWPHP - Pacific Northwest PHP Conference</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Bree+Serif"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='//maps.googleapis.com/maps/api/js?key=AIzaSyDPVQLUTxH8YyiajhCBj5yYevAW6zRX570&sensor=false'></script>

    <link rel="stylesheet" href="css/styles.min.css">

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
                <a href="./"><img src="img/logo-horizontal-160x50.png"/></a>
            </div>
        </div>

        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav">
                <li><a href="./speakers">Speakers</a></li>
                <li><a href="./talks">Talks</a></li>
                <li><a href="./events">Events</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a target="_blank" href="https://pnwphp2015.busyconf.com/bookings/new">Register</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="./events#conference">Conference</a></li>
                        <li><a href="./venue">Venue</a></li>
                        <li><a target="_blank" href="http://www.meetup.com/seaphp/">SeaPHP User Group</a></li>
                        <li><a href="./code-of-conduct">Code of Conduct</a></li>
                        <li><a href="mailto:admins@seaphp.com?Subject=Question%20About%20PNWPHP">Contact Organizers</a></li>
                    </ul>
                </li>

                <li><a href="./sponsors">Sponsors</a></li>
            </ul>
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
                    PDX PHP Users Group (<a href="http://twitter.com/phpdx" target="_blank">@phpdx</a>), and Vancouver
                    PHP Meetup (<a href="http://twitter.com/phpvancouver" target="_blank">@phpvancouver</a>).
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
                center: new google.maps.LatLng(47.600612, -122.331253),
                zoom: 15,
                draggable : false,
                scrollwheel: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}],
            };
            var mapElement = document.getElementById('location-map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var locations = [
                ['Impact Hub Seattle', 'undefined', 'undefined', 'undefined', 'undefined', 47.600612, -122.331253, 'http://mapbuildr.com/assets/img/markers/solid-pin-red.png']
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

</script>
</body>
</html>
