<?php include '../../header.php' ?>

<div class="space-from-header" >

<div  id="loading" class="container text-center" >
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
</div>

<div class="wrap accessories-background">
<div class="body-row top-row">

	<!-- Carousel  ================================================== -->
	<div id="accessories-carousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->

		<div class="gaming">
			<ol class="carousel-indicators">
			<li data-target="#accessories-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#accessories-carousel" data-slide-to="1"></li>
			<li data-target="#accessories-carousel" data-slide-to="2"></li>
			</ol>
		</div>
		<div class="carousel-inner background-carousel-inner" role="listbox">
			<div class="item active">
				<img width='991px' height:'558px' class="first-slide center-block" src="/gaming/accessories/images/defamer_mustard2.png" alt="First slide">
				<div class="container">
					<div class="carousel-caption center-block">
					<a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/collections/products/top-panels-customization" role="button">BUY NOW</a>
					<h2 class=""><?php say('accessories-slider-title1-subtitle') ?></h2>
					<h1 class="gaming-green"><?php say('accessories-slider-title1') ?></h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img width='991px' height:'560px' class="second-slide center-block" src="/gaming/accessories/images/Bungee.png" alt="Second slide">
				<div class="container">
					<div class="carousel-caption center-block">
					<a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/collections/products/products/division-zero-mouse-bungee" role="button">BUY NOW</a>
					<h2 class=""><?php say('accessories-slider-title2-subtitle') ?></h2>
					<h1 class="gaming-green"><?php say('accessories-slider-title2') ?></h1>
					</div>
				</div>
			</div>
			<div class="item">
				<img width='991px' height:'560px' class="third-slide center-block" src="/gaming/accessories/images/47W-Control.png" alt="Third slide">
				<div class="container">
					<div class="carousel-caption center-block">
					<a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/collections/products/division-zero-accessories" role="button">BUY NOW</a>
					<h2 class=""><?php say('accessories-slider-title3-subtitle') ?></h2>
					<h1 class="gaming-green"><?php say('accessories-slider-title3') ?></h1>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#accessories-carousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-menu-left icon-prev" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#accessories-carousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-menu-right icon-next" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!-- /.carousel -->
<!-- ====================== LIST OF ACCESSORIES ======================= -->
	<div class="container accessories-background accessories-container" >
		<div class="text-center col-sm-4">
			<div class="accessory-item">
				<a href="/gaming/bungee/index.php">
					<img width='350px' height:'198px' class="" src="/gaming/accessories/images/Bungee.png">
					<h2 class="text-center accessory-item-link red">GAMING BUNGEE</h2>
				</a>
			</div>
		</div>
		<div class="text-center col-sm-4">
			<div class="accessory-item">
				<a href="/gaming/top-panels/index.php">
					<img width='350px' height:'198px' class="" src="/gaming/accessories/images/top_panel_red.png">
				<h2 class="text-center accessory-item-link red">TOP PANELS</h2>
			</a>
			</div>
		</div>
		<div class="text-center col-sm-4">
			<div class="accessory-item">
				<a href="/gaming/mouse-pads/index.php">
					<img width='350px' height:'198px' class="" src="/gaming/accessories/images/47W-Control.png">
					<h2 class="text-center accessory-item-link red">MOUSE PADS</h2>
				</a>
			</div>
		</div>

	</div>
</div>
</div>

</div> <!-- closing space-from-header -->


<?php include '../../footer.php' ?>
