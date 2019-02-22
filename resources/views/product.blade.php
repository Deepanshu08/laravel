@extends('layout')
@section('content')

	<table style="border: 1px solid black;border-collapse:collapse;">
	<tr>
	<td style="border: 1px solid black;border-collapse:collapse;"><b>&nbspProducts Name</b><hr>
	@foreach($products_name as $name )
		<li>{{ $name }}</li>
	@endforeach
	</td>
	<td style="border: 1px solid black;border-collapse:collapse;">
	<b>&nbspProducts ID</b><hr>
	@foreach($products_id as $id )
		<li>{{ $id }}</li>
	@endforeach
	</td>
	<td style="border: 1px solid black;border-collapse:collapse;">
	<b>&nbspProducts Description</b><hr>
	@foreach($products_desc as $desc )
		<li>{{ $desc }}</li>
	@endforeach
	</td>
	<td style="border: 1px solid black;border-collapse:collapse;">
	<b>&nbspProducts Price</b><hr>
	@foreach($products_price as $price )
		<li>{{ $price }}</li>
	@endforeach
	</td>
	</tr>
	</table>	
@endsection('content')