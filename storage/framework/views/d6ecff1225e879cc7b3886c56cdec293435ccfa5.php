    

   <?php $__env->startSection('main'); ?>
    <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Konfirmasi Penerimaan Booking Dari Pemilik Kos</h3>
        <h5>Yeyy, booking yang kamu ajukan telah diterima oleh pemilik kos</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px;">
        <h4 style="font-weight: bold"><?php echo e($datas[0]->Nama_kos); ?></h4>
        <h3 class="badge" style="background-color: #2d2ade"><?php echo e($datas[0]->Jenis_kelamin_kamar); ?></h3>
        <div class="img-box-a">
          <img src="<?php echo e(URL::asset('assets/img/property-7.jpg')); ?>" alt="" class="img-a img-fluid" width="35%" />
        </div>

        <!-- Kolom -->
        <div class="kolom mt-3 ms-5 me-5 justify-content-evenly">
          <!-- Biodata Penyewa -->
            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">Penyewa:</div>
              <div class="col text-end"><?php echo e($datas[0]->Nama); ?></div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">Jenis Kelamin:</div>
              <div class="col text-end"><?php echo e($datas[0]->Jenis_kelamin); ?></div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">No. Telepon</div>
              <div class="col text-end"><?php echo e($datas[0]->Nomor_telepon); ?></div>
            </div>
            <hr>

            <div class="row">
                <div class="col text-center fw-bold" style="color: green;">Selamat!! permintaan booking anda sudah dikonfirmasi dan disetujui oleh pemilik kos</div>
            </div>

            <!-- Button -->
            <div class="d-grid gap-2 col-6 mx-auto mt-3">
              <a href="<?php echo e(url('/pencari-kos/booking/pembayaran/'. $datas[0]->Id_pemesanan)); ?>" class="btn btn-warning" type="button" style="border-radius: 8px;">Lanjutkan Pembayaran</a>
              <a href="<?php echo e(url('/pencari-kos/booking/penolakan/'. $datas[0]->Id_pemesanan)); ?>" class="btn btn-outline-warning" type="button" style="border-radius: 8px;">Batalkan Booking</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Button Back To Home -->
  <div class="d-grid gap-2 col-6 mx-auto">
      <a href="<?php echo e(url('/')); ?>" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px;">Kembali Ke Beranda</a>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('time'); ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('Layout.booking_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pencari_Kos/Booking/konfirmasi_penerimaan.blade.php ENDPATH**/ ?>