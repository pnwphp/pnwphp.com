<div class="row sponsors">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-md-4">
                    <a href="{{ $sponsor->url }}" target="_blank" alt="{{ $sponsor->name }}">
                        <img class="img-thumbnail img-responsive" alt="{{ $sponsor->name }}" src="{{ $sponsor->logo }}">
                    </a>
                </div>
                <div class="col-md-8">
                    <h3 style="margin-top:0;">
                        <a name="{{ $sponsor->code }}" href="#{{ $sponsor->code }}">{{ $sponsor->name }}</a>
                        <br><small>{{ $sponsor->description }}</small>
                    </h3>
                    <p>{!! str_replace("\n\n", "</p><p>", $sponsor->about) !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
