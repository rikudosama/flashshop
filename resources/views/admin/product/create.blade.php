@extends('admin.layout.admin')

@section('content')
   <h3>Add products</h3>
   <div class="row">
      <div class="col-md-8 col-md-offset-2">
        {!! Form::open(['route'=>'product.store','method'=>'post','files'=>true]) !!}
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name', null, array('class'=>'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('description','Description')}}
                {{Form::textarea('description', null, array('class'=>'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('size','Size')}}
                {{Form::select('size',['small'=>'Small', 'medium'=>'Medium', 'large'=>'Large'], null, array('class'=>'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('category_id','Categories')}}
                {{Form::select('category_id',[1=>'men'], null, array('class'=>'form-control', 'placeholder'=>'Select categories'))}}
            </div>
            <div class="form-group">
                {{Form::label('image','Image')}}
                {{Form::file('image', array('class'=>'form-control'))}}
            </div>
            <div class="form-group">
                {{ Form::submit('Create', array('class'=>'btn btn-primary btn-block')) }}
            </div>
        {!! Form::close() !!}
      </div>
   </div>
@endsection
