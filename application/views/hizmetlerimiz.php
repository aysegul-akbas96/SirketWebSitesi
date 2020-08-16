
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
			         
			            <li><a href="<?=base_url()?>hizmet"><?=$veriler[0]->menu_adi?></a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic"><?=$veriler[0]->menu_adi?></h2>
				</div>
			</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="post-content">
						<div class="post-image-wrapper">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<img src="<?=base_url()?>uploads/<?=$resim[0]->resim?>" class="img-responsive"  alt="" />
						</div>
						</div><!-- post image end -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<p><?=$veriler[0]->menu_aciklama?></p>
					</div>

						<div class="gap-20"></div>

						

				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<!-- category start -->
						<div class="widget widget-categories">
							<h3 class="widget-title">Kategoriler</h3>
							<?php 
				foreach ($menuismi as $rs) {
					


				 ?>
							<ul class="category-list clearfix">
				           <li> <a href="<?=base_url()?>hizmet/altgetir/<?=$rs->menu_alt_id?>"><?=$rs->menu_alt_adi?></a></li>
				            </ul> 
				            <?php } ?>  
						</div><!-- category end -->

					

					</div><!--/ Sidebar end -->
				</div><!--/ Sidebar col end -->
			</div><!--/ row end -->
		</div><!--/ container end -->
			


	</section><!--/ Main container end -->
	
	

<?php
$this->load->view('_footer');
?>
			