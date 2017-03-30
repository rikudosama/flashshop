@extends('layouts.main')
@section('title','T-shirts')

@section('content')
<!-- products listing -->
<!-- Latest SHirts -->
<div class="row">
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ Storage::url('public/defaults/img/shirts/mc.jpg') }}"/>
                </a>
            </div>
            <a href="{{ route('shirt_path') }}">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ Storage::url('public/defaults/img/shirts/shirt-102.jpg') }}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ Storage::url('public/defaults/img/shirts/shirt-104.jpg') }}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ Storage::url('public/defaults/img/shirts/shirt-105.jpg') }}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ Storage::url('public/defaults/img/shirts/shirt-106.jpg') }}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{ Storage::url('public/defaults/img/shirts/shirt-107.jpg') }}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div><div class="small-3 columns">
    <div class="item-wrapper">
        <div class="img-wrapper">
            <a class="button expanded add-to-cart">
                Add to Cart
            </a>
            <a href="#">
                <img src="{{ Storage::url('public/defaults/img/shirts/shirt-108.jpg') }}"/>
            </a>
        </div>
        <a href="#">
            <h3>
                Kickin with Kraken Tee
            </h3>
        </a>
        <h5>
            $19.99
        </h5>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
        </p>
    </div>
</div><div class="small-3 columns">
<div class="item-wrapper">
    <div class="img-wrapper">
        <a class="button expanded add-to-cart">
            Add to Cart
        </a>
        <a href="#">
            <img src="{{ Storage::url('public/defaults/img/shirts/shirt-1011.jpg') }}"/>
        </a>
    </div>
    <a href="#">
        <h3>
            Kickin with Kraken Tee
        </h3>
    </a>
    <h5>
        $19.99
    </h5>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
    </p>
</div>
</div>
</div>
@endsection
