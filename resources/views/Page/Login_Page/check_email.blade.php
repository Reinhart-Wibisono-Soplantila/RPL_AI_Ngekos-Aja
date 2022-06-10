@extends('Layout.loginlayout')

@section('main')
  <div class="container-sm text-center shadow" style="border-radius: 8px; margin-top: 2.2cm; width: 70%">
    <div class="row d-flex justify-content-center p-5">
      <div class="col-md-7 col-lg-5">
        <img src="{{URL::asset('/assets/img/check_email.png')}}" width="40%" alt="Lupa Password" />
      </div>
      <h2 class="mt-3" style="font-weight: bold; color: #ffcc00">Cek Email</h2>
      <p>Kami telah mengirimkan tautan untuk mereset password pada email anda, silakan cek email anda</p>
      >
      <!-- Button Next and Back Login Page -->
      <div class="d-grid gap-2 col-6 mx-auto pt-4">
        <a href="change_pass.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Selanjutnya</a>
        <small class="mb-3">belum menerima email? <a href="#" class="text-decoration-none" style="color: #ffcc00">kirim ulang email</a><br /><br /> </small>
        <a href="login.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Login</a>
      </div>
    </div>
  </div>
@endsection

