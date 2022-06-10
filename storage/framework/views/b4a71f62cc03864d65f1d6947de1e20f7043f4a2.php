

  <body>
    <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Pemesanan Indekos</h3>
        <h5>Informasi Terkait Pemesanan Kos Anda</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px">
        <h5 class="text-center pb-3 fw-bolder">Pemesanan Indekos</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Pemesan</th>
              <th scope="col">No. Telepon</th>
              <th scope="col">Email</th>
              <th scope="col">Tanggal Pemesanan</th>
              <th scope="col">Jam Pemesanan</th>
              <th scope="col">Status</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tbody>
            <tr>
              <?php $time = json_decode(json_encode($data[0]->Jam_konfimasi_mulai), true) ?>
              <?php $time = explode(' ',$data[0]->Jam_konfimasi_mulai) ?>
              <th scope="row"><?php echo e($loop->iteration); ?></th>
              <td><?php echo e($data[0]->Nama); ?></td>
              <td><?php echo e($data[0]->Nomor_telepon); ?></td>
              <td><?php echo e($data[0]->Email); ?></td>
              <td><?php echo e($time[0]); ?></td>
              <td><?php echo e($time[1]); ?></td>

              <?php if($data[0]->Konfirmasi_pembayaran_pemilik == 'Ya'): ?>
                <td>Pemesanan berhasil</td>
              <?php else: ?>
              <?php if($data[0]->Konfirmasi_pencarian_pemilik == 'Ya'): ?>
              <?php if($data[0]->Jam_pembayaran_mulai == null): ?>
                <td>Menunggu persetujuan pembayaran dari pencari kos</td>
                  <?php else: ?>
                    <td>Menunggu pembayaran</td>
                      <td>
                        <button style="margin-left:5px;" type="button" class="btn btn-warning">
                        <a style="color: black" href="<?php echo e(url('/pemilik-kos/booking/konfirmasi-pembayaran/'. $data[0]->Id_pemesanan)); ?>" class="link-a">
                          Lihat
                        </a>
                      </button>
                    </td>
                  <?php endif; ?>
                <?php endif; ?>
              
                <?php if($data[0]->Konfirmasi_pencarian_pemilik == 'Tidak'): ?>
                  <td>Menunggu konfirmasi</td>
                  <td>
                    <button style="margin-left:5px;" type="button" class="btn btn-warning">
                    <a style="color: black" href="<?php echo e(url('/pemilik-kos/konfirmasi-booking/'. $data[0]->Id_pemesanan)); ?>" class="link-a">
                      Lihat
                    </a>
                  </button>
                </td>
                <?php endif; ?>

                <?php if($data[0]->Konfirmasi_pencarian_pemilik == 'Tolak'): ?>
                  <td>Di tolak</td>
                <?php endif; ?>
              <?php endif; ?>

              

              
              
              
            </tr>
          </tbody>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td> - </td>
              <td> - </td>
              <td> - </td>
              
              <td> - </td>
              <td> - </td>
              
            </tr>
          </tbody>
          <?php endif; ?>

        </table>
      </div>

    </div>

    <!-- Button Back To Home -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="<?php echo e(url('/pemilik-kos/homepage')); ?>" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php echo $__env->make('Layout.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pemilik_Kos/pemesanan.blade.php ENDPATH**/ ?>