<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0 bc-title"><b><?php echo e(__('Create Page')); ?></b> </h3>
                <a class="btn btn-primary  btn-sm" href="<?php echo e(route('back.page.index')); ?>"><i class="fas fa-chevron-left"></i> <?php echo e(__('Back')); ?></a>
                </div>
        </div>
    </div>
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->

            
           <div class="box box-info">
            
            <!-- /.box-header -->
            <!-- form start -->
                    <div class="col-md-8 col-md-offset-2">

              <div class="box-body">
<?php if($errors->any()): ?>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger"><?php echo e($error); ?></div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<form class="admin-form"  method="POST"
									enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?php echo e(isset($item->id) ? $item->id : null); ?>">

        					 <fieldset class="form-group">
        						<label for="category"> User name </label>
        						<span class="text-red">*</span>
                    <input class="form-control " placeholder="Enter User name"  required="true" name="name" type="text" id="category"  value="<?php echo e(isset($item->name) ? $item->name : old('name')); ?>">

        					</fieldset>
                   <fieldset class="form-group">
                    <label for="category"> Position </label>
                    <span class="text-red">*</span>
                    <input class="form-control " placeholder="Enter Post such as Founder, Co-founder"  required="true" name="post" type="text" id="category"  value="<?php echo e(isset($item->post) ? $item->post : old('post')); ?>">

                  </fieldset>
                  <fieldset class="form-group">
                    <label for="category"> Company </label>
                    <span class="text-red">*</span>
                    <input class="form-control " placeholder="Enter Company name"  required="true" name="company" type="text" id="category"  value="<?php echo e(isset($item->company) ? $item->company : old('company')); ?>">

                  </fieldset>
 <fieldset class="form-group">

								 	<label for="category">Rating</label>
								 	
                    <input class="form-control " placeholder="Enter rating maximum 5"  required="true" name="rating" type="number" id="category"  value="<?php echo e(isset($item->rating) ? $item->rating : old('rating')); ?>">

								 </fieldset>

									<fieldset class="form-group">

								 	<label for="category">Content</label>
 <textarea  id="summernote" class="form-control " placeholder="Enter blog description"  required="true"  name="description" type="text" id="category"  ><?php echo e(isset($item->description) ? $item->description : null); ?></textarea>

								 </fieldset>
								 
								
								 
<fieldset class="form-group">
                  <div class="row">
                    <div class="col-md-8">

                  <label for="category">Testimonial image </label>

                      <div class="media-body media-middle">
                        <input class="form-control " placeholder="Upload image"  name="image" type="file">
                      </div>

                    </div>
                    <div class="col-md-4">

                        <div class="media">
                            <div class="media-left">
                              <?php if( ! empty($item->image)): ?>

                                    <img src="<?php echo e(URL::to($item->image)); ?>" width="100" alt="person">

                                <?php else: ?>

                                    <img src="<?php echo e(URL::asset('uploads/default.gif')); ?>" alt="person" class="img-circle" width="80"/>

                                <?php endif; ?>

                              </div>

                            </div>

                        </div>
                      </div>
                            </fieldset>
                  <fieldset class="form-group">

  						<label for="role">Status</label>
  						<span class="text-red">*</span>
                <?php echo Form::select('status', ['1' => 'Active', '2' => 'Inactive'], isset($item->status) ? $item->status : old('status')  ,['class' =>'form-control' ]);; ?>

  					</fieldset>
        						

                                            </div>
                    </div>
          </div>

          <!-- /.box -->
<div class="col-md-8 col-md-offset-2">
 <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
          <!-- /.box -->
        </div>
          <div class="box-footer">
               
              </div>
</form>        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
	<!-- Form -->
	
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/back/testimonials/create.blade.php ENDPATH**/ ?>