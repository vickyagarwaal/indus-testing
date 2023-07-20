<?php if($extra_settings->is_t3_falsh == 1): ?>
        <div class="flash-sell-new-section mt-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title section-title2 section-title3section-title section-title2 section-title3">
                            <h2 class="h3"><?php echo e(__('Flash Deal')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="flash-deal-slider owl-carousel" >
                                <?php $__currentLoopData = $products->orderBy('id','DESC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->is_type == 'flash_deal' && $item->date != null): ?>
                                    <div class="slider-item">
                                        <div class="product-card ">
                                            <div class="product-thumb">
                                                <?php if(!$item->is_stock()): ?>
                                                <div class="product-badge bg-secondary border-default text-body
                                                "><?php echo e(__('out of stock')); ?></div>
                                                <?php endif; ?>
                                                <?php if($item->previous_price && $item->previous_price !=0): ?>
                                                <div class="product-badge product-badge2 bg-info"> -<?php echo e(PriceHelper::DiscountPercentage($item)); ?></div>
                                                <?php endif; ?>
                                                <img class="lazy" data-src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt="Product">
                                                <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                                    <a data-target="<?php echo e(route('fornt.compare.product',$item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                                    <?php echo $__env->make('includes.item_footer',['sitem' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            </div>
                                            <div class="product-card-inner">
                                                <div class="product-card-body">

                                                    <div class="product-category"><a href="<?php echo e(route('front.catalog').'?category='.$item->category->slug); ?>"><?php echo e($item->category->name); ?></a></div>
                                                    <h3 class="product-title"><a href="<?php echo e(route('front.product',$item->slug)); ?>">
                                                        <?php echo e(strlen(strip_tags($item->name)) > 50 ? substr(strip_tags($item->name), 0, 50) : strip_tags($item->name)); ?>

                                                    </a></h3>
                                                    <div class="rating-stars">

                                                      <p>  <i class="fa fa-star"></i> 5 | 45 Reviews</p>
                                                       <!-- <?php echo renderStarRating($item->reviews->avg('rating')); ?> -->
                                                    </div>
                                                    <h4 class="product-price">
                                                    <?php if($item->previous_price != 0): ?>
                                                    <del><?php echo e(PriceHelper::setPreviousPrice($item->previous_price)); ?></del>
                                                    <?php endif; ?>

                                                    <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>

                                                    </h4>
                                                    <?php if(date('d-m-y') != \Carbon\Carbon::parse($item->date)->format('d-m-y')): ?>
                                                    <div class="countdown countdown-alt mb-3" data-date-time="<?php echo e($item->date); ?>">
                                                    </div>
                                                    <?php endif; ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/front/common/flash_deal.blade.php ENDPATH**/ ?>