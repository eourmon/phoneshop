<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Type some info">
  <meta name="author" content="Type name">
  <title>{{$companies->name}}</title>
  <!-- Bootstrap css -->
  <link href="{{asset('css/bootstrap.css?v=2.0')}}" rel="stylesheet" type="text/css" />
  <link rel="icon" href="{{asset('images/logo.png')}}">
  <!-- Custom css -->
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
  <link href="{{asset('css/ui.css?v=2.0')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('css/responsive.css?v=2.0')}}" rel="stylesheet" type="text/css" />

  <!-- Font awesome 5 -->
  <link href="{{asset('fonts/fontawesome/css/all.min.css')}}" type="text/css" rel="stylesheet">
</head>

<body style="font-family: 'Crimson Text', serif;">
  <header class="section-header" id="up-to-top">
    <section class="header-main">
      <div class="container">
        <div class="row gy-3 align-items-center">
          <div class="col-lg-2 col-sm-4 col-4">
            <a href="{{url('/')}}" class="navbar-brand">
              <img class="" width="50" src="{{asset($companies->logo)}}">
            </a>
          </div>
          <div class="order-lg-last col-lg-5 col-sm-8 col-8">
            <div class="float-end">
              <!-- <a href="{{route('register.index')}}" class="btn btn-light"> 
                  <i class="fa fa-user"></i>  <span class="ms-1 d-none d-sm-inline-block">Register </span> 
              </a> -->
              @if(session('user') == null)
                <a href="{{route('user_login.index')}}" class="btn btn-light">
                  <i class="fa fa-sign-in-alt"></i> <span class="ms-1 d-none d-sm-inline-block">Login </span>
                </a>
              @else
                <a href="" class="btn btn-light"> 
                    <i class="fa fa-user"></i>  <span class="ms-1 d-none d-sm-inline-block"> {{session('user')->name}} </span> 
                </a>
                <a href="{{url('user_login/logout')}}" class="btn btn-light">
                  <i class="fa fa-sign-out-alt"></i> <span class="ms-1 d-none d-sm-inline-block"> Logout</span>
                </a>
              @endif
              <a data-bs-toggle="offcanvas" href="#offcanvas_cart" class="btn btn-light">
                <i class="fa fa-shopping-cart"></i> <strong class="ms-1 text-danger">
                  ({{$cartItem}})
                </strong>
              </a>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-12">
            <form action="{{route('home.search')}}">
              <div class="input-group">
                <input type="search" class="form-control" style="width:55%" placeholder="Search" name="qqq" value="">
                <select class="form-select">
                  <option value="">All type</option>
                  <option value="codex">Special</option>
                  <option value="comments">Only best</option>
                  <option value="content">Latest</option>
                </select>
                <button class="btn btn-primary" name="search">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- header-main end.// -->

    <nav class="navbar navbar-light bg-white border-top navbar-expand-lg b-header">
      <div class="container">
        <button class="navbar-toggler border" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_main">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar_main">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link ps-0" href="{{url('/')}}"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('iPhone')}}">iPhone</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('samsung')}}">Samsung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('oppo')}}">Oppo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('vivo')}}">Vivo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('second_hand_product')}}">Secondhand</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown">
                Categories
              </a>
              <ul class="dropdown-menu">
                <li> <a class="dropdown-item" href="#">Submenu one </a> </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav> <!-- navbar end.// -->
  </header> <!-- section-header end.// -->
  @yield('content')

  <footer class="section-footer bg-dark">
    <div class="container">
      <section class="footer-main padding-y">
        <div class="row">
          <aside class="col-12 col-sm-12 col-lg-4">
            <article class="me-lg-4">
              <img src="{{asset($companies->logo)}}" width="100" class="">
              <!-- <p class="mt-3"> © 2018- 2021 Templatemount. <br> All rights reserved. </p> -->
            </article>
          </aside>
          <aside class="col-6 col-sm-4 col-lg-4">
            <h6 class="title text-light">We accept</h6>
            <ul class="list-menu mb-4 align-justify-center">
              <img src="{{asset('images/payment.png')}}" alt="" class="d-inline-block payment">
            </ul>
          </aside>
          <aside class="col-12 col-sm-12 col-lg-4">
            <h6 class="title text-light">Newsletter</h6>
            <p>{{$companies->description}}</p>

            <form class="mb-3">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Email">
                <button class="btn btn-light" type="submit">
                  Join
                </button>
              </div>
            </form>
          </aside>
        </div>
      </section>

      <section class="footer-bottom d-flex justify-content-lg-between border-top">
        <div class="socials-media">
          <a href=""><i class="fab fa-facebook-square"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-telegram-plane"></i></a>
          <a href=""><i class="fab fa-youtube"></i></a>
        </div>
        <div>
          <p>&copy; 2023. <a href="{{url('/')}}" class="text-light text-" style="text-decoration: none;">Phone Shop</a>. All Rights Reserved</p>
        </div>
        <nav class="dropup">
          <button class="dropdown-toggle btn d-flex align-items-center py-0" type="button" data-bs-toggle="dropdown">
            <img src="images/flags/flag-usa.webp" class="me-2" height="20">
            <span>English</span>
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Khmer</a></li>
            <li><a class="dropdown-item" href="#">Thailand</a></li>
          </ul>
        </nav>

      </section>
    </div>
  </footer>


  <aside class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas_cart">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Your cart ({{$cartItem}}) </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      @if($cartList != null)
        @foreach($cartList as $item)
        <figure class="itemside mb-4" id="cartPage">
          <input type="hidden" class="product_id" value="{{$item->id}}">
          <div class="aside">
            <img src="{{asset($item->photo)}}" class="border img-sm rounded">
          </div>
          <figcaption class="info">
            <a href="#" class="btn btn-icon btn-light float-end removeItem" id=""><i class="fa fa-trash"></i></a>
            <p> {{$item->b_name}}</p>
            <span class="text-muted">{{$item->p_type}} {{$item->storage}} G</span> <br>
            <strong class="price"> {{$item->price}} <i class="fa fa-dollar-sign"></i></strong>
          </figcaption>
        </figure>
        @endforeach
      @endif

      <hr>
      <p class="mb-3 text-center"> Subtotal:
        <strong class="text-danger">{{$totalPrice}} <i class="fa fa-dollar-sign"></i></strong>
      </p>

      @if(session('user') != null)
      <div class="mb-3">
        <a href="{{url('cart/payment')}}" class="btn w-100 btn-success"> Checkout </a><p></p>
        <p class="mb-3 pd-5 text-center"> <img src="{{asset('images/misc/payments.webp')}}" height="22"> </p>
      </div>
      @else
        <div class="text-danger pd-3 text-center">
          <strong class="">Your cart is currently empty.</strong>
          <a href="{{url('/')}}" class="btn w-100 btn-success mt-3"><i class="fa fa-shopping-cart"></i> Return to shop </a><p></p>
        </div>
      @endif

    </div>
  </aside>
  <!-- Script for Remove product item from list cart -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.removeItem').click(function(e) {
        e.preventDefault();
        var product_id = $(this).closest("#cartPage").find('.product_id').val();
        $.ajax({
          type: 'GET',
          url: 'removeCart/' + product_id,
          data: {
            '_token': $('input[name=_token]').val()
          },
          success: function(data) {
            $('#cartPage').html(data);
          }
        });
      });
    });
  </script>

  <!-- Bootstrap js -->
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  <!-- Custom js -->
  <script src="{{asset('js/script.js?v=2.0')}}"></script>
</body>

</html>