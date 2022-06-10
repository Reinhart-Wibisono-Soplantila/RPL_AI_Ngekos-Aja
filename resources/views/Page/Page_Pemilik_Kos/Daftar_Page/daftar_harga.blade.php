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
@endsection
	
