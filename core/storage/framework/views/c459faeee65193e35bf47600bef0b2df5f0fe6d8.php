

<?php if($extra_settings->is_t3_brand_section == 1): ?>
       <div class="testimonials-wrap">
    <div class="container-fluid">
        <div class="heading-section heading_h2">
            <h2>OUR CUSTOMERS SPEAK FOR US
</h2>
<p class="starrating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</p>
<p><u>From 1249 Reviews</u></p>
        </div>
        <div class="col-md-8 offset-md-2">
        <div class="carousel-testimonial owl-carousel">
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img img-thumbnail" style="background-image: url(https://randomuser.me/api/portraits/men/82.jpg)">
                    </div>
                    <div class="text pl-4">
                       <p class="starrating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</p>
                        <p  class="desccc">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        
                        <p class="name">Mark Huff</p>

                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img img-thumbnail" style="background-image: url(https://randomuser.me/api/portraits/men/83.jpg)">
                    </div>
                    <div class="text pl-4">
                             <p class="starrating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</p>
                        <p class="desccc">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

                        <p class="name">Rodel Golez</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img img-thumbnail" style="background-image: url(https://randomuser.me/api/portraits/men/84.jpg)">
                    </div>
                    <div class="text pl-4">
                             <p class="starrating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</p>
                        <p  class="desccc">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Ken Bosh</p>
                        <span class="position">Businesswoman</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="testimonial-box d-flex">
                    <div class="user-img img-thumbnail" style="background-image: url(https://randomuser.me/api/portraits/men/85.jpg)">
                    </div>
                    <div class="text pl-4">
                             <p class="starrating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
</p>
                        <p  class="desccc">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p class="name">Racky Henderson</p>
                        <span class="position">Father</span>
                    </div>
                </div>
            </div>
           
           
           
           
        </div>
    </div>
</div>
</div>
 <div class="col-md-12 text-center">
   <a href="<?php echo e(url('products')); ?>">  <img class="img-responsive img-thumbnail" src="<?php echo e(asset('assets/images/'.$setting->why_us)); ?>" alt="<?php echo e($setting->title); ?>"></a>
 </div>
 <br/>
  <br/>
        <section class="brand-section mb-50">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="section-title section-title2 section-title3">
                            <h2 class="h3 text-center">We are also selling on</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-slider owl-carousel">
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                
                                    <img class="d-block hi-50 lazy"
                                    src="<?php echo e(asset('assets/images/' . $brand->photo)); ?>"
                                        alt="<?php echo e($brand->name); ?>" title="<?php echo e($brand->name); ?>">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <?php endif; ?>
<?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/front/common/sellingplatform.blade.php ENDPATH**/ ?>