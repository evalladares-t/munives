		<!-- Vendor -->
		<script src="../../vendor/jquery/jquery.min.js"></script>
		<script src="../../vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="../../vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="../../vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="../../vendor/popper/umd/popper.min.js"></script>
		<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../../vendor/common/common.min.js"></script>
		<script src="../../vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="../../vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="../../vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="../../vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="../../vendor/isotope/jquery.isotope.min.js"></script>
		<script src="../../vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="../../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="../../vendor/vide/jquery.vide.min.js"></script>
		<script src="../../vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../../js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="../../vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="../../vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="../../js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="../../js/custom.js"></script>

		
		<!-- Theme Initialization Files -->
		<script src="../../js/theme.init.js"></script>
		<script src="../../js/examples/examples.portfolio.js"></script>
		<script src="../../js/examples/examples.carousels.js"></script>
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->
		 <script>
			// Write on keyup event of keyword input element
			$(document).ready(function(){
			$("#search").keyup(function(){
			_this = this;
			// Show only matching TR, hide rest of them
			$.each($("#mytable tbody tr"), function() {
			if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
			$(this).hide();
			else
			$(this).show();
			});
			});
			});
		</script>
		
		<script>
			$(document).ready(function () {

				function show_popup() {
					//$("#myid").click();
					$("#combinationFilters #accesosdirectos #todos  ").removeClass("active")
					$("#combinationFilters #accesosdirectos #todos  a").removeClass("active")

					$("#combinationFilters #accesosdirectos #menos ").addClass("active")
					$("#combinationFilters #accesosdirectos #menos a").addClass("active")					
					$("#combinationFilters #accesosdirectos #menos a").click();
				};
				setTimeout(function () { show_popup(); }, 4000);

				$(".arrow-right").bind("click", function (event) {
					event.preventDefault();
					$(".vid-list-container").stop().animate({
						scrollLeft: "+=336"
					}, 750);
				});
				$(".arrow-left").bind("click", function (event) {
					event.preventDefault();
					$(".vid-list-container").stop().animate({
						scrollLeft: "-=336"
					}, 750);
				});


			});

		</script>