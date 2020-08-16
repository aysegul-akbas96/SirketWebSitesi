
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">


								
 
   
   
    <meta name="description" content="<?=$veri[0]->description?>">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
		<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="<?=base_url()?>assets/css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>

    <![endif]-->

</head>

	
<body>

	<div class="body-inner">

	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand navbar-bg">
				    	
					    <a href="<?=base_url()?>home">
					    	
					    		
					    
					    	<img class="img-responsive" style="width: 300px; height: 50px; " src="<?=base_url()?>uploads/<?=$veri[0]->logo?>" alt="logo">

					    </a> 
					   
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						
					<li class="">
                       		<a href="<?=base_url()?>home">Anasayfa</a>
                       		
	                   </li>

	                   <?php 

	                   if($m!=null){


	                   
	                    ?>


	  
								
						 <li> 
						  	<a href="<?=base_url()?>sektor"><?=$m[0]->menu_adi?></a>
						  </li>
						  <?php 
						  } if ($me!=null) {
						  	# code...
						  ?>

						   <li> 
						  	<a href="<?=base_url()?>hizmet"><?=$me[0]->menu_adi?></a>
						  </li>
						  <?php 
						  } if ($men!=null) {
						  	# code...
						  ?>
						   <li> 
						  	<a href="<?=base_url()?>medya"><?=$men[0]->menu_adi?></a>
						  </li>
						   <?php 
						  } if ($menu!=null) {
						  	# code...
						  ?>
						   <li> 
						  	<a href="<?=base_url()?>guncel"><?=$menu[0]->menu_adi?></a>
						  </li>
						  <?php 
						  } if ($menua!=null) {
						  	# code...
						  ?>
						   <li> 
						  	<a href="<?=base_url()?>hakkimizda"><?=$menua[0]->menu_adi?></a>
						  </li>
						  <?php 
						  } if ($menuab!=null) {
						  	# code...
						  ?>
						  <li> 
						  	<a href="<?=base_url()?>ymenu"><?=$menuab[0]->menu_adi?></a>
						  </li>
						<?php } ?>


   
		
                       		

           
	                </ul>
	                                

                                      
					            			
                 
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	
	</header><!--/ Header end -->