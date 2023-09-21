<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Toko Mutiara | Admin</title>
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>assets/vendors/mdi/css/materialdesignicons.min.css" />
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>assets/vendors/flag-icon-css/css/flag-icon.min.css" />
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>assets/vendors/css/vendor.bundle.base.css" />
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>assets/vendors/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
	<link rel="stylesheet" href="<?= base_url('asset/admin/template/') ?>assets/css/style.css" />
	<link rel="shortcut icon" href="<?= base_url('asset/admin/template/') ?>assets/images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<!-- <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
				<a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url('asset/admin/template/') ?>assets/images/logo.svg" alt="logo" /></a>
				<a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.html"><img src="<?= base_url('asset/admin/template/') ?>assets/images/logo-mini.svg" alt="logo" /></a>
			</div> -->
			<ul class="nav">
				<li class="nav-item nav-profile">
					<a href="#" class="nav-link">
						<div class="nav-profile-image">
							<img src="<?= base_url('asset/admin/template/') ?>assets/images/faces/face1.jpg" alt="profile" />
							<span class="login-status online"></span>
							<!--change to offline or busy as needed-->
						</div>
						<div class="nav-profile-text d-flex flex-column pr-3">
							<span class="font-weight-medium mb-2">Pemilik Toko</span>
							<span class="font-weight-normal">Selamat Datang</span>
						</div>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Pemilik/cDashboard') ?>">
						<i class="mdi mdi-home menu-icon"></i>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Pemilik/cLaporan') ?>">
						<i class="mdi mdi-book-open menu-icon"></i>
						<span class="menu-title">Laporan Transaksi</span>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('Pemilik/cLaporanSegmentasi') ?>">
						<i class="mdi mdi-chart-pie menu-icon"></i>
						<span class="menu-title">Segmentasi Produk</span>
					</a>
				</li>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>

				<li class="nav-item sidebar-actions">
					<div class="nav-link">
						<div class="mt-4">
							<ul class="mt-4 pl-0">
								<li class="nav-item">
									<a class="nav-link" href="<?= base_url('cLogin/logout') ?>">

										<span class="menu-title">Sign Out</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</nav>
		<div class="container-fluid page-body-wrapper">

			<nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
				<div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
					<a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="<?= base_url('asset/admin/template/') ?>assets/images/logo-mini.svg" alt="logo" /></a>
					<button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
						<i class="mdi mdi-menu"></i>
					</button>

					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
			</nav>