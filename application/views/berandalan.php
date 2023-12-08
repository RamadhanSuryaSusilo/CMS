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

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		window.setTimeout(function() {
			$("#menghilang").fadeTo(500, 0).slideUp(500, function(){
				$(this).remove();
			});
		}, 3000);
	</script>
	<!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
	<!-- ======= Header ======= -->
	<header id="header" class="header d-flex align-items-center">
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
					<li><a href="<?= base_url('home/galery/')?>">gallery</a></li>
					<li><a href="<?= base_url('home/fitbek/') ?>">saran</a></li>
				</ul>
			</nav><!-- .navbar -->
			<div>
				<a class="logo d-flex align-items-center">
					<img src="assets/front/assets/img/logo_smk.png" width="40px" height="40px">
					<h1><?= $konfig->judul_website; ?><span>.</span></h1>
				</a>
			</div>
		</div>
	</header><!-- End Header -->
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="hero">
		<div class="info d-flex align-items-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<h2 data-aos="fade-down">Welcome to Siembrot</h2>
					</div>
				</div>
				<div class="row">
					<form action="<?= base_url('Home') ?>" method="post">
						<div
							class="col-md-4 container-fluid container-xl d-flex align-items-center justify-content-between">
							<div class="input-group">
								<input type="text" class="form-control" name="keyword"
									placeholder="Cari berita yang ingin di baca..." autocomplete="off" autofocus>
								<span class="input-group-btn">
									<input class="btn btn-dark" type="submit" name="submit"></input>
								</span>
							</div>
						</div>
					</form>
				</div>
				<div class="inner-heading">
					<marquee style="margin-top: 20px; color: white; font-family: sans-serif;">
						<b>Terimakasih telah mengunjungi laman website ini !. ini adalah website sebuah laman berita
							yang bisa anda baca setiap saat,<strong> BACA BERITA UPDATE TERBARU SEKARANG ! </strong></b>
					</marquee>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0 mb-5">
			<div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
				<div class="caraousel-inner">
					<?php $no=1; foreach ($caraousel as $ya) { ?>
					<div class="carousel-item <?php if($no==1){echo 'active';} ?>"
						style="background-image: url(<?= base_url('assets/upload/caraousel/' . $ya['foto']) ?>">
					</div>
					<button class="carousel-control-prev" href="#hero-carousel" type="button" data-bs-slide="prev">
						<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
					</button>
					<button class="carousel-control-next" href="#hero-carousel" type="button" data-bs-slide="next">
						<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
					</button>
					<?php $no++; } ?>
				</div>
			</div>
		</div>
	</section><!-- End Hero Section -->
	<main id="main">
		<!-- ======= Recent Blog Posts Section ======= -->
		<section id="recent-blog-posts" class="recent-blog-posts">
			<div class="container" data-aos="fade-up">
				<div class="row">
					<div class="section-header">
						<h2>Berita</h2>
					</div>
					<div class="col-lg-8 col-10">
						<div class="container" data-aos="fade-up" data-aos-delay="100">
							<section id="blog" class="blog">
								<div class="row gy-4 posts-list">
									<?php foreach ($konten as $uu){ ?>
									<div class="col-xl-6 col-md-6">
										<div class="post-item position-relative h-100">
											<div class="post-img position-relative overflow-hidden">
												<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?>"
													class="img-fluid">
												<span class="post-date"><?= $uu['tanggal'] ?></span>
											</div>
											<div class="post-content d-flex flex-column">
												<h3 class="post-title"><?= $uu['judul'] ?></h3>
												<?php $this->load->helper('text');
												$string = $uu['keterangan'];
												$string = word_limiter($string, 15);
												echo $string; ?></p>
												<div class="meta d-flex align-items-center">
													<div class="d-flex align-items-center">
														<i class="bi bi-person"></i> <span
															class="ps-2"><?= $uu['nama'] ?></span>
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
						</div>
					</div>
					<div class="col-lg-4 col-10 mx-auto">
						<div class="styles_card__gFHyT style_card___4CdM">
							<h2 class="style_articleHeader__Ucw6K">Artikel Terbaru</h2>
							<?php foreach ($recentPost as $ayah) { ?>

							<div class="style_body__kuYZq">
								<div class="style_content__4qf8S"><a
										href="<?= base_url('Home/artikel/'.$ayah['slug'])?>" class="style_title__hMeEa">
										<h5> <?= $ayah ['judul'] ?></h5>
									</a>
									<p class="style_text__G2k6M"></p>
								</div>
								<div style="position:relative col-5"><img loading="lazy" width="200" height="135"
										decoding="async" data-nimg="1" class="style_image__Gze7i"
										style="color:transparent"
										srcset="<?= base_url('assets/upload/konten/'.$ayah['foto'])?>" src="">
								</div>
							</div>
							<div class="style_root__F4tOJ">
								<div class="style_categories__AzJoB">
									<div class="d-flex align-items-center">
										<h6 class="bi bi-folder2">
											<span class="ps-2"><strong><?= $ayah['nama_kategori'] ?></strong></span>
										</h6>
									</div>
								</div>
							</div>
							<div class="style_footer__Wi2Az">
								<p class="style_date__lFJe2"><?= date('d F Y', strtotime($ayah['tanggal']))?></p>
							</div>
							<hr>
							<?php } ?>
							<div class="col-lg-12 footer-links">
								<h4>Tag post #</h4>
								<?php foreach($kategori as $payah) {?>
								<button type="button" class="btn btn-outline-dark">
									<a
										href="<?= base_url('home/kategori/'.$payah['id_kategori']) ?>"><?= $payah['nama_kategori'] ?></a>
								</button>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Recent Blog Posts Section -->
		<!-- ======= Our Projects Section ======= -->
	</main><!-- End #main -->
	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">
		<div class="footer-content position-relative">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4">
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

					<div class="col-lg-4 col-md-4 footer-links">
						<h4>Contac Us</h4>
						<ul>
							<li><a href="<?= base_url('assets/front/'); ?>"><i class=" fa fa-map-marker"></i> Alamat</a><br><?= $konfig->alamat; ?></li>
							<li><a href="<?= base_url('assets/front/'); ?>"><i class=" fa fa-envelope"></i>Email</a><?= $konfig->email; ?></li>
							<li><a href="<?= base_url('assets/front/'); ?>"><i class=" fa fa-phone"></i>Telephon</a><br>+<?= $konfig->no_wa; ?></li>
						</ul>
					</div><!-- End footer links column-->

					<div class="col-lg-4 footer-links">
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
					<!-- End footer links column-->
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
	<div id="preloader"></div>
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
