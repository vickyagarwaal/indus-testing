<?php $__env->startSection('title'); ?>
    <?php echo e(__('Address')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('front.common.bradcum_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Title-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumbs">
                    <li><a href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Home')); ?></a> </li>
                    <li class="separator"></li>
                    <li><?php echo e(__('Shipping - Billing Address')); ?></li>
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
          <div class="card">
              <div class="card-body">
                <h5><?php echo e(__('Billing Address')); ?></h5>
                <form id="billingForm" class="row" action="<?php echo e(route('user.billing.submit')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-address1"><?php echo e(__('Address 1')); ?> *</label>
                         <input class="form-control" type="text" name="bill_address1" id="billing-address1" value="<?php echo e($user->bill_address1); ?>">
                      <?php $__errorArgs = ['bill_address1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p class="text-danger"><?php echo e($message); ?></p>
                      <?php endif; ?>
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-address2"><?php echo e(__('Address 2')); ?></label>
                         <input class="form-control" type="text" name="bill_address2" value="<?php echo e($user->bill_address2); ?>" id="billing-address2">
                         <?php $__errorArgs = ['bill_address2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-zip"><?php echo e(__('Zip Code')); ?></label>
                         <input class="form-control" type="text" name="bill_zip" id="billing-zip" value="<?php echo e($user->bill_zip); ?>">
                         <?php $__errorArgs = ['bill_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="billing-company"><?php echo e(__('City')); ?> *</label>
                         <input class="form-control" type="text" name="bill_city" id="billing-city" value="<?php echo e($user->bill_city); ?>">
                         <?php $__errorArgs = ['bill_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                  
                   <div class="col-12 ">
                      <div class="text-right">
                         <button class="btn btn-primary margin-bottom-none  btn-sm" type="submit"><span><?php echo e(__('Update Address')); ?></span></button>
                      </div>
                   </div>
                </form>
                <div class="padding-top-2x mt-2 hidden-lg-up"></div>
                <br>
                <h5><?php echo e(__('Shipping Address')); ?></h5>
                <form id="shippingForm" class="row" action="<?php echo e(route('user.shipping.submit')); ?>" method="POST">
                  <?php echo csrf_field(); ?>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-address1"><?php echo e(__('Address 1')); ?> *</label>
                         <input class="form-control" name="ship_address1" value="<?php echo e($user->ship_address1); ?>" type="text" id="shipping-address1">
                         <?php $__errorArgs = ['ship_address1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-address2"><?php echo e(__('Address 2')); ?> </label>
                         <input class="form-control" value="<?php echo e($user->ship_address2); ?>" name="ship_address2" type="text" id="shipping-address2">
                         <?php $__errorArgs = ['ship_address2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-zip"><?php echo e(__('Zip Code')); ?></label>
                         <input class="form-control" type="text" value="<?php echo e($user->ship_zip); ?>" name="ship_zip" id="shipping-zip">
                         <?php $__errorArgs = ['ship_zip'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                   <div class="col-md-6">
                      <div class="form-group">
                         <label for="shipping-company"><?php echo e(__('City')); ?> *</label>
                         <input class="form-control" type="text" name="ship_city" id="shippingcity" value="<?php echo e($user->ship_city); ?>">
                         <?php $__errorArgs = ['ship_city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <p class="text-danger"><?php echo e($message); ?></p>
                         <?php endif; ?>
                        </div>
                   </div>
                
                 
             
                 
                   <div class="col-12 ">
                      <div class="text-right">
                         <button class="btn btn-primary margin-bottom-none btn-sm" type="submit"><span><?php echo e(__('Update Address')); ?></span></button>
                      </div>
                   </div>
                </form>
              </div>
          </div>
       </div>
    </div>
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/user/dashboard/address.blade.php ENDPATH**/ ?>