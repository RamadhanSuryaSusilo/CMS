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
	<header id="header"class=" header d-flex align-items-center bg-dark text-white mb-12">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
			<a class="btn btn-dark" href="<?= base_url('auth') ?>">Masuk</a>
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
			<a class="logo d-flex align-items-center">
				<h1><?= $konfig->judul_website; ?><span>.</span></h1>
			</a>
		</div>
	</header>
	<main id="main">
			<div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
				<h2><?= $nama_kategori; ?></h2>
			</div>
		</div>
		<section id="blog" class="blog">
			<div class="container" data-aos="fade-up" data-aos-delay="100">
				<div class="row gy-4 posts-list">
					<?php foreach ($konten as $uu){ ?>
					<div class="col-xl-4 col-md-6">
						<div class="post-item position-relative h-100">
							<div class="post-img position-relative overflow-hidden">
								<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>" class="img-fluid">
								<span class="post-date"><?= $uu['tanggal'] ?></span>
							</div>
							<div class="post-content d-flex flex-column">
								<h3 class="post-title"><?= $uu['judul'] ?></h3>
								<div class="meta d-flex align-items-center">
									<div class="d-flex align-items-center">
										<i class="bi bi-person"></i> <span class="ps-2"><?= $uu['nama'] ?></span>
									</div>
									<span class="px-3 text-black-50">/</span>
									<div class="d-flex align-items-center">
										<i class="bi bi-folder2"></i> <span
											class="ps-2"><?= $uu['nama_kategori'] ?></span>
									</div>
								</div>
								<hr>
								<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>"
									class="readmore stretched-link"><span>Baca lebih lanjut</span><i
										class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
		</section>
	</main>
	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
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
					<div class="col-lg-3 footer-links">
						<h4>Tag post #</h4>
						<?php foreach($kategori as $payah) {?>
						<button type="button" class="btn btn-outline-light">
						<a href="<?= base_url('home/kategori/'.$payah['id_kategori']) ?>"><?= $payah['nama_kategori']; ?></a>
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
	<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
			class="bi bi-arrow-up-short"></i></a>
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
