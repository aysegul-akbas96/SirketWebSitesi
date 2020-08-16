<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 footer-widget">
				<div class="latest-post-content media-body">
								<?php 

	                    foreach($footercek as $rs)
      {   

								?>
					<div class="latest-post-items media">
							
						<h4><a href="<?=base_url()?>sayfalar/altgetir/<?=$rs->footer_id?>"><?=$rs->footer_adi?></a></h4>
						
						
					
					

							
							</div>
								<?php 
					}?>
						
						</div><!-- 1st Latest Post end -->

						<div class="latest-post-items media">
							<div class="latest-post-content media-body">
								
								
							</div>
						</div><!-- 2nd Latest Post end -->

						
	
				</div><!--/ End Recent Posts-->
				

				<div class="col-md-4 col-sm-12 footer-widget">
				
				</div><!--/ end flickr -->

				<div class="col-md-3 col-sm-12 footer-widget footer-about-us">
				
					<h4>Adres</h4>	
		
					<p><?=$veri[0]->adres?></p>
				
					<div class="row">
						<div class="col-md-6">
							<h4>Email:</h4>
							<p><?=$veri[0]->email?></p>
						</div>
						<div class="col-md-6">
							<h4>Telefon No:</h4>
							<p><?=$veri[0]->telefon?></p>
						</div>
						<div class="col-md-6">
							<h4>Fax No:</h4>
							<p><?=$veri[0]->fax?></p>
						</div>
					</div>
              
				</div><!--/ end about us -->

			</div><!-- Row end -->
		</div><!-- Container end -->
	</footer><!-- Footer end -->
	

	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">

					<ul class="footer-social unstyled">
						<li>
							<a title="Twitter" href="<?=$veri[0]->twitter?>">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Facebook" href="<?=$veri[0]->face?>">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Google+" href="<?=$veri[0]->google?>">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="instagram" href="<?=$veri[0]->instagram?>">
								<span class="icon-pentagon wow bounceIn"><i class="fa fa-instagram"></i></span>
							</a>
							
							
							
						</li>
					</ul>
				</div>
			</div><!--/ Row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info">
         			 &copy; Copyright 2019 Themefisher. <span>Designed by <a href="https://nedimmedya.net">nedimmedya.net</a></span>
        			</div>
				</div>
			</div><!--/ Row end -->
		   <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
				<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
			</div>
		</div><!--/ Container end -->
	</section><!--/ Copyright end -->

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.flexslider.js"></script>
	<!-- CD Hero slider -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="javascript" src="<?=base_url()?>assets/assets/js/isotope.js"></script>
	<script type="javascript" src="<?=base_url()?>assets/js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/wow.min.js"></script>
	<!-- SmoothScroll -->

	<!-- Eeasing -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/waypoints.min.js"></script>
	<!-- Template custom -->
	<script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>


	</body>
	</html>


