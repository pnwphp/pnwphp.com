
<!-- the contents of a session  -->
<div class="session">
    <img src="{{ $speaker['avatar'] }}" alt="Photo of {{ $speaker['name'] }}"/>
    <p>
        <a href="/speakers#{{ $speaker['code'] }}">{{ $speaker['name'] }}</a> <br/>
        <a href="/talks#{{ $talk['code'] }}" class="small">{{ $talk['title'] }}</a>
    </p>
</div>

