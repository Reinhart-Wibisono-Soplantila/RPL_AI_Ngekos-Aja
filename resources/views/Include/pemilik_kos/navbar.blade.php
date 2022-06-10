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
                          <a class="dropdown-item" href="{{url('/pemilik-kos/profile/')}}">Profile</a>
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
            <!-- End Header/Navbar -->