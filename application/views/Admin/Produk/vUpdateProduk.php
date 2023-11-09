<div class="main-panel">
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">Masukkan Data Produk</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Produk</a></li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<?php echo form_open_multipart('admin/cproduk/update/' . $produk->id_produk); ?>

						<div class="form-group">
							<label for="input-2">Nama Produk</label>
							<input type="text" name="nama" value="<?= $produk->nama_produk ?>" class="form-control" id="input-2" placeholder="Masukkan Nama Produk">
							<?= form_error('nama', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-3">Keterangan</label>
							<input type="text" name="keterangan" value="<?= $produk->keterangan ?>" class="form-control" id="input-3" placeholder="Masukkan keterangan">
							<?= form_error('keterangan', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-4">Harga</label>
							<input type="number" name="harga" value="<?= $produk->harga ?>" class="form-control" id="input-4" placeholder="Masukkan Harga">
							<?= form_error('harga', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="input-4">Harga Supplier</label>
							<input type="number" name="harga_supplier" value="<?= $produk->harga_supplier ?>" class="form-control" id="input-4" placeholder="Masukkan Harga">
							<?= form_error('harga_supplier', '<small class="form-text text-danger">', '</small>'); ?>
						</div>
						
						<div class="form-group">
							<label for="input-5">Gambar</label><br>
							<img style="width: 150px;" src="<?= base_url('asset/foto-produk/' . $produk->gambar) ?>">
							<input type="file" name="gambar" class="form-control" id="input-5">
						</div>
						<button type="submit" class="btn btn-primary mr-2"> Submit </button>
						<a href="<?= base_url('Admin/cUser') ?>" class="btn btn-light">Cancel</a>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>
