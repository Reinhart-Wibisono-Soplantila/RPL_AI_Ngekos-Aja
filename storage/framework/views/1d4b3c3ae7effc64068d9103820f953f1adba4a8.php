 

<?php $__env->startSection('main'); ?>
    <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Penolakan Booking</h3>
        <h5>Berikan tanggapan kepada pencari kos mengapa anda melakukan penolakan booking</h5>
      </div>
      <form action="<?php echo e(url('/pemilik-kos/penolakan-booking/'. $data)); ?>" method="POST">
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
        <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px">
          <div class="form-floating">
            <textarea class="form-control" name="Isi_feedback" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Mengapa anda melakukan penolakan booking?</label>
          </div>

          <!-- Button -->
          <div class="d-grid gap-2 col-6 mx-auto mt-5">
            <button class="btn btn-warning" type="submit" style="border-radius: 8px">Konfirmasi penolakan booking</button>
          </div>
        </div>
      </form>
    </div>

    <!-- Button Back To Home -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="homepage_pencarikost.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.booking_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pemilik_Kos/Booking/alasan_penolakan.blade.php ENDPATH**/ ?>