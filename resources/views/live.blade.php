@extends('layout-simple')

@section('content')

    <div class="wrapper wrapper-light">
        <div class="title">Live Blog</div>
        <div class="container">
            <div class="col-md-12">
                <p class="lead text-center p-center">
                    <strong>Below, in our live blog, we'll give you a play-by-play of the whole conference.</strong><br>
                </p>
                <p class="lead text-center p-center">
                    Keep your browsers open here during the event to catch every nugget of wisdom and cool picture or tweet.
                </p>
            </div>
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">Other ways to participate online with us!</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <a href="https://twitter.com/hashtag/PNWPHP" target="_blank" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-twitter"></i>&ensp;#PNWPHP on Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <br>
				<div id="24lb_thread"></div>
				<script type="text/javascript">
					(function() {
						var lb24 = document.createElement('script'); lb24.type = 'text/javascript'; lb24.id = '24lbScript'; lb24.async = true; lb24.charset="utf-8";
						lb24.src = '//v.24liveblog.com/embed/24.js?id=1345760';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(lb24);})();
				</script>
            </div>
        </div>
    </div>

@stop
