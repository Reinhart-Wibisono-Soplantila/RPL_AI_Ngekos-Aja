

<?php $__env->startSection('main'); ?>
    <!-- Navbar-->
    
    
              
                
              
              
              
    
      <!-- End of Navbar -->>

    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single"><?php echo e($datas[0]->Nama_indekos); ?></h1>
                <span class="color-text-a"><?php echo e($datas[0]->Alamat); ?></span>
              </div>
            </div>

            <div class="col-md-12 col-lg-4">
              <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/pemilik-kos/homepage">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#">List Kos</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="#"><?php echo e($datas[0]->Nama_indekos); ?></a>
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End Intro Single-->

      <!-- ======= List Kos ======= -->
      <section class="property-single nav-arrow-b">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div id="property-single-carousel" class="swiper">
                <div class="swiper-wrapper">
                  <div class="carousel-item-b swiper-slide">
                    
                    <img class="img-fluid" style="height: 500px" src="<?php echo e(asset('storage/'. $datas[0]->Foto_tampak_depan)); ?>" alt="">
                  </div>
                  
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="<?php echo e(asset('storage/'. $datas[0]->Foto_dari_jalan)); ?>" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="<?php echo e(asset('storage/'. $datas[0]->Foto_depan_kamar)); ?>" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="<?php echo e(asset('storage/'. $datas[0]->Foto_dalam_kamar)); ?>" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="<?php echo e(asset('storage/'. $datas[0]->Foto_kamar_mandi)); ?>" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="<?php echo e(asset('storage/'. $datas[0]->Foto_lainnya)); ?>" alt="" />
                  </div>
                </div>
              </div>
              <div class="property-single-carousel-pagination carousel-pagination"></div>
            </div>
          </div>
          <br /><br />

          <div class="row">
            <div class="col-sm-12">
              <div class="row justify-content-between">
                <div class="col-md-5 col-lg-4">
                  <div class="property-price d-flex justify-content-center foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="bi bi-cash"></span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h5 class="title-c fs-1">3,5-4,8 jt/thn</h5>
                      </div>
                    </div>
                  </div>

                  <!-- Peraturan Kos -->
                  <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4">
                          <h3 class="title-d">Informasi Kos</h3>
                        </div>
                      </div>
                    </div>
                    <div class="summary-list">
                      <ul class="list">
                        <li class="d-flex justify-content-between">
                          <strong>Nama Indekos:</strong>
                          <span><?php echo e($datas[0]->Nama_indekos); ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Alamat:</strong>
                          <span><?php echo e($datas[0]->Kabupaten_kota); ?>, <?php echo e($datas[0]->Alamat); ?></span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Luas Kamar:</strong>
                          <span
                            ><?php echo e($datas[0]->Panjang_kamar); ?> x <?php echo e($datas[0]->Lebar_kamar); ?> m
                            <sup>2</sup>
                          </span>
                        </li>
                        <hr />
                        
                      </ul>
                    </div>
                  </div>
                  <div class="property-summary">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="title-box-d section-t4">
                          <h3 class="title-d">Peraturan Kos</h3>
                        </div>
                      </div>
                    </div>
                    <div class="summary-list">
                      <ul class="list">
                        <?php for($i = 0; $i < sizeof($data = json_decode($datas[0]->Peraturan)); $i++): ?>
                        <li class="d-flex justify-content-between">
                          <?php echo e($i+1); ?>. <?php echo e($data[$i]); ?>

                        </li>
                        <?php endfor; ?>

                        <hr />

                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Informasi Kos -->
                

                <!-- Fasilitas & Harga Kos -->
                <div class="col-md-7 col-lg-7 section-md-t3">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Deskripsi Indekos</h3>
                      </div>
                    </div>
                  </div>
                  <div class="property-description">
                    <p class="description color-text-a">
                        <?php echo e($datas[0]->Deskripsi_indekos); ?>  
                    </p>
                    
                  </div>
                  <div class="row section-t3">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Fasilitas</h3>
                      </div>
                    </div>
                  </div>
                  <div class="amenities-list color-text-a">
                    
                    <ul class="list-a no-margin">
                        <?php for($i = 0; $i < sizeof($data = json_decode($datas[0]->Fasilitas_umum)); $i++): ?>
                            <li><?php echo e($data[$i]); ?></li>
                        <?php endfor; ?>
                        <?php for($i = 0; $i < sizeof($data = json_decode($datas[0]->Fasilitas_kamar)); $i++): ?>
                            <li><?php echo e($data[$i]); ?></li>
                        <?php endfor; ?>
                        <?php for($i = 0; $i < sizeof($data = json_decode($datas[0]->Fasilitas_kamar_mandi)); $i++): ?>
                            <li><?php echo e($data[$i]); ?></li>
                        <?php endfor; ?>
                        
                      
                    </ul>
                  </div>
                  <br /><br />
                  <!-- Harga -->
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Harga</h3>
                    </div>
                  </div>
                  <div class="amenities-list color-text-a">
                    <ul class="list-a no-margin">
                      <li>Rp. <?php echo e($datas[0]->Harga_sewa_pertahun); ?>/Tahun (Tanpa kasur, lemari, dan meja belajar)</li>
                      
                      <li>Rp. <?php echo e($datas[0]->Harga_sewa_perbulan); ?>/bulan (Fasilitas Lengkap)</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Fasilitas & Harga Kos -->

            <div class="col-md-10 offset-md-1">
              <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Gambar 360</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-map-tab" data-bs-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map" aria-selected="false">Lokasi Maps</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-plans-tab" data-bs-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans" aria-selected="false">Ulasan</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active " id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                  
                  <div class="panorama" id='panorama' style="width:100%; height:460px;"></div>
                </div>
                <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                  <!-- ======= Testimonials Section ======= -->
                  <section class="section-testimonials section-t8 nav-arrow-a">
                    <div class="container">
                      <div id="testimonial-carousel" class="swiper">
                        <div class="swiper-wrapper">
                          <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <div class="testimonial-img">
                                    <img src="<?php echo e(URL::asset('assets/img/testimonial-1.jpg')); ?>" alt="" class="img-fluid" />
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <div class="testimonial-ico">
                                    <i class="bi bi-chat-quote-fill"></i>
                                  </div>
                                  <div class="testimonials-content">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium debitis hic ber quibusdam voluptatibus officia expedita corpori.</p>
                                  </div>
                                  <div class="testimonial-author-box">
                                    <img src="<?php echo e(URL::asset('assets/img/mini-testimonial-1.jpg')); ?>" alt="" class="testimonial-avatar" />
                                    <h5 class="testimonial-author">Albert & Erika</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End carousel item -->

                          <div class="carousel-item-a swiper-slide">
                            <div class="testimonials-box">
                              <div class="row">
                                <div class="col-sm-12 col-md-6">
                                  <div class="testimonial-img">
                                    <img src="<?php echo e(URL::asset('assets/img/testimonial-2.jpg')); ?>" alt="" class="img-fluid" />
                                  </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                  <div class="testimonial-ico">
                                    <i class="bi bi-chat-quote-fill"></i>
                                  </div>
                                  <div class="testimonials-content">
                                    <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium debitis hic ber quibusdam voluptatibus officia expedita corpori.</p>
                                  </div>
                                  <div class="testimonial-author-box">
                                    <img src="<?php echo e(URL::asset('assets/img/mini-testimonial-2.jpg')); ?>" alt="" class="testimonial-avatar" />
                                    <h5 class="testimonial-author">Pablo & Emma</h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- End carousel item -->
                        </div>
                      </div>
                      <div class="testimonial-carousel-pagination carousel-pagination"></div>
                    </div>
                  </section>
                  <!-- End Testimonials Section -->
                </div>
                <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                  <iframe
                    
                    src="<?php echo e($datas[0]->address_link); ?>"
                    width="100%"
                    height="460"
                    frameborder="0"
                    style="border: 0"
                    allowfullscreen
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mt-3">
              <a href="<?php echo e(url('/pencari-kos/booking/'.$datas[0]->Id_kos)); ?>" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Booking Kos Sekarang!</a>
              <a href="<?php echo e(url('https://api.whatsapp.com/send?phone='.$datas[0]->no_telepon.'&text=Halo,%20saya%20ingin%20memesan%20kos%20anda')); ?>" class="btn btn-outline-warning justify-content-center mt-3" type="button" style="border-radius: 8px">Chat Dengan Pemilik Kos</a>
              <div class="d-grid gap-2 d-md-block text-center">
                <a href="<?php echo e(url('/')); ?>" class="btn btn-outline-warning justify-content-center mt-5" type="button" style="border-radius: 8px">Kembali ke beranda</a>
              </div>
            </div>
            
    </main>
    <!-- End #main -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('addon-style'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('/assets/css/style_navbar.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startPush('addon-script'); ?>
  <script src="<?php echo e(URL::asset('/assets/js/three.min.js')); ?>"></script>
  <script src="<?php echo e(URL::asset('/assets/js/panolens.min.js')); ?>"></script>
  <script>
    var path = "<?php echo asset('storage/'. $datas[0]->Foto_tampak_dalam); ?>";
    // var path =  "<?php echo URL::asset('/assets/img/property-6.jpg')  ?>";
    
    var panoImg = document.querySelector('.panorama');
    
    const panorama = new PANOLENS.ImagePanorama(path);
    const viewer = new PANOLENS.Viewer({
      container: panoImg
    });
    viewer.add( panorama );
    
    // document.getElementById("panorama").innerHTML = panorama;
    
    
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('Layout.pencarikos_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pencari_Kos/detailpage_pencarikost.blade.php ENDPATH**/ ?>