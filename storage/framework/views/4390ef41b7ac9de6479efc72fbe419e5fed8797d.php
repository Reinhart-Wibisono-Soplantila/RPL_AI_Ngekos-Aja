

<?php $__env->startSection('main'); ?>
<div class="page-content">
	<div class="wizard-form">
		<div class="wizard-header">
			<h3 class="heading">Silakan Lengkapi Data Kos</h3>
			<p>Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.</p>
		</div>
		<form class="form-register" id="form-register" action="#" method="post">
			<div id="form-total">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.daftar_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pemilik_Kos/Daftar_Page/daftar_gambar_kos.blade.php ENDPATH**/ ?>