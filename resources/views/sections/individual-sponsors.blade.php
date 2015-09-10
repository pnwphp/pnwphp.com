<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="separator separator-light">
            <p>Individual Sponsors</p>
        </div>
    </div>
</div>
<div class="row community-sponsors">
    <div class="container">
        @foreach ($conference->individualSponsors->sortBy('name', SORT_REGULAR, true) as $individual)
            <div class="col-lg-2 col-sm-6 col-xs-6">
                <div class="panel sponsor-card">
                    <div class="card-header">
                        <span style="padding-top: 2em; padding-bottom: 2em; font-size: 2em; ">{{ $individual->name }}</span>
                    </div>
                    <div class="card-footer">
                        <span class="btn btn-sm btn-primary btn-block">
                            &nbsp;
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
