@extends('Master')

@section('main_content')
	<h2>{{$item->Name}}</h2>
	<div id="leftcontent">
	    <img src="http://localhost:8000/Pictures/item_{{$item->id}}.jpg" width="300" />
	</div>
	<div id="rightcontent">
	    <p style="max-width:500px">{{$item->Description}}</p>

	    <h4>Preis: {{$item->PriceRp}}CHF</h4><button>Kaufen</button>
	</div>
@stop