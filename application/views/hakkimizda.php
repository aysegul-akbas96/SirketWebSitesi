
 <?php
$this->load->view('_header');

?> 
<head>
	<title><?=$sayfa[0]->menu_adi?> | <?=$v[0]->title?></title>
</head>

	<div id="banner-area">

	                    
					    	<img src="<?=base_url()?>uploads/<?=$veriler[0]->menu_resim?>" alt="menu_resim" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2><?=$veriler[0]->menu_adi?></h2>
		        	<ul class="breadcrumb">
			            <li><a href="<?=base_url()?>home">Anasayfa</a></li>
			            
			            <li><a href="<?=base_url()?>hakkimizda"><?=$veriler[0]->menu_adi?></a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Company Profile -->

			<div class="row">
				<div class="col-md-12 heading text-center">

				

				</div>
			</div><!-- Title row end -->

			<div class="row about-wrapper-top">
				<div class="col-md-6 ts-padding about-message">
				<p><?=$veriler[0]->menu_aciklama?></p>
				</div><!--/ About message end -->
				<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(<?=base_url()?>uploads/<?=$x[0]->resim?>) 50% 50% / cover no-repeat;">
					

				</div><!--/ About image end -->

			</div><!--/ Content row end -->
			<br>
<div class="col-md-6">
<div class="alert alert-success">
       <a href="<?=base_url()?>yonetim" class="alert-link">Yönetim Kadromuz</a>
       </div>
	<?php 
foreach ($menuismi as $rs) {
	

	 ?>
		​<div class="alert alert-success">
    <a href="<?=base_url()?>hakkimizda/altgetir/<?=$rs->menu_alt_id?>" class="alert-link"><?=$rs->menu_alt_adi?></a>
  </div>
<?php } ?>
</div>	

		</div><!--/ 1st container end -->

	</section><!--/ Main container end -->
	


	<div class="gap-40"></div>
	<?php
$this->load->view('_footer');
?>


	
	



