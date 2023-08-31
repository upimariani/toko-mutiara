<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Transaksi Produk Pesanan Sedang Dikirim</h3>


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
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Transaksi Pelanggan</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Id Transaksi </th>
										<th>Atas Nama</th>
										<th>Tanggal Order</th>
										<th>Total Bayar</th>
										<th>Status Order</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($transaksi['diproses'] as $key => $value) {
									?>
										<tr>
											<td><?= $value->id_transaksi ?></td>
											<td><?= $value->nama ?></td>
											<td><?= $value->tgl_transaksi ?></td>
											<td>Rp. <?= number_format($value->tot_bayar)  ?></td>
											<td><span class="badge bg-info">Pesanan Diproses</span></td>
											<td><a class="btn btn-warning" href="<?= base_url('Admin/cTransaksi/detail_pesanan/' . $value->id_transaksi) ?>">Detail Transaksi</a></td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>