@extends('Layout.booking_layout') 

@section('main')
    <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Konfirmasi Penolakan Booking Dari Pemilik Kos</h3>
        <h5>Maaf, booking yang kamu ajukan telah ditolak oleh pemilik kos</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px;">
        <h4 style="font-weight: bold">Kos Nugraha</h4>
        <h3 class="badge" style="background-color: #ffa602">Campuran</h3>
        <div class="img-box-a">
          <img src="assets/img/property-7.jpg" alt="" class="img-a img-fluid" width="35%" />
        </div>

        <!-- Kolom -->
        <div class="kolom mt-3 ms-5 me-5 justify-content-evenly">
          <!-- Biodata Penyewa -->
            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">Penyewa:</div>
              <div class="col text-end">Handi Batara</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">Jenis Kelamin:</div>
              <div class="col text-end">Laki-laki</div>
            </div>

            <div class="row">
              <div class="col text-start fw-bold" style="font-weight: bold">No. Telepon</div>
              <div class="col text-end">081234567891</div>
            </div>
            <hr>

            <div class="row">
                <div class="col text-center fw-bold" style="color: red;">Mohon maaf, permintaan anda ditolak oleh pemilik kos dengan alasan berikut: </div>
            </div>

            <div class="row">
                <div class="col text-center fst-italic" >Permintaan ditolak dikarenakan kamar kos yang sudah penuh </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!-- Button Back To Home -->
  <div class="d-grid gap-2 col-6 mx-auto">
      <a href="homepage_pencarikost.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px;">Kembali Ke Beranda</a>
  </div>
@endsection

@push('time')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endpush
