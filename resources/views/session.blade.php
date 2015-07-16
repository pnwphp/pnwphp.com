@if ($talk_id === 'emcee' && ($speaker = $conference->speakers['jeremy-lindblom']))
    <div class="session">
        <img src="{{ $speaker['avatar'] }}" alt="Photo of {{ $speaker['name'] }}"/>
        <p>
            <a href="/speakers#{{ $speaker['code'] }}">{{ $speaker['name'] }}</a> <br/>
            <small>{{ $message }}</small>
        </p>
    </div>
@elseif ($talk_id === 'tba')
    <div class="session">
        <p>To be announced.</p>
    </div>
@elseif ($talk_id === 'nosql-lightning-talks' && ($talk = $conference->talks[$talk_id]))
    <div class="session">
        @foreach ($talk['speaker'] as $speaker_id)
            <a href="/speakers#">
                <img src="{{ $conference->speakers[$speaker_id]['avatar'] }}"
                     alt="Photo of {{ $conference->speakers[$speaker_id]['name'] }}"/>
            </a>
        @endforeach
        <p>
            Multiple Speakers<br/>
            <a href="/talks#{{ $talk['code'] }}" class="small">{{ $talk['title'] }}</a>
        </p>
    </div>
@elseif (($talk = $conference->talks[$talk_id]) && ($speaker = $conference->speakers[$talk['speaker']]))
    <div class="session">
        <img src="{{ $speaker['avatar'] }}" alt="Photo of {{ $speaker['name'] }}"/>
        <p>
            <a href="/speakers#{{ $speaker['code'] }}">{{ $speaker['name'] }}</a> <br/>
            <a href="/talks#{{ $talk['code'] }}" class="small">{{ $talk['title'] }}</a>
        </p>
    </div>
@else
    <p>UNKNOWN SESSION</p>
@endif
