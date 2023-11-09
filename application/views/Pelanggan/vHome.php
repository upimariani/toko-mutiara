<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Toko Mutiara 99</h1>
					<p class="mb-4">Kami menyediakan yang anda butuhkan berupa; peralatan rumah tangga, macam - macam sembako, pakaian, dan lain - lain</p>
					<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="hero-img-wrap">
					<img src="<?= base_url('asset/pelanggan/') ?>images/couch.png" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<!-- Start Why Choose Us Section -->
<div class="why-choose-section">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<h2 class="section-title">Why Choose Us</h2>
				<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

				<div class="row my-5">
					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?= base_url('asset/pelanggan/') ?>images/truck.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Fast &amp; Free Shipping</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?= base_url('asset/pelanggan/') ?>images/bag.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Easy to Shop</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?= base_url('asset/pelanggan/') ?>images/support.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>24/7 Support</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

					<div class="col-6 col-md-6">
						<div class="feature">
							<div class="icon">
								<img src="<?= base_url('asset/pelanggan/') ?>images/return.svg" alt="Image" class="imf-fluid">
							</div>
							<h3>Hassle Free Returns</h3>
							<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
						</div>
					</div>

				</div>
			</div>

			<div class="col-lg-5">
				<div class="img-wrap">
					<img src="<?= base_url('asset/pelanggan/') ?>images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
				</div>
			</div>

		</div>
	</div>
</div>
<!-- End Why Choose Us Section -->
<!-- Start Product Section -->
<div class="product-section">
	<div class="container">
		<div class="row">

			<?php
			foreach ($produk as $key => $value) {
			?>
				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0 mt-5">
					<form action="<?= base_url('pelanggan/chome/cart') ?>" method="POST">
						<input type="hidden" name="id" value="<?= $value->id_produk ?>">
						<input type="hidden" name="name" value="<?= $value->nama_produk ?>">
						<input type="hidden" name="price" value="<?= $value->harga ?>">
						<input type="hidden" name="qty" value="1">
						<input type="hidden" name="picture" value="<?= $value->gambar ?>">
						<a class="product-item" href="#">
							<img style="width: 250px;" src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?= $value->nama_produk ?></h3>
							<strong class="product-price">Rp. <?= number_format($value->harga - ($value->diskon / 100 * $value->harga)) ?><?php if ($value->diskon != NULL) {
																																			?>
								<del>Rp. <?= number_format($value->harga, 0)  ?></del>
							<?php
																																			} ?></strong>

							<span class="icon-cross">
								<button type="submit" class="btn btn-light"><img src="<?= base_url('asset/pelanggan/') ?>images/cross.svg" class="img-fluid"></button>

							</span>
						</a>
					</form>
				</div>
				<!-- End Column 2 -->
			<?php
			}
			?>




		</div>
	</div>
</div>
<!-- End Product Section -->