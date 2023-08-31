<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Ongkos Kirim</h3>
			<div class="d-flex">

				<a href="<?= base_url('Admin/cOngkir/create') ?>" class="btn btn-sm ml-3 btn-success"> Add Ongkos Kirim </a>
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
			<div class="col-lg-8 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informasi Ongkos Kirim</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>No </th>
										<th>Nama Kecamatan</th>
										<th>Ongkir</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($kecamatan as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->nama_kecamatan ?></td>
											<td>Rp. <?= number_format($value->ongkir)  ?></td>
											<td><a href="<?= base_url('Admin/cOngkir/delete/' . $value->id_ongkir) ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Admin/cOngkir/update/' . $value->id_ongkir) ?>" class="btn btn-warning">Edit</a>
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