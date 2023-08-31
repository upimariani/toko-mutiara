	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="sofa-img">
				<img src="<?= base_url('asset/pelanggan/') ?>images/sofa.png" alt="Image" class="img-fluid">
			</div>

			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="<?= base_url('asset/pelanggan/') ?>images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>



					</div>
				</div>
			</div>

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Toko Mutiara 99<span>.</span></a></div>
					<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

					<ul class="list-unstyled custom-social">
						<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">About us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Support</a></li>
								<li><a href="#">Knowledge base</a></li>
								<li><a href="#">Live chat</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Jobs</a></li>
								<li><a href="#">Our team</a></li>
								<li><a href="#">Leadership</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Nordic Chair</a></li>
								<li><a href="#">Kruzo Aero</a></li>
								<li><a href="#">Ergonomic Chair</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Toko Mutiara 99 &copy;

							<script src="<?= base_url('asset/pelanggan/') ?>js/tiny-slider.js">
							</script>
							<script src="<?= base_url('asset/pelanggan/') ?>js/custom.js">
							</script>

							<!-- Jquery -->
							<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery.min.js"></script>
							<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery-migrate-3.0.0.js"></script>
							<script src="<?= base_url('asset/eshop/eshop/') ?>js/jquery-ui.min.js"></script>
							<script>
								console.log = function() {}
								$("#kecamatan").on('change', function() {

									$(".vongkir").html($(this).find(':selected').attr('data-vongkir'));
									$(".vongkir").val($(this).find(':selected').attr('data-vongkir'));

									$(".vtotal").html($(this).find(':selected').attr('data-vtotal'));
									$(".vtotal").val($(this).find(':selected').attr('data-vtotal'));

									$(".ongkir").html($(this).find(':selected').attr('data-ongkir'));
									$(".ongkir").val($(this).find(':selected').attr('data-ongkir'));

									$(".total").html($(this).find(':selected').attr('data-total'));
									$(".total").val($(this).find(':selected').attr('data-total'));
								});
							</script>
							</body>

							</html>