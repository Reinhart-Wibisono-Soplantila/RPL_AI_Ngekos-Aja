
<?php $__env->startSection('main'); ?>
  <div class="container-sm text-center shadow" style="border-radius: 8px; margin-top: 2.2cm; width: 70%">
    <div class="row d-flex justify-content-center p-5">
      <div class="col-md-7 col-lg-5">
        <img src="<?php echo e(URL::asset('/assets/img/verifikasi_akun.png')); ?>" alt="verifikasi_akun" />
      </div>
      <h2 class="mt-3" style="font-weight: bold; color: #ffcc00">Verifikasi Akun</h2>
      <p>Masukkan kode yang dikirimkan melalui email anda</p>
      <div class="input-container d-flex flex-row mt-3 pb-3 ps-5 pe-5">
        <input type="text" class="m-1 text-center form-control rounded" maxlength="1" />
        <input type="text" class="m-1 text-center form-control rounded" maxlength="1" />
        <input type="text" class="m-1 text-center form-control rounded" maxlength="1" />
        <input type="text" class="m-1 text-center form-control rounded" maxlength="1" />
        <input type="text" class="m-1 text-center form-control rounded" maxlength="1" />
        <input type="text" class="m-1 text-center form-control rounded" maxlength="1" />
      </div>
      <!-- Button Next and Back To Sign Up Page -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="homepage_pemilikkost.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Selanjutnya</a>
        <small class="mb-3">belum menerima kode? <a href="#" class="text-decoration-none" style="color: #ffcc00">kirim ulang kode</a><br /><br /> </small>
        <a href="sign-up.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Sign Up</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Login_Page/verification_account.blade.php ENDPATH**/ ?>