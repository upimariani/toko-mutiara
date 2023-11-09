<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Cart</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->

<?php
if ($this->session->userdata('success')) {
?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<?= $this->session->userdata('success') ?>
	</div>
<?php
}
?>

<div class="untree_co-section before-footer-section">
	<?php echo form_open('pelanggan/cCart/update_cart'); ?>
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">

					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Gambar</th>
								<th>Nama Produk</th>
								<th>Quantity</th>
								<th>Harga</th>
								<th>Subtotal</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							$i = 1;
							foreach ($this->cart->contents() as $key => $value) {
							?>
								<tr>
									<td><?= $no++ ?></td>
									<td><img style="width: 150px;" class="rounded-circle" src="<?= base_url('asset/foto-produk/' . $value['picture']) ?>"></td>
									<td><?= $value['name'] ?></td>
									<td>
										<input class="form-control" name="<?= $i . '[qty]' ?>" min="1" type="number" value="<?= $value['qty'] ?>">

									</td>
									<td>Rp. <?= number_format($value['price'], 0)  ?></td>
									<td>Rp. <?= number_format($value['price'] * $value["qty"])  ?></td>
									<td><a class="btn btn-outline-black btn-sm btn-block" href="<?= base_url('pelanggan/cCart/delete/' . $value['rowid']) ?>">Hapus</a></td>
								</tr>
							<?php
								$i++;
							}
							?>
						</tbody>
					</table>

				</div>
			</form>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="row mb-5">
					<div class="col-md-6 mb-3 mb-md-0">
						<button type="submit" class="btn btn-black btn-sm btn-block">Update Cart</button>
					</div>

				</div>

			</div>
			<div class="col-md-6 pl-5">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-right border-bottom mb-5">
								<h3 class="text-black h4 text-uppercase">Cart Totals</h3>
							</div>
						</div>
						<div class="row mb-3">
							<div class="col-md-6">
								<span class="text-black">Subtotal</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black">Rp. <?= number_format($this->cart->total()) ?></strong>
							</div>
						</div>
						<div class="row mb-5">
							<div class="col-md-6">
								<span class="text-black">Total</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black">Rp. <?= number_format($this->cart->total()) ?></strong>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<a href="<?= base_url('Pelanggan/cCheckout') ?>" class="btn btn-black btn-lg py-3 btn-block">Proceed To Checkout</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
</div>