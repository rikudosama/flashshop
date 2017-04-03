<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title', 'Shirshop')
    </title>
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{asset('/css/foundation.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
    <div  class="top-bar fix-top">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{ route('home_path') }}">
                    <i class="fa fa-home fa-lg" aria-hidden="true">
                    </i>
                    Shirshop
                </a>
            </h4>
        </div>
        <div class="top-bar-right">
            <ol class="menu">
                <li>
                    <a href="{{ route('shirts_path') }}">
                        SHIRTS
                    </a>
                </li>
                <li>
                    <a href="#">
                        CONTACT
                    </a>
                </li>
                <li>
                    <a href="{{ route('cart.index') }}">
                        <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                        </i>
                        CART
                        <span class="alert badge">
                            {{Cart::count()}}
                        </span>
                    </a>
                </li>
            </ol>
        </div>
    </div>
    @yield('content')
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
      <i class="fa fa-laptop"></i>
      <p>Coded with love by Webdevmatics for educational purpose only</p>
  </div>
  <div class="small-12 medium-4 large-4 columns">
      <i class="fa fa-html5"></i>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
  </div>

  <div class="small-6 medium-4 large-4 columns">
      <h4>Follow Us</h4>
      <ul class="footer-links">
        <li><a href="https://github.com/webdevmatics"><i class="fa fa-github fa-sm" aria-hidden="true"></i> GitHub</a></li>
        <li><a href="#"><i class="fa fa-facebook fa-sm" aria-hidden="true"></i> Facebook</a></li>
        <li><a href="https://twitter.com/webdevmatics"><i class="fa fa-twitter fa-sm" aria-hidden="true"></i> Twitter</a></li>
        <ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
