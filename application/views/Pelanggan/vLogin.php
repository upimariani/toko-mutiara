	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Login</h1>
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

						<?php if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success" role="alert">
								<?= $this->session->userdata('success') ?>
							</div>
						<?php
						} ?>

						<?php if ($this->session->userdata('error')) {
						?>
							<div class="alert alert-danger" role="alert">
								<?= $this->session->userdata('error') ?>
							</div>
						<?php
						} ?>

						<form action="<?= base_url('pelanggan/clogin') ?>" method="post">
							<div class="row mb-5">
								<div class="col-6">
									<div class="form-group">
										<label class="text-black" for="fname">Username<span class="text-danger">*</span></label>
										<input type="text" name="username" class="form-control" placeholder="Your Username" id="username">
										<?= form_error('username', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label class="text-black" for="lname">Password<span class="text-danger">*</span></label>
										<input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
										<?= form_error('password', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
							</div>

							<p class="text-primary">Anda belum memiliki akun? <a href="<?= base_url('Pelanggan/cLogin/register') ?>">Register!!</a></p>
							<button type="submit" class="btn btn-primary-hover-outline">Login</button>
						</form>

					</div>

				</div>

			</div>

		</div>


	</div>
	</div>

	<!-- End Contact Form -->