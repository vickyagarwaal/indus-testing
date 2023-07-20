

        

         <div class=" mt-15">
            <div class="container-fluid">
               
                <div class="row g-3 heading_d">
<h3 class="text-center">All Products Categories</h3>
                        
                        <?php
        $categories = App\Models\Category::with('subcategory')->whereStatus(1)->orderby('serial','asc')->take(8)->get();
    ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <div class="col-md-auto-3">
                        <div class=" text-center category_p">
                            <a href="<?php echo e(route('front.catalog').'?category='.$pcategory->slug); ?>">        
                                  <img class="lazy" src="<?php echo e(asset('assets/images/'.$pcategory->photo)); ?>" alt="Product"><br/>
                                    <p><?php echo e($pcategory->name); ?></p>
                                </a>  

                        </div>
</div>

                       
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      
                                            </div>


                </div>
        </div>
 <br/><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/front/common/categories.blade.php ENDPATH**/ ?>