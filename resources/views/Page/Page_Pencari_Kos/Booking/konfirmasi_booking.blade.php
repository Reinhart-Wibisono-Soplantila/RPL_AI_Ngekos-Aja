   @extends('Layout.booking_layout') 

   @section('main')
          <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Konfirmasi Booking Oleh Pencari Kos</h3>
        <h5>Konfirmasi Pemesanan Kos Ke Pemilik Kos</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px;">
        <h4 style="font-weight: bold">{{$datas[0]->Nama_kos}}</h4>
        <h3 class="badge" style="background-color: #2d2ade">{{$datas[0]->Jenis_kelamin_kamar}}</h3>
        <div class="img-box-a">
          <img src="{{URL::asset('assets/img/Foto Konfirmasi/kos_namira1.jpg')}}" alt="" class="img-a img-fluid" width="35%" />
        </div>

        <!-- Kolom -->
        <div class="kolom mt-3 ms-5 me-5 justify-content-evenly">
          <!-- Biodata Penyewa -->
            <div class="row">
              <div class="col text-start fw-bold">Penyewa:</div>
              <div class="col text-end">{{$datas[0]->Nama}}</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold">Jenis Kelamin:</div>
              <div class="col text-end">{{$datas[0]->Jenis_kelamin}}</div>
            </div>


            <div class="row">
              <div class="col text-start fw-bold">No. Telepon Orang tua</div>
              <div class="col text-end">{{$datas[0]->Nomor_telepon}}</div>
            </div>
            <hr>

            <!-- Informasi Kos -->
            <div class="row">
              <div class="col text-start fw-bold">Harga per {{$datas[0]->Masa_pembayaran_kos}}:</div>
              <div class="col text-end">Rp. {{$datas[0]->Harga_sewa}}</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold">Durasi Sewa:</div>
              <div class="col text-end">{{$datas[0]->Jumlah_lama_menetap}} {{$datas[0]->Satuan_lama_menetap}}</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold">Mulai Sewa:</div>
              <div class="col text-end">{{$datas[0]->Tanggal_menetap}}</div>
            </div>

            {{-- <div class="row">
              <div class="col text-start fw-bold">Sewa Berakhir:</div>
              <div class="col text-end">21 Maret 2023</div>
            </div> --}}
            <hr>

            <!-- Total Biaya Sewa Kos -->
            <div class="row fs-5 fw-bold">
              <div class="col text-start">Total</div>
              <div class="col text-end">Rp. {{$datas[0]->Total_harga}}</div>
            </div>

            <hr>

            <!-- Button -->
            <div class="d-grid gap-2 col-6 mx-auto mt-5">
              {{-- <form action="/pencari-kos/booking/menunggu" method="GET">
                <button type="submit" style="border-radius: 8px;" class="btn btn-warning justify-content-center">Konfirmasi Ke Pemilik Kos</button>
              </form> --}}
                <a href="{{url('/pencari-kos/booking/menunggu/'. $datas[0]->Id_pemesanan)}}" class="btn btn-warning justify-content-center" style="border-radius: 8px;">Konfirmasi Ke Pemilik Kos</a>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Button Back To Home -->
  <div class="d-grid gap-2 col-6 mx-auto">
      <a href="{{url('/')}}" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px;">Kembali Ke Beranda</a>
  </div>
   @endsection
 