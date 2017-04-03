@extends('layouts.main')

@section('content')

<h3>Cart Items</h3>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Size</th>
		</tr>
	</thead>
	<tbody>
	  @foreach($cartItems as $cartItem)
		<tr>
			<td>{{ $cartItem->name }}</td>
			<td>{{ $cartItem->price }}</td>
			<td width="50px">
				{!! Form::open(['route'=>['cart.update', $cartItem->rowId], 'method'=>'PUT']) !!}
				{{ csrf_field() }}
				<input type="text" name="qty" value="{{ $cartItem->qty }}">
				<input type="submit" class="btn btn-success btn-xs" value="Ok">
				{!! Form::close() !!}
			</td>
			<td>{{ $cartItem->options->has('size') ? $cartItem->options->size : '' }}</td>
		</tr>
	  @endforeach
	  <tr>
	  	<td>Total</td>
	  	<td>Grand total $ {{ Cart::total() }}</td>
	  	<td>Items {{ Cart::count() }}</td>
	  </tr>
	</tbody>
</table>
<a href="#" class="button">Checkout</a>
@endsection
