

<?php $__env->startSection('main'); ?>
            <!-- ======= Property Search Section ======= -->
            <div class="click-closed"></div>
            <!--/ Form Search Star /-->
            <div class="box-collapse">
              <div class="title-box-d">
                <h3 class="title-d">Search Property</h3>
              </div>
              <span class="close-box-collapse right-boxed bi bi-x"></span>
              <div class="box-collapse-wrap form">
                <form class="form-a">
                  <div class="row">
                    <div class="col-md-12 mb-2">
                      <div class="form-group">
                        <label class="pb-2" for="Type">Keyword</label>
                        <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group mt-3">
                        <label class="pb-2" for="Type">Tipe Kos</label>
                        <select class="form-control form-select form-control-a" id="Type">
                          <option>Semua Tipe</option>
                          <option>Putra</option>
                          <option>Putri</option>
                          <option>Campuran</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group mt-3">
                        <label class="pb-2" for="city">Kabupaten</label>
                        <select class="form-control form-select form-control-a" id="city">
                          <option>Semua Kabupaten</option>
                          <option>Makassar</option>
                          <option>Gowa</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group mt-3">
                        <label class="pb-2" for="bathrooms">Harga Minimum</label>
                        <select class="form-control form-select form-control-a" id="bathrooms">
                          <option>Any</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <div class="form-group mt-3">
                        <label class="pb-2" for="price">Harga Maksimum</label>
                        <select class="form-control form-select form-control-a" id="price">
                          <option>Unlimite</option>
                          <option>$50,000</option>
                          <option>$100,000</option>
                          <option>$150,000</option>
                          <option>$200,000</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-b" style="border-radius: 8px">Search Property</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- End Property Search Section -->>
        
            <!-- ======= Header/Navbar ======= -->
            <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="background-color: #151100">
              <div class="container px-4 px-lg-5 mb-3 mt-3">\
                <img src="<?php echo e(URL::asset('/assets/img/NgekostAja_footer.png')); ?>" width="15%" />\
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ms-auto" style="width: 100%">
                    <form class="d-flex" style="width: 100%" action="/hompage/pemilik-kos">
                      <div class="input-group me-4" >
                        <input style="width: 100%" type="text" class="form-control" placeholder="Masukkan nama/ area/ alamat indekos" aria-label="Username" aria-describedby="basic-addon1" />
                      </div>
                    </form>
                    
                      
                    <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <h2><i class="bi bi-person-circle px-3" style="color: #ffcc00; float:left;"></i></h2>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                          <a class="dropdown-item" href="#"><?php echo e(auth()->user()->nama); ?></a>
                        </li>
                        <li>
                          <form action="/logout" method="POST">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="dropdown-item">Logout</button>
                          </form>
                        </li>
                      </ul>
                    </li>
                    <?php else: ?>
                    
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Header/Navbar -->
        
            <!-- ======= Jumbotron ======= -->
            <div class="intro intro-carousel swiper position-relative">
              <div class="swiper-wrapper">
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?php echo e(URL::asset('/assets/img/slide-1.jpg')); ?>)">
                  <div class="overlay overlay-a"></div>
                  <div class="intro-content display-table">
                    <div class="table-cell">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8">
                            <div class="intro-body">
                              <p class="intro-title-top">
                                Makassar, Sulawesi Selatan<br />
                                Biringkanaya
                              </p>
                              <h1 class="intro-title mb-4">
                                <span class="color-b">Kos </span> Bintang <br />
                                Dilangit Terang
                              </h1>
                              <p class="intro-subtitle intro-price">
                                <a href="#"><span class="price-a">Tipe Kos | Campuran</span></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?php echo e(URL::asset('/assets/img/slide-2.jpg)')); ?>">
                  <div class="overlay overlay-a"></div>
                  <div class="intro-content display-table">
                    <div class="table-cell">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8">
                            <div class="intro-body">
                              <p class="intro-title-top">
                                Gowa, Sulawesi Selatan<br />
                                Bontomarannu
                              </p>
                              <h1 class="intro-title mb-4"><span class="color-b">Kos </span> Nugraha <br /></h1>
                              <p class="intro-subtitle intro-price">
                                <a href="#"><span class="price-a">Tipe Kos | Putra</span></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(<?php echo e(URL::asset('/assets/img/slide-3.jpg')); ?>)">
                  <div class="overlay overlay-a"></div>
                  <div class="intro-content display-table">
                    <div class="table-cell">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8">
                            <div class="intro-body">
                              <p class="intro-title-top">
                                Makassar, Sulawesi Selatan<br />
                                Tamalanrea
                              </p>
                              <h1 class="intro-title mb-4"><span class="color-b">Kos </span> Bulan <br /></h1>
                              <p class="intro-subtitle intro-price">
                                <a href="#"><span class="price-a">Tipe Kos | Putri</span></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <!-- End Jumbotron -->
        
            <!-- ======= Daftar Kos Anda ======= -->
            <section id="kos_putra" class="section-property section-t8">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                      <div class="title-box">
                        <h2 class="title-a">Daftar Kos Anda</h2>
                      </div>
                    </div>
                  </div>
                </div>
        
                <div id="property-carousel" class="swiper">
                  <div class="swiper-wrapper">
                    
                    <?php $__empty_1 = true; $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                      <?php for($i = 0; $i < sizeof($data); $i++): ?>
                        <div class="carousel-item-b swiper-slide">
                          <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                              <img src="<?php echo e(URL::asset('/assets/img/property-6.jpg')); ?>" alt="" class="img-a img-fluid" />
                            </div>
                            <div class="card-overlay">
                              <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                  <h2 class="card-title-a">
                                    <a href="<?php echo e(url('/pemilik-kos/detail-kos/'. $data[$i]->Id_kos)); ?>">
                                      <?php echo e($data[$i]->Nama_indekos); ?>

                                    <br>
                                    <?php echo e($data[$i]->Kabupaten_kota); ?></a>
                                      
                                  </h2>
                                </div>
                                <div class="card-body-a">
                                    <button wire:click="edit()" class="link-a bi bi-chevron-right btn btn-outline-warning btn-sm" style="border-radius: 8px">Edit kos</button>
                                  
                                  
                                </div>
                                <div class="card-footer-a">
                                  <ul class="card-info d-flex justify-content-around text-center">
                                    
                                    <li>
                                      <h4 class="card-info-title">Tipe Kos</h4>
                                      <span>
                                          <?php echo e($data[$i]->Gender_kamar); ?>

                                    </span>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                        <?php endfor; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        kososng cok
                      <?php endif; ?>

                  </div>
                </div>
                <div class="propery-carousel-pagination carousel-pagination"></div>
                <!-- Button Tambah Kos -->
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button class="btn btn-warning mt-5 mb-3"  type="button" style="border-radius: 8px"><a href="/pendaftaran-indekos">Tambah kos</a></button>
                </div>
              </div>
            </section>
            <!-- End Of Daftar Kos Anda -->
        
            <!-- ======= Footer ======= -->
            <section class="section-footer" style="background-color: #151100">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-md-4">
                    <div class="widget-a">
                      <div class="w-header-a">
                        <a class="navbar-brand" href="#">
                          <img src="<?php echo e(URL::asset('/assets/img/NgekostAja_footer.png')); ?>" width="50%" />
                        </a>
                      </div>
                      <div class="w-body-a">
                        <p class="w-text-a color-text-a text-light">Dapatkan informasi indekos impianmu dengan merasakan pengalaman melihat indekos yang berbeda dengan harga yang terjangkau</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                      <div class="w-header-a">
                        <h3 class="w-title-a text-brand text-light fs-4">Fitur Kami</h3>
                      </div>
                      <div class="w-body-a">
                        <div class="w-body-a">
                          <ul class="list-unstyled">
                            <li class="item-list-a"><i class="bi bi-chevron-right"></i> <a class="text-light" href="#fitur">Virtual Room</a></li>
                            <li class="item-list-a"><i class="bi bi-chevron-right"></i> <a class="text-light" href="#fitur">Pembayaran Mudah</a></li>
                            <li class="item-list-a"><i class="bi bi-chevron-right"></i> <a class="text-light" href="#fitur">Harga Terjangkau</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-4 section-md-t3">
                    <div class="widget-a">
                      <div class="w-header-a">
                        <h3 class="w-title-a text-brand text-light fs-4">Tipe Kos</h3>
                      </div>
                      <div class="w-body-a">
                        <ul class="list-unstyled">
                          <li class="item-list-a"><i class="bi bi-chevron-right"></i> <a class="text-light" href="#kos_putra">Kos Putra</a></li>
                          <li class="item-list-a"><i class="bi bi-chevron-right"></i> <a class="text-light" href="#kos_putri">Kos Putri</a></li>
                          <li class="item-list-a"><i class="bi bi-chevron-right"></i> <a class="text-light" href="#kos_campuran">Kos Campuran</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <footer style="background-color: #151100">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <nav class="nav-footer">
                      <ul class="list-inline">
                        <p class="text-light">Kunjungi Media Sosial Kami!</p>
                      </ul>
                    </nav>
                    <div class="socials-a">
                      <ul class="list-inline">
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-facebook text-light" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-twitter text-light" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-instagram text-light" aria-hidden="true"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a href="#">
                            <i class="bi bi-linkedin text-light" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="copyright-footer">
                      <p class="copyright color-text-a text-light">
                        &copy; Copyright
                        <span class="color-a" style="color: #ffcc00">NgekostAja</span> All Rights Reserved.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
            <!-- End  Footer -->
        
            
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.pemilikkos_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/livewire/homepage_pemilikkost.blade.php ENDPATH**/ ?>