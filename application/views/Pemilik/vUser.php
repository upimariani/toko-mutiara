<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Akun User</h3>
			<div class="d-flex">

				<!-- <a href="<?= base_url('Admin/cUser/create') ?>" class="btn btn-sm ml-3 btn-success"> Add User </a> -->
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
						<h4 class="card-title">Informasi User</h4>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Nama User</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level User</th>
										<!-- <th>Action</th> -->
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($user as $key => $value) {
									?>
										<tr>
											<td><?= $value->nama_user ?></td>
											<td><?= $value->username ?></td>
											<td><?= $value->password ?></td>
											<td><?php
												if ($value->level_user == '1') {
												?>
													<span class="badge badge-success">Kepala Toko</span>
												<?php
												} else {
												?>
													<span class="badge badge-warning">Pemilik Toko</span>
												<?php
												}
												?>
											</td>
											<!-- <td>

												<a href="<?= base_url('Admin/cUser/update/' . $value->id_user) ?>" class="btn btn-warning"> Edit </a>
												<a href="<?= base_url('Admin/cUser/delete/' . $value->id_user) ?>" class="btn btn-danger"> Hapus </a>

											</td> -->
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