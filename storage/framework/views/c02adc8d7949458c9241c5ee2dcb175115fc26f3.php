

<?php $__env->startSection('main'); ?>
<div class="page-content">
	<div class="wizard-form">
		<div class="wizard-header">
			<h3 class="heading">Silakan Lengkapi Data Kos</h3>
			<p>Yuk, bantu calon penyewa mengetahui kamar kos yang akan Anda sewakan.</p>
		</div>
		<form class="form-register" id="form-register" action="#" method="post">
			<div id="form-total">
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
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.daftar_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Reinhart Soplantila\Documents\Project\TI\laravell\ngekos-aja-2\resources\views/Page/Page_Pemilik_Kos/daftar_alamat_kos.blade.php ENDPATH**/ ?>