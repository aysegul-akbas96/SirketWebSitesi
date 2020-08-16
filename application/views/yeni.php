 <?php
$this->load->view('_header');

$a=0;

?> 


<head>
	<title><?=$say[0]->sayfa_baslik?> | <?=$v[0]->title?></title>
</head>


<div id="banner-area">
		<img src="<?=base_url()?>uploads/<?=$verim[0]->sayfa_resim?>" alt="sayfa_resim" />
					



         	<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	
	          	</div>
          	</div><!-- Subpage title end -->
	</div>
 <section id="portfolio-item">
		<div class="container">
			<!-- Portfolio item row start -->
			<div class="row">
				<?php 
					foreach ($sayfa as $rs) {
						

					 ?>
				<!-- Portfolio item slider start -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="portfolio-slider">
						<div class="flexportfolio flexslider">
							<ul class="slides">
						<?php 
						$a++;
						if($a==1){


					


						 ?>
							
							

							
								<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="resim" />

								
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
								<?=$sayfa[0]->sayfa_aciklama?>
							</p>
						
							

						</div>
					</div>
				</div>
				<!-- sidebar end -->
				<?php } }?>
			</div><!-- Portfolio item row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio item end -->
<?php
$this->load->view('_footer');
?>