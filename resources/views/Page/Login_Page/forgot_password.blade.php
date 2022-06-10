@extends('Layout.loginlayout')

@section('main')
  <div class="container-sm text-center shadow" style="border-radius: 8px; margin-top: 2.2cm; width: 70%">
    <div class="row d-flex justify-content-center p-5">
      <div class="col-md-7 col-lg-5">
        <img src="{{URL::asset('/assets/img/forgot_password.png')}}" width="40%" alt="Lupa Password" />
      </div>
      <h2 class="mt-3" style="font-weight: bold; color: #ffcc00">Lupa Password?</h2>
      <p>Masukkan alamat email anda untuk membuat password baru</p>
      <div class="input-container d-flex flex-row mt-3 pb-3 ps-5 pe-5">
        <input type="email" placeholder="Alamat Email" class="input-field form-control my-2 p-2" />
      </div>
      <!-- Button Next and Back Login Page -->
      <div class="d-grid gap-2 col-6 mx-auto">
        <a href="check_email.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Selanjutnya</a>
        <a href="login.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Login</a>
      </div>
    </div>
  </div>
@endsection

