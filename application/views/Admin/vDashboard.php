<div class="main-panel">
	<div class="content-wrapper pb-0">
		<div class="page-header flex-wrap">
			<h3 class="mb-0"> Hi, welcome back Admin!
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
					<div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
						<div class="card bg-danger">
							<div class="card-body px-3 py-4">
								<div class="d-flex justify-content-between align-items-start">
									<div class="color-card">
										<p class="mb-0 color-card-head">Total Produk Laku</p>
										<h2 class="text-white"> <?= $total['produk_laku']->jml ?><span class="h5">item</span>
										</h2>
									</div>
									<i class="card-icon-indicator mdi mdi-cube-outline bg-inverse-icon-danger"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
						<div class="card bg-primary">
							<div class="card-body px-3 py-4">
								<div class="d-flex justify-content-between align-items-start">
									<div class="color-card">
										<p class="mb-0 color-card-head">Total Produk Tidak Laku</p>
										<h2 class="text-white"> <?= $total['produk_tidaklaku']->jml ?><span class="h5">item</span>
										</h2>
									</div>
									<i class="card-icon-indicator mdi mdi-briefcase-outline bg-inverse-icon-primary"></i>
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
										<canvas id="barChart" style="height: 230px;"></canvas>
									</div>
								</div>
							</div>
							<div class="col-lg-12 grid-margin stretch-card">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Informasi Produk</h4>
										<canvas id="pieChart" style="height: 250px;"></canvas>
									</div>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>

	</div>