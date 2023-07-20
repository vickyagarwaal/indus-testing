   
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php if(url()->current() == route('front.index')): ?>
<title><?php echo $__env->yieldContent('hometitle'); ?></title>
<?php else: ?>
<title><?php echo $__env->yieldContent('title'); ?>-<?php echo e($setting->title); ?></title>
<?php endif; ?>

<!-- SEO Meta Tags-->
<?php echo $__env->yieldContent('meta'); ?>
<meta name="author" content="<?php echo e($setting->title); ?>">
<meta name="distribution" content="web">
<!-- Mobile Specific Meta Tag-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicon Icons-->
<link rel="icon" type="image/png" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo e(asset('assets/images/'.$setting->favicon)); ?>">
<!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
<link rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/plugins.min.css')); ?>">
<link rel='stylesheet' id='construction-light-fonts-css' href='https://fonts.googleapis.com/css?family=Abel%3A400%7CAbel%3A400&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />

<?php echo $__env->yieldContent('styleplugins'); ?>

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/styles.min.css')); ?>">

<link id="mainStyles" rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/responsive.css')); ?>">
<!-- Color css -->
<link href="<?php echo e(asset('assets/front/css/color.php?primary_color=').str_replace('#','',$setting->primary_color)); ?>" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">

<!-- Modernizr-->
<script src="<?php echo e(asset('assets/front/js/modernizr.min.js')); ?>"></script>

<style>
    <?php echo e($setting->custom_css); ?>

</style>


</head>
<!-- Body-->
<body class="">


<!-- Header-->
<?php if(Request::path() == '/'): ?>

<header class="header navbar-fixed-top">
<?php else: ?>
<header class="header header_other navbar-fixed-top">


    <?php endif; ?>
    <div class="menu-top-area">
        
    </div>
    <div class="container">
                <div class="wrapper">
                    <div class="header-item-left">
                       <a href="<?php echo e(route('front.index')); ?>" class="brand"><img src="<?php echo e(asset('assets/images/'.$setting->logo)); ?>" alt="<?php echo e($setting->title); ?>"></a>
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

                         <?php if(!Auth::user()): ?>
                        <a href="<?php echo e(route('user.login')); ?>" class="menu-icon"><i class="icon-user"></i></a>
                        <?php else: ?>
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="menu-icon"><i class="icon-user"></i></a> 
                        <?php endif; ?>

                         <?php if(Auth::check()): ?>
                        <a href="<?php echo e(route('user.wishlist.index')); ?>" class="menu-icon"><div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count"><?php echo e(Auth::user()->wishlists->count()); ?></span></span></div></a>

<?php else: ?>



<?php endif; ?>
                        <a href="<?php echo e(route('front.cart')); ?>" class="menu-icon"> <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span></span></div></a>

                        <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="<?php echo e(route('front.header.cart')); ?>">
                            <?php echo $__env->make('includes.header_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                       
                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>

                 
   <div class="header-item-right hidden-md-up">
                         <?php if(!Auth::user()): ?>
                        <a href="<?php echo e(route('user.login')); ?>" class="menu-icon"><i class="icon-user"></i></a>
                        <?php else: ?>
                        <a href="<?php echo e(route('user.dashboard')); ?>" class="menu-icon"><i class="icon-user"></i></a> 
                        <?php endif; ?>

                         <?php if(Auth::check()): ?>
                        <a href="<?php echo e(route('user.wishlist.index')); ?>" class="menu-icon"><div><span class="compare-icon"><i class="icon-heart"></i><span class="count-label wishlist_count"><?php echo e(Auth::user()->wishlists->count()); ?></span></span></div></a>

<?php else: ?>



<?php endif; ?>
                        <a href="<?php echo e(route('front.cart')); ?>" class="menu-icon"> <div><span class="cart-icon"><i class="icon-shopping-cart"></i><span class="count-label cart_count"><?php echo e(Session::has('cart') ? count(Session::get('cart')) : '0'); ?> </span></span></div></a>

                        <div class="toolbar-dropdown cart-dropdown widget-cart  cart_view_header" id="header_cart_load" data-target="<?php echo e(route('front.header.cart')); ?>">
                            <?php echo $__env->make('includes.header_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        </header><?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/front/common/header.blade.php ENDPATH**/ ?>