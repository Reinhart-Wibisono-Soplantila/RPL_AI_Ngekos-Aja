  
  
  <?php $__env->startSection('main'); ?>
  <section class="Form my-4 mx-5 mt-5 pt-4">
    <div class="container">
      <div class="row shadow g-0">
        <div class="col-lg-5">
          <img src="<?php echo e(URL::asset('assets/img/room_signup.jpg')); ?>" class="image img-fluid" alt="" />
        </div>
        <div class="col-lg-7 px-3 my-4">
          <h2 class="mt-3 fw-bolder" style="color: #ffcc00">Sign Up</h2>
          <form method="POST" action="/register">
            <?php echo csrf_field(); ?>
            <div class="form-row mt-3">
              <div class="col-lg-7">
                <label for="nama" hidden></label>
                <input type="text" placeholder="Nama Lengkap" name="nama" id="nama" class="input-field form-control my-2 p-2  <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " required value="<?php echo e(old('nama')); ?>"/>
                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                      <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-row pt-1">
              <div class="col-lg-7">
                <label for="no_telepon" hidden></label>
                <input type="text" placeholder="No. Telepon" class="<?php $__errorArgs = ['no_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-field form-control my-2 p-2" name="no_telepon" id="no_telepon" required value="<?php echo e(old('no_telepon')); ?>"/>
                <?php $__errorArgs = ['no_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                      <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-row pt-1">
              <div class="col-lg-7">
                <label for="email" hidden></label>
                <input type="email" placeholder="Alamat Email" class="<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-field form-control my-2 p-2" name="email" id="email" required />
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                      <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-row pt-1">
              <div class="col-lg-7">
                <label for="password" hidden></label>
                <input type="password" placeholder="Password" class="<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> input-field form-control my-2 p-2" name="password" id="password" required />
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                      <?php echo e($message); ?>

                    </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            </div>
            <div class="form-row pt-1">
              <label for="peran" hidden></label>
              <p class="fs-6">Daftar sebagai</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="peran" id="pemilik_kos" value="pemilik kos"/>
                <label class="form-check-label" for="pemilik_kos"> Pemilik Kos </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="peran" id="pencari_kos" value="pencari kos"/>
                <label class="form-check-label" for="pencari_kos"> Pencari Kos </label>
              </div>
            </div>
            <div class="form-row pt-3">
              <div class="col-lg-7">
                <button type="submit" class="btn-login btn btn-primary">Daftar</button>
                <p class="pt-4 text-center">Sudah punya akun?<a href="/login"> Login disini!</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.loginlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Login_Page/sign_up.blade.php ENDPATH**/ ?>