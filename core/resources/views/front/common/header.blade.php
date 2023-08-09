   
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
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="{{asset('assets/front/css/plugins.min.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,200;1,300;1,400&display=swap" rel="stylesheet">
@yield('styleplugins')

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/styles.min.css')}}">

<link id="mainStyles" rel="stylesheet" media="screen" href="{{asset('assets/front/css/responsive.css')}}">
<!-- Color css -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">
    {{$setting->custom_css}}
<link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,200;1,400&display=swap" rel="stylesheet">

<!-- Modernizr-->
<script src="{{asset('assets/front/js/modernizr.min.js')}}"></script>

<style>
    {{$setting->custom_css}}


                         @if(Request::is('/'))
.header .menu-mobile-trigger span{
    background:#fff !important;
}



@else

.header .menu-mobile-trigger span{
    background:#666 !important;
}

.header-item-right .menu-icon {
    color: #666 !important;
}

@endif
</style>


</head>
<!-- Body-->
<body class="">


<!-- Header-->

<header class="header header_other navbar-fixed-top">


    <div class="menu-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header_p text-center">
                       <p> Free Delivery on All Order Above <i class="fa fa-rupee-sign"></i> 2000</p>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

   
    <div class="container">
                <div class="wrapper">
                    <div class="header-item-left">
                       <a href="{{route('front.index')}}" class="brand"><img src="" alt=""></a>
                    </div>
                    <!-- Section: Navbar Menu -->
                    

                    
                       
                    </div>

                </div>
            <div class="container pt-3 menu_icon_header">
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
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop<i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
   @php
        $categories = App\Models\Category::with('subcategory')->whereStatus(1)->orderby('serial','asc')->take(8)->get();
    @endphp
                                         @foreach ($categories as $key => $pcategory)
                                        <div class="list-item text-center">
                                            <a href="{{route('front.catalog').'?category='.$pcategory->slug}}">
                                                <img src="{{asset('assets/images/'.$pcategory->photo)}}" class="responsive" alt="New Product">
                                                <h4 class="title">{{$pcategory->name}}</h4>
                                            </a>
                                        </div>
                                      @endforeach
                                    </div>
                                </li>
                               <!-- <li class="menu-item-has-children">
                                    <a href="#">Products <i class="ion ion-ios-arrow-down"></i></a>
                                    <div class="menu-subs menu-mega menu-column-4">
                                        <div class="list-item">
                                            <h4 class="title">Men's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                            <h4 class="title">Kid's Fashion</h4>
                                            <ul>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                                <li><a href="#">Product List</a></li>
                                            </ul>
                                        </div>
                                       
                                        
                                        <div class="list-item">
                                            <img src="https://source.unsplash.com/dWyXjbac4tc/361x467" class="responsive" alt="Shop Product">
                                        </div>
                                    </div>
                                </li> -->
                                                            


                            



                                
                                


                                <li>

                    <div class="header-item-right hidden-md-down"> 



                         <!-- homepage icon menu -->
 <a href="#" class="menu-icon search_o"><i class="icon-search"></i></a>  

                         @if(!Auth::user())

                        <a href="{{route('user.login')}}" class="menu-icon menu-icon"><i class="icon-user"></i></a>
                        @else
                        <a href="{{route('user.dashboard')}}" class="menu-icon  menu-icon"><i class="icon-user"></i></a> 
                        @endif

                         
                        <a href="{{route('front.cart')}}" class="menu-icon  menu-icon hidden-md-down"> <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count">{{Session::has('cart') ? count(Session::get('cart')) : '0'}} </span></span></div></a>
                         <!-- homepage icon menu -->



                        <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="{{route('front.header.cart')}}">
                            @include('includes.header_cart')
                            </div>
                       
                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                 
   <div class="header-item-right hidden-md-up">

     <a href="#" class="menu-icon search_o"><i class="icon-search"></i></a>  

                         @if(!Auth::user())
                        <a href="{{route('user.login')}}" class="menu-icon"><i class="icon-user"></i></a>
                        @else
                        <a href="{{route('user.dashboard')}}" class="menu-icon"><i class="icon-user"></i></a> 
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
  <div class="cover">
  <div class="contents">
 <form class="input-group" id="header_search_form" action="{{route('front.catalog')}}" method="get">
                                    <input type="hidden" name="category" value="" id="search__category">
                                    <span class="input-group-btn">
                                    <button type="submit"><i class="icon-search"></i></button>
                                    </span>
                                    <input class="form-control form_trl" type="text" data-target="{{route('front.search.suggest')}}" id="__product__search" name="search" placeholder="{{__('Search By Product Name')}}">
                                    <div class="serch-result d-none">
                                       {{-- search result --}}
                                    </div>
                                </form>    <span class="close">X</span>
  </div>
</div>
                </div>
                </div>
            </div>
        </header>

