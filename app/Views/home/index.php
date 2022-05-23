<?=d($reviews);?>
<?= $this->extend('template/default') ?>
<?= $this->section('content') ?>
<!-- END nav -->
<div class="hero-wrap ftco-degree-bg" style="background-image: url('assets/images/bg_1.webp');" data-stellar-background-ratio="0.5" id="user">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-start justify-content-center">
			<div class="col-lg-8 ftco-animate">
				<div class="text w-100 text-center mb-md-5 pb-md-5" style="margin-top: 40%;">
					<h1 class="mb-4">Rental Mobil Premium Cepat &amp; Mudah </h1>
					<p style="font-size: 18px;">"We see customers as invited guests to a party, and we are the hosts.
						It's our job to make the customer experience a little better"</p>
					<a href="#mobil" class="icon-wrap d-flex align-items-center mt-4 justify-content-center" id="btnAtasMobil">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="ion-ios-play"></span>
						</div>
						<div class="heading-title ml-5">
							<span>Lihat Mobil</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-12	featured-top">
				<div class="row no-gutters">
					<div class="col-md-12 d-flex align-items-center">
						<div class="services-wrap rounded w-100">
							<h3 class="heading-section mb-4 text-center">ADT Premium Car</h3>
							<div class="row d-flex mb-4">
								<div class="col-md-12 d-flex align-self-stretch ftco-animate">
									<div class="services w-100 text-center">
										<div class="text w-100">
											<p><span class="font-weight-bold">ADT Premium Car</span> Merupakan Penyedia Jasa Yang Bergerak Di Bidang Pelayanan Rental Mobil Premium Di Jabodetabek Dan Juga Melayani Antar Jemput Ke Tempat Wisata Di Jabodetabek Dan Sekitarnya.</p>
											<div class="row d-flex mb-4">
												<div class="col-md-6 d-flex align-self-stretch ftco-animate">
													<div class="services w-100 text-center">
														<div class="text w-100">
															<img src="assets/images/rent.png" class="rounded-circle" alt="" height="70" width="70">
															<h3 class="heading mb-2 mt-1">Rental Mobil</h3>
														</div>
													</div>
												</div>
												<div class="col-md-6 d-flex align-self-stretch ftco-animate">
													<div class="services w-100 text-center">
														<div class="text w-100">
															<img src="img/plane.png" class="rounded-circle" alt="" height="60" width="60">
															<h3 class="heading mb-2 mt-3">Paket Wisata</h3>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row d-flex mb-4">
								<div class="col-md-6 d-flex align-self-stretch ftco-animate">
									<div class="services w-100 text-center">
										<div class="text w-100">
											<h4>Office: </h4>
											<p>RT.003/RW.003, Jatibening, Kec. Pd. Gede, Kota Bks, Jawa Barat 17412</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 d-flex align-self-stretch ftco-animate">
									<div class="services w-100 text-center">
										<div class="text w-100">
											<h4>Hotline: </h4>
											<p><a href="https://api.whatsapp.com/send?phone=628118943333&text=Halo Admin ADT Premium Car%0D%0ASaya Mau Infomasi Rental Mobil"></a> +62 811-8943-333 </p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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
				<img src="<?= base_url('/assets/images/car/'.$highlight['img']); ?>" class="img-fluid rounded mx-auto d-block" alt="Hiace Premio Luxury" style="max-width: 100%;">
				<div class="text justify-content-center">
					<div class="row justify-content-center">
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/hiace-in-1.webp'); ?>" class="img-fluid rounded mx-auto d-block" alt="..." style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/hiace-in-2.webp'); ?>" class="img-fluid rounded mx-auto d-block" alt="..." style="max-width: 100%;"></div>
						<div class="col-md-4 mt-1"><img src="<?= base_url('/img/inh3.webp'); ?>" class="img-fluid rounded mx-auto d-block" alt="..." style="max-width: 100%;"></div>
					</div>
					<h2 class="mb-0"><a href="#" style="color: white !important;">Hiace Premio Luxury</a></h2>
					<div class="d-flex mb-3">
						<span class="cat">Toyota</span>
						<p class="price ml-auto">RP2.500.000 <span>/ALL IN (Dalkot)</span></p>
					</div>
					<p class=" mb-0"><a href="<?= base_url('rental/hiace'); ?>" class="btn btn-primary btn-block">Booking</a></p>
				</div>

				<!-- <div class="col-md-12">
					<div class="d-flex justify-content-center mt-4">
						<a href="<?= base_url('/rental'); ?>" class="btn btn-lg btn-primary align-self-center">Lihat Mobil Lainnya</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt bg-light" id="mobil">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5 mt-5">
				<span class="subheading">Apa Yang Kami Tawarkan</span>
				<h2 class="mb-2">Rental Mobil Premium</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" style="
					background-color: white;
					padding-top: 20px;
					padding-bottom: 30px;
					border-radius: 10px;
				">
				<div class="carousel-car owl-carousel">
					<?php foreach($daftarRental as $dr):?>
					<div class="item">
						<div class="car-wrap rounded ftco-animate">
							<div class="img rounded d-flex align-items-end" style="background-image: url(<?= base_url('/assets/images/car/'.$dr['img']); ?>)">
							</div>
							<div class="text">
								<h2 class="mb-0"><a href="#"><?=$dr['merk'];?></a></h2>
								<div class="d-flex mb-3">
									<span class="cat"><?=$dr['pabrikan'];?></span>
									<p class="price ml-auto"><?=$dr['hargaOne'];?> <span>/ALL IN</span></p>
								</div>
								<p class=" mb-0"><a href="<?= base_url('rental/'.$dr['idMobil']); ?>" class="btn btn-primary btn-block">Booking</a></p>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>
				<div class="col-md-12">
					<div class="d-flex justify-content-center mt-4">

						<a href="<?= base_url('/rental'); ?>" class="btn btn-lg btn-primary align-self-center">Lihat Mobil Lainnya</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" style="background-color: black; margin-bottom: 20px;">
	<div class="container">
		<div class="row justify-content-center mb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Kenapa Kami?</span>
				<h2 class="mb-3" style="color: white;">Kenapa Harus ADT Premium Car</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="services services-2 w-100 text-center">
					<div class="d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/images/png/1.png'); ?>" alt="Proses Cepat"></div>
					<div class="text w-100">
						<h3 class="heading mb-2" style="color: white;">Proses Cepat</h3>
						<p>Layanan booking rental mobil sangat mudah cepat dan harga murah.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services services-2 w-100 text-center">
					<div class="d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/images/png/2.png'); ?>" alt="Berkualitas"></div>
					<div class="text w-100">
						<h3 class="heading mb-2" style="color: white;">Berkualitas</h3>
						<p>Mobil yang terawat dan berkualitas perjalanan dijamin nyaman.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services services-2 w-100 text-center">
					<div class="icon d-flex align-items-center justify-content-center"><img src="<?= base_url('assets/images/png/3.png'); ?>" alt="Terpercaya"></div>
					<div class="text w-100">
						<h3 class="heading mb-2" style="color: white;">Terpercaya</h3>
						<p>ADTrans sudah di percaya bertahun-tahun di dunia rental mobil.​</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-about" id="about">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-6">
				<img src="assets/images/pt-logo-ad.webp" alt="" class="img-fluid">

			</div>
			<div class="col-md-6 wrap-about ftco-animate">
				<div class="heading-section heading-section-white pl-md-5">
					<span class="subheading">Tentang Kami</span>
					<h2 class="mb-4">Selamat Datang Di "ADT Premium Car"</h2>

					<p>ADT Premium Car adalah Penyedia jasa yang bergerak di bidang pelayanan Sewa / Rental Mobil di Jabodetabek dan juga Melayani Antar Jemput ke Tempat Wisata di Jabodetabek dan sekitar. Kami Menyewakan <span class="font-weight-bold">Mobil Premium</span> Seperti Alphard, Camry, BMW, CRV, Royal Crown, Fortuner, Pajero Sport, <br> Namun tetap menyediakan mobil yang pada umumnya seperti Xenia, Avanza, Innova, Isuzu Elf, Hi-Ace, APV, Ertiga, dan jenis lain yang tidak masuk dalam list tetapi dapat Anda pesan.
					</p>
					<p>ADT Premium Car menjadi pilihan Persewaan Mobil di Jabodetabek, pilihan tepat bagi yang ingin Rental Mobil bagi warga kota Jabodetabek. Apa saja jenis perjalanan Anda apakah untuk bisnis atau wisata, hubungi kami untuk merasakan pengalaman pelayanan sewa mobil.</p>
					<p><a href="<?=base_url("rental");?>" class="btn btn-primary py-3 px-4">Cari Mobil</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-animate" id="kontak" style="background-color: black; margin-top: 20px;">
	<div class="container">
		<div class="row justify-content-center mb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Kontak Kami</span>
				<h2 class="mb-3" style="color: white;">Kontak Kami</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 d-flex align-items-center justify-content-center ftco-animate">
				<img src="<?= base_url('assets/images/pt-logo-ad.webp'); ?>" class="img-fluid" alt="DRIS" style="width: 30%;">
			</div>
		</div>
		<div class="row d-flex mb-4 mt-5">
			<div class="col-md-6 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4 style="color: white;">Office: </h4>
						<p>RT.003/RW.003, Jatibening, Kec. Pd. Gede, Kota Bks, Jawa Barat 17412</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4 style="color: white;">Hotline: </h4>
						<p>+62 811-8943-333</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-animate" id="reviews">
	<div class="container">
		<div class="row justify-content-center mb-2">
			<div class="col-md-7 text-center heading-section ftco-animate">
				<span class="subheading">Reviews</span>
				<h2 class="mb-3">Apa kata Mereka</h2>
			</div>
		</div>
		<?php foreach ($reviews as $rv):?>
			<div class="row d-flex mb-4 mt-5 ftco-animate">
				<div class="col-md-6 d-flex justify-content-start">
					<div class="row">
						<div class="col-md-2">
							<img src="<?=$rv['thumbnail'];?>" alt="">
						</div>
					</div>
					<div class="col-md-6 justify-content-center">
						<h5><?=$rv['name'];?></h5>
						<div class="star-ratings-css justify-content-start" title=".<?=$rv['rating']*200;?>"></div>
						
					</div>
				</div>
			</div>
			<div class="row d-flex justify-content-start ftco-animate">
				<div class="col-md-12 justify-content-center">
					<p class=""><?=$rv['snippets'];?></p>
				</div>
			</div>
		<?php endforeach;?>
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
						<img src="<?= base_url('assets/images/png/bca.webp'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">8800 7990 59</span>  <br> A/N :<span style="color: black;"> Lendo Ritonga</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
						<h4>Bank Rakyat Indonesia(BRI)</h4>
						<img src="<?= base_url('assets/images/png/bri.webp'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">0346 0100 1032 307</span>  <br> A/N :<span style="color: black;"> PT.ADTRANS RENTCAR Indonesia</span> </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="services w-100 text-center">
					<div class="text w-100">
					<h4>Bank Mandiri</h4>
						<img src="<?= base_url('assets/images/png/mandiri.webp'); ?>" alt="bca" style="width: 70px; height: 70px;">
						<p>No.Rek : <span style="color: black;">167 0000 5370 91</span>  <br> A/N :<span style="color: black;"> ADE A G</span> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		$('<img/>').attr('src', 'assets/images/bg_1.webp').on('load', function() {
			$(this).remove(); // prevent memory leaks as @benweet suggested
			$('#user').css('background-image', 'url(assets/images/bg_1.webp)');
		});
		// Your code to run since DOM is loaded and ready
	});
</script>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
		<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
		<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
	</svg></div>
<?= $this->endSection() ?>