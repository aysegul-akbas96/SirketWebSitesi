 <?php
$this->load->view('_header');

?> 
<head>
	<title><?=$sayfa[0]->menu_alt_adi?> | <?=$v[0]->title?></title>
</head>
<div id="banner-area">
		<img src="<?=base_url()?>uploads/<?=$verim[0]->menu_alt_resim?>" alt="menu_resim" />
					   
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->
 <section id="portfolio-item">
		<div class="container">
			<!-- Portfolio item row start -->
			<div class="row">
				<!-- Portfolio item slider start -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="portfolio-slider">
						<div class="flexportfolio flexslider">
							<ul class="slides">
							 <?php 
							foreach ($resim as $rs) {
								
							
							

							  ?>
								<li><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></li>
								<?php 
								} ?>
							</ul>
						</div>
					</div>
				</div>
				<!-- Portfolio item slider end -->

				<!-- sidebar start -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="sidebar">
						<div class="portfolio-desc">
					
							<p>
							<?=$verim[0]->menu_alt_aciklama?>
							</p>
						
							

						</div>
					</div>
				</div>
				<!-- sidebar end -->
			</div><!-- Portfolio item row end -->
			<br>
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<!-- category start -->
						<div class="widget widget-categories">
							
							<?php 
				foreach ($cek as $rs) {
					


				 ?>
							<ul class="category-list clearfix">
				           <li><a href="<?=base_url()?>yeni/altgetir/<?=$rs->sayfa_id?>"><?=$rs->sayfa_baslik?></a></li>
				            </ul> 
				            <?php } ?>  
						</div><!-- category end -->

					

					</div><!--/ Sidebar end -->
				</div><!--/ Sidebar col end -->
		</div><!-- Container end -->
	</section><!-- Portfolio item end -->

	
						<div class="gap-40"></div>

<?php
$this->load->view('_footer');
?>

