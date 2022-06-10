@extends('Layout.daftar_layout')

@section('main')
<div class="page-content">
	<div class="wizard-form">
		<div class="wizard-header">
			<h3 class="heading">Silakan Lengkapi Data Kos</h3>
			<p>Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.</p>
		</div>
		<form class="form-register" id="form-register" action="#" method="post">
			<div id="form-total">
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
					 <script>
						const wrapper = document.querySelector(".wrapper");
						const fileName = document.querySelector(".file-name");
						const defaultBtn = document.querySelector("#default-btn");
						const customBtn = document.querySelector("#custom-btn");
						const cancelBtn = document.querySelector("#cancel-btn i");
						const img = document.querySelector("img");
						let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
						function defaultBtnActive(){
						  defaultBtn.click();
						}
						defaultBtn.addEventListener("change", function(){
						  const file = this.files[0];
						  if(file){
							const reader = new FileReader();
							reader.onload = function(){
							  const result = reader.result;
							  img.src = result;
							  wrapper.classList.add("active");
							}
							cancelBtn.addEventListener("click", function(){
							  img.src = "";
							  wrapper.classList.remove("active");
							})
							reader.readAsDataURL(file);
						  }
						  if(this.value){
							let valueStore = this.value.match(regExp);
							fileName.textContent = valueStore;
						  }
						});
					 </script>
				</section>
			</div>
		</form>
	</div>
</div>
@endsection
