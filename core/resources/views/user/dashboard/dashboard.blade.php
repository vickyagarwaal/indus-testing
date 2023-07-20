@extends('master.front')
@section('title')
    {{__('Dashboard')}}
@endsection
@section('content')

  @php
        function renderStarRating($rating, $maxRating = 5)
        {
            $fullStar = "<i class = 'far fa-star filled'></i>";
            $halfStar = "<i class = 'far fa-star-half filled'></i>";
            $emptyStar = "<i class = 'far fa-star'></i>";
            $rating = $rating <= $maxRating ? $rating : $maxRating;

            $fullStarCount = (int) $rating;
            $halfStarCount = ceil($rating) - $fullStarCount;
            $emptyStarCount = $maxRating - $fullStarCount - $halfStarCount;

            $html = str_repeat($fullStar, $fullStarCount);
            $html .= str_repeat($halfStar, $halfStarCount);
            $html .= str_repeat($emptyStar, $emptyStarCount);
            $html = $html;
            return $html;
        }
    @endphp
@include('front.common.bradcum_banner')

<!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="{{__('front.index')}}">{{__('Home')}}</a> </li>
                    <li class="separator"></li>
                    <li>{{__('Welcome Back')}} </li>
                  </ul>
            </div>
        </div>
    </div>
  </div>

  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1">
  <div class="row">
         @include('includes.user_sitebar')
          <div class="col-lg-8 dashboard_tab">
                <div class="row u-d-d">
<br/>
                    <h3 class="text-center">Welcome To okok.com- <span style="color:blue">India's Leading Wearables Brand</span></h3>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('All Order')}}</p>
                                <h4><b>{{$allorders}}</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Completed Order')}}</p>
                                <h4><b>{{$delivered}}</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Processing Order')}}</p>
                                <h4><b>{{$progress}}</b></h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Canceled Order')}}</p>
                                <h4><b>{{$canceled}}</b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3">{{__('Pending Order')}}</p>
                                <h4><b>{{$pending}}</b></h4>
                            </div>
                        </div>
                    </div>
                </div>
                          @include('front.common.dashboard_product')

          </div>


        </div>
  </div>
@endsection
