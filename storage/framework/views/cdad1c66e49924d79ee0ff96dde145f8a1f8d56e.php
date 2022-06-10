 

<?php $__env->startSection('main'); ?>
    <div class="container-sm text-center shadow" style="border-radius: 8px; margin-top: 2.2cm; width: 70%">
      <div class="row d-flex justify-content-center p-5">
        <div class="col-md-7 col-lg-5">
          <img src="<?php echo e(URL::asset('assets/img/success.png')); ?>" width="40%" alt="" />
        </div>
        <h2 class="mt-3" style="font-weight: bold; color: #ffcc00">Kos Kamu Siap Untuk Ditempati</h2>
        <p>Yeyyyy, terima kasih sudah melakukan pembayaran. Sekarang kamu sudah bisa masuk ke kos pesanan kamu!</p>
        >
        <!-- Button Next and Back Login Page -->
        <div class="d-grid gap-2 col-6 mx-auto pt-4">
          <a href="ulasan.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Berikan Ulasan</a>
          <a href="<?php echo e(url('/pencari-kos/homepage')); ?>" class="btn btn-outline-warning justify-content-center" disabled type="button" style="border-radius: 8px;">Kembali Ke Beranda</a>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.booking_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pencari_Kos/FeedbackBooking/booking_sukses.blade.php ENDPATH**/ ?>