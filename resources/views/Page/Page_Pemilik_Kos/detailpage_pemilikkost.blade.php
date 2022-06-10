@extends('Layout.pemilikkos_layout')

@section('main')
    <!-- Navbar-->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top" style="background-color: #151100">
        <div class="container px-4 px-lg-5 mb-3 mt-3">\
          <img src="{{URL::asset('/assets/img/NgekostAja_footer.png')}}" width="15%" />\
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
              {{-- <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form> --}}
                {{-- <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" style="border-radius: 8px">
                  <i class="bi bi-search"></i>
                </button> --}}
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <h2><i class="bi bi-person-circle px-3" style="color: #ffcc00; float:left;"></i></h2>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="#">Profile</a>
                  </li>
                  <li>
                    <form action="/logout" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
              @else
              {{-- <li class="nav-item">
                <h2><i style="color: #ffcc00">Login</i></h2>
              </li> --}}
              @endauth
            </ul>
          </div>
        </div>
      </nav>
    <!-- End of Navbar -->>

    <main id="main">
      <!-- ======= Intro Single ======= -->
      <section class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h1 class="title-single">{{$datas[0]->Nama_indekos}}</h1>
                <span class="color-text-a">{{$datas[0]->Alamat}}</span>
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
                    <a href="#">{{$datas[0]->Nama_indekos}}</a>
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
                    {{-- <img src="{{URL::asset('assets/img/Foto Detail Kos/kos_namira1_detail.jpg')}}" alt="" /> --}}
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_tampak_depan)}}" alt="">
                  </div>
                  {{-- <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_tampak_dalam)}}" alt="" />
                  </div> --}}
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_dari_jalan)}}" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_depan_kamar)}}" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_dalam_kamar)}}" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_kamar_mandi)}}" alt="" />
                  </div>
                  <div class="carousel-item-b swiper-slide">
                    <img class="img-fluid" style="height: 500px" src="{{asset('storage/'. $datas[0]->Foto_lainnya)}}" alt="" />
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
                          <span>{{$datas[0]->Nama_indekos}}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Alamat:</strong>
                          <span>{{$datas[0]->Kabupaten_kota}}, {{$datas[0]->Alamat}}</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Luas Kamar:</strong>
                          <span
                            >{{$datas[0]->Panjang_kamar}} x {{$datas[0]->Lebar_kamar}} m
                            <sup>2</sup>
                          </span>
                        </li>
                        <hr />
                        {{-- <li class="d-flex justify-content-between">
                          <strong>Kafe Secret</strong>
                          <span>240 Meter</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Laundry Berlian</strong>
                          <span>400 Meter</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Raya Mart</strong>
                          <span>650 Meter</span>
                        </li>
                        <li class="d-flex justify-content-between">
                          <strong>Fakulas Teknik, UNHAS</strong>
                          <span>950 Meter</span>
                        </li> --}}
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
                        @for ($i = 0; $i < sizeof($data = json_decode($datas[0]->Peraturan)); $i++)
                        <li class="d-flex justify-content-between">
                          {{$i+1}}. {{$data[$i]}}
                        </li>
                        @endfor

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
                        {{$datas[0]->Deskripsi_indekos}}  
                    </p>
                    {{-- <p class="description color-text-a no-margin">
                      Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
                    </p> --}}
                  </div>
                  <div class="row section-t3">
                    <div class="col-sm-12">
                      <div class="title-box-d">
                        <h3 class="title-d">Fasilitas</h3>
                      </div>
                    </div>
                  </div>
                  <div class="amenities-list color-text-a">
                    {{-- {!!$data = json_decode($data_kos[0]->Fasilitas_umum)!!} --}}
                    <ul class="list-a no-margin">
                        @for ($i = 0; $i < sizeof($data = json_decode($datas[0]->Fasilitas_umum)); $i++)
                            <li>{{$data[$i]}}</li>
                        @endfor
                        @for ($i = 0; $i < sizeof($data = json_decode($datas[0]->Fasilitas_kamar)); $i++)
                            <li>{{$data[$i]}}</li>
                        @endfor
                        @for ($i = 0; $i < sizeof($data = json_decode($datas[0]->Fasilitas_kamar_mandi)); $i++)
                            <li>{{$data[$i]}}</li>
                        @endfor
                        
                      {{-- <li>Kamar mandi dalam</li>
                      <li>Kasur</li>
                      <li>Lemari</li>
                      <li>Meja belajar</li>
                      <li>Lahan Parkir Motor</li>
                      <li>Dapur Umum</li> --}}
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
                      <li>Rp. {{$datas[0]->Harga_sewa_pertahun}}/Tahun (Tanpa kasur, lemari, dan meja belajar)</li>
                      {{-- <li>Rp. {{$datas[0]->Harga_sewa_per6bulan}}/enam bulan (Fasilitas Lengkap)</li>
                      <li>Rp. {{$datas[0]->Harga_sewa_per3bulan}}/tiga bulan (Tanpa kasur, lemari, dan meja belajar)</li> --}}
                      <li>Rp. {{$datas[0]->Harga_sewa_perbulan}}/bulan (Fasilitas Lengkap)</li>
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
                <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                  {{-- <iframe src="{{URL::asset('assets/img/360.jpg')}}" width="100%" height="460" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> --}}
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
                                    <img src="{{URL::asset('assets/img/testimonial-1.jpg')}}" alt="" class="img-fluid" />
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
                                    <img src="{{URL::asset('assets/img/mini-testimonial-1.jpg')}}" alt="" class="testimonial-avatar" />
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
                                    <img src="{{URL::asset('assets/img/testimonial-2.jpg')}}" alt="" class="img-fluid" />
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
                                    <img src="{{URL::asset('assets/img/mini-testimonial-2.jpg')}}" alt="" class="testimonial-avatar" />
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
                    {{-- src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d496.65457246033213!2d119.50495991468047!3d-5.22548559999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee13b8cff51b1%3A0x6960b8a56489766c!2sKost%20Namira!5e0!3m2!1sen!2sid!4v1650430735857!5m2!1sen!2sid" --}}
                    src="{{$datas[0]->address_link}}"
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
              {{-- <a href="data_booking.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Booking Kos Sekarang!</a>
              <a href="#" class="btn btn-outline-warning justify-content-center mt-3" type="button" style="border-radius: 8px">Chat Dengan Pemilik Kos</a> --}}
              <div class="d-grid gap-2 d-md-block text-center">
                <a href="{{url('/pemilik-kos/homepage')}}" class="btn btn-outline-warning justify-content-center mt-5" type="button" style="border-radius: 8px">Kembali ke beranda</a>
              </div>
            </div>
    </main>
    <!-- End #main -->

@endsection

@push('addon-style')
    <link rel="stylesheet" href="{{URL::asset('/assets/css/style_navbar.css')}}" />
@endpush

@push('addon-script')
  <script src="{{URL::asset('/assets/js/three.min.js')}}"></script>
  <script src="{{URL::asset('/assets/js/panolens.min.js')}}"></script>
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
@endpush