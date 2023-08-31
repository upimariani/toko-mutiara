<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Detail Transaksi</h3>


		</div>
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<?= $this->session->userdata('success') ?>
			</div>
		<?php
		}
		?>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body m-sm-3 m-md-5">


						<div class="row">
							<div class="col-md-6">
								<div class="text-muted">Payment No.</div>
								<strong>00<?= $detail['transaksi']->id_transaksi ?></strong><br><br>
								<hr>
								<?php
								if ($detail['transaksi']->stat_order != '0') {
								?>
									<h4>Bukti Pembayaran</h4>
									<img style="width: 250px;" src="<?= base_url('asset/bukti-pembayaran/' . $detail['transaksi']->bukti_bayar) ?>">

								<?php
								}
								?>
							</div>
							<div class="col-md-6 text-md-right">
								<div class="text-muted">Payment Date</div>
								<strong><?= $detail['transaksi']->tgl_transaksi ?></strong>
							</div>
						</div>

						<hr class="my-4" />

						<div class="row mb-4">
							<div class="col-md-6">
								<div class="text-muted">Pelanggan</div>
								<strong>
									<?= $detail['transaksi']->nama ?>
								</strong>

							</div>
							<div class="col-md-6 text-md-right">
								<div class="text-muted">Alamat Pengiriman</div>
								<strong>
									<?= $detail['transaksi']->alamat ?> Kec. <?= $detail['transaksi']->nama_kecamatan ?>
								</strong>

							</div>
						</div>

						<table class="table table-sm">
							<thead>
								<tr>
									<th>Quantity</th>
									<th>Nama Produk</th>
									<th>Harga</th>
									<th>Diskon</th>
									<th class="text-right">Amount</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($detail['pesanan'] as $key => $value) {
								?>
									<tr>
										<td><?= $value->qty ?></td>
										<td><?= $value->nama_produk ?></td>
										<td>Rp. <?= number_format($value->harga, 0)  ?></td>
										<td><?php if ($value->diskon == null) {
												echo '0';
											} else {
												echo $value->diskon;
											}  ?>%</td>
										<td class="text-right">Rp.<?= number_format(($value->harga - (($value->diskon / 100) * $value->harga)) *  $value->qty) ?></td>
									</tr>
								<?php
								}
								?>

								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Subtotal </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->tot_bayar - $detail['transaksi']->ongkir)  ?></th>
								</tr>
								<tr>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Shipping </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->ongkir)  ?></th>
								</tr>
								<tr>
									<th>
										<?php
										if ($detail['transaksi']->stat_order == '1') {
										?>
											<a href="<?= base_url('Admin/cTransaksi/konfirmasi/' . $detail['transaksi']->id_transaksi) ?>" class="btn btn-warning">Konfirmasi</a>
										<?php
										} else if ($detail['transaksi']->stat_order == '2') {
										?>
											<a href="<?= base_url('Admin/cTransaksi/kirim/' . $detail['transaksi']->id_transaksi) ?>" class="btn btn-info">Pesanan Dikirim</a>

										<?php
										}
										?>
									</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Total </th>
									<th class="text-right">Rp. <?= number_format($detail['transaksi']->tot_bayar)  ?></th>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>