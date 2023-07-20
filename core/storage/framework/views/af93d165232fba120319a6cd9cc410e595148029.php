<?php
    $user = Auth::user();
?>
<div class="col-lg-4">
    <aside class="user-info-wrapper">
      <div class="user-info">
        <div class="user-avatar">

          <img id="avater_photo_view" src="<?php echo e($user->photo ? asset('assets/images/'.$user->photo) : asset('assets/images/placeholder.png')); ?>" alt="User">
        </div>

        <div class="user-data">
          <h4 class="h5"><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h4><span><?php echo e(__('Joined')); ?> <?php echo e($user->created_at->format('M D Y')); ?></span>
        </div>
      </div>
      <nav class="list-group">
        <a class="list-group-item <?php echo e(request()->is('user/dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('user.dashboard')); ?>"><i class="icon-command"></i><?php echo e(__('Dashboard')); ?></a>
       
        <a class="list-group-item with-badge <?php echo e(request()->is('user/orders') ? 'active' : ''); ?>" href="<?php echo e(route('user.order.index')); ?>"><i class="icon-shopping-bag"></i><?php echo e(__('Orders')); ?><span class="badge badge-default badge-pill"><?php echo e($user->orders->count()); ?></span></a>
     
        <a class="list-group-item with-badge" href="<?php echo e(route('user.logout')); ?>"><i class="icon-log-out"></i><?php echo e(__('Log out')); ?></a>
      </nav>
    </aside>

    <div class="modal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?php echo e(__('Remove Account')); ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p><?php echo e(__('Are You Sure?')); ?></p>
            <p><?php echo e(__('Do you remove you account?')); ?></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
            <a href="<?php echo e(route('user.account.remove')); ?>" type="button" class="btn btn-danger"><?php echo e(__('Remove Account')); ?></a>
          </div>
        </div>
      </div>
    </div>

  </div>
<?php /**PATH /opt/lampp/htdocs/testingindus/core/resources/views/includes/user_sitebar.blade.php ENDPATH**/ ?>