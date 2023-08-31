<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Masukkan Data Diskon</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Diskon</a></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('Admin/cDiskon/create') ?>" method="POST">
							<div class="form-group">
								<label for="input-1">Nama Produk</label>
								<select name="produk" class="form-control">
									<option value="">---Pilih Produk---</option>
									<?php
									foreach ($produk as $key => $value) {
									?>
										<option value="<?= $value->id_produk ?>"><?= $value->nama_produk ?></option>
									<?php
									}
									?>
								</select>
								<?= form_error('produk', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Nama Diskon</label>
								<input type="text" name="nama" class="form-control" id="input-2" placeholder="Masukkan Nama Diskon">
								<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Besar Diskon</label>
								<input type="text" name="diskon" class="form-control" id="input-2" placeholder="Masukkan Besar Diskon">
								<?= form_error('diskon', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success px-5"><i class="icon-lock"></i> Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>