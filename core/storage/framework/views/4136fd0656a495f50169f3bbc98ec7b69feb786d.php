<ul class="nav">

    <li class="nav-item">
        <a href="<?php echo e(route('back.dashboard')); ?>">
            <i class="fas fa-home"></i>
            <p><?php echo e(__('Dashboard')); ?></p>
        </a>
    </li>

    <?php
        if(Auth::guard('admin')->user()->role->section != 'null'){
            $section = json_decode(Auth::guard('admin')->user()->role->section,true);
        }else{
            $section = [];
        }
    ?>

 


    <?php if(in_array('Manage Orders',$section)): ?>
    <li class="nav-item <?php echo e(request()->is('orders/*') ? 'submenu' : ''); ?>">
        <a data-toggle="collapse" href="#order">
            <i class="fab fa-first-order"></i>
            <p><?php echo e(__('Manage Orders')); ?> </p>
            <span class="caret"></span>
        </a>
        <div class="collapse" id="order">
            <ul class="nav nav-collapse">
                <li class="<?php echo e(!request()->input('type') && request()->is('admin/orders')  ? 'active' : ''); ?>">
                    <a class="sub-link" href="<?php echo e(route('back.order.index')); ?>">
                        <span class="sub-item"><?php echo e(__('All Orders')); ?></span>
                    </a>
                </li>
                <li class="<?php echo e(request()->input('type') == 'Pending' ? 'active' : ''); ?>">
                    <a class="sub-link" href="<?php echo e(route('back.order.index').'?type='.'Pending'); ?>">
                        <span class="sub-item"><?php echo e(__('Pending Orders')); ?></span>
                    </a>
                </li>
                <li class="<?php echo e(request()->input('type') == 'In Progress' ? 'active' : ''); ?>">
                    <a class="sub-link" href="<?php echo e(route('back.order.index').'?type='.'In Progress'); ?>">
                        <span class="sub-item"><?php echo e(__('Progress Orders')); ?></span>
                    </a>
                </li>

                <li class="<?php echo e(request()->input('type') == 'Delivered' ? 'active' : ''); ?>">
                    <a class="sub-link" href="<?php echo e(route('back.order.index').'?type='.'Delivered'); ?>">
                        <span class="sub-item"><?php echo e(__('Delivered Orders')); ?></span>
                    </a>
                </li>
                <li class="<?php echo e(request()->input('type') == 'Canceled' ? 'active' : ''); ?>">
                    <a class="sub-link" href="<?php echo e(route('back.order.index').'?type='.'Canceled'); ?>">
                        <span class="sub-item"><?php echo e(__('Canceled Orders')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <?php endif; ?>

     




  

   
</ul>
<?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/master/inc/normal.blade.php ENDPATH**/ ?>