

<?php $__env->startSection('main'); ?>
	<div class="page-content">
		<div class="wizard-form">
			<div class="wizard-header">
				<h3 class="heading">Silakan Lengkapi Data Kos</h3>
				<p>Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.</p>
			</div>
			<form class="form-register" id="form-register" action="" method="post">
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
									<label for="Nama_indekos">Nama Kos*</label>
									<input type="text" placeholder="Masukkan Nama Kos (Contoh: Kos Permata Hijau)" class="form-control" id="Nama_indekos" name="Nama_indekos">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder form-holder-2">
									<label for="Deskripsi_indekos">Deskripsi Kos*</label>
									<textarea placeholder="Masukkan Deskripsi Menarik Tentang Kosmu (Contoh: Kos Permata Hijau merupakan kos yang mendukung gaya hidup yang ramah lingkungan dan tetap nyaman untuk ditinggali)" class="form-control" id="Deskripsi_indekos" name="Deskripsi_indekos"></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder form-holder-2">
									<label for="Tipe_kamar">Tipe Kamar</label>
									<input type="text" placeholder="Contoh: Tipe kamar A/VVIP/Executive" class="form-control" id="Tipe_kamar" name="Tipe_kamar">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder form-holder-2">
									<div class="form-row-radio">
										<div class="form-group-flex">
											<div class="form-radio">
												<label for="gender">Gender</label>
												<div class="form-flex">
													<input type="radio" name="gender" value="Pria" id="male" checked="checked" />
													<label for="male"><img src="<?php echo e(URL::asset('/assets/img/icon-male.png')); ?>" alt="Male"></label>
					
													<input type="radio" name="gender" value="Wanita" id="female" />
													<label for="female"><img src="<?php echo e(URL::asset('/assets/img/icon-female.png')); ?>" alt="Female"></label>

													<input type="radio" name="gender" value="Campuran" id="mix" />
													<label for="mix"><img src="<?php echo e(URL::asset('/assets/img/icon-mix.png')); ?>" alt="mix"></label>
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
									<textarea placeholder="Masukkan Peraturan Kos Anda" class="form-control" id="desc-rules" name="Peraturan"></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder form-holder-2">
									<label for="year">Kapan kos ini dibangun/terakhir direnovasi?</label>
									<input type="text" placeholder="Masukkan Tahun" class="form-control" id="year" name="Tanggal_dibangun">
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder form-holder-2">
									<label for="desc-notes1">Punya catatan tambahan? Silakan ketik disini (opsional)</label>
									<textarea placeholder="Masukkan Catatan Anda" class="form-control" id="desc-notes1" name="Catatan_tambahan"></textarea>
								</div>
							</div>
						</div>
					</section>
				</div>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.daftar_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pemilik_Kos/Daftar_Page/daftar_data_kos.blade.php ENDPATH**/ ?>