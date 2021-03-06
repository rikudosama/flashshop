@extends('layouts.main')
@section('title','T-shirts')

@section('content')
<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    @forelse($shirts as $shirt)
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a href="{{ route('addItem_path', $shirt->id) }}" class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ url('images', $shirt->image) }}"/>
                </a>
            </div>
            <a href="{{ route('shirt_path') }}">
                <h3>
                    {{ $shirt->name }}
                </h3>
            </a>
            <h5>
                ${{$shirt->price}}
            </h5>
            <p>
                {{ $shirt->description }}
            </p>
        </div>
    </div>
    @empty
      <h2>No products yet</h2>
    @endforelse
</div>
@endsection
