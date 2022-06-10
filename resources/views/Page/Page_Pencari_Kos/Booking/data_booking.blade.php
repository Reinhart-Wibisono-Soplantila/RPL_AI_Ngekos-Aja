@extends('Layout.booking_layout')

@section('main')
    <!-- Container -->
    <section class="container p-5 text-center">
        <div class="header text-center">
            <h3 class="fw-bold">Data Calon Penyewa Kos</h3>
            <h5>Masukkan Kelengkapan Informasi Anda Sebagai Calon Penyewa Kos</h5>
        </div>
    
        <div class="container-lg shadow mt-5 p-5" style="border-radius: 8px">
            <form action="/pencari-kos/booking" method="post">
                @csrf
            <!-- Jenis Kelamin -->
                <div class="mb-3 text-start">
                    <label for="exampleDataList" class="form-label fw-bolder">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" value="Laki-laki" type="radio" name="Jenis_kelamin" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                        </label>
                    </div>
        
                    <div class="form-check">
                        <input class="form-check-input" value="Perempuan" type="radio" name="Jenis_kelamin" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                        </label>
                    </div>
                    <span class="text-danger">
                        @error('Jenis_kelamin')
                            {{$message}}
                        @enderror
                    </span>

                    <!-- Nomor Telepon Orang Tua -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder">No. Telepon Orang Tua</label>
                        <input type="text" name="Nomor_telepon" value="{{old('Nomor_telepon')}}" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan no. telepon orang tua anda">
                        <span class="text-danger">
                            @error('Nomor_telepon')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    
                    <!-- Masa Pembayaran Kos -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleDataList" class="form-label fw-bolder">Masa Pembayaran Kos</label>
                        <select class="form-select" id="inputGroupSelect02" name="Masa_pembayaran_kos">
                            <option selected value="Harga_sewa_perbulan">Per bulan (Rp. {{$datas[0]->Harga_sewa_perbulan}})</option>
                            <option value="Harga_sewa_per3bulan">Per 3 bulan (Rp. {{$datas[0]->Harga_sewa_per3bulan}})</option>
                            <option value="Harga_sewa_per6bulan">Per 6 bulan (Rp. {{$datas[0]->Harga_sewa_per6bulan}})</option>
                            <option value="Harga_sewa_pertahun">Per tahun (Rp. {{$datas[0]->Harga_sewa_pertahun}})</option>
                        </select>
                        <span class="text-danger">
                            @error('Masa_pembayaran_kos')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
        
                    <!-- Tanggal Menetap -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder">Kapan anda mulai menetap di kos?</label>
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" value="{{old('Tanggal_menetap')}}" name="Tanggal_menetap" placeholder="bulan/hari/tahun">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="bi bi-calendar4-week"></i>
                                </span>
                            </span>
                            
                        </div>
                        <span class="text-danger">
                            @error('Tanggal_menetap')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <input type="hidden" name="Id_kos"value={{$datas[0]->Id_kos}}>
                    <input type="hidden" name="Nama_kos" value='{{$datas[0]->Nama_indekos}}'>
                    <input type="hidden" name="Jenis_kelamin_kamar" value={{$datas[0]->Gender_kamar}}>
                    <input type="hidden" name="UserId"value={{auth()->user()->UserId}}>
                    <input type="hidden" name="Email"value={{auth()->user()->email}}>
                    <input type="hidden" name="Nama"value={{auth()->user()->nama}}>
                    <!-- Tanggal Menetap -->
                    <div class="mt-3 mb-3 text-start">
                        <label for="exampleFormControlInput1" class="form-label fw-bolder">Berapa lama anda akan menetap di kos?</label>
                        <div class="input-group">
                            <div style="width: 50%">
                                <input type="text" aria-label="First name" value="{{old('Jumlah_lama_menetap')}}" name="Jumlah_lama_menetap" class="form-control" placeholder="Lama menetap kos dalam bentuk angka (contoh: 1, 2, dsb)">
                                <span class="text-danger">
                                    @error('Jumlah_lama_menetap')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <select class="form-select" aria-label="Default select example" name="Satuan_lama_menetap">
                                <option value="Bulan">Bulan</option>
                                <option value="Tahun">Tahun</option>
                                {{-- <option value="3">Bulan</option>
                                <option value="3">Tahun</option> --}}
                            </select>
                                
                        </div>
                    </div>
                    <button type="submit" class="d-grid gap-2 col-6 mx-auto btn btn-warning justify-content-center" style="border-radius: 8px">Selanjutnya</button>
                {{-- <div class="d-grid gap-2 col-6 mx-auto pt-3">
                    <a href="konfirmasibooking_olehpencarikos.html" class="btn btn-warning justify-content-center" type="button" style="border-radius: 8px">Selanjutnya</a>
                </div> --}}
            </form>
        </div>
    </section>
    
    <!-- Button Back To Home -->
    <div class="d-grid gap-2 col-6 mx-auto">
    <a href="{{url('/')}}" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
    </div>
@endsection


