<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Masukkan Data Ongkos Kirim</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Ongkos Kirim</a></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('Admin/cOngkir/create') ?>" method="POST">

							<div class="form-group">
								<label for="input-2">Nama Kecamatan</label>
								<input type="text" name="nama" class="form-control" />
								<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="input-2">Ongkos Kirim</label>
								<input type="number" name="ongkir" class="form-control" />
								<?= form_error('ongkir', '<small class="form-text text-danger">', '</small>'); ?>
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