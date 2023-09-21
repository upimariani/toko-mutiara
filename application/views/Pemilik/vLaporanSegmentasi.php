<div class="main-panel">
	<div class="content-wrapper pb-0">
		<div class="page-header flex-wrap">
			<h3 class="mb-0"> Hi, welcome back Pemilik Toko!
			</h3>

		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="card card-light">
					<div class="card-header">
						<h3 class="card-title">Laporan Segmentasi Produk</h3>
					</div>
					<div class="card-body">
						<?php
						echo form_open('Pemilik/cLaporanSegmentasi/cetak') ?>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Tahun</label>
									<select name="tahun" class="form-control">
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
									</select>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
								</div>
							</div>
						</div>
						<?php
						echo form_close() ?>
					</div>
				</div>
			</div>


		</div>
	</div>