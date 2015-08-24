
@foreach ( $speaker_ids AS $id )
<a href="/speakers#{{ $speakers[ $id ]['code'] }}">
    <img src="{{ $speakers[ $id ]['avatar'] }}" alt="Photo of {{ $speakers[ $id ]['name'] }}"/>
</a>
@endforeach
<p>
    <a href="/talks#{{ $talk['code'] }}" class="small">{{ $talk['title'] }}</a>
</p>
