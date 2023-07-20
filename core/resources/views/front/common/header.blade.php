   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
@if (url()->current() == route('front.index'))
<title>@yield('hometitle')</title>
@else
<title>@yield('title')-{{$setting->title}}</title>
@endif

<!-- SEO Meta Tags-->
@yield('meta')
<meta name="author" content="{{$setting->title}}">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/'.$setting->favicon)}}">
<link rel="apple-touch-icon" sizes="167x167" href="{{asset('assets/images/'.$setting->favicon)}}">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{asset('assets/front/css/plugins.min.css')}}">
<link rel='stylesheet' id='construction-light-fonts-css' href='https://fonts.googleapis.com/css?family=Abel%3A400%7CAbel%3A400&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />

@yield('styleplugins')

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/styles.min.css')}}">

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/responsive.css')}}">
<!-- Color css -->
<link href="{{ asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color) }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">

<!-- Modernizr-->
<script src="{{asset('assets/front/js/modernizr.min.js')}}"></script>

<style>
    {{$setting->custom_css}}
</style>


</head>
<!-- Body-->
<body class="">


<!-- Header-->
@if (Request::path() == '/')

<header class="header navbar-fixed-top">
@else
<header class="header header_other navbar-fixed-top">


    @endif
    <div class="menu-top-area">
        
    </div>
    <div class="container">
                <div class="wrapper">
                    <div class="header-item-left">
                       <a href="{{route('front.index')}}" class="brand"><img src="{{asset('assets/images/'.$setting->logo)}}" alt="{{$setting->title}}"></a>
                    </div>
                    <!-- Section: Navbar Menu -->
                    

                    
                       
                    </div>

                </div>
            <div class="container pt-3">
                <div class="wrapper">
                   
                    <!-- Section: Navbar Menu -->
                    <div class="header-item-center">
                        <div class="overlay"></div>
                        <nav class="menu">
                            <div class="menu-mobile-header">
                                <button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
                                <div class="menu-mobile-title"></div>
                                <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
                            </div>
                            <ul class="menu-section">
                               


                                <li>

                    <div class="header-item-right">

                         @if(!Auth::user())
                        <a href="{{route('user.login')}}" class="menu-icon"><i class="icon-user"></i></a>
                        @else
                        <a href="{{route('user.dashboard')}}" class="menu-icon"><i class="icon-user"></i></a> 
                        @endif

                         @if(Auth::check())
                        <a href="{{route('user.wishlist.index')}}" class="menu-icon"><div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count">{{Auth::user()->wishlists->count()}}</span></span></div></a>

@else



@endif
                        <a href="{{route('front.cart')}}" class="menu-icon"> <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">{{Session::has('cart') ? count(Session::get('cart')) : '0'}} </span></span></div></a>

                        <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="{{route('front.header.cart')}}">
                            @include('includes.header_cart')
                            </div>
                       
                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                 
   <div class="header-item-right hidden-md-up">
                         @if(!Auth::user())
                        <a href="{{route('user.login')}}" class="menu-icon"><i class="icon-user"></i></a>
                        @else
                        <a href="{{route('user.dashboard')}}" class="menu-icon"><i class="icon-user"></i></a> 
                        @endif

                         @if(Auth::check())
                        <a href="{{route('user.wishlist.index')}}" class="menu-icon"><div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count">{{Auth::user()->wishlists->count()}}</span></span></div></a>

@else



@endif
                        <a href="{{route('front.cart')}}" class="menu-icon"> <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">{{Session::has('cart') ? count(Session::get('cart')) : '0'}} </span></span></div></a>

                        <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="{{route('front.header.cart')}}">
                            @include('includes.header_cart')
                            </div>
                        <div class="ok">

                        <button type="button" class="menu-mobile-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                                                </div>

                    </div>

                </div>
                </div>
            </div>
        </header>