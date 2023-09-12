<div class="main-panel">
	<div class="content-wrapper pb-0">
		<div class="page-header flex-wrap">
			<h3 class="mb-0"> Hi, welcome back Pemilik Toko!
			</h3>

		</div>
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-12">

						<!-- Main content -->
						<div class="invoice p-3 mb-3">
							<!-- title row -->
							<div class="row">
								<div class="col-12">
									<h4>
										<i class="fas fa-globe"></i> AdminLTE, Inc.
										<small class="float-right">Date: <?= date('Y-m-d') ?></small>
									</h4>
								</div>
								<!-- /.col -->
							</div>
							<div class="row">
								<div class="col-12 table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Id Transaksi</th>
												<th>Tanggal Transaksi</th>
												<th>Produk</th>
												<th>Sub Total per Produk</th>
											</tr>
											<?php
											$total = 0;
											foreach ($laporan as $key => $value) {
												$total += $value->harga * $value->qty;
											?>
												<tr>
													<td><?= $value->id_transaksi ?></td>
													<td><?= $value->tgl_transaksi ?></td>
													<td><?= $value->nama_produk ?></td>
													<td>Rp. <?= number_format($value->harga * $value->qty) ?></td>

												</tr>
											<?php
											}
											?>
										</thead>
										<tbody>
											<tr>

												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>
													<h3>Total</h3>
												</th>
												<th class="text-right">
													<h3>Rp. <?= number_format($total) ?></h3>
												</th>
											</tr>
										</tbody>
									</table>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							<!-- this row will not appear when printing -->
							<div class="row no-print">
								<div class="col-12">
									<button type="button" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
								</div>
							</div>
						</div>
						<!-- /.invoice -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>

		</div>

	</div>