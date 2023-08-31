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



<div class="untree_co-section before-footer-section">
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<table class="table">
						<thead>
							<tr>
								<th>Id Transaksi</th>
								<th>Tanggal Transaksi</th>
								<th class="text-center">Total Pembayaran</th>
								<th class="text-center">Status Order</th>
								<th class="text-center">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($status['deliv'] as $key => $value) {

							?>
								<tr>
									<td><strong><?= $value->id_transaksi ?></strong></td>
									<td><?= $value->tgl_transaksi ?></td>
									<td>Rp. <?= number_format($value->tot_bayar)  ?></td>
									<td class="text-center">
										<?php
										if ($value->stat_order  == '0') {
											echo '<span class="badge bg-danger">Belum Bayar</span>';
										} else if ($value->stat_order  == '1') {
											echo '<span class="badge bg-warning">Menunggu Konfirmasi</span>';
										} else if ($value->stat_order  == '2') {
											echo '<span class="badge bg-info">Pesanan Diproses</span>';
										} else if ($value->stat_order  == '3') {
											echo '<span class="badge bg-primary">Pesanan Dikirim</span>';
										} else if ($value->stat_order  == '4') {
											echo '<span class="badge bg-success">Selesai</span>';
										}
										?>

									</td>
									<td class="text-center"><a href="<?= base_url('Pelanggan/cPesananSaya/detail_pesanan/' . $value->id_transaksi) ?>"><i class="fa fa-bars" aria-hidden="true"></i></a></td>
								</tr>


							<?php
							} ?>

						</tbody>
					</table>
				</div>
			</form>
		</div>

	</div>
</div>