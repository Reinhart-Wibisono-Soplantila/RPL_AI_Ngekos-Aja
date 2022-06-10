

<?php $__env->startSection('main'); ?>
<div class="container-sm text-center shadow" style="border-radius: 8px; margin-top: 2.2cm; width: 70%">
  <div class="row d-flex justify-content-center p-5">
    <div class="col-md-7 col-lg-5">
      <img src="<?php echo e(URL::asset('/assets/img/change_password.png')); ?>" width="40%" alt="Lupa Password" />
    </div>
    <h2 class="mt-3" style="font-weight: bold; color: #ffcc00">Ubah Password</h2>
    <p>Masukkan password baru anda</p>
    <div class="input-container d-flex flex-row mt-3 pb-2 ps-5 pe-5">
      <input type="password" placeholder="Masukkan password baru" class="input-field form-control my-2 p-2" />
    </div>
    <div class="input-container d-flex flex-row pb-3 ps-5 pe-5">
      <input type="password" placeholder="Konfirmasi password" class="input-field form-control my-2 p-2" />
    </div>
    <!-- Button Next and Back Login Page -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="success_change_pass.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Reset Password</a>
      <a href="login.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Login</a>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Login_Page/change_pass.blade.php ENDPATH**/ ?>