<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?= base_url('asset/login/') ?>css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(<?= base_url('asset/login/') ?>images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
					<?php if ($this->session->userdata('success')) {
						echo '<div class="alert alert-success" role="alert">';
						echo $this->session->userdata('success');
						echo '</div>';
					} ?>
					<?php if ($this->session->userdata('error')) {
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->userdata('error');
						echo '</div>';
					} ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Have an account?</h3>
						<form action="<?= base_url('clogin') ?>" method="POST" class="signin-form">
							<div class="form-group">
								<input class="form-control" type="text" name="username" placeholder="Masukkan Username Anda">
								<?= form_error('username', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<input id="password-field" class="form-control" type="password" name="password" placeholder="Masukkan Password Anda">
								<?= form_error('password', '<small class="form-text text-danger">', '</small>'); ?>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url('asset/login/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('asset/login/') ?>js/popper.js"></script>
	<script src="<?= base_url('asset/login/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('asset/login/') ?>js/main.js"></script>

</body>

</html>