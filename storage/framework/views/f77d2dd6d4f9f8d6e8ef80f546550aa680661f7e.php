

<?php $__env->startSection('main'); ?>
<div class="page-content">
	<div class="wizard-form">
		<div class="wizard-header">
			<h3 class="heading">Silakan Lengkapi Data Kos</h3>
			<p>Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.</p>
		</div>
		<form class="form-register" id="form-register" action="#" method="post">
			<div id="form-total">
				<!-- SECTION 1 -->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-1"></i></span>
					<span class="step-number">Step 1</span>
					<span class="step-text">Data Kos</span>
				</h2>
				<section>
					<div class="inner">
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="name">Nama Kos*</label>
								<input type="text" placeholder="Masukkan Nama Kos (Contoh: Kos Permata Hijau)" class="form-control" id="name" name="name">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="desc">Deskripsi Kos*</label>
								<textarea placeholder="Masukkan Deskripsi Menarik Tentang Kosmu (Contoh: Kos Permata Hijau merupakan kos yang mendukung gaya hidup yang ramah lingkungan dan tetap nyaman untuk ditinggali)" class="form-control" id="desc" name="desc"></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="roomtype">Tipe Kamar*</label>
								<input type="text" placeholder="Contoh: Tipe kamar A/VVIP/Executive" class="form-control" id="roomtype" name="roomtype">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<div class="form-row-radio">
									<div class="form-group-flex">
										<div class="form-radio">
											<label for="gender">Gender</label>
											<div class="form-flex">
												<input type="radio" name="gender" value="male" id="male" checked="checked" />
												<label for="male"><img src="assets/img/icon-male.png" alt="Male"></label>
				
												<input type="radio" name="gender" value="female" id="female" />
												<label for="female"><img src="assets/img/icon-female.png" alt="Female"></label>

												<input type="radio" name="gender" value="mix" id="mix" />
												<label for="mix"><img src="assets/img/icon-mix.png" alt="mix"></label>
											</div>	
										</div>
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
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Peraturan 1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Peraturan 2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Peraturan 3</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Peraturan 4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Peraturan 5</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Peraturan 6</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Peraturan 7</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Peraturan 8</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Peraturan 9</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="desc-rules">Punya peraturan lain? Silakan ketik disini</label>
								<textarea placeholder="Masukkan Peraturan Kos Anda" class="form-control" id="desc-rules" name="desc-rules"></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="year">Kapan kos ini dibangun/terakhir direnovasi?*</label>
								<input type="text" placeholder="Masukkan Tahun" class="form-control" id="year" name="year">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="desc-notes1">Punya catatan tambahan? Silakan ketik disini (opsional)</label>
								<textarea placeholder="Masukkan Catatan Anda" class="form-control" id="desc-notes1" name="desc-notes1"></textarea>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 2 -->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-2"></i></span>
					<span class="step-number">Step 2</span>
					<span class="step-text">Alamat Kos</span>
				</h2>
				<section>
					<div class="inner">
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="address">Masukkan Alamat Kos Anda</label>
								<input type="text" placeholder="Masukkan Alamat Kos" class="form-control" id="address" name="address">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="district">Kabupaten/Kota</label>
								<input type="text" placeholder="Masukkan Kabupaten/Kota" class="form-control" id="district" name="district">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="subdistrict">Kecamatan</label>
								<input type="text" placeholder="Masukkan Kecamatan" class="form-control" id="subdistrict" name="subdistrict">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="desc-notes2">Punya catatan tambahan? Silakan ketik disini (opsional)</label>
								<textarea placeholder="Masukkan Catatan Anda" class="form-control" id="desc-notes2" name="desc-notes2"></textarea>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 3 -->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-3"></i></span>
					<span class="step-number">Step 3</span>
					<span class="step-text">Foto Kos</span>
				</h2>
				<section>
					<div class="container">
						<h3>Foto Bangunan Tampak Depan</h3>
						<p>Foto horizontal/landscape akan terlihat lebih bagus sebagai foto utama kos Anda.</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
					 <div class="container">
						<h3>Foto Dalam Bangunan</h3>
						<p>Perlihatkan suasana di dalam dengan cahaya terang agar terlihat lebih jelas.</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
					 <div class="container">
						<h3>Foto Bangunan Tampak Dari Jalan</h3>
						<p>Lewat foto ini, tunjukkan lingkungan sekitar depan kos ke calon penyewa.</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
				</section>
				<!-- SECTION 4 -->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-4"></i></span>
					<span class="step-number">Step 4</span>
					<span class="step-text">Foto Kamar Kos</span>
				</h2>
				<section>
					<div class="container">
						<h3>Foto Depan Kamar</h3>
						<p>Foto bagian depan kamar dari pintu dengan cahaya terang dan jelas.</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
					 <div class="container">
						<h3>Foto Dalam Kamar</h3>
						<p>Foto dari dalam kamar ke arah luar dengan cahaya terang dan jelas.</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
					 <div class="container">
						<h3>Foto Kamar Mandi</h3>
						<p>Tunjukkan kondisi kamar mandi yang akan digunakan oleh penyewa kos. (opsional)</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
					 <div class="container">
						<h3>Foto Lainnya</h3>
						<p>Anda bisa tambahkan foto fasilitas umum kos di sini. (opsional)</p>
						<div class="wrapper">
						   <div class="image">
							  <img src="" alt="">
						   </div>
						   <div class="content">
							  <div class="icon">
								 <i class="fas fa-cloud-upload-alt"></i>
							  </div>
							  <div class="text">
								 No file chosen, yet!
							  </div>
						   </div>
						   <div id="cancel-btn">
							  <i class="fas fa-times"></i>
						   </div>
						   <div class="file-name">
							  File name here
						   </div>
						</div>
						<button onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>
						<input id="default-btn" type="file" hidden>
					 </div>
				</section>
				<!-- SECTION 5 -->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-5"></i></span>
					<span class="step-number">Step 5</span>
					<span class="step-text">Fasilitas Kos</span>
				</h2>
				<section>
					<div class="inner">
						<div class="form-row">
							<div class="title-checkbox">
								<label for="facility">Fasilitas Umum</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 3</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 5</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 6</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 7</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 8</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 9</label>
							</div>
						</div>
						<div class="form-row">
							<div class="title-checkbox">
								<label for="facility">Fasilitas Kamar</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 3</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 5</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 6</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 7</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 8</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 9</label>
							</div>
						</div>
						<div class="form-row">
							<div class="title-checkbox">
								<label for="facility">Fasilitas Kamar Mandi</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 1</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 2</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 3</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 4</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 5</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 6</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 7</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
								<label class="form-check-label" for="inlineCheckbox2">Fasilitas 8</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
								<label class="form-check-label" for="inlineCheckbox3">Fasilitas 9</label>
							</div>
						</div>
						<div class="form-row">
							<div class="title-checkbox">
								<label for="facility">Parkir (Opsional)</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 1</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 2</label>
							</div>
						</div>
						<div class="form-row">
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
								<label class="form-check-label" for="inlineCheckbox1">Fasilitas 3</label>
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION  6-->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-6"></i></span>
					<span class="step-number">Step 6</span>
					<span class="step-text">Ketersediaan Kamar</span>
				</h2>
				<section>
					<div class="inner">
						<div class="form-row">
							<div class="form-holder">
								<label for="length">Masukkan ukuran kamar kos anda!</label>
								<input type="text" placeholder="Panjang (m)" class="form-control" id="length" name="length">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<i class="fas fa-times"></i>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder">
								<input type="text" placeholder="Lebar (m)" class="form-control" id="width" name="width">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="num_of_rooms">Berapa jumlah seluruh kamar?</label>
								<input type="text" placeholder="Masukkan jumlah seluruh kamar" class="form-control" id="num_of_rooms" name="num_of_rooms">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="rooms_available">Berapa jumlah kamar yang tersedia?</label>
								<input type="text" placeholder="Masukkan jumlah kamar yang tersedia" class="form-control" id="rooms_available" name="rooms_available">
							</div>
						</div>
					</div>
				</section>
				<!-- SECTION 7 -->
				<h2>
					<span class="step-icon"><i class="fa-solid fa-7"></i></span>
					<span class="step-number">Step 7</span>
					<span class="step-text">Harga</span>
				</h2>
				<section>
					<div class="inner">
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="price">Harga per bulan</label>
								<input type="text" placeholder="Rp" class="form-control" id="price" name="price">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="card-type">Jangka waktu minimum untuk bisa menyewa kamar kos Anda.</label>
									<select name="card-type" id="card-type" class="form-control">
										<option value="" disabled selected>Pilih Jangka Waktu Minimum Penyewaan Indekos</option>
										<option value="Business Credit Cards">Min. 1 Tahun</option>
										<option value="Limited Purpose Cards">Min. 6 Bulan</option>
										<option value="Prepaid Cards">Min. 3 Bulan</option>
										<option value="Charge Cards">Min. 1 Bulan</option>
									</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="subprice">Harga Sewa Selain Bulanan</label>
								<label for="subprice">Harga Per Tahun</label>
								<input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="subprice">Harga Per 6 Bulan</label>
								<input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="subprice">Harga Per 3 Bulan</label>
								<input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="subprice">Harga Per 1 Bulan</label>
								<input type="text" placeholder="Rp" class="form-control" id="subprice" name="subprice">
							</div>
						</div>
						<div class="form-row">
							<div class="form-holder form-holder-2">
								<label for="card-type">Terapkan Uang Muka?</label>
									<select name="card-type" id="card-type" class="form-control">
										<option value="" disabled selected>Pilih Jumlah Uang Muka dari Biaya Sewa Pertama</option>
										<option value="Business Credit Cards">10%</option>
										<option value="Limited Purpose Cards">15%</option>
										<option value="Prepaid Cards">20%</option>
										<option value="Charge Cards">25%</option>
									</select>
							</div>
						</div>
					</div>
				</section>
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.daftar_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pemilik_Kos/Daftar_Page/form_informasi_kos.blade.php ENDPATH**/ ?>