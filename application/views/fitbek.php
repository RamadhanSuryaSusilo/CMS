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

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= base_url('assets/front/'); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= base_url('assets/front/'); ?>assets/css/main.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center  bg-dark text-white mb-12">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
			<a class="btn btn-dark" href="<?= base_url('auth') ?>">Masuk</a>
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
			</nav><!-- .navbar -->
			<div>
				<a class="logo d-flex align-items-center">
					<h1><?= $konfig->judul_website; ?><span>.</span></h1>
				</a>
			</div>
		</div>
	</header><!-- End Header -->
	<!-- ======= Hero Section ======= -->
	<main id="main">
		<!-- End Recent Blog Posts Section -->
		<!-- ======= Our Projects Section ======= -->
		<section id="projects" class="projects">
			<hr>
			<div class="container center" data-aos="fade-up"> <br>
				<div class="section-header">
					<h2>saran</h2>
					<div class="container center col-lg-6" data-aos="fade">
						<form action="<?= base_url('home/simpan') ?>" method="post">
							<h6>Berikan saran dan kritikan pada website ini </h6>
							<div class="row gy-2">
								<div class="col-md-12">
									<input type="text" name="nama" class="form-control" placeholder="Nama"
										autocomplete="off" autofocus required>
								</div>
								<div class="col-md-12 ">
									<input type="text" class="form-control" name="email" placeholder="Email" required>
								</div>
								<div class="col-md-12">
									<textarea class="form-control" name="isi_saran" rows="6"
										placeholder="Tulis saran anda" required></textarea>
								</div>
								<div class="my-3">
									<button type="submit" class="btn btn-dark">kirim</button>
								</div>
						</form>
					</div>
				</div>
				<!-- End Projects Container -->
			</div>
			</div>
		</section><!-- End Our Projects Section -->
	</main><!-- End #main -->
	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="footer-info">
							<h3><?= $konfig->judul_website; ?></h3>
							<p> <?= $konfig->profil_website; ?>
							</p>
							<div class="social-links d-flex mt-3">
								<a href="<?= $konfig->facebook; ?>"
									class="d-flex align-items-center justify-content-center"><i
										class="bi bi-facebook"></i></a>
								<a href="<?= $konfig->instagram; ?>"
									class="d-flex align-items-center justify-content-center"><i
										class="bi bi-instagram"></i></a>
							</div>
						</div>
					</div><!-- End footer info column-->

					<div class="col-lg-3 col-md-4 footer-links">
						<h4>Contac Us</h4>
						<ul>
							<li><a href="<?= base_url('assets/front/'); ?>">Alamat</a><br><?= $konfig->alamat; ?></li>
							<li><a href="<?= base_url('assets/front/'); ?>">Email</a><?= $konfig->email; ?></li>
							<li><a href="<?= base_url('assets/front/'); ?>">Telephon</a><br>+<?= $konfig->no_wa; ?></li>
						</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-2 col-md-3 footer-links">
						<h4>Halaman kategori</h4>
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate){ ?>
							<li><a
									href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
							</li>
							<?php } ?>
						</ul>
					</div><!-- End footer links column-->
					<div class="col-lg-4 col-md-3 footer-links">
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
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>
	<!-- Vendor JS Files -->
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/aos/aos.js"></script>
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?= base_url('assets/front/'); ?>assets/vendor/php-email-form/validate.js"></script>
	<!-- Template Main JS File -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/main.js"></script>
</body>

</html>
