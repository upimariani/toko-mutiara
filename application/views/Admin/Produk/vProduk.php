<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Produk</h3>
			<div class="d-flex">

				<a href="<?= base_url('Admin/cProduk/create') ?>" class="btn btn-sm ml-3 btn-success"> Add Produk </a>
			</div>

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
						<h4 class="card-title">Informasi Produk</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama Produk </th>
										<th>Gambar</th>
										<th>Keterangan</th>
										<th>Harga</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($produk as $key => $value) {
									?>
										<tr>
											<td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $value->nama_produk ?></strong></td>

											<td>
												<ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
													<li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
														<img src="<?= base_url('asset/foto-produk/' . $value->gambar) ?>" alt="Avatar" class="rounded-circle" />
													</li>

												</ul>
											</td>
											<td>
												<?= $value->keterangan ?>
											</td>
											<td>Rp. <?= number_format($value->harga, 0) ?></td>
											<td>
												<a href="<?= base_url('Admin/cProduk/update/' . $value->id_produk) ?>" class="btn btn-warning"> Edit </a>
												<a href="<?= base_url('Admin/cProduk/delete/' . $value->id_produk) ?>" class="btn btn-danger"> Hapus </a>
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
