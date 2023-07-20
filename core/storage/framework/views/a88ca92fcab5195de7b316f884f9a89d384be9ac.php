<section class="service-section mt-10 pt-0">
            <div class="container-fluid">
                                                    <div class="col-md-10 offset-md-1">

                <div class="row">

                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class=" col-lg-3 col-md-3    col-xs-6 col-sm-6 text-center mb-10">
                            <div class="single-service single-service2">
                                <img src="<?php echo e(asset('assets/images/'.$service->photo)); ?>" alt="Shipping">
                                <div class="content">
                                    <h6 class="mb-2"><?php echo e($service->title); ?></h6>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            </div>
        </section><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/front/common/counter.blade.php ENDPATH**/ ?>