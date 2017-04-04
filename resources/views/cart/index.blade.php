@extends('layouts.main')

@section('content')
<div class="row">
	<h3>Cart Items</h3>

<table class="table table-hover">
	<thead>
		<tr>
			<th>Name</th>
			<th>Price</th>
			<th>Qty</th>
			<th>Size</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	  @foreach($cartItems as $cartItem)
		<tr>
			<td>{{ $cartItem->name }}</td>
			<td>{{ $cartItem->price }}</td>
			<td width="50px">
				{!! Form::open(['route'=>['cart.update', $cartItem->rowId], 'method'=>'PUT']) !!}
				<input type="text" name="qty" value="{{ $cartItem->qty }}">
			</td>
			<td>
				<div>
					{!! Form::select('size', ['small'=>'small', 'medium'=>'medium', 'large'=>'large'], $cartItem->options->has('size') ? $cartItem->options->size : '' ) !!}
				</div>
			</td>
			<td>
			<input style="float: left;" type="submit" class="button success small" value="Ok">
			{!! Form::close() !!}
				{!! Form::open(['route'=>['cart.destroy', $cartItem->rowId], 'method'=>'DELETE']) !!}
					{{ Form::submit('Delete', array('class'=>'button alert small')) }}
				{!! Form::close() !!}
			</td>
		</tr>
	  @endforeach
	  <tr>
	  	<td></td>
	  	<td>
	  	   tax: ${{ Cart::tax() }} <br>
	  	   Grand total $ {{ Cart::total() }}
	  	</td>
	  	<td>Items {{ Cart::count() }}</td>
	  	<td></td>
	  	<td></td>
	  </tr>
	</tbody>
</table>
<a href="{{ route('checkout1_path') }}" class="button">Checkout</a>
</div>

@endsection
