
<?php $__env->startSection('main'); ?>
        <!-- Container -->
        <section class="container p-5 text-center">
          <div class="header text-center">
            <h3 class="fw-bold">Profil</h3>
            <h5>Informasi Tentang Anda</h5>
          </div>
    
          <div class="container-lg shadow mt-5 p-5" style="border-radius: 8px">
            <img class="rounded-circle" src="assets/img/agent-5.jpg" alt="" width="150" height="150">
            <h4 class="fw-bolder pt-3"><?php echo e(auth()->user()->nama); ?></h4>
            <h6>Pencari Kos</h6>
    
            <div class="kolom mt-3 ms-5 me-5 justify-content-evenly"><hr>
                  
      
                  <div class="row">
                    <div class="col text-start fw-bold">Alamat Email</div>
                    <div class="col text-end"><?php echo e(auth()->user()->email); ?></div>
                  </div>
      
                  <div class="row">
                    <div class="col text-start fw-bold">No. Telepon</div>
                    <div class="col text-end"><?php echo e(auth()->user()->no_telepon); ?></div>
                  </div>
    
                  <div class="row justify-content-between pt-5">
                    <div class="col-4 shadow p-3" style="border-radius: 8px;">
                      <h6 class="fw-bolder">Edit Profil</h6>
                      <p>Lakukan perubahan terkait informasi pribadi anda</p><br>
                      <a href="edit_profile.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Edit Profil</a>
                    </div>
        
                    <div class="col-4 shadow p-3" style="border-radius: 8px;">
                      <h6 class="fw-bolder">Hapus Akun</h6>
                      <p>Anda dapat menghapus akun Anda secara permanen</p><br>
                      <a href="#" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Hapus Akun</a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Button Back To Home -->
        <div class="d-grid gap-2 col-6 mx-auto">
          <a href="homepage_pencarikost.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.pencarikos_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pencari_Kos/profile.blade.php ENDPATH**/ ?>