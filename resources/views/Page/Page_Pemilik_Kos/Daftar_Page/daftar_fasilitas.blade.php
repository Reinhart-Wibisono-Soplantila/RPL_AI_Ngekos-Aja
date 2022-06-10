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
				<!-- SECTION 1 -->
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
			</div>
		</form>
	</div>
</div>
@endsection