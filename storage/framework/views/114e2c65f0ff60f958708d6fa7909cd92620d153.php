<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?php echo e($title ?? config('app.name')); ?></title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <?php echo $__env->make('Include.login.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

  <body>
    <?php echo $__env->yieldContent('main'); ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <?php echo $__env->make('Include.login.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html>
<?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Layout/loginlayout.blade.php ENDPATH**/ ?>