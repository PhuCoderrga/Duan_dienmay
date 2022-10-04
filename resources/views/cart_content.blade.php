@foreach(Cart::content() as $item)
<li>
    {{$item->name}}-{{$item->qty}}-{{$item->qty * $item->price}}
</li>

@endforeach