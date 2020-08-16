 <?php
$this->load->view('_header');

?> 

<head>
	<title>Yönetim Kadromuz | <?=$v[0]->title?></title>
</head>


	<div id="banner-area">
		<img src="<?=base_url()?>uploads/<?=$veriler[0]->menu_resim?>" alt="menu_resim" />

		<div class="parallax-overlay"></div>
	</div>

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">


			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-users"></i></span>
					<h2 class="title classic">Ekibimiz</h2>
				</div>
			</div>
		


			<div class="row text-center">
					<?php 
foreach ($yonetimcek as $rs) {


 ?>


				<div class="col-md-3 col-sm-6">
				
	
	
					<div class="team wow slideInLeft" >
						<div class="img-hexagon">
							<img src="<?=base_url()?>/uploads/<?=$rs->yonetim_resim?>" alt="">
							<span class="img-top"></span>
							<span class="img-bottom"></span>
						</div>
						<div class="team-content" style="height: 230px; width: 230px;">
							<h3><?=$rs->yonetim_adsoyad?></h3>
							<p><?=$rs->yonetim_aciklama?></p>
							<p><?=$rs->yonetim_telefon?></p>
							<div class="team-social">
								<a class="gplus" href="<?=$rs->yonetim_mail?>"><i class="fa fa-google-plus"></i></a>
								<a class="linkdin" href="<?=$rs->yonetim_linkedin?>"><i class="fa fa-linkedin"></i></a>
								
							</div>
						</div>
					</div>		
				</div><!--/ Team 1 end -->


				<?php } ?>
				
				
				
			</div><!--/ Content row end -->
	


			
			

		

		</div><!--/ container end -->

	</section><!--/ Main container end -->
	<div class="gap-60"></div>

	
	
<?php
$this->load->view('_footer');
?>