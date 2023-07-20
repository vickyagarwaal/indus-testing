<section class="selected-product-section speacial-product-sec mt-50">
            <div class="container">
             <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title section-title2 section-title3section-title section-title2 section-title3">
                            <h2 class="h3 text-center">Feartured Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="type_product_view d-none">
                        <img  src="<?php echo e(asset('assets/images/ajax_loader.gif')); ?>" alt="">
                    </div>
                    <div class="col-lg-12" id="type_product_view">

                        <div class="row" >
                            <?php $__currentLoopData = $products->orderBy('id','ASC')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="slider-item col-md-3">
                                        <div class="product-card ">
                                            <div class="product-thumb">
                                                <?php if(!$item->is_stock()): ?>
                                                    <div class="product-badge bg-secondary border-default text-body
                                                    "><?php echo e(__('out of stock')); ?></div>
                                                <?php endif; ?>

                                             
                                              
                                               <a href="<?php echo e(route('front.product',$item->slug)); ?>"> <img class="lazy" src="<?php echo e(asset('assets/images/'.$item->thumbnail)); ?>" alt="Product"> </a>
                                                <div class="product-button-group"><a class="product-button wishlist_store" href="<?php echo e(route('user.wishlist.store',$item->id)); ?>" title="<?php echo e(__('Wishlist')); ?>"><i class="icon-heart"></i></a>
                                                    <a data-target="<?php echo e(route('fornt.compare.product',$item->id)); ?>" class="product-button product_compare" href="javascript:;" title="<?php echo e(__('Compare')); ?>"><i class="icon-repeat"></i></a>
                                                    <?php echo $__env->make('includes.item_footer',['sitem' => $item], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            </div>
                                            <div class="product-card-inner">
                                            <div class="product-card-body">
                                                <h3 class="product-title"><a href="<?php echo e(route('front.product',$item->slug)); ?>">
                                                    <?php echo e(strlen(strip_tags($item->name)) > 35 ? substr(strip_tags($item->name), 0, 35) : strip_tags($item->name)); ?>

                                                </a></h3>
                                                <!--<div class="rating-stars">
                                                    <?php echo renderStarRating($item->reviews->avg('rating')); ?>

                                                </div>-->
                                                <h4 class="product-price">
                                               <?php /* @if ($item->previous_price != 0)
                                                <del>{{PriceHelper::setPreviousPrice($item->previous_price)}}</del>
                                                @endif  */ ?>

                                                <?php if($item->previous_price && $item->previous_price !=0): ?>
                                            <span ><?php echo e(PriceHelper::DiscountPercentage($item)); ?> off  </span>
                                                <?php endif; ?>
                                                <?php echo e(PriceHelper::grandCurrencyPrice($item)); ?>


                                                 
                                                </h4>
<br/>
                                          <?php /*      @if ($item->is_stock())
  <a class="product-button add_to_single_cart btn-grad   btn-block "  data-target="{{ $item->id }}" href="javascript:;"  title="{{__('To Cart')}}"><i class="icon-shopping-cart"></i> Add to Cart
    </a>
    @else
    <a class="product-button btn  btn-grad btn-block mt-2" href="{{route('front.product',$item->slug)}}" title="{{__('Details')}}"><i class="icon-arrow-right"></i> Add to Cart</a>
    @endif */ ?>
                                            </div>

                                            </div>
                                        </div>
                                    </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </section><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/front/common/featured.blade.php ENDPATH**/ ?>