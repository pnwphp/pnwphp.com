
<div class="row">
    <div class="col-md-12 text-center schedule-header">
        <p>Breakout Sessions - {{ str_replace('-', '&ndash;', $time) }}</p>
    </div>
</div>
<div class="row schedule-row">
    @foreach($talks as $talk_id)
        <div class="col-md-3">
            @include('session', array('talk_id' => $talk_id))
        </div>
    @endforeach
    <div class="col-md-3"><p>UnCon - TBA</p></div>
</div>
