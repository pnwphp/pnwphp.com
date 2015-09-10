
<div class="row">
    <div class="col-md-12 text-center schedule-header">
        <p>Breakout Sessions - {{ str_replace('-', '&ndash;', $time) }}</p>
    </div>
</div>
<div class="row schedule-row">
    <div class="col-md-3">
        @include('session', array('talk_id' => $talks[0]))
        <span class="visible-xs-inline">Main Event Room (1st Floor)</span>
    </div>
    <div class="col-md-3">
        @include('session', array('talk_id' => $talks[1]))
        <span class="visible-xs-inline">Learning Studio 1 (3rd Floor)</span>
    </div>
    <div class="col-md-3">
        @include('session', array('talk_id' => $talks[2]))
        <span class="visible-xs-inline">Learning Studio 2 (4th Floor)</span>
    </div>
    <div class="col-md-3">
        <p>UnCon - TBA</p>
        <span class="visible-xs-inline">Globe Room (2nd Floor)</span>
    </div>
</div>
