<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Pesanan Saya</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<?php if ($this->session->userdata('success')) {
?>
	<div class="alert alert-success" role="alert">
		<?= $this->session->userdata('success') ?>
	</div>
<?php
} ?>


<div class="untree_co-section before-footer-section">
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<table class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Produk</th>
								<th class="text-center">Quantity</th>
								<th class="text-center">Harga</th>
								<th class="text-center">Subtotal</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($detail['detail_transaksi'] as $key => $value) {
							?>
								<tr>
									<td class="text-center"><?= $no++ ?>.</td>
									<td><?= $value->nama_produk ?></td>
									<td class="text-center"><?= $value->qty ?> x</td>
									<td class="text-center">Rp. <?= number_format($value->harga - ($value->harga * $value->diskon / 100))  ?></td>
									<td class="text-center">Rp. <?= number_format(($value->harga - ($value->harga * $value->diskon / 100)) * $value->qty) ?></td>
								</tr>
							<?php
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
						<a href="<?= base_url('Pelanggan/cPesananSaya') ?>" class="btn btn-black btn-sm btn-block">Kembali</a>
					</div>
				</div>
				<?php
				if ($detail['transaksi']->stat_order == '0') {
				?>
					<div class="row">
						<div class="col-md-12">
							<label class="text-black h4" for="coupon">Pembayaran</label>
							<p>Masukkan Bukti Pembayaran</p>
						</div>
						<?php echo form_open_multipart('pelanggan/cPesananSaya/pembayaran/' . $detail['transaksi']->id_transaksi); ?>
						<input type="file" name="gambar" class="form-control py-3 mb-3" required>
						<button type="submit" class="btn btn-black">Upload</button>
						</form>
					</div>
				<?php
				}
				if ($detail['transaksi']->stat_order == '3') {
				?>
					<h3>Pesanan Diterima</h3>
					<p>Konfirmasi jika pesanan anda telah diterima</p>
					<a href="<?= base_url('pelanggan/cPesananSaya/diterima/' . $detail['transaksi']->id_transaksi) ?>" class="btn btn-black">Konfirmasi</a>
				<?php
				}
				?>


			</div>
			<div class="col-md-6 pl-5">
				<div class="row justify-content-end">
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-12 text-right border-bottom mb-5">
								<h3 class="text-black h4 text-uppercase">Total Pembayaran</h3>
							</div>
						</div>

						<div class="row mb-5">
							<div class="col-md-6">
								<span class="text-black">Total</span>
							</div>
							<div class="col-md-6 text-right">
								<strong class="text-black">Rp. <?= number_format($detail['transaksi']->tot_bayar) ?></strong>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>