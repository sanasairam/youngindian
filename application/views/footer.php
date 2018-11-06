<div class="footer">
		<div class="container">
			<div class="footer-top">
				<a href="index.html">
					<h3>Young Indain Foundation</h3>
				</a>
				<p>© 2009 Young Indian Foundation. All Rights Reserved | Design by <a href="#" target="_blank">Sana</a>
				</p>
			</div>
		</div>
	</div>
	

	<script src="<?php echo base_url();?>html/js/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>html/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>html/js/easing.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>html/js/request.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});

	</script>
	<script defer src="<?php echo base_url();?>html/js/jquery.flexslider.js"></script>
	<script src="<?php echo base_url();?>html/js/modernizr.custom.97074.js"></script>
	<script src="<?php echo base_url();?>html/js/jquery.chocolat.js"></script>
	
	<script type="text/javascript">
		$(function () {
			$('.gallery-bottom a').Chocolat();
		});

	</script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});

	</script>

	<script>
		$("span.menu").click(function () {
			$(".top-nav ul").slideToggle(500, function () {});
		});

	</script>


	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});

	</script>   

</body>

</html>
