@extends('Master')

@section('main_content')
    <ul class="contentUL">
    	@foreach ($items as $item)
        <li class="contentLI">
            <a href="http://localhost:8000/item/{{$item->id}}">
                <img src="http://localhost:8000/Pictures/item_{{$item->id}}.jpg" height="100" />
                <p>{{$item->Name}}</p>
            </a>
        </li>
        @endforeach
    </ul>
@stop