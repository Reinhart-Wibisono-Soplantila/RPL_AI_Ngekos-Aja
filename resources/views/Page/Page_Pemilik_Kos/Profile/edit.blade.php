@extends('Layout.profile')

@section('main')
    <!-- Container -->
    <section class="container p-5 text-center">
      <div class="header text-center">
        <h3 class="fw-bold">Edit Profil</h3>
        <h5>Melakukan Perubahan Informasi Anda</h5>
      </div>
      @forelse ($data as $item)
        <div class="container-lg shadow mt-5 p-5" style="border-radius: 8px">
          <img class="rounded-circle" src="assets/img/agent-5.jpg" alt="" width="150" height="150">
          {{-- <h4 class="fw-bolder pt-3">{{}}</h4> --}}
          <h6>Pencari Kos</h6>
          <form action="/pencari-kos/profile/edit" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mt-3 mb-3 text-start">
              <input type="hidden" name="oldImage" value="{{$item->gambar}}">
              <label for="formFile" class="form-label fw-bolder" name="oldImage">Perbarui Foto Profil</label>
              <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile" name="gambar">
              {{-- <p class="fw-bolder fst-italic" style="font-size: 12px; color: #ffcc00;">*Hanya gambar bertipe PNG, JPG atau GIF yang diizinkan</p> --}}
              @error('gambar')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3 text-start">
              <label for="exampleFormControlInput1" class="form-label fw-bolder">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="exampleFormControlInput1" name="nama" value="{{old('nama', $item->nama)}}">
              @error('nama')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3 text-start">
              <label for="exampleFormControlInput2" class="form-label fw-bolder">Alamat Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput2" name="email" placeholder="name@example.com" value="{{old('email', $item->email)}}">
              @error('email')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3 text-start">
              <label for="exampleFormControlInput3" class="form-label fw-bolder">Nomor Telepon</label>
              <input type="text" class="form-control @error('no_telepon') is-invalid @enderror"" id="exampleFormControlInput3" name="no_telepon" placeholder="name@example.com" value="{{old('no_telepon', $item->no_telepon)}}">
              @error('no_telepon')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3 text-start">
              {{-- <input type="hidden" value="{{$item->oldPassword}}"> --}}
              <label for="inputPassword" class="col-sm-2 col-form-label fw-bolder">Password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror"" id="inputPassword" name="password">
              @error('password')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3 text-start">
              <label for="inputPassword" class="col-sm-2 col-form-label fw-bolder">Konfirmasi Password</label>
              <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror"" id="inputPassword" name="password_confirmation">
              @error('confirmPassword')
                  <div class="invalid-feedback">
                      {{$message}}
                  </div>
              @enderror
            </div>

            <div class="d-grid gap-2 col-6 mx-auto pt-3">
              {{-- <a class="btn btn-warning justify-content-center" type="submit" style="border-radius: 8px">Simpan Perubahan</a> --}}
              <button type="submit" class="btn btn-warning justify-content-center" style="border-radius: 8px">Simpan Perubahan</button>
            </div>
          </form>
        </div>
        @empty
      @endforelse
    </section>

    <!-- Button Back To Home -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="homepage_pencarikost.html" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
    </div>
@endsection