<?= $this->extend('template/default') ?>
<?= $this->section('content') ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(assets/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?= base_url('/'); ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Rental Mobil <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Pilih Mobil Anda</h1>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt bg-light" id="mobil" style="background-color: black !important;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5" style="margin-top: 20px;">
				<span class="subheading">Highlight Car</span>
				<h2 class="mb-2" style="color: white;">Highlight Car</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-12">
				<img src="<?= base_url('/assets/images/car/' . $highlight['img']); ?>" class="img-fluid rounded mx-auto d-block" alt="<?=$highlight['merk'];?>" style="max-width: 95%;">
				<div class="text justify-content-center">

					<div class="row justify-content-center">
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh1.jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 1" style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh4.jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 2" style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh3.jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 3" style="max-width: 100%;"></div>
					</div>
					<h2 class="mb-0"><a href="#" style="color: white !important;"><?= $highlight['merk']; ?></a></h2>
					<div class="d-flex mb-3">
						<span class="cat"><?= $highlight['pabrikan']; ?></span>
						<p class="price ml-auto"><?= $highlight['hargaOne']; ?>0 <span>/ALL IN(DALKOT)</span></p>
					</div>
					<p class=" mb-0"><a href="<?= base_url('rental/hiace'); ?>" class="btn btn-primary btn-block">Booking</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<?php foreach ($daftarRental as $dr) : ?>
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end" style="background-image: url(<?= base_url('assets/images/car/' . $dr['img']); ?>)">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="#"><?= $dr['merk']; ?></a></h2>
							<div class="d-flex mb-3">
								<span class="cat"><?= $dr['pabrikan']; ?></span>
								<p class="price ml-auto"><?= $dr['hargaOne']; ?><span>/ALL IN</span></p>
							</div>
							<p class=" mb-0"><a href="<?= base_url('rental/' . $dr['idMobil']); ?>" class="btn btn-primary btn-block">Booking</a></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<hr>
		<div class="text-center">
			<?php
			$text = "Halo Admin ADTPremium Car" . PHP_EOL .
				"Saya Ingin Request Mobil" . PHP_EOL;

			$textEncode = urlencode($text);
			?>
			<h6>Tidak Menemukan Mobil Yang Diinginkan?</h6>
			<p class="lead"><a href="https://api.whatsapp.com/send?phone=628118943333&text=<?= $textEncode; ?>" class="btn btn-primary"> Chat Disini</a></p>
		</div>
	</div>
</section>
<section class="ftco-section ftco-animate" id="pembayaran">
	<div class="container">
		<div class="row justify-content-center mb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Info Pembayaran</span>
				<h2 class="mb-3">Pembayaran</h2>
			</div>
		</div>
		<div class="row d-flex mb-4 mt-5">
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4>Bank Central Asia(BCA)</h4>
						<img src="<?= base_url('assets/images/png/bca.png'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">8800 7990 59</span> <br> A/N :<span style="color: black;"> Lendo Ritonga</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4>Bank Rakyat Indonesia(BRI)</h4>
						<img src="<?= base_url('assets/images/png/bri.png'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">0346 0100 1032 307</span> <br> A/N :<span style="color: black;"> PT.ADTRANS RENTCAR Indonesia</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4>Bank Mandiri</h4>
						<img src="<?= base_url('assets/images/png/mandiri.png'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">167 0000 5370 91</span> <br> A/N :<span style="color: black;"> ADE A G</span> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>

<?= $this->endSection(); ?>