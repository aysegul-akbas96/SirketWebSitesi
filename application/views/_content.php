	<!-- Slider start -->
<head>
	<title>Anasayfa | <?=$v[0]->title?></title>
</head>


	<section id="Anasayfa" class="no-padding">	
    	<div id="main-slide" class="cd-hero">
			<ul class="cd-hero-slider">
				<li class="selected">
					<div class="overlay2">
						<img class="" src="<?=base_url()?>uploads/<?=$ana[0]->resim?>" alt="slider">
					</div>
					<div class="cd-full-width">
						
						<h2><?=$veri[0]->adi?></h2>
						<h3><?=$veri[0]->title_aciklama?></h3>

						
					</div> <!-- .cd-full-width -->
				</li>
				</ul> <!--/ cd-hero-slider -->

		

		</div><!--/ Main slider end -->    	
    </section> <!--/ Slider end -->
		<div class="gap-40"></div>


	<section id="image-block" class="image-block no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding" style="height:550px;background:url(<?=base_url()?>uploads/<?=$ana[0]->kucuk_resim?>) 50% 50% / cover no-repeat;">
				</div>
				<div class="col-md-6 ts-padding img-block-right">
					<div class="img-block-head text-center">


						<p><?=$ana[0]->aciklama?> </p>
						
						
					</div>

					<div class="gap-30"></div>

					
					</div><!--/ End 1st block -->

				</div>
			</div>
		</section>
	<div class="gap-40"></div>









 