   @extends('Layout.booking_layout') 

   @section('main')
    <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Pembayaran & Konfirmasi Pembayaran Oleh Pencari Kos</h3>
        <h5>Pembayaran & Konfirmasi Pembayaran Kos</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px;">
        <div class="container-sm pt-3 pb-3 mb-5" style="border-radius: 16px; background-color: #FFD633;">
            <h6 class="fw-bolder">Segera lakukan pembayaran dan konfirmasi sebelum:</h6>
            <div class="timer fs-3 fw-bold" id="timer" style="color: red;"></div>
                <div class="container-sm p-3 mt-2" style="border-radius: 8px; background-color: #fff4c8;">
                    <small>Jika anda ingin melakukan <span style="color: red; font-weight: bolder;">pembayaran melalui transfer antar bank</span>, 
                      anda dapat melakukan pembayaran melalui no.rek dibawah ini:</small><br>
                    <h7 class="fw-bold">Bank Negara Indonesia (BNI)</h7><br>
                    <h7 class="fw-bold">No. Rekening: 1222 3345 5667 444 (A.N Reinhart)</h7>
                </div>
        </div>
        <h4 style="font-weight: bold">{{$datas[0]->Nama_kos}}</h4>
        <h3 class="badge" style="background-color: #ffa602">{{$datas[0]->Jenis_kelamin_kamar}}</h3>
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
              <div class="col text-start fw-bold">No. Telepon</div>
              <div class="col text-end">{{$datas[0]->Nomor_telepon}}</div>
            </div>
            <hr>

            <!-- Informasi Kos -->
            <div class="row">
              <div class="col text-start fw-bold">Harga Per {{$datas[0]->Masa_pembayaran_kos}}:</div>
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

            {{-- Tampilkan Uang Muka --}}
            {{-- <div class="row">
              <div class="col text-start fw-bold">Uang Muka:</div>
              <div class="col text-end">{{$datas[0]->Uang_muka}}</div>
            </div> --}}

            <?php 
              // $var = explode('%', $datas[0]->Uang_muka);
              // $var_int = (int)$var[0]; 
              
              // $Total = '';
              // $Total_str = explode('.', $datas[0]->Total_harga);
              // $count = sizeof($Total_str);
              // for ($i = 0; $i < $count; $i++) {
              //     $Total = $Total . $Total_str[$i];
              // }

              // $price = (int)$Total;
              // $total = ($var_int * $price) / 100;

              // $total = strrev($total);
              // $total = str_split($total, 3);

              // $count = sizeof($total);
              // $result = $total[0];
              // for ($i = 1; $i < $count; $i++) {
              //     $result = $result . '.' . $total[$i];
              // }
              // $result = strrev($result);

            ?>
            {{-- <div class="row">
              <div class="col text-start fw-bold">Total harga setelah dipotong uang muka:</div>
              <div class="col text-end">Rp. {{$result}}</div>
            </div> --}}
            
            <br><br>
            <small class="fw-bolder">jika anda ingin melakukan <span style="color: red">pembayaran secara langsung ataupun ingin mengkonfirmasi pembayaran yang telah anda lakukan melalui transfer antar bank</span>, 
              segera konfirmasi ke pemilik kos sebelum waktu yang ditentukan!
            </small>
            <br><br>
            <!-- Button -->
            <div class="d-grid gap-2 col-6 mx-auto mt-2">
                <a href= "{{url('https://api.whatsapp.com/send?phone='.$datas[0]->no_telepon.'&text=Halo,%20saya%20ingin%20memesan%20kos%20anda')}}" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px;">Konfirmasi Pembayaran Ke Pemilik Kos</a>
                <a href="{{url('/pencari-kos/booking/penolakan/'. $datas[0]->Id_pemesanan)}}" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px;">Batalkan Pemesanan Kos</a>
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

  @push('time')
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- JS for countdown timer -->


  <script type="text/javascript">
    // Set the date we're counting down to     
    var dateTime = "<?php echo $datas[0]->Jam_pembayaran_selesai; ?>"  ;
    var countDownDate = new Date(dateTime).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
    
      // Time calculations for days, hours, minutes and seconds
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
      // Display the result in the element with id="demo"
      document.getElementById("timer").innerHTML = hours + ":" + minutes + ":" + seconds;
    
      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

@endpush
