

<?php $__env->startSection('main'); ?>
<section class="Form my-4 mx-5 mt-5 pt-4">
    <div class="container">
      <div class="row shadow g-0">
        <div class="col-lg-5">
          <img src="<?php echo e(URL::asset('/assets/img/room_login.jpg')); ?>" class="image img-fluid" alt="" />
        </div>
        <div class="col-lg-7 px-3 pt-5 my-5">
          <?php if(session()->has('LoginError')): ?>
            <div class="error">
              <?php echo e(session('LoginError')); ?>

            </div>
          <?php endif; ?>
          <h2 class="mt-3 fw-bolder" style="color: #ffcc00">Login</h2>
          <form method="POST" action="/login">
            <?php echo csrf_field(); ?>
            
            <div class="form-row mt-3">
              <div class="col-lg-7">
                <input type="email" name="email" placeholder="Alamat Email" class="input-field form-control my-2 p-2" />
              </div>
            </div>
            <div class="form-row pt-1">
              <div class="col-lg-7">
                <input type="password" name="password" placeholder="Password" class="input-field form-control my-2 p-2" />
                <p class="text-end"><a href="forgot_password.html" style="color: #ffcc00">Lupa Password?</a></p>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" class="btn-login btn btn-primary">Login</button>
                
                <p class="pt-4 text-center">Belum punya akun?<a href="/register"> Sign Up disini!</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Login_Page/login.blade.php ENDPATH**/ ?>