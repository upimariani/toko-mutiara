<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<!-- Bootstrap CSS -->
	<link href="<?= base_url('asset/pelanggan/') ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url('asset/pelanggan/') ?>css/tiny-slider.css" rel="stylesheet">
	<link href="<?= base_url('asset/pelanggan/') ?>css/style.css" rel="stylesheet">
	<title>TOKO MUTIARA 99</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<a class="navbar-brand" href="index.html">Mutiara99<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="<?= base_url('Pelanggan/cHome') ?>">Home</a>
					</li>

					<?php
					if ($this->session->userdata('id') == '') {
					?>
						<li><a class="nav-link" href="<?= base_url('Pelanggan/cLogin') ?>">Login</a></li>

					<?php
					} else {
					?>
						<li><a class="nav-link" href="<?= base_url('Pelanggan/cPesananSaya') ?>">Pesanan Saya</a></li>
						<li><a class="nav-link" href="<?= base_url('Pelanggan/cLogin/logout') ?>">Logout</a></li>

					<?php
					}
					?>

				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<?php
					if ($this->session->userdata('id') != '') {
					?>
						<li><a class="nav-link" href="#"><img src="<?= base_url('asset/pelanggan/') ?>images/user.svg"> <?= $this->session->userdata('nama') ?></a></li>

						<?php
						$cart = 0;
						foreach ($this->cart->contents() as $key => $value) {
							$cart += $value['qty'];
						}
						if ($cart == '0') {
						?>
							<li>
							<li><a class="nav-link" href="<?= base_url('Pelanggan/cCart') ?>"><img src="<?= base_url('asset/pelanggan/') ?>images/cart.svg"></a></li>

							</li>
						<?php
						} else {
						?>
							<li>
							<li><a class="nav-link" href="<?= base_url('Pelanggan/cCart') ?>"><img src="<?= base_url('asset/pelanggan/') ?>images/cart.svg"><span class="badge bg-success"><?= $cart ?></span></a></li>

							</li>
						<?php
						}
						?>

					<?php
					}
					?>

				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->