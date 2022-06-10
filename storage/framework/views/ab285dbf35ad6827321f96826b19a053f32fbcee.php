<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Booking | NgekostAja</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <?php echo $__env->make('Include.booking.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        <?php echo $__env->yieldContent('main'); ?>
        <?php echo $__env->make('Include.booking.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('Include.booking.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldPushContent('time'); ?>
    </body>
  </head>
</html><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Layout/booking_layout.blade.php ENDPATH**/ ?>