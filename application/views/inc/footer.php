<!-- footer -->
	<div class="footer">
		<div class="col-md-3 footer-left-agileits">
			<h3>Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Sylhet, Bangladesh.</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@WE4WE.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (4584) 5689 0254 128</li>
				</ul>
		</div>
		<div class="col-md-3 footer-left-agileinfo">
			<h3>Get In Touch</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<ul class="social-icons">
					<li><a href="#" class="icon icon-border facebook"></a></li>
					<li><a href="#" class="icon icon-border twitter"></a></li>
					<li><a href="#" class="icon icon-border instagram"></a></li>
					<li><a href="#" class="icon icon-border pinterest"></a></li>
				</ul>
		</div>
		<div class="col-md-3 footer-left-w3-agileits">
			<h3>Newsletter</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Your email..." required="">
					<input type="submit" value="Submit ">
				</form>
		</div>
		<div class="col-md-3 footer-left-agileinfo">
		<h3>Flickr feed</h3>
		<div class="flickr-grids">
					<div class="flickr-grid">
						<a href="#"><img src="<?=base_url()?>assets/images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?=base_url()?>assets/images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?=base_url()?>assets/images/f3.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
					
					<div class="flickr-grid">
						<a href="#"><img src="<?=base_url()?>assets/images/f2.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?=base_url()?>assets/images/f4.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?=base_url()?>assets/images/f1.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer --> 
	<div class="copyright-w3-agile">
		<div class="container">
			<p>© WE4WE 2021. All rights reserved | Design by <a href="">Neelotpal Nijhum</a></p>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- start-smoth-scrolling -->
	
<!-- js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/numscroller-1.0.js"></script>
<script src="js/lsb.min.js"></script>
			<script>
			$(window).load(function() {
				  $.fn.lightspeedBox();
				});
			</script>
<!-- //js -->
<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
	<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: true,
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

			<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.flexisel.js"></script>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
</body>
</html>