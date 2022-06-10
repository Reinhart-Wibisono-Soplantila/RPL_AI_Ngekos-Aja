<div class="page-content">
    <div class="wizard-form">
        <div class="wizard-header">
            <h3 class="heading">Silakan Lengkapi Data Kos</h3>
            <p>Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.</p>
        </div>
        <form class="form-register" id="form-register" action="#" method="post" wire:submit.prevent="update" enctype="multipart/form-data">
            @csrf
            {{-- @forelse ($datas as $item) --}}
            <div id="form-total">
                <!-- SECTION 1 -->
                <h2>
                    
                </h2>
                <section>
                    @if ($currentStep==1)

                    <div class="inner">
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="Nama_indekos">Nama Kos*</label>
                                <input type="text" placeholder="Masukkan Nama Kos (Contoh: Kos Permata Hijau)" class="form-control" name="Nama_indekos" id="Nama_indekos" wire:model="Nama_indekos" value="{{old('Nama_indekos')}}">
                                <span class="text-danger">
                                    @error('Nama_indekos')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="desc">Deskripsi Kos*</label>
                                <textarea placeholder="Masukkan Deskripsi Menarik Tentang Kosmu (Contoh: Kos Permata Hijau merupakan kos yang mendukung gaya hidup yang ramah lingkungan dan tetap nyaman untuk ditinggali)" class="form-control" id="Deskripsi_indekos" wire:model="Deskripsi_indekos" value="{{old('Deskripsi_indekos')}}"></textarea>
                                <span class="text-danger">
                                    @error('Deskripsi_indekos')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="roomtype">Tipe Kamar*</label>
                                <input type="text" placeholder="Contoh: Tipe kamar A/VVIP/Executive" class="form-control" id="roomtype" name="roomtype" wire:model="Tipe_kamar" value="{{old('Tipe_kamar')}}">
                                <span class="text-danger">
                                    @error('Tipe_kamar')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <div class="form-row-radio">
                                    <div class="form-group-flex">
                                        <div class="form-radio">
                                            <label for="gender">Gender</label>
                                            <div class="form-flex" wire:model="Gender_kamar">
                                                <input type="radio" name="gender" value="Laki-laki" selected id="male"/>
                                                <label for="male"><img src="{{URL::asset('/assets/img/icon-male.png')}}" alt="Male"></label>
                
                                                <input type="radio" name="gender" value="Perempuan" id="female" />
                                                <label for="female"><img src="{{URL::asset('/assets/img/icon-female.png')}}"></label>

                                                <input type="radio" name="gender" value="Campuran" id="mix" />
                                                <label for="mix"><img src="{{URL::asset('/assets/img/icon-mix.png')}}" alt="mix"></label>
                                            </div>	
                                        </div>
                                        <span class="text-danger">
                                            @error('Gender_kamar')
                                                {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="title-checkbox">
                                <label for="rules">Peraturan Kamar</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Menjaga Kebersihan Tempat Umum" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox1">Menjaga Kebersihan Tempat Umum</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Membuat Laporan Ketika Membawa Teman Menginap" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox2">Membuat Laporan Ketika Membawa Teman Menginap</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Tidak Berisik Di Malam Hari" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox4">Tidak Berisik Di Malam Hari</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Mematuhi Aturan Jam Malam" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox5">Mematuhi Aturan Jam Malam</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Mematuhi Aturan Bertamu" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox6">Mematuhi Aturan Bertamu</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Tidak Membawa Peliharaan" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox7">Tidak Membawa Peliharaan</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Memarkir Kendaraan Dengan Baik" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox8">Memarkir Kendaraan Dengan Baik</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Membayar Biaya Sewa Tepat Waktu" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox9">Membayar Biaya Sewa Tepat Waktu</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Dilarang Merokok" wire:model="Peraturan">
                                <label class="form-check-label" for="inlineCheckbox10">Dilarang Merokok</label>
                            </div>
                        </div>
                        <span class="text-danger">
                            @error('Peraturan')
                                {{$message}}
                            @enderror
                        </span>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="desc-rules">Punya peraturan lain? Silakan ketik disini</label>
                                <textarea placeholder="Masukkan Peraturan Kos Anda" class="form-control" id="desc-rules" name="desc-rules" wire:model="Peraturan_lain" value="{{old('Peraturan_lain')}}"></textarea>
                                <span class="text-danger">
                                    @error('Peraturan_lain')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="year">Kapan kos ini dibangun/terakhir direnovasi?*</label>
                                <input type="text" placeholder="Masukkan Tahun" class="form-control" id="year" name="year" wire:model="Tanggal_dibangun" value="{{old('Tanggal_dibangun')}}">
                                <span class="text-danger">
                                    @error('Tanggal_dibangun')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        {{-- <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="desc-notes1">Punya catatan tambahan? Silakan ketik disini (opsional)</label>
                                <textarea placeholder="Masukkan Catatan Anda" class="form-control" id="desc-notes1" name="desc-notes1"></textarea>
                            </div>
                        </div> --}}
                    </div>
                    @endif
                </section>
                <!-- SECTION 2 -->
                <h2>
                    
                </h2>
                <section>
                    @if ($currentStep==2)
                    <div class="inner">
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="address">Masukkan Alamat Kos Anda</label>
                                <input type="text" placeholder="Masukkan Alamat Kos" class="form-control" id="address" name="address" wire:model="Alamat" value="{{old('Alamat')}}">
                                <span class="text-danger">
                                    @error('Kabupaten_kota')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="address_link">Masukkan Link Googe Maps Kos Anda </label>
                                <input type="url" placeholder="Masukkan Link" class="form-control" id="address_link" wire:model="address_link" value="{{old('address_link')}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="district">Kabupaten/Kota</label>
                                <input type="text" placeholder="Masukkan Kabupaten/Kota" class="form-control" id="district" name="district" wire:model="Kabupaten_kota" value="{{old('Kabupaten_kota')}}">
                                <span class="text-danger">
                                    @error('Kabupaten_kota')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="subdistrict">Kecamatan</label>
                                <input type="text" placeholder="Masukkan Kecamatan" class="form-control" id="subdistrict" name="subdistrict" wire:model="Kecamatan" value="{{old('Kecamatan')}}">
                                <span class="text-danger">
                                    @error('Kecamatan')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        {{-- <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="desc-notes2">Punya catatan tambahan? Silakan ketik disini (opsional)</label>
                                <textarea placeholder="Masukkan Catatan Anda" class="form-control" id="desc-notes2" name="desc-notes2"></textarea>
                            </div>
                        </div> --}}
                    </div>
                    @endif
                </section>
                <!-- SECTION 3 -->
                <h2>
                    
                </h2>
                <section>
                    @if ($currentStep==3)
                    <div class="container">
                        <h3>Foto Bangunan Tampak Depan</h3>
                        <p>Foto horizontal/landscape akan terlihat lebih bagus sebagai foto utama kos Anda.</p>
                        <div class="mb-3">
                            {{-- <input type="hidden" name="old_Foto_tampak_depan" value="{{$datas[0]['Foto_tampak_depan']}}" wire:model="old_Foto_tampak_depan"> --}}
                            @if ($datas[0]['Foto_tampak_depan'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_tampak_depan'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            <label for="Foto_tampak_depan" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_tampak_depan" name="Foto_tampak_depan" autofocus wire:model="Foto_tampak_depan">
                            <span class="text-danger">
                                @error('Foto_tampak_depan')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>	
                    <div class="container">
                        <h3>Foto Dalam Bangunan</h3>
                        <p>Perlihatkan suasana di dalam dengan cahaya terang agar terlihat lebih jelas.</p>
                        <div class="mb-3">
                            @if ($datas[0]['Foto_tampak_dalam'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_tampak_dalam'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            <label for="Foto_tampak_dalam" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_tampak_dalam" name="Foto_tampak_dalam" autofocus wire:model="Foto_tampak_dalam" >
                            <span class="text-danger">
                                @error('Foto_tampak_dalam')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="container">
                        <h3>Foto Bangunan Tampak Dari Jalan</h3>
                        <p>Lewat foto ini, tunjukkan lingkungan sekitar depan kos ke calon penyewa.</p>
                        <div class="mb-3">
                            @if ($datas[0]['Foto_dari_jalan'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_dari_jalan'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            {{-- <img class="img-preview img-fluid col-sm-4"> --}}
                            <label for="Foto_dari_jalan" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_dari_jalan" name="Foto_dari_jalan" autofocus wire:model="Foto_dari_jalan" >
                            <span class="text-danger">
                                @error('Foto_dari_jalan')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    @endif
                </section>
                <!-- SECTION 4 -->
                <h2>
                    
                </h2>
                <section>
                    @if ($currentStep==4)
                    <div class="container">
                        <h3>Foto Depan Kamar</h3>
                        <p>Foto bagian depan kamar dari pintu dengan cahaya terang dan jelas.</p>
                        <div class="mb-3">
                            @if ($datas[0]['Foto_depan_kamar'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_depan_kamar'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            <label for="Foto_depan_kamar" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_depan_kamar" name="Foto_depan_kamar" autofocus wire:model="Foto_depan_kamar">
                            <span class="text-danger">
                                @error('Foto_depan_kamar')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="container">
                        <h3>Foto Dalam Kamar</h3>
                        <p>Foto dari dalam kamar ke arah luar dengan cahaya terang dan jelas.</p>
                        <div class="mb-3">
                            @if ($datas[0]['Foto_tampak_dalam'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_dalam_kamar'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            <label for="Foto_dalam_kamar" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_dalam_kamar" name="Foto_dalam_kamar" autofocus wire:model="Foto_dalam_kamar">
                            <span class="text-danger">
                                @error('Foto_dalam_kamar')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="container">
                        <h3>Foto Kamar Mandi</h3>
                        <p>Tunjukkan kondisi kamar mandi yang akan digunakan oleh penyewa kos. (opsional)</p>
                        <div class="mb-3">
                            @if ($datas[0]['Foto_kamar_mandi'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_kamar_mandi'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            <label for="Foto_kamar_mandi" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_kamar_mandi" name="Foto_kamar_mandi" autofocus wire:model="Foto_kamar_mandi">
                            <span class="text-danger">
                                @error('Foto_kamar_mandi')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="container">
                        <h3>Foto Lainnya</h3>
                        <p>Anda bisa tambahkan foto fasilitas umum kos di sini. (opsional)</p>
                        <div class="mb-3">
                            @if ($datas[0]['Foto_lainnya'])
                                <img src="{{asset('storage/'. $datas[0]['Foto_lainnya'])}}" class="img-preview img-fluid" style="height: 200px">
                            @endif
                            <label for="Foto_lainnya" class="form-label"></label>
                            <input class="form-control" type="file"  id="Foto_lainnya" name="Foto_lainnya" autofocus wire:model="Foto_lainnya" >
                            <span class="text-danger">
                                @error('Foto_lainnya')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                    </div>
                    @endif
                </section>
                <!-- SECTION 5 -->
                <h2>

                </h2>
                <section>
                    @if ($currentStep==5)
                    <div class="inner">
                        <div class="form-row">
                            <div class="title-checkbox">
                                <label for="facility">Fasilitas Umum</label>
                                <span class="text-danger">
                                    @error('Fasilitas_umum')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx1" value="Dapur Umum" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx1">Dapur Umum</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx2" value="Air Bersih" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx2">Air Bersih</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx3" value="Jemuran" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx3">Jemuran</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx4" value="Alat Masak" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx4">Alat Masak</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx5" value="Ruang Tamu" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx5">Ruang Tamu</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx6" value="Kamar Mandi Umum WC Jongkok" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx6">Kamar Mandi Umum WC Jongkok</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx7" value="Kamar Mandi Umum WC Duduk" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx7">Kamar Mandi Umum WC Duduk</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx8" value="Kantin" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx8">Kantin</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx9" value="Musholla" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx9">Musholla</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx10" value="Parkir Mobil" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx10">Parkir Mobil</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxx11" value="Parkir Motor" wire:model="Fasilitas_umum">
                                <label class="form-check-label" for="inlineCheckboxx11">Parkir Motor</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="title-checkbox">
                                <label for="facility">Fasilitas Kamar</label>
                                <span class="text-danger">
                                    @error('Fasilitas_kamar')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy1" value="Sistem Pendingin (AC)" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy1">Sistem Pendingin (AC)</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy2" value="Kipas Angin" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy2">Kipas Angin</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy3" value="Kasur/Ranjang" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy3">Kasur/Ranjang</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy4" value="Lemari" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy4">Lemari</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy5" value="Ventilasi/Jendela" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy5">Ventilasi/Jendela</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy6" value="Kamar Mandi Dalam" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy6">Kamar Mandi Dalam</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy7" value="Kursi" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy7">Kursi</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy8" value="Meja Belajar" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy8">Meja Belajar</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxy9" value="Rak Sepatu" wire:model="Fasilitas_kamar">
                                <label class="form-check-label" for="inlineCheckboxy9">Rak Sepatu</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="title-checkbox">
                                <label for="facility">Fasilitas Kamar Mandi</label>
                                <span class="text-danger">
                                    @error('Fasilitas_kamar_mandi')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz1" value="Bak Mandi" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz1">Bak Mandi</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz2" value="Ember" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz2">Ember</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz3" value="Timba" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz3">Timba</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz4" value="Shower" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz4">Shower</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz5" value="Wastafel" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz5">Wastafel</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz6" value="Cermin" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz6">Cermin</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz7" value=">WC Duduk" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz7">WC Duduk</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="WC Jongkok" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckbox8">WC Jongkok</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckboxz9" value="Rak Alat Mandi" wire:model="Fasilitas_kamar_mandi">
                                <label class="form-check-label" for="inlineCheckboxz9">Rak Alat Mandi</label>
                            </div>
                        </div>
                        {{-- <div class="form-row">
                            <div class="title-checkbox">
                                <label for="facility">Parkir (Opsional)</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Parkir Mobil</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Parkir Motor</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">Lainnya</label>
                            </div>
                        </div> --}}
                    </div>
                    @endif
                </section>
                <!-- SECTION  6-->
                <h2>
                </h2>
                <section>
                    @if ($currentStep==6)
                    <div class="inner">
                        <div class="form-row">
                            <div class="form-holder">
                                <label for="length">Masukkan ukuran kamar kos anda!</label>
                                <input type="text" placeholder="Panjang (m)" class="form-control" id="Panjang_kamar" name="Panjang_kamar" wire:model="Panjang_kamar" value="{{old('Panjang_kamar')}}">
                                <span class="text-danger">
                                    @error('Panjang_kamar')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" placeholder="Lebar (m)" class="form-control" id="width" name="width" id="Lebar_kamar" name="Lebar_kamar" wire:model="Lebar_kamar" value="{{old('Lebar_kamar')}}">
                                <span class="text-danger">
                                    @error('Lebar_kamar')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="num_of_rooms">Berapa jumlah seluruh kamar?</label>
                                <input type="text" placeholder="Masukkan jumlah seluruh kamar" class="form-control" id="Jumlah_seluruh_kamar" name="Jumlah_seluruh_kamar" wire:model="Jumlah_seluruh_kamar" value="{{old('Jumlah_seluruh_kamar')}}">
                                <span class="text-danger">
                                    @error('Jumlah_seluruh_kamar')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="rooms_available">Berapa jumlah kamar yang tersedia?</label>
                                <input type="text" placeholder="Masukkan jumlah kamar yang tersedia" class="form-control" id="Jumlah_ketersediaan_kamar" name="Jumlah_ketersediaan_kamar" wire:model="Jumlah_ketersediaan_kamar" value="{{old('Jumlah_ketersediaan_kamar')}}">
                                <span class="text-danger">
                                    @error('Jumlah_ketersediaan_kamar')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    @endif
                </section>
                <!-- SECTION 7 -->
                <h2>
                </h2>
                <section>
                    @if ($currentStep==7)
                    <div class="inner">
                        {{-- <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="price">Harga per bulan</label>
                                <input type="text" placeholder="Rp" class="form-control" id="price" name="price" wire:model="Harga_sewa" value="{{old('Harga_sewa')}}">
                                <span class="text-danger">
                                    @error('Harga_sewa')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div> --}}
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="card-type">Jangka waktu minimum untuk bisa menyewa kamar kos Anda.</label>
                                    <select name="card-type" id="card-type" class="form-control" wire:model="Jangka_waktu_sewa">
                                        <option value="" disabled selected>Pilih Jangka Waktu Minimum Penyewaan Indekos</option>
                                        <option value="1 Tahun">Min. 1 Tahun</option>
                                        <option value="6 Bulan">Min. 6 Bulan</option>
                                        <option value="3 Bulan">Min. 3 Bulan</option>
                                        <option value="1 Bulan">Min. 1 Bulan</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('Jangka_waktu_sewa')
                                            {{$message}}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="subprice">Harga Sewa Selain Bulanan</label>
                                <label for="subprice">Harga Per Tahun</label>
                                <input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice" wire:model="Harga_sewa_pertahun" value="{{old('Harga_sewa_pertahun')}}">
                                <span class="text-danger">
                                    @error('Harga_sewa_pertahun')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="subprice">Harga Per 6 Bulan</label>
                                <input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice" wire:model="Harga_sewa_per6bulan" value="{{old('Harga_sewa_per6bulan')}}">
                                <span class="text-danger">
                                    @error('Harga_sewa_per6bulan')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="subprice">Harga Per 3 Bulan</label>
                                <input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice" wire:model="Harga_sewa_per3bulan" value="{{old('Harga_sewa_per3bulan')}}">
                                <span class="text-danger">
                                    @error('Harga_sewa_per3bulan')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="subprice">Harga Per 1 Bulan</label>
                                <input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice" wire:model="Harga_sewa_perbulan" value="{{old('Harga_sewa_perbulan')}}">
                                <span class="text-danger">
                                    @error('Harga_sewa_perbulan')
                                        {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder form-holder-2">
                                <label for="card-type">Terapkan Uang Muka?</label>
                                    <select name="card-type" id="card-type" class="form-control" wire:model="Uang_muka" value="{{old('Uang_muka')}}">
                                        <option value="" disabled selected>Pilih Jumlah Uang Muka dari Biaya Sewa Pertama</option>
                                        <option value="10%">10%</option>
                                        <option value="15%">15%</option>
                                        <option value="20%">20%</option>
                                        <option value="25%">25%</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('Uang_muka')
                                            {{$message}}
                                        @enderror
                                    </span>
                            </div>
                        </div>
                    </div>
                    @endif
                </section>
            </div>
            <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">
                @if ($currentStep==1)
                    <div></div>
                @endif
                @if ($currentStep==2||$currentStep==3||$currentStep==4||$currentStep==5||$currentStep==6||$currentStep==7)
                    <button type="button" class="btn btn-sm btn-secondary" wire:click="decreaseStep()">Back</button>
                @endif
                @if ($currentStep==1||$currentStep==2||$currentStep==3||$currentStep==4||$currentStep==5||$currentStep==6)
                    <button type="button" class="btn btn-sm btn-success" wire:click="increaseStep()">Next</button>
                @endif
                @if ($currentStep==7)
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                @endif
                
            </div>
            {{-- @empty --}}
                        
            {{-- @endforelse --}}
        </form>
    </div>
</div>

