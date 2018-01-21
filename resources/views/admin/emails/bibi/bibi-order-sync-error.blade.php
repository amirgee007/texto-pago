<h3>Ooops!</h3>

@if($type)
    <p>There are some problem with {{$type}}</p>
@else
    <p>There is some problem with bibi api ..</p>
@endif
@if(!is_null($msg))
    <h3>Error Message: </h3>
    @foreach(json_decode($msg ,true) as $ms)
    <p>{!! $ms !!}</p>
    <br>
    @endforeach
@endif