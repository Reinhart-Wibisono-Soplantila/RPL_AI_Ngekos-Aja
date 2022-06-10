@extends('Layout.pencarikos_layout')

@section('main')

  <!-- ======= Property Search Section ======= -->
  {{-- <div class="click-closed"></div> --}}
  <!--/ Form Search Star /-->
  {{-- <div class="box-collapse">
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
  </div> --}}
  <!-- End Property Search Section -->>


  <!-- ======= Jumbotron ======= -->
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{URL::asset('/assets/img/slide-1.jpg')}})">
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
                      <a href="#"><span class="price-a">Sewa | Rp. 450.000/bulan</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{URL::asset('assets/img/slide-2.jpg')}})">
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
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Kos </span> Nugraha <br />
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Sewa | Rp. 500.000/bulan</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{URL::asset('assets/img/slide-3.jpg')}})">
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
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Kos </span> Bulan <br />
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Sewa | Rp. 750.000/bulan</span></a>
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

  <main id="main">
      <!-- ======= Fitur Kami ======= -->
      <section id="fitur" class="section-services section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Fitur Kami</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <img src="{{URL::asset('assets/img/fitur1.png')}}" alt="360 Degree">
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Virtual Room</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">Dengan fitur ini, anda dapat melihat seluruh ruangan indekos anda tanpa harus keluar rumah. 
                    Anda dapat melihat seluruh ruangan dimana saja dan kapan saja.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <img src="{{URL::asset('assets/img/fitur2.png')}}" alt="Easy Payment">
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Pembayaran Mudah</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">Kami juga menawarkan fitur pembayaran digital melalui metode transfer 
                    sehingga anda tak perlu lagi keluar rumah untuk melakukan proses pembayaran.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-c foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <img src="{{URL::asset('assets/img/fitur3.png')}}" alt="Cheap">
                  </div>
                  <div class="card-title-c align-self-center">
                    <h2 class="title-c">Harga Terjangkau</h2>
                  </div>
                </div>
                <div class="card-body-c">
                  <p class="content-c">Kamu juga berksesmpatan untuk mendapatkan indekos impian kamu dengan harga yang terjangkau.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= Kos Putra ======= -->
      <section id="kos_putra" class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Kos Putra</h2>
                </div>
                <div class="title-link">
                  <a href="{{url('/pencari-kos/list')}}"
                    >Lihat Semua
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
              @forelse ($datas as $data)
                @for ($i = 0; $i < sizeof($data); $i++)
                  @if ($data[$i]->Gender_kamar=="Laki-laki")
                    <div class="carousel-item-b swiper-slide">
                      <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                          <img src="{{URL::asset('assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid" />
                        </div>
                        <div class="card-overlay">
                          <div class="card-overlay-a-content">
                            <div class="card-header-a">
                              <h2 class="card-title-a">
                                <a href="{{url('/pencari-kos/detail-kos/'. $data[$i]->Id_kos)}}"
                                  >{{$data[$i]->Nama_indekos}} <br />
                                  {{$data[$i]->Kabupaten_kota}}</a
                                >
                              </h2>
                            </div>
                            <div class="card-body-a">
                              <div class="price-box d-flex">
                                <span class="price-a">Sewa | {{$data[$i]->Harga_sewa_perbulan}}/Bulan</span>
                              </div>
                              <a href="#" class="link-a"
                                >Lihat Kos
                                <span class="bi bi-chevron-right"></span>
                              </a>
                            </div>
                            <div class="card-footer-a">
                              <ul class="card-info d-flex justify-content-around">
                                <li>
                                  <h4 class="card-info-title">Luas</h4>
                                  <span
                                    >{{$data[$i]->Panjang_kamar}}x{{$data[$i]->Lebar_kamar}} m
                                    <sup>2</sup>
                                  </span>
                                </li>
                                {{-- <li>
                                  <h4 class="card-info-title">Wi-fi</h4>
                                  <span>Ada</span>
                                </li>
                                <li>
                                  <h4 class="card-info-title">AC</h4>
                                  <span>Ada</span>
                                </li> --}}
                                <li>
                                  <h4 class="card-info-title">Tipe Kos</h4>
                                  <span>{{$data[$i]->Gender_kamar}}</span>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endif
                @endfor
                @empty
                Data Kosong
              @endforelse
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End List Promo Bulan Ini -->

      <!-- ======= Kos Putri ======= -->
      <section id="kos_putri" class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Kos Putri</h2>
                </div>
                <div class="title-link">
                  <a href="{{url('/pencari-kos/list')}}"
                    >Lihat Semua
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div id="property-carousel" class="swiper">
            <div class="swiper-wrapper">
              @forelse ($datas as $data)
              
                @for ($i = 0; $i < sizeof($data); $i++)
                
              
                    @if ($data[$i]->Gender_kamar=="Perempuan")
                      <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                          <div class="img-box-a">
                            <img src="{{URL::asset('assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid" />
                          </div>
                          <div class="card-overlay">
                            <div class="card-overlay-a-content">
                              <div class="card-header-a">
                                <h2 class="card-title-a">
                                  <a href="{{url('/pencari-kos/detail-kos/'. $data[$i]->Id_kos)}}"
                                    >{{$data[$i]->Nama_indekos}} <br />
                                    {{$data[$i]->Kabupaten_kota}}</a
                                  >
                                </h2>
                              </div>
                              <div class="card-body-a">
                                <div class="price-box d-flex">
                                  <span class="price-a">Sewa | {{$data[$i]->Harga_sewa_perbulan}}/Bulan</span>
                                </div>
                                <a href="#" class="link-a"
                                  >Lihat Kos
                                  <span class="bi bi-chevron-right"></span>
                                </a>
                              </div>
                              <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                  <li>
                                    <h4 class="card-info-title">Luas</h4>
                                    <span
                                      >{{$data[$i]->Panjang_kamar}}x{{$data[$i]->Lebar_kamar}} m
                                      <sup>2</sup>
                                    </span>
                                  </li>
                                  {{-- <li>
                                    <h4 class="card-info-title">Wi-fi</h4>
                                    <span>Ada</span>
                                  </li>
                                  <li>
                                    <h4 class="card-info-title">AC</h4>
                                    <span>Ada</span>
                                  </li> --}}
                                  <li>
                                    <h4 class="card-info-title">Tipe Kos</h4>
                                    <span>{{$data[$i]->Gender_kamar}}</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  @endif
                @endfor
                @empty
                Data Kosong
            @endforelse
            </div>
          </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
      <!-- End List Promo Bulan Ini -->


      <!-- ======= Kos Campuran ======= -->
      <section id="kos_campuran" class="section-property section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a">Kos Campuran</h2>
                </div>
                <div class="title-link">
                  <a href="{{url('/pencari-kos/list')}}"
                    >Lihat Semua
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
            {{-- {{$data[$i]->Nama_indekos}} --}}
              <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper"> 
                  @forelse ($datas as $data)
                  @for ($i = 0; $i < sizeof($data); $i++)
                  
                    @if ($data[$i]->Gender_kamar=="Campuran")
                  <div class="carousel-item-b swiper-slide">
                    <div class="card-box-a card-shadow">
                      <div class="img-box-a">
                        <img src="{{URL::asset('assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid" />
                      </div>
                      <div class="card-overlay">
                        <div class="card-overlay-a-content">
                          <div class="card-header-a">
                            <h2 class="card-title-a">
                              <a href="{{url('/pencari-kos/detail-kos/'. $data[$i]->Id_kos)}}">
                                {{$data[$i]->Nama_indekos}}
                                <br/>
                                {{$data[$i]->Kabupaten_kota}}
                              </a>
                            </h2>
                          </div>
                          <div class="card-body-a">
                            <div class="price-box d-flex">
                              <span class="price-a">sewa | {{$data[$i]->Harga_sewa_perbulan}}/bulan</span>
                            </div>
                            <a href="#" class="link-a"
                              >Lihat kos
                              <span class="bi bi-chevron-right"></span>
                            </a>
                          </div>
                          <div class="card-footer-a">
                            <ul class="card-info d-flex justify-content-around">
                              <li>
                                <h4 class="card-info-title">Luas</h4>
                                <span
                                  >{{$data[$i]->Panjang_kamar}}x{{$data[$i]->Lebar_kamar}} m
                                  <sup>2</sup>
                                </span>
                              </li>
                              {{-- <li>
                                <h4 class="card-info-title">Wi-fi</h4>
                                <span>Ada</span>
                              </li>
                              <li>
                                <h4 class="card-info-title">AC</h4>
                                <span>Ada</span>
                              </li> --}}
                              <li>
                                <h4 class="card-info-title">Tipe Kos</h4>
                                <span>{{$data[$i]->Gender_kamar}}</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                      @endif
                      @endfor
                    @empty
                    Data Kosong
                  @endforelse
                </div>
              </div>
          <div class="propery-carousel-pagination carousel-pagination"></div>
        </div>
      </section>
    <!-- End List Rekomendasi -->


@endsection

