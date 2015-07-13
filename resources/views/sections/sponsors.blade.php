<div class="wrapper wrapper-purple">
    <div class="title"><a href="/sponsors">Sponsors</a></div>
    <p class="lead text-center">Thank you to all of our sponsors who are making it possible to hold this event.</p>
    <div class="container">
        <div class="row sponsors">
            @foreach ($conference->sponsors->sortBy('rank', SORT_REGULAR, true) as $sponsor)
            <div class="col-lg-3 col-sm-6">
                <div class="panel sponsor-card">
                    <div class="sponsor-label sponsor-{{ $sponsor->level }}">{{ $sponsor->label }}</div>
                    <div class="card-header">
                        <a target="_blank" href="{{ $sponsor->url }}" title="{{ $sponsor->name }}">
                            <img src="{{ $sponsor->logo }}" alt="{{ $sponsor->name }}" class="img-responsive"/>
                        </a>
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-sm btn-primary btn-block" target="_blank" href="{{ $sponsor->url }}">
                            Visit {{ $sponsor->name }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        If you are interested in becoming a sponsor, take a look at our
                        <a href="./pnwphp-2015-sponsorship-prospectus.pdf">Sponsorship Prospectus</a> and contact
                        <a href="mailto:jeremy@seaphp.com?Subject=PNWPHP%20Sponsorship%20Request">jeremy@seaphp.com</a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="separator separator-light">
                        <p>Community Sponsors</p>
                    </div>
                </div>
            </div>
            <div class="row community-sponsors">
                @foreach ($conference->communitySponsors->sortBy('rank', SORT_REGULAR, true) as $sponsor)
                <div class="col-lg-2 col-sm-6 col-xs-6">
                    <div class="panel sponsor-card">
                        <div class="card-header">
                            <a href="{{ $sponsor->url }}" target="_blank" title="{{ $sponsor->name }}">
                                <img src="{{ $sponsor->logo }}" alt="{{ $sponsor->name }}" class="img-responsive"/>
                            </a>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-sm btn-primary btn-block" href="{{ $sponsor->url }}" target="_blank">
                                Check out the {{ $sponsor->type }}
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
