@extends('layouts.main')

@section('content')
<div class="row">
	<div class="small-6 small-centered comumns">
		<h3>Shipping info</h3>
		{!! Form::open(['route'=>'shipping_path', 'method'=>'post']) !!}
		<div class="form-group">
			{!! Form::label('adressline', 'Adress line') !!}
			{!! Form::text('adressline', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('size', 'Size') !!}
			{!! Form::text('size', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('state', 'State') !!}
			{!! Form::text('state', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('zip', 'Zip') !!}
			{!! Form::text('zip', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('country', 'Country') !!}
			{!! Form::text('country', null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('phone', 'Phone') !!}
			{!! Form::text('phone', null, ['class'=>'form-control']) !!}
		</div>
		{!! Form::submit('Proceed to payement', ['class'=>'button medium primary']) !!}
		{!! Form::close() !!}
	</div>	
</div>
@endsection