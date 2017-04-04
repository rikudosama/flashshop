@extends('layouts.main')

@section('content')
<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong class="welcome">
            Hey! Welcome to shirshop burkina
        </strong>
    </h2>
    <br>
    <a href="{{ route('shirts_path') }}"><button class="button large">Check out My Shirts</button></a>
</section>
<br/>
<div class="subheader text-center">
 <h2>
    shirshop&rsquo;s Latest Shirts
</h2>
</div>

<!-- Latest SHirts -->
<div class="row">
@forelse($shirts->chunk(4) as $shirt_list)
  @foreach($shirt_list as $shirt)
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
  @endforeach
    @empty
    <h5>No products yet</h5>
    @endforelse
</div>
<!-- Footer -->
<br>
@endsection
