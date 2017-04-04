@extends('admin.layout.admin')

@section('content')
   <h3>Products</h3>
   <ul class="list-group">
     @forelse($products as $product)
       <li class="list-group-item">
          <h4>Name of product:{{ $product->name }}</h4>
          <h4>Category:{{count($product->category) ? $product->category->name : "N/A" }}</h4>
          <form action="{{route('product.destroy',$product->id)}}"  method="POST">
           {{csrf_field()}}
           {{method_field('DELETE')}}
           <input class="btn btn-sm btn-danger" type="submit" value="Delete">
         </form>
       </li>
       @empty
         <h2>No products yet</h2>
     @endforelse
   </ul>
@endsection
