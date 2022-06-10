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
			</div>
		</form>
	</div>
</div>
@endsection
	
