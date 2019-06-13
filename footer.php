
<!--footer-->
<footer>
		<div class="container py-md-4 mt-md-3">
			<div class="row footer-top-w3layouts-agile py-5">
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>KNOW US </h3>
					</div>
					<div class="footer-text">
						<p>Tactika is a financial solution provider for delivering tailor made offerings for our many customers using technology as an enabler and push them to helping achieve their goals be it personal family or business.</p>

					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>LOCATE US </h3>
					</div>
					<div class="footer-office-hour">
						<ul>
							<li class="hd">Address :</li>
							<li>Legacy Place, 1619 Danmole street, Victoria Island.</li>

						</ul>
						<ul>
							<li class="hd">Phone: 0803-Tactika</li>
							<li class="hd">Email:"<a href="mailto:hello@tactika.co.ng">hello@tactika.com.ng</a>
							</li>
							<li class="hd">Toll free: 0809-Tactika</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>IMPORTANT INFO</h3>
					</div>
					<ul>
						<li><a href="terms.php">Terms &amp; Conditions</a></li>
						<li><a href="privacy.php">Privacy Policy        </a></li>
						<li><a href="investment.php">Investment</a></li>
						<li><a href="support.php">Support Center </a></li>
						<li><a href="payment.php">Payment Method</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 footer-grid">
					<div class="footer-title">
						<h3>SUBSCRIBE</h3>
					</div>
					<p>Subscribe to our newsletter to recive important updates .</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email..." required="">
						<button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!---->
	<div class="copyright py-3">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li>
						<h4>CONNECT WITH US :</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-instagram"></i>
						</a>
					</li>
					</li>
		
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2019 Tactika .| Designed by
					<a href="http://mixedfraction.com/">MixedFraction</a>
				</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Home </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		 <div class="agileits-w3layouts-info">
			<img src="images/g6.jpg" class="img-fluid" alt="" />
			<p>Tactika is a financial solution provider for delivering tailor made offerings for our many customers using technology as an enabler and push them to helping achieve their goals be it personal family or business. </p>
		</div>
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- //Modal -->
<!-- js-->
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- js-->
<!-- Banner Responsiveslides -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
<!-- // Banner Responsiveslides -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!--pop-up-box -->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
		});
	</script>
	<!-- //pop-up-box -->
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.js ">
	    <script src="calc/assets/jquery/jquery.min.js"></script>
    <script src="calc/assets/jquery/ui/jquery-ui.js"></script>
    <script src="calc/js/emi-calculator.js"></script>
	</script>
	<!-- //Bootstrap Core JavaScript -->
</body>
</html>
