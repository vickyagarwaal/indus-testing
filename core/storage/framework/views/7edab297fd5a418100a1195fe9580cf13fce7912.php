        <div  class="hero-area3" >
            <div class="background"></div>
            <div class="heroarea-slider owl-carousel">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item" >
                  <img src="<?php echo e(asset('assets/images/' . $slider->photo)); ?>">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

           
    

<?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/front/common/slider.blade.php ENDPATH**/ ?>