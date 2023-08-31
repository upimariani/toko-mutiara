<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Checkout</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="border p-4 rounded" role="alert">
					Returning customer? <a href="#">Click here</a> to login
				</div>
			</div>
		</div>
		<form action="<?= base_url('Pelanggan/cCheckout/order') ?>" method="POST">
			<input type="hidden" name="total" class="total">
			<div class="row">
				<div class="col-md-6 mb-5 mb-md-0">
					<h2 class="h3 mb-3 text-black">Billing Details</h2>
					<div class="p-3 p-lg-5 border bg-white">
						<div class="form-group mb-3">

							<label for="c_country" class="text-black">Kecataman <span class="text-danger">*</span></label>
							<select id="kecamatan" name="kecamatan" class="form-control" required>
								<option value="">---Pilih Kecamatan---</option>
								<?php
								foreach ($kecamatan as $key => $value) {
								?>
									<option data-vongkir="Rp. <?= number_format($value->ongkir) ?>" data-vtotal="Rp. <?= number_format($this->cart->total() + $value->ongkir)  ?>" data-total="<?= $this->cart->total() + $value->ongkir ?>" data-ongkir="<?= $value->ongkir ?>" value="<?= $value->id_ongkir ?>"><?= $value->nama_kecamatan ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<hr>
						<div class="form-group row">
							<div class="col-md-12">
								<label for="c_fname" class="text-black">Nama <span class="text-danger">*</span></label>
								<input type="text" value="<?= $this->session->userdata('nama') ?>" class="form-control" id="c_fname" name="c_fname" readonly>
							</div>
						</div>
						<div class="form-group">
							<label for="c_order_notes" class="text-black">Alamat</label>
							<textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..." readonly><?= $this->session->userdata('alamat') ?></textarea>
						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="row mb-5">
						<div class="col-md-12">
							<h2 class="h3 mb-3 text-black">Your Order</h2>
							<div class="p-3 p-lg-5 border bg-white">
								<table class="table site-block-order-table mb-5">
									<thead>
										<th>Product</th>
										<th>Total</th>
									</thead>
									<tbody>
										<?php
										foreach ($this->cart->contents() as $key => $value) {
										?> <tr>
												<td><?= $value['name'] ?> <strong class="mx-2">x</strong> <?= $value['qty'] ?></td>
												<td>Rp. <?= number_format($value['price'] * $value['qty']) ?></td>
											</tr>
										<?php
										}
										?>
										<tr>
											<td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
											<td class="text-black">Rp. <?= number_format($this->cart->total()) ?></td>
										</tr>
										<tr>
											<td class="text-black font-weight-bold"><strong>Order Total</strong></td>
											<td class="text-black font-weight-bold"><strong class="vtotal"></strong></td>
										</tr>
									</tbody>
								</table>

								<div class="border p-3 mb-3">
									<h3 class="h6 mb-0"><a class="d-block" data-bs-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

									<div class="collapse" id="collapsebank">
										<div class="py-2">
											<p class="mb-0">Nama Bank : BRI <br>
												Atas Nama: Toko Mutiara 99 <br>
												No Rekening. 08992830-0127-01</p>
										</div>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-black btn-lg py-3 btn-block" type="submit">Place Order</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- </form> -->
	</div>
</div>