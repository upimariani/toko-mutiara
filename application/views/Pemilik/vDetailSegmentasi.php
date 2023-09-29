<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Analisis Segmentasi Produk Tahun 2023</h3>
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
						<h4 class="card-title">Informasi Segmentasi Produk</h4>
						</p>
						<div class="table-responsive">
							<table id="myTable" class="table table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Produk </th>
										<th>Quantity Keluar</th>
										<th>Netsale</th>
										<th>Profit</th>
										<!-- <th>Hasil</th> -->
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($detail_segmentasi as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?>.</td>
											<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->nama_produk ?></strong></td>
											<td><?= $value->qty ?></td>
											<td>Rp. <?= number_format($value->netsales, 0) ?></td>
											<td>Rp. <?= number_format($value->netsales - $value->costprice, 0) ?></td>
											<!-- <td><?= $value->hasil ?></td> -->
											<td><?php if ($value->stat_produk == '0') {
												?>
													<span class="badge badge-danger">Tidak Laku</span>
												<?php
												} else {
												?>
													<span class="badge badge-success">Laku</span>
												<?php
												} ?>
											</td>
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