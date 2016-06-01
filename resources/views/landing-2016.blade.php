<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PNWPHP - Pacific Northwest PHP Conference</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Bree+Serif"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://cdn.jsdelivr.net/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
    if ( 'cfp-closing' === $message_id ){
        $message = '<strong>Hurry!</strong> <a href="http://pnwphp.com/2016/call-for-papers">Submit your talks</a> by <strong>June 5th!</strong>';
    } else if ( 'early-bird-closing' === $message_id ){
        $message = '<strong>Early Bird closing soon!</strong> <a href="http://pnwphp.com/2016/tickets">Buy your tickets</a> by <strong>July 17th!</strong>';
    } else {
        $message = null;
    }
?>
<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-brand navbar-brand-centered">
                <a href="./"><img src="img/logo-horizontal-160x50.png"/></a>
            </div>
        </div>
    </div>
</div>
<div class="head-banner-content">
    <div class="bg"></div>
	<h1>Pacific Northwest PHP</h1>
	<h2>September 15th–17th, 2016 <span class="location">Seattle, WA</span></h2>
    <?php if ( $message ): ?>
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
            <a href="https://nomadphp.com/pnwphp-videos/" target="_blank" class="btn btn-info">
                <i class="fa fa-video-camera"></i>&ensp;Buy 2015 Videos
            </a>
        </div>
        <p>
            Visit our 2016 website to register, buy tickets, and submit to our call for papers.
        </p>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>PNWPHP is brought to you by the Seattle PHP User Group (<a href="http://twitter.com/seaphp" target="_blank">@seaphp</a>).</p>
                <p>Copyright © 2015-2016 Seattle PHP User Group — All Rights Reserved</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/scripts.min.js"></script>
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
