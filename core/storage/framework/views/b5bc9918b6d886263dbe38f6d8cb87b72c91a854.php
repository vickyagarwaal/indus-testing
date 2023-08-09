<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" media="screen" href="<?php echo e(asset('assets/front/css/plugins.min.css')); ?>">

</head>
<body>
    <section class="fourzerofour pt-4 mt-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="content text-center">
                <h3 class="heading">
                  <?php echo e(__('404 | Not Found')); ?>

                </h3>
                <p class="text">
                  <?php echo e(__('The resource request could not be found on this server !')); ?>

                </p>
                <a class="mybtn1" href="<?php echo e(route('front.index')); ?>"><?php echo e(__('Back Home')); ?></a>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>



<?php /**PATH /opt/lampp/htdocs/indusrise/core/resources/views/errors/404.blade.php ENDPATH**/ ?>