<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> System Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('backend/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/app-green.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/component-chosen.min.css')}}">
    <link href="{{asset('backend/img/logo/logo.png')}}" rel="icon">
    @yield('css')
    <script>
        var burl = "{{url('/')}}";
    </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            <header class="header">
                <div class="header-block header-block-collapse d-lg-none d-xl-none">
                    <button class="collapse-btn" id="sidebar-collapse-btn">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="header-block header-block-search">
                    @yield('header')
                </div>
                <div class="header-block header-block-buttons">

                </div>
                <div class="header-block header-block-nav">
                    <ul class="nav-profile">
                        <li class="profile dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="img" style="background-image: url('{{asset(Auth::user()->photo)}}')">
                                </div>
                                <span class="name"> {{Auth::user()->name}} </span>
                            </a>
                            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user icon"></i> Profile </a>
                                <a class="dropdown-item" href="{{route('user.reset')}}">
                                    <i class="fa fa-reply icon"></i> Reset Password </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('user.logout')}}">
                                    <i class="fa fa-power-off icon"></i> Logout </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>
            <aside class="sidebar">
                <div class="sidebar-container">
                    <div class="sidebar-header">
                        <div class="brand">
                            <div class="mb-1 center">
                                <img src="{{asset('backend/img/logo/logo.png')}}" alt="" width="80px">
                            </div>
                        </div>
                    </div>
                    <nav class="menu">
                        <ul class="sidebar-menu metismenu" id="sidebar-menu">
                            <li class="active">
                                <a href="{{url('admin/')}}">
                                    <i class="fa fa-home"></i> <strong>Dashboard</strong> </a>
                            </li>
                            <li id="menu_slide">
                                <a href="{{route('slide.index')}}">
                                    <i class="fa fa-sliders"></i> <strong>Sliders</strong> </a>
                            </li>
                            <li id="menu_news">
                                <a href="{{route('news.index')}}">
                                <i class="fa fa-calendar"></i> <strong>News</strong> </a>
                            </li>
                            <li id="menu_product">
                                <a href="">
                                    <i class="fa fa-shopping-cart"></i> <strong>Product</strong> <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav" id="collapse_product">
                                    <li id="menu_index">
                                        <a href="{{route('product.index')}}">
                                        <i class="fa fa-cart-plus"></i> Product
                                        </a>
                                    </li>
                                    <li id="menu_brand">
                                        <a href="{{route('brand.index')}}">
                                            <i class="fa fa-folder-open"></i> Brand
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu_cart">
                                <a href="">
                                    <i class="fa fa-credit-card"></i> <strong>Cart</strong> <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav" id="collapse_cart">
                                    <li id="menu_cart_pending">
                                        <a href="{{route('cart.index')}}">
                                            <i class="fa fa-arrow-right"></i> Pending
                                        </a>
                                    </li>
                                    <li id="menu_cart_completed">
                                        <a href="{{route('cart.complete')}}">
                                            <i class="fa fa-arrow-right"></i> Completed
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu_config">
                                <a href="">
                                    <i class="fa fa-gear"></i> <strong>Setting</strong> <i class="fa arrow"></i>
                                </a>
                                <ul class="sidebar-nav" id="collapse_config">
                                    @canview('user')
                                    <li id="menu_user">
                                        <a href="{{route('user.index')}}">
                                            <i class="fa fa-users"></i> Users
                                        </a>
                                    </li>
                                    @endcanview
                                    @canviewrole('user')
                                    <li id="menu_role">
                                        <a href="{{route('role.index')}}">
                                                <i class="fa fa-tags"></i> Role
                                        </a>
                                    </li>
                                    @endcanviewrole
                                    <li id="menu_com">
                                        <a href="{{route('company.index')}}">
                                            <i class="fa fa-globe"></i> Companies
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
            <div class="mobile-menu-handle"></div>
            <article class="content dashboard-page">
                <section class="section">
                    @yield('content')
                </section>

            </article>
            <footer class="footer">
                <div class="footer-block author">
                    <ul>
                        <li> created by <a href="{{url('admin/')}}">Team E8</a>
                        </li>

                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- Reference block for JS -->
    <div class="ref" id="ref">
        <div class="color-primary"></div>
        <div class="chart">
            <div class="color-primary"></div>
            <div class="color-secondary"></div>
        </div>
    </div>
    <script src="{{asset('backend/js/vendor.js')}}"></script>
    <script src="{{asset('backend/js/app.js')}}"></script>
    <script src="{{asset('backend/js/chosen.jquery.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.chosen-select').chosen();
        });
    </script>
    @yield('js')
</body>

</html>