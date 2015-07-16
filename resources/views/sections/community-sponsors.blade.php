<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="separator separator-light">
            <p>Community Sponsors</p>
        </div>
    </div>
</div>
<div class="row community-sponsors">
    <div class="container">
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