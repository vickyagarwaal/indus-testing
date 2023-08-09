<?php $__env->startSection('title'); ?>
    <?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

  <?php
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
    ?>
<?php echo $__env->make('front.common.bradcum_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo e(__('front.index')); ?>"><?php echo e(__('Home')); ?></a> </li>
                    <li class="separator"></li>
                    <li><?php echo e(__('Welcome Back')); ?> </li>
                  </ul>
            </div>
        </div>
    </div>
  </div>

  <!-- Page Content-->
  <div class="container padding-bottom-3x mb-1">
  <div class="row">
         <?php echo $__env->make('includes.user_sitebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <div class="col-lg-8 dashboard_tab">
                <div class="row u-d-d">
<br/>
<div class="times_dashbaoard text-center">
                    <h3 >Welcome To TimesQuartz.com Dashboard- India's Leading Watches, Trolley Bags, Rucksack & Duffle Bag Brand</h3>
                    <h4>Customer Care Support: <a class="underline" href="tel:<?php echo e($setting->footer_phone); ?>"><?php echo e($setting->footer_phone); ?></a></h4>
                </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3"><?php echo e(__('All Order')); ?></p>
                                <h4><b><?php echo e($allorders); ?></b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3"><?php echo e(__('Completed Order')); ?></p>
                                <h4><b><?php echo e($delivered); ?></b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3"><?php echo e(__('Processing Order')); ?></p>
                                <h4><b><?php echo e($progress); ?></b></h4>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3"><?php echo e(__('Canceled Order')); ?></p>
                                <h4><b><?php echo e($canceled); ?></b></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 mb-1">
                        <div class="card round">
                            <div class="card-body text-center">
                                <i class="icon-shopping-bag"></i>
                                <p class="mt-3"><?php echo e(__('Pending Order')); ?></p>
                                <h4><b><?php echo e($pending); ?></b></h4>
                            </div>
                        </div>
                    </div>
                </div>
                          <?php echo $__env->make('front.common.dashboard_product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

          </div>


        </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/user/dashboard/dashboard.blade.php ENDPATH**/ ?>