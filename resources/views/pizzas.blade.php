{{$name}}

@foreach($pizzas as $pizza)
{{ $pizza['type'] }} - {{ $pizza['price'] }}
@endforeach