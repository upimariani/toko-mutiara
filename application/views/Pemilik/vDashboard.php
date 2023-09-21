<div class="main-panel">
	<div class="content-wrapper pb-0">
		<div class="page-header flex-wrap">
			<h3 class="mb-0"> Hi, welcome back Pemilik Toko!
			</h3>

		</div>
		<div class="row">
			<div class="col-xl-3 col-lg-12 stretch-card grid-margin">
				<div class="row">
					<div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
						<div class="card bg-warning">
							<div class="card-body px-3 py-4">
								<div class="d-flex justify-content-between align-items-start">
									<div class="color-card">
										<p class="mb-0 color-card-head">Total Penjualan</p>
										<h3 class="text-white">Rp. <?= number_format($total['total_penjualan']->total)  ?>
											</h2>
									</div>
									<i class="card-icon-indicator mdi mdi-basket bg-inverse-icon-warning"></i>
								</div>

							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="col-xl-9 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="row">

							<div class="col-lg-12 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Informasi Transaksi</h4>
										<canvas id="transaksi" height="150"></canvas>
									</div>
								</div>
							</div>
							<div class="col-lg-12 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Informasi Produk</h4>
										<canvas id="produk" height="150"></canvas>
									</div>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>

	</div>