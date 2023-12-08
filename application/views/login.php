<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login cms</title>
	<link href="<?= site_url('assets/gentela/') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela/') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela/') ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela/') ?>/vendors/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?= site_url('assets/gentela/') ?>/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
	<div>
		<div class="login_wrapper">
			<div class="animate form login_form">
				<section class="login_content">
					<form class="pt-3" action="<?= site_url('auth/login') ?>" method="POST">
						<h1>Login Form</h1>
						<div>
							<input type="text" class="form-control" placeholder="Username" name="username" autofocus />
						</div>
						<div>
							<input type="password" class="form-control" placeholder="Password" name="password"
								aria-describedby="password" />
						</div>
						<div>
							<button class="btn btn-default submit" type="submit">Login</button>
							<div>
								<div id="menghilang">
									<?= $this->session->flashdata('alert'); ?>
								</div>
								<div class="clearfix"></div>
								<div class="separator">
									<div class="clearfix"></div>
									<br />
									<div>
										</i> Selamat Datang </h1>
									</div>
								</div>
					</form>
				</section>
			</div>
		</div>
	</div>
	</section>
	</div>
	</div>
	</div>
</body>

</html>
