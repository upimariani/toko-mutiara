<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Analisis Segmentasi Produk Tahun 2021</h3>


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
			<div class="col-xl-6 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
				<div class="card bg-danger">
					<div class="card-body px-3 py-4">
						<div class="d-flex justify-content-between align-items-start">
							<div class="color-card">
								<?php
								$total_tdk_laku = $this->db->query("SELECT COUNT(id_analisis) as jml FROM `analisis` WHERE thn_periode='2022' AND status='1'")->row();
								?>
								<p class="mb-0 color-card-head">Produk Tidak Laku</p>
								<h2 class="text-white"> <?= $total_tdk_laku->jml ?> <span class="h5"> produk</span>
								</h2>
							</div>
							<i class="card-icon-indicator mdi mdi-alert-outline bg-inverse-icon-danger"></i>
						</div>
						<h6 class="text-white"><?= ($total_tdk_laku->jml / 150) * 100 ?>% dari Total Barang</h6>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
				<div class="card bg-success">
					<div class="card-body px-3 py-4">
						<div class="d-flex justify-content-between align-items-start">
							<div class="color-card">
								<?php
								$total_laku = $this->db->query("SELECT COUNT(id_analisis) as jml FROM `analisis` WHERE thn_periode='2022' AND status='2'")->row();
								?>
								<p class="mb-0 color-card-head">Produk Laku</p>
								<h2 class="text-white"> <?= $total_laku->jml ?> <span class="h5"> produk</span>
								</h2>
							</div>
							<i class="card-icon-indicator mdi mdi-apple-keyboard-caps bg-inverse-icon-success"></i>
						</div>
						<h6 class="text-white"><?= ($total_laku->jml / 150) * 100 ?>% dari Total Barang</h6>
					</div>
				</div>
			</div>

			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Grafik Profit Produk</h4>
						<canvas id="segmentasi_ketiga" height="150"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Produk</h4>
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
										<th>Hasil</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($segmentasi as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?>.</td>
											<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->nama_produk ?></strong></td>
											<td><?= $value->qty_keluar ?></td>
											<td>Rp. <?= number_format($value->netsale, 0) ?></td>
											<td>Rp. <?= number_format($value->profit, 0) ?></td>
											<td><?= $value->hasil ?></td>
											<td><?php if ($value->status == '1') {
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