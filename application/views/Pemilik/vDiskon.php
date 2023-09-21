<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Diskon Produk</h3>
			<div class="d-flex">

				<!-- <a href="<?= base_url('Admin/cDiskon/create') ?>" class="btn btn-sm ml-3 btn-success"> Add Diskon </a> -->
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
						<h4 class="card-title">Informasi Diskon</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Nama Produk</th>
										<th scope="col">Tanggal Diskon</th>
										<th scope="col">Nama Diskon</th>
										<th scope="col">Besar Diskon</th>
										<!-- <th scope="col">Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($diskon as $key => $value) {
									?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $value->nama_produk ?></td>
											<td><?= $value->tgl_diskon ?></td>
											<td><?= $value->nama_diskon ?></td>
											<td><?= $value->diskon ?>%</td>
											<!-- <td><a href="<?= base_url('Admin/cDiskon/delete/' . $value->id_diskon) ?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('Admin/cDiskon/update/' . $value->id_diskon) ?>" class="btn btn-warning">Edit</a>
											</td> -->
										</tr>
									<?php
									} ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>