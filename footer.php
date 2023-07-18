	</main><!-- Ends main content -->
	
	<footer class="site-end">
		<div class="container">
			<div class="site-end__inner">
				<div class="site-end__logo">
					<a href="#"><img src="img/main-logo--icon--white.svg" alt="DAMM" /></a>
				</div>
				<div class="site-end__menu">
					<ul>
						<li><a href="#">Purchase Orders</a></li>
						<li><a href="#">Orders</a></li>
						<li><a href="#">Stock Management</a></li>
						<li><a href="#">Marketplace</a></li>
						<li><a href="#">Clinic Rooms</a></li>
						<li><a href="#">Reports</a></li>
					</ul>	
				</div>
				<div class="site-end__menu">
					<ul>
						<li><a href="#">Contact Us</a></li>
						<li><a href="#">Tutorial</a></li>
					</ul>	
				</div>
			</div>
		</div>
	</footer>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/slick-lightbox.min.js"></script>
	
	<script src="js/common.js"></script>
	
	<script>
	$(document).ready(function() {
		//Preloader
		preloaderFadeOutTime = 1000;
		function hidePreloader() {
			var preloader = $('.spinner-wrapper');
				preloader.fadeOut(preloaderFadeOutTime);
			}
		hidePreloader();
	});
	</script>
</body>

</html>