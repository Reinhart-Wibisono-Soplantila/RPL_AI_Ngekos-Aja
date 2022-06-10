@extends('Layout.pemilikkos_layout')

@section('main')

        
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
                                <a href="#"><span class="price-a">Tipe Kos | Campuran</span></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{URL::asset('/assets/img/slide-2.jpg)')}}">
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
                <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{URL::asset('/assets/img/slide-3.jpg')}})">
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
                      <a href="{{url('/pencari-kos/list')}}">
                        Lihat Semua
                        <span class="bi bi-chevron-right"></span>
                      </a>
                    </div>
                  </div>
                </div>
        
                {{-- <div id="property-carousel" class="swiper">
                  <div class="swiper-wrapper">
                    @forelse ($datas as $data)
                      @for ($i = 0; $i < sizeof($data); $i++)
                        <div class="carousel-item-b swiper-slide">
                          <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                              <img src="{{URL::asset('/assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid" />
                            </div>
                            <div class="card-overlay">
                              <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                  <h2 class="card-title-a">
                                    <a href="{{url('/pemilik-kos/detail-kos/'. $data[$i]->Id_kos)}}">
                                      {{$data[$i]->Nama_indekos}}
                                    <br>
                                    {{$data[$i]->Kabupaten_kota}}</a>
                                      
                                  </h2>
                                </div>
                                <div class="card-body-a">
                                    
                                  <a href="{{url('/pendaftaran-indekos/edit/'. $data[$i]->Id_kos)}}" class="link-a">
                                    <span class="bi bi-chevron-right btn btn-outline-warning btn-sm" style="border-radius: 8px">Edit Kos</span>
                                  </a>
                                </div>
                                <div class="card-footer-a">
                                  <ul class="card-info d-flex justify-content-around text-center">
                                    
                                    <li>
                                      <h4 class="card-info-title">Tipe Kos</h4>
                                      <span>
                                          {{$data[$i]->Gender_kamar}}
                                    </span>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>  
                        @endfor
                      @empty
                        Data Masih Kosong
                      @endforelse

                  </div>
                </div> --}}
                {{-- <div class="propery-carousel-pagination carousel-pagination"></div>
                <!-- Button Tambah Kos -->
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button class="btn btn-warning mt-5 mb-3"  type="button" style="border-radius: 8px"><a href="/pendaftaran-indekos">Tambah kos</a></button>
                </div>
              </div>
            </section> --}}

                @forelse ($datas as $data)
                @for ($i = 0; $i < sizeof($data); $i++)
                <section class="property-grid grid">
                  <div class="container">
                    <div class="row">
                      <!-- Kos Namira -->
                      <div class="col-md-4">
                        <div class="card-box-a card-shadow">
                          <div class="img-box-a">
                            <img src="{{URL::asset('/assets/img/property-6.jpg')}}" alt="" class="img-a img-fluid" />
                          </div>
                          <div class="card-overlay">
                            <div class="card-overlay-a-content">
                              <div class="card-header-a">
                                <h2 class="card-title-a">
                                  <a href="{{url('/pemilik-kos/detail-kos/'. $data[$i]->Id_kos)}}">
                                    {{$data[$i]->Nama_indekos}}
                                  <br>
                                  {{$data[$i]->Kabupaten_kota}}</a>
                                </h2>
                              </div>
                              {{-- <div class="card-body-a">
                                <a href="{{url('/pendaftaran-indekos/edit/'. $data[$i]->Id_kos)}}" class="link-a">
                                  <span class="bi bi-chevron-right btn btn-outline-warning btn-sm" style="border-radius: 8px">Edit Kos</span>
                                </a>
                              </div> --}}
                              <div class="card-body-a">
                                <a href="{{url('/pemilik-kos/data-kos/'. $data[$i]->Id_kos)}}" class="link-a">
                                  <span class="bi bi-chevron-right btn btn-outline-warning btn-sm" style="border-radius: 8px">Edit Kos</span>
                                </a>
                              </div>
                              <div class="card-body-a">
                                <a href="{{url('/pemilik-kos/data-pemesanan/'. $data[$i]->Id_kos)}}" class="link-a">
                                  <span class="bi bi-chevron-right btn btn-outline-warning btn-sm" style="border-radius: 8px">Pemesanan</span>
                                </a>
                              </div>
                              <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around text-center">
                                  <li>
                                    <h4 class="card-info-title">Tipe Kos</h4>
                                    <span>
                                      {{$data[$i]->Gender_kamar}}
                                </span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                @endfor
                @empty
                  Data Masih Kosong
                @endforelse
                <!-- Button Tambah Kos -->
                <div class="d-grid gap-2 col-6 mx-auto">
                  <button class="btn btn-warning mt-5 mb-3" type="button" style="border-radius: 8px"><a href="/pendaftaran-indekos">Tambah kos</a></button>
                </div>
              </div>
            </section>
            <!-- End Of Daftar Kos Anda -->
        

        
            {{-- <div id="preloader"></div>
            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
    
@endsection
