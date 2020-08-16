
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
			         
			            <li><a href="<?=base_url()?>medya"><?=$veriler[0]->menu_adi?></a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->

	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Services -->

			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic"><?=$veriler[0]->menu_adi?></h2>
				</div>
					<p><?=$veriler[0]->menu_aciklama?></p>
			</div>

	          <?php 
				foreach ($menuismi as $rs) {
					


				 ?>
				 
				 
					
			<div class="col-sm-4 portfolio-static-item">
					
					<div class="grid">
						<figure class="effect-oscar">
							 
							<img src="<?=base_url()?>/uploads/<?=$rs->resim?>" alt="resim" height="250px" width="300px">
							<figcaption>
								<a class="link icon-pentagon" href="<?=base_url()?>medya/altgetir/<?=$rs->menu_alt_id?>"><i class="fa fa-link"></i></a>

								<a class="view icon-pentagon" data-rel="prettyPhoto" href="<?=base_url()?>uploads/<?=$rs->resim?>"><i class="fa fa-search"></i></a>            
							</figcaption>

						</figure>
						<div class="portfolio-static-desc">
	

							 <span><a href="<?=base_url()?>medya/altgetir/<?=$rs->menu_alt_id?>"><?=$rs->menu_alt_adi?></a></span>
						</div>					
					</div><!--/ grid end -->
				
				</div><!--/ item 2 end -->				
					<?php } ?>

</div></section>

			<!-- Services end -->

	

			
		<div class="gap-60"></div>	



<?php
$this->load->view('_footer');
?>