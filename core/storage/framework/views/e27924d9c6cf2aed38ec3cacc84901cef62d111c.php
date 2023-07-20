<?php $__env->startSection('content'); ?>

<!-- Start of Main Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-sm-flex align-items-center justify-content-between">
                <h3 class=" mb-0bc-title"><b><?php echo e(__('Manage Manual Reviews')); ?></b></h3>
                <a class="btn btn-primary  btn-sm" href="<?php echo e(route('back.testimonials.add')); ?>"><i class="fas fa-plus"></i> <?php echo e(__('Add')); ?></a>
                </div>
        </div>
    </div>


	<!-- DataTales -->
	<div class="card shadow mb-4">
		<div class="card-body">
			<?php echo $__env->make('alerts.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<div class="table-responsive">
				<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
                  <thead>
                    <tr>

                  <th>Id</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Created </th>
                    <th>Updated </th>
                  <th>Action</th>

                </tr>
                  </thead>
                    <tbody>
                                                   <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <tr>
                                                  <td ><?php echo e($item->id); ?></td>
                          <td ><?php echo e($item->name); ?></td>


                                                   <td >
                                                   <?php if($item->status=='1'): ?>
                                                   <i class="label label-success"> Active</i>
                                                   <?php else: ?>
                                                   <i class="label label-danger"> Inactive</i>
                                                   <?php endif; ?>
                                                    </td>
                                                    <td ><?php echo e($item->created_at->diffForHumans()); ?></td>
                                                    <td ><?php echo e($item->updated_at->diffForHumans()); ?></td>

                                                      <td >
                                                      <div class="btn-group">
                                                        <a href="<?php echo e(url('admin/edit_testimonial/'.$item->id)); ?>" class="btn btn-xs btn-primary"  data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                                                        <a href="<?php echo e(url('admin/delete_testimonial/'.$item->id)); ?>" class="btn btn-xs btn-danger"  data-toggle="tooltip" title="Remove" onclick="return confirm('Are you sure? You will not be able to recover this.')"><i class="fa fa-times"></i></a>

                                                          </div>

                                                  </td>




                                                  </tr>
                                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                              </tbody>
               </table>
			</div>
		</div>
	</div>

</div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('master.back', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/back/testimonials/index.blade.php ENDPATH**/ ?>