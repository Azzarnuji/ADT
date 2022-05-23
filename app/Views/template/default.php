<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $dataMeta['title']; ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php foreach ($dataMeta['meta'] as $m) : ?>
    <meta name="<?= $m['name']; ?>" content="<?= $m['content']; ?>">
  <?php endforeach; ?>
  <?php foreach ($dataMeta['metaProperty'] as $mp) : ?>
    <meta property="<?= $mp['value']; ?>" content="<?= $mp['content']; ?>">
  <?php endforeach; ?>
  <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('/assets/favicon/apple-icon-57x57.png') ?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('/assets/favicon/apple-icon-60x60.png') ?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('/assets/favicon/apple-icon-72x72.png') ?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('/assets/favicon/apple-icon-76x76.png') ?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('/assets/favicon/apple-icon-114x114.png') ?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('/assets/favicon/apple-icon-120x120.png') ?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('/assets/favicon/apple-icon-144x144.png') ?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('/assets/favicon/apple-icon-152x152.png') ?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('/assets/favicon/apple-icon-180x180.png') ?>">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('/assets/favicon/android-icon-192x192.png') ?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('/assets/favicon/favicon-32x32.png') ?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('/assets/favicon/favicon-96x96.png') ?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('/assets/favicon/favicon-16x16.png') ?>">
  <link rel="manifest" href="<?= base_url('/assets/favicon/manifest.json') ?>">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= base_url('/assets/favicon/ms-icon-144x144.png') ?>">
  <meta name="theme-color" content="#ffffff">

  <link rel="canonical" href="<?= base_url(); ?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <!-- Preload File -->
  <link rel="preload" as="style" href="<?= base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/animate.css') ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/magnific-popup.css') ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/ionicons.min.css') ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="preload" as="style" href="<?= base_url('assets/css/user.css'); ?>">
  <link rel="preload" as="script" href="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/popper.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/bootstrap.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/jquery.easing.1.3.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/jquery.waypoints.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/jquery.stellar.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/owl.carousel.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/aos.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/jquery.animateNumber.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/scrollax.min.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/main.js') ?>">
  </link>
  <link rel="preload" as="script" href="<?= base_url('assets/js/user.js') ?>">
  </link>


  <!-- Uses File -->
  <link rel="stylesheet" href="<?= base_url('assets/css/open-iconic-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
  <!-- -->
  <link rel="stylesheet" href="<?= base_url('assets/css/ionicons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/user.css'); ?>">
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TravelAgency",
  "name": "Rental Mobil Premium dan Mewah",
  "image": "https://adtpremiumcar.com/assets/images/pt-logo-ad.webp",
  "@id": "",
  "url": "https://adtpremiumcar.com",
  "telephone": "+62 811-8943-333",
  "priceRange": "Rp700.000 - Rp3.000.000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Jatibening",
    "addressLocality": "Bekasi",
    "postalCode": "17426",
    "addressCountry": "ID"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -6.26478967734124,
    "longitude": 106.94848836788842
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  } 
}
</script>
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: midnightblue;">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">Car<span>Book</span></a> -->
      <a href="/"> <img src="<?= base_url('assets/images/pt-logo-ad.webp') ?>" class="navbar-brand" alt="" srcset="" height="70" width="60"></a>
      <button class="navbar-toggler" id="btnMenu" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active" id="home" onclick="setActive(this.id)"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item" id="rental" onclick="setActive(this.id)"><a href="<?= base_url('/rental'); ?>" class="nav-link">Daftar Harga</a></li>
          <li class="nav-item" id="tentang_kami" onclick="setActive(this.id)"><a href="#about" class="nav-link" onclick="redirecTo(this)">Tentang kami</a></li>
          <li class="nav-item" id="kontak_kami" onclick="setActive(this.id)"><a href="#kontak" class="nav-link" onclick="redirecTo(this)">Kontak Kami</a></li>
        </ul>
      </div>
    </div>
  </nav>





  <?= $this->renderSection('content') ?>





  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div style="position:fixed;right:20px;bottom:20px;z-index: 4;">
      <a href="https://api.whatsapp.com/send?phone=628118943333&text=Halo Admin ADT Premium Car%0D%0ASaya Mau Infomasi Rental Mobil">
        <button style="background:#32C03C;vertical-align:center;height:36px;border-radius:5px" class="btn btn-block btn-info">
          <img src="<?=base_url("assets/favicon/wa.png");?>" style="margin-right: 10px;" alt="Whatsapp">Whatsapp Kami</button></a>
    </div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2"><a href="#" class="logo"><img src="<?= base_url('assets/images/pt-logo-ad.webp'); ?>" class="rounded" alt="" srcset="" height="80" width="80" style="background-color: white;"></a></h2>
            <p>ADT Premium Car menjadi pilihan Persewaan Mobil di Jabodetabek, pilihan tepat bagi yang ingin Rental Mobil bagi warga kota Jabodetabek. Apa saja jenis perjalanan Anda apakah untuk bisnis atau wisata, hubungi kami untuk merasakan pengalaman pelayanan sewa mobil.</p>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Informasi</h2>
            <ul class="list-unstyled">
              <li><a href="#about" class="py-2 d-block">Tentang Kami</a></li>
              <li><a href="<?= base_url('/rental'); ?>" class="py-2 d-block">Daftar Harga</a></li>
              <li><a href="#kontak" class="py-2 d-block">Kontak Kami</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Mempunyai Pertanyaan?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text"><a href="https://maps.app.goo.gl/kz7XqEjCC6Qhd2oW8">RT.003/RW.003, Jatibening, Kec. Pd. Gede, Kota Bks, Jawa Barat 17412</a></span></li>
                <li><a href="https://api.whatsapp.com/send?phone=628118943333&text=Halo Admin ADT Premium Car%0D%0ASaya Mau Infomasi Rental Mobil"><span class="icon icon-phone"></span><span class="text">+62 811-8943-333</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">adtpremiumcar@gmail.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script>
    $('.img').lazyload({
      effect: "fadein"
    })
    document.addEventListener("DOMContentLoaded", function(event) {
      // Your code to run since DOM is loaded and ready
      $('#btnAtasMobil').on('click', function() {
        $('html, body').animate({
          scrollTop: $('#mobil').offset().top
        }, 2000)
      })
    });
  </script>
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.0.7/js/star-rating.js" type="text/javascript"></script>
  <script src="<?= base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.stellar.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/aos.js') ?>"></script>
  <script src="<?= base_url('assets/js/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/scrollax.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/main.js') ?>"></script>
  <script src="<?= base_url('assets/js/user.js') ?>"></script>
</body>

</html>