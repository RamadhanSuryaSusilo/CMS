<!DOCTYPE html>
<meta data-assets-path="<?= site_url('assets/gentela') ?> /assets/">
<html lang="en">

<head>
	<script src="https://cdn.tiny.cloud/1/91jquxybkgoxwsjmun5xzqu83mkgsnm1dwjt8ug0keiwgls0/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?= $judul_halaman ?> | </title>
	<link href="<?= site_url('assets/gentela') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela') ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
		rel="stylesheet">
	<link href="<?= site_url('assets/gentela') ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
	<link href="<?= site_url('assets/gentela') ?>/vendors/bootstrap-daterangepicker/daterangepicker.css"
		rel="stylesheet">
	<link href="<?=site_url('assets/gentela') ?>/build/css/custom.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?= base_url(); ?>" class="site_title"><i class="fa fa-xing-square"></i>
							<span class="fw-bold">Siembrot</span></a>
					</div>
					<div class="profile clearfix">
						<div class="navbar nav_title profile_info">
							<h2><?= $this->session->userdata('nama'); ?></h2>
							<span><?= $this->session->userdata('level'); ?></span>
						</div>
					</div>
					<br/>
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Pilihan</h3>
							<ul class="nav side-menu">
								<li><a href="<?= site_url('admin/home') ?>"><i class="fa fa-home"></i> Dashboard</a>
									<ul class="nav child_menu">
									</ul>
								</li>
								<li><a href="<?= site_url('admin/Caraousel') ?>"><i class="fa fa-recycle"></i>
										Caraousel</a>
									<ul class="nav child_menu">
									</ul>
								</li>
								<li><a href="<?= site_url('admin/kategori') ?>"><i class="fa fa-desktop"></i> kategori
										konten</a>
									<ul class="nav child_menu">
									</ul>
								</li>
								<li><a href="<?= site_url('admin/konten') ?>"><i class="fa fa-circle-o-notch"></i>
										konten</a>
									<ul class="nav child_menu">
									</ul>
								</li>
								<?php if($this->session->userdata('level')=='Admin'){ ?>
								<li><a href="<?= site_url('admin/user') ?>"><i class="fa fa-github-alt"></i>user</a>
									<ul class="nav child_menu">
									</ul>
								</li>
								<li><a href="<?= site_url('admin/konfigurasi') ?>"><i
											class="fa fa-windows"></i>konfigurasi</a>
									<ul class="nav child_menu">
									</ul>							
								</li>
								<li><a href="<?= site_url('admin/galery') ?>"><i class="fa fa-photo"></i>
										galery</a>
									<ul class="nav child_menu">
									</ul>
								<li><a href="<?= site_url('admin/fitbek') ?>"><i class="fa fa-send-o"></i>
										saran</a>
									<ul class="nav child_menu">
									</ul>
									<?php } ?>
								</li>
								</li>
							</ul>
						</div>
					</div>
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Logout"
							href="<?= base_url('auth/logout') ?>">
							<span class="fa fa-arrow-circle-left"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Riwayat login"
							 href="<?= base_url('admin/recentlog') ?>">
							<span class="fa fa-history" aria-hidden="true"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle">
								<i class="fa fa-bars"></i></a>
						</div>
						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<div class="navbar-nav align-items-left">
									<div class="nav-item d-flex align-items-left">
									</div>
							<li><a class="fa fa-" href="javascript:;"></a></li>
				</div>
			</div>
			<div class="right_col" role="main">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-16 tile_stats_count">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<?= $contents; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="clearfix"></div>
	</footer>
	</div>
	</div>

	<script src="<?= site_url('assets/gentela') ?>/vendors/jquery/dist/jquery.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/fastclick/lib/fastclick.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/nprogress/nprogress.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/Chart.js/dist/Chart.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/gauge.js/dist/gauge.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/iCheck/icheck.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/skycons/skycons.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/Flot/jquery.flot.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/Flot/jquery.flot.pie.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/Flot/jquery.flot.time.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/Flot/jquery.flot.stack.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/Flot/jquery.flot.resize.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/flot.curvedlines/curvedLines.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/DateJS/build/date.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/jqvmap/dist/jquery.vmap.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/moment/min/moment.min.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?= site_url('assets/gentela') ?>/build/js/custom.min.js"></script>
	<script>
		$('#menghilang').delay('fast').slideDown('fast').delay(2000).slideUp(600);

	</script>

	<!-- Place the first <script> tag in your HTML's <head> -->
	<script src="https://cdn.tiny.cloud/1/aq37vou6o6fl7r2lfo92721t18z6173r03hevnh6qpu52i0f/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>

	<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
			toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
		});

	</script>
</body>

</html>
