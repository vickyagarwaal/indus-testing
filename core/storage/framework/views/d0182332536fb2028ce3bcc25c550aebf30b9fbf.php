<?php if($extra_settings->is_t3_3_column_banner_first == 1): ?>
        <div class="bannner-section mt-40">
            <div class="container ">
                <div class="row gx-3">
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_first['firsturl1']); ?>" class="genius-banner">
                            <img src="<?php echo e(asset('assets/images/'.$banner_first['img1'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_first['subtitle1'])): ?>
                                    <p><?php echo e($banner_first['subtitle1']); ?></p>
                                <?php endif; ?>
                                <?php if(isset($banner_first['title1'])): ?>
                                    <h4><?php echo e($banner_first['title1']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_first['firsturl2']); ?>" class="genius-banner">
                            <img src="<?php echo e(asset('assets/images/'.$banner_first['img2'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_first['subtitle2'])): ?>
                                    <p><?php echo e($banner_first['subtitle2']); ?></p>
                                <?php endif; ?>
                                <?php if(isset($banner_first['title2'])): ?>
                                    <h4><?php echo e($banner_first['title2']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo e($banner_first['firsturl3']); ?>" class="genius-banner">
                            <img src="<?php echo e(asset('assets/images/'.$banner_first['img3'])); ?>" alt="">
                            <div class="inner-content">
                                <?php if(isset($banner_first['subtitle3'])): ?>
                                    <p><?php echo e($banner_first['subtitle3']); ?> </p>
                                <?php endif; ?>
                                <?php if(isset($banner_first['title3'])): ?>
                                    <h4><?php echo e($banner_first['title3']); ?></h4>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

      <?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/front/common/banner_ad.blade.php ENDPATH**/ ?>