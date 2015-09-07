<div class="wrapper wrapper-purple">
    <div class="title"><a href="/sponsors">Sponsors</a></div>
    <p class="lead text-center">Thank you to all of our sponsors who are supporting this community-run event.</p>
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
            {{--<div class="row">
                <div class="col-md-12">
                    <p class="text-center">
                        If you are interested in becoming a sponsor, take a look at our
                        <a href="./pnwphp-2015-sponsorship-prospectus.pdf">Sponsorship Prospectus</a> and contact
                        <a href="mailto:jeremy@seaphp.com?Subject=PNWPHP%20Sponsorship%20Request">jeremy@seaphp.com</a>
                    </p>
                </div>
            </div>--}}

        @include('sections.community-sponsors')
        </div>
    </div>
</div>
