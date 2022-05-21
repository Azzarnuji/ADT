<?=d($rental);?>
<?= $this->extend('template/default') ?>
<?= $this->section('content') ?>
<section class="hero-wrap hero-wrap-2 js-fullheight" <?php if ($id == "hiace") : ?> style="background-image: url(<?= base_url('assets/images/car/'.$rental['img']) ?>);" <?php else : ?> style="background-image: url(<?= base_url('assets/images/car/' . $id . '.jpg') ?>);" <?php endif; ?> data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><a href="<?=base_url('/rental');?>"> Rental Mobil <i class="ion-ios-arrow-forward"></i></a></span></p>
				<h1 class="mb-3 bread"><?=$rental['merk'];?></h1>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section ftco-car-details">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="car-details">
					<img src="<?= base_url('assets/images/car/'.$rental['img'])?>" class="img-fluid" alt="" srcset="">
					<?php if ($id == "hiace") : ?>
						<div class="row justify-content-center">
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh(1).jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 1" style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh(4).jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 2" style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh(3).jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 3" style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh(2).jpg'); ?>" class="img-fluid rounded mx-auto d-block" alt="Interior 4" style="max-width: 50%;"></div>
						</div>
					<?php endif; ?>
					<div class="text text-center">
						<span class="subheading"><?= $rental['pabrikan']; ?></span>
						<h2><?= strtoupper($rental['merk'] . " " . $rental['tahun']); ?></h2>
					</div>
					<div class="text">
						<h3>Deskripsi</h3>
						<div class="d-flex mb-3">
							<p><?= $rental['description']; ?></p>
							<!-- <span class="cat"></span> -->
						</div>
						<p class="price ">ALL IN: <span><?= $rental['hargaOne']; ?></span></p>
						<p class="price ">Lepas Kunci: <span><?= $rental['hargaTwo']; ?></span></p>
						<hr>
						<p class="cat">Term & Conditions</p>
						<p> - ALL IN : Unit, Driver, BBM, Tol, Parkir (No Valet)<br>
							- All prices are exclude PPN 10%<br>
							- Dalkot : Dalam Kota </p>
						<?php
						$text = "Halo Admin  ADTPremium Car" . PHP_EOL .
							"Merk : " . strtoupper($rental['pabrikan']) . PHP_EOL .
							"Unit : " . strtoupper($id . " " . $rental['tahun']) . PHP_EOL .
							"Apakah Ready?";
						$textEncode = urlencode($text);
						?>
						<p class="d-flex mb-0 d-block"><a href="https://api.whatsapp.com/send?phone=628118943333&text=<?= $textEncode; ?>" class="btn btn-primary py-2 mr-1">Pesan Sekarang</a></p>
					</div>
				</div>
			</div>
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
						<p>No.Rek : <span style="color: black;">8800 7990 59</span>  <br> A/N :<span style="color: black;"> Lendo Ritonga</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4>Bank Rakyat Indonesia(BRI)</h4>
						<img src="<?= base_url('assets/images/png/bri.png'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">0346 0100 1032 307</span>  <br> A/N :<span style="color: black;"> PT.ADTRANS RENTCAR Indonesia</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
					<h4>Bank Mandiri</h4>
						<img src="<?= base_url('assets/images/png/mandiri.png'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">167 0000 5370 91</span>  <br> A/N :<span style="color: black;"> ADE A G</span> </p>
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