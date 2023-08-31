	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Registrasi Pelanggan</h1>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Hero Section -->


	<!-- Start Contact Form -->
	<div class="untree_co-section">
		<div class="container">

			<div class="block">
				<div class="row justify-content-center">


					<div class="col-md-8 col-lg-8 pb-4">



						<form action="<?= base_url('pelanggan/clogin/register') ?>" method="post">
							<div class="row mb-3">
								<div class="form-group">
									<label for="username">Nama Pelanggan *</label>
									<input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" placeholder="Your Name">
									<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="username">No Telepon *</label>
									<input type="number" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" placeholder="Your Phone Number">
									<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="form-group">
									<label for="username">Alamat *</label>
									<input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" placeholder="Your Address">
									<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label for="username">Username *</label>
											<input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Your Username">
											<?= form_error('username', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group last mb-3">
											<label for="password">Password *</label>
											<input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Your Password">
											<?= form_error('password', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
							</div>
							<p class="text-primary">Anda sudah memiliki akun? <a href="<?= base_url('Pelanggan/cLogin') ?>">Login!!</a></p>
							<button type="submit" class="btn btn-primary-hover-outline">Registrasi</button>
						</form>

					</div>

				</div>

			</div>

		</div>


	</div>
	</div>

	<!-- End Contact Form -->