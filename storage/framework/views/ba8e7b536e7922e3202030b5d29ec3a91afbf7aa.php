


<?php $__env->startSection('main'); ?>
    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">List Kos </h1>
                <!-- <span class="color-text-a">Grid Properties</span> -->
              </div>
            </div>
            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="homepage_pencarikost.html">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">List Kos </a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= Property Grid ======= -->
      <section class="property-grid grid">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="grid-option">
                <form action="/pencari-kos/list/filter" method="get">
                  <?php echo method_field('get'); ?>
                  <?php echo csrf_field(); ?>
                  <select class="custom-select" name="Gender_kamar">
                    <option disabled selected>Tipe Kos</option>
                    
                    <option value="Laki-laki">Kos Putra</option>
                    <option value="Perempuan">Kos Putri</option>
                    <option value="Campuran">Kos Campuran</option>
                  </select>
                  <select class="custom-select">
                    <option selected>Rentang Harga (Tahunan)</option>
                    <option value="1">Semua</option>
                    <option value="2">Rp. 3.000.000 - Rp.3.999.999</option>
                    <option value="3">Rp. 4.000.000 - Rp.4.999.999</option>
                    <option value="4">Rp. 5.000.000 - Rp.5.999.999</option>
                    <option value="5">Rp. 6.000.000 - Rp.6.999.999</option>
                  </select>
                  <button class="btn btn-warning" style="border-radius: 8px" type="submit">Cari</button>
                </form>
              </div>
            </div>
            <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <?php for($i = 0; $i < sizeof($data); $i++): ?>
                <!-- Kos Namira -->
                <div class="col-md-4">
                  <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                      <img src="<?php echo e(URL::asset('assets/img/Foto Konfirmasi/kos_namira1.jpg')); ?>" alt="" class="img-a img-fluid" />
                    </div>
                    <div class="card-overlay">
                      <div class="card-overlay-a-content">
                        <div class="card-header-a">
                          <h2 class="card-title-a">
                            <a href="<?php echo e(url('/pencari-kos/detail-kos/'. $data[$i]->Id_kos)); ?>"
                              ><?php echo e($data[$i]->Nama_indekos); ?> <br />
                              <?php echo e($data[$i]->Kabupaten_kota); ?></a
                            >
                          </h2>
                        </div>
                        <div class="card-body-a">
                          <div class="price-box d-flex">
                            <span class="price-a">Sewa | Rp. 3.500.000/Tahun</span>
                          </div>
                          <a href="<?php echo e(url('/pencari-kos/detail-kos/'. $data[$i]->Id_kos)); ?>" class="link-a"
                            >Lihat Kos
                            <span class="bi bi-chevron-right"></span>
                          </a>
                        </div>
                        <div class="card-footer-a">
                          <ul class="card-info d-flex justify-content-around">
                            <li>
                              <h4 class="card-info-title">Luas</h4>
                              <span
                                ><?php echo e($data[$i]->Panjang_kamar); ?>x<?php echo e($data[$i]->Lebar_kamar); ?> m
                                <sup>2</sup>
                              </span>
                            </li>
                            
                            <li>
                              <h4 class="card-info-title">Tipe Kos</h4>
                              <span><?php echo e($data[$i]->Gender_kamar); ?></span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                Tidak ada kos
            <?php endif; ?>



          
          <!-- Link Halaman -->
          <div class="row">
            <div class="col-sm-12">
              <nav class="pagination-a">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <span class="bi bi-chevron-left"></span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item next">
                    <a class="page-link" href="#">
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Property Grid Single-->
    </main>
    <!-- End #main -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layout.pencarikos_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pencari_Kos/list_kos.blade.php ENDPATH**/ ?>