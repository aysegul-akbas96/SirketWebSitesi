 <?php
$this->load->view('_header');

?> 

<head>
	<title><?=$sayfa[0]->footer_adi?> | <?=$v[0]->title?></title>
</head>

<div id="banner-area">
                   
					   
					    	<img src="<?=base_url()?>/uploads/banner2.jpg">
					   
					   
	<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	
	          	</div>
          	</div><!-- Subpage title end -->
	</div>
<section id="main-container">
		<div class="container">
			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php 
					foreach ($cek as $rs) {
						

					 ?>
					<div class="post-content">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<h4><?=$rs->footer_adi?></h4>
							<p>
							<?=$rs->footer_aciklama?>
						</p>
					


					</div>

					

						
			</div><!--/ row end -->
	<?php } ?>
		</div><!--/ container end -->
		
			
</div>
</section>

<?php
$this->load->view('_footer');
?>
