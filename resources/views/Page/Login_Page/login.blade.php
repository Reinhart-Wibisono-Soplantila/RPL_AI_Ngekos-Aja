@extends('Layout.loginlayout')

@section('main')
<section class="Form my-4 mx-5 mt-5 pt-4">
    <div class="container">
      <div class="row shadow g-0">
        <div class="col-lg-5">
          <img src="{{URL::asset('/assets/img/room_login.jpg')}}" class="image img-fluid" alt="" />
        </div>
        <div class="col-lg-7 px-3 pt-5 my-5">
          @if (session()->has('LoginError'))
            <div class="error">
              {{session('LoginError')}}
            </div>
          @endif
          <h2 class="mt-3 fw-bolder" style="color: #ffcc00">Login</h2>
          <form method="POST" action="/login">
            @csrf
            {{-- @method("POST") --}}
            <div class="form-row mt-3">
              <div class="col-lg-7">
                <input type="email" name="email" placeholder="Alamat Email" class="input-field form-control my-2 p-2" />
              </div>
            </div>
            <div class="form-row pt-1">
              <div class="col-lg-7">
                <input type="password" name="password" placeholder="Password" class="input-field form-control my-2 p-2" />
                <p class="text-end"><a href="forgot_password.html" style="color: #ffcc00">Lupa Password?</a></p>
              </div>
            </div>
            <div class="form-row">
              <div class="col-lg-7">
                <button type="submit" class="btn-login btn btn-primary">Login</button>
                {{-- <a type="button" class="btn-login btn btn-primary">Login</a> --}}
                <p class="pt-4 text-center">Belum punya akun?<a href="/register"> Sign Up disini!</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection