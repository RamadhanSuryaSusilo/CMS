<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title><?= $judul;?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	<!-- Favicons -->
	<link href="<?= base_url('assets/front/'); ?>assets/img/logo_smk.png" rel="icon">
	<link href="<?= base_url('assets/front/'); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
	<header id="header" class="header d-flex align-items-center ">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
			<i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
			<i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
			<nav id="navbar" class="navbar">
				<ul>
					<li><a href="<?= base_url('') ?>" class="active">Home</a></li>
					<li class="dropdown"><a href="#"><span>kategori</span> <i
								class="bi bi-chevron-down dropdown-indicator"></i></a>
						<ul>
							<?php foreach ($kategori as $kate){ ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori']?></a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li><a href="<?= base_url('Home/galery/') ?>">galery</a></li>
					<li><a href="<?= base_url('home/fitbek/') ?>">Saran</a></li>
				</ul>
			</nav>
			<a href="index.html" class="logo d-flex align-items-center">
				<h1><?= $konfig->judul_website; ?><span>.</span></h1>
			</a>
		</div>
	</header>
	<main id="main">
		<div class="breadcrumbs d-flex align-items-center bg-dark text-white mb-12">
		</div>
<!-- 		
		<section id="alt-services" class="alt-services">
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<img class="col-lg-9 img-bg aos-init aos-animate" src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>"> <br>
					<div class="col-lg-9 d-flex flex-column justify-content-center">
						<h3><?= $konten->judul; ?></h3>
						<p><?= $konten->keterangan; ?></p>
						<div data-aos="fade-up" data-aos-delay="100">
							<i class="bi bi-person flex-shrink-0"> <?= $konten->nama; ?></i>
						</div>
						<div data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-brightness-high flex-shrink-0"> <?= $konten->nama_kategori; ?></i>
						</div> <br>
						<a class="btn btn-dark col-lg-3" href="<?= base_url('') ?>">Kembali...</a>
					</div>
		</section> -->

		<!-- <section id="alt-services" class="alt-services">
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<div class=" row justify-content-around gy-4">
					<img class="col-lg-6 img-bg aos-init aos-animate"
						src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="">
					<div class="col-lg-5 d-flex flex-column justify-content-center">
						<h3><?= $konten->judul; ?></h3>
						<p><?= $konten->keterangan; ?></p>
						<div data-aos="fade-up" data-aos-delay="100">
							<i class="bi bi-person flex-shrink-0"> <?= $konten->nama; ?></i>
						</div>
						<div data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-brightness-high flex-shrink-0"> <?= $konten->nama_kategori; ?></i>
						</div> <br>
						<a class="btn btn-dark col-lg-3" href="<?= base_url('') ?>">Kembali...</a>
					</div>
		</section> -->

		<section id="alt-services" class="alt-services">
			<div class="container aos-init aos-animate" data-aos="fade-up">
				<div class=" row justify-content-around gy-4">
					<img class="custom-block-image-wrap col-lg-9"
						src="<?= base_url('assets/upload/konten/'.$konten->foto) ?>" alt="">
					<div class="col-lg-9 d-flex flex-column justify-content-center">
						<h3><?= $konten->judul; ?></h3>
						<p><?= $konten->keterangan; ?></p>
						<div data-aos="fade-up" data-aos-delay="100">
							<i class="bi bi-person flex-shrink-0"> <?= $konten->nama; ?></i>
						</div>
						<div data-aos="fade-up" data-aos-delay="400">
							<i class="bi bi-brightness-high flex-shrink-0"> <?= $konten->nama_kategori; ?></i>
						</div> <br>
						<a class="btn btn-dark col-lg-3" href="<?= base_url('') ?>">Kembali...</a>
					</div>
		</section>
		<a href="#" class="scroll-top d-flex align-items-center justify-content-center active"><i
				class="bi bi-arrow-up-short"></i></a>
	</main>
	<footer id="footer" class="footer">
		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-3">
						<div class="footer-info">
							<h3><?= $konfig->judul_website; ?></h3>
							<p><?= $konfig->profil_website; ?><br></p>
							<div class="social-links d-flex mt-5">
								<a href="<?= $konfig->facebook; ?>"
									class="d-flex align-items-center justify-content-center"><i
										class="bi bi-facebook"></i></a>
								<a href="<?= $konfig->instagram; ?>"
									class="d-flex align-items-center justify-content-center"><i
										class="bi bi-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 footer-links">
						<h4>Contac Us</h4>
						<ul>
							<li><a href="<?= base_url('assets/front/'); ?>">Alamat</a><br><?= $konfig->alamat; ?></li>
							<li><a href="<?= base_url('assets/front/'); ?>">Email</a><?= $konfig->email; ?></li>
							<li><a href="<?= base_url('assets/front/'); ?>">Telephon</a><br>+<?= $konfig->no_wa; ?></li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-4 footer-links">
						<h4>Halaman kategori</h4>
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate){ ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
							</li>
							<?php } ?>
					</div>
					<div class="col-lg-4 footer-links">
						<h4>Tag post #</h4>
						<?php foreach($kategori as $payah) {?>
						<button type="button" class="btn btn-outline-light">
							<a
								href="<?= base_url('home/kategori/'.$payah['id_kategori']) ?>"><?= $payah['nama_kategori']; ?></a>
						</button>
						<?php } ?>
					</div><!-- End footer links column-->
				</div>
			</div>
		</div>
		<div class="footer-legal text-center position-relative">
			<div class="container">
				<div class="copyright">
					&copy; <strong><span><?= $konfig->judul_website; ?></span></strong>. All Rights Reserved
				</div>
			</div>
		</div>
	</footer>
	<div id="preloader"></div>
	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/front/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/front/') ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?= base_url('assets/front/') ?>assets/vendor/php-email-form/validate.js"></script>
	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/front/') ?>assets/js/main.js"></script>
</body>

</html>
