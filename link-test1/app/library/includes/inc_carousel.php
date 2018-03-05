<!-- CAROUSEL -->

    <div id="awesome-products" style="background-color: white;" class="carousel slide unfixed-size" data-ride="carousel">
        <ol class="carousel-indicators" style="display: none">
            <li data-target="#awesome-products" data-slide-to="0" class="active"></li>
            <li data-target="#awesome-products" data-slide-to="1"></li>
            <li data-target="#awesome-products" data-slide-to="2"></li>
			<li data-target="#awesome-products" data-slide-to="3"></li>
			<li data-target="#awesome-products" data-slide-to="4"></li>
			<li data-target="#awesome-products" data-slide-to="5"></li>
        </ol>
	  
	<div class="home-carousel">

		<div class="item itemSlider active">
			<?php if($current_language=="/de"): ?>
				<div class="slider-container slide-x50">
					<div class="slide-content text-center center-block">
						<h2><?php say("title-homepage-x50") ?></h2>
						<p><?php say("title-homepage-1-x50") ?></p>
						<span id="before-learn-more"><?php say("title-homepage-2-x50") ?></span>  - 
						<a href="<?php echo $current_language ?>/x/x50-rgb-mechanical-keyboard" style="margin-left: 0px;"><?php say("learn more -homepage-2") ?><i class="icon-angle-right" aria-hidden="true" style="text-decoration: none;"></i></a>	</br>
						<img src="/x/x50-rgb-mechanical-keyboard/images/x50-keyboard-front-view-white-background-with-de-label.jpg" width="1380" height="600" alt="X50 mechanical keyboard front view with German label">
					</div>
				</div>
			
			<?php else : ?>
				<div class="slider-container slide-x50">
					<div class="slide-content text-center center-block">
						<h2><?php say("title-homepage-x50") ?></h2>
						<p><?php say("title-homepage-1-x50") ?></p>
						<span id="before-learn-more"><?php say("title-homepage-2-x50") ?></span>  - 
						<a href="<?php echo $current_language ?>/x/x50-rgb-mechanical-keyboard" style="margin-left: 0px;"><?php say("learn more -homepage-2") ?><i class="icon-angle-right" aria-hidden="true" style="text-decoration: none;"></i></a>	</br>
						<img src="/x/x50-rgb-mechanical-keyboard/images/x50-keyboard-front-view-white-background-with-en-label.png" width="1380" height="600" alt="X50 mechanical keyboard front view with English label">
					</div>
				</div>
			<?php endif; ?>
			
		</div>

	  	<div class="item itemSlider">
				<div class="slider-container slide-5q">
					<div class="slide-content text-center center-block">
						<h2><?php say("title-homepage-5q") ?></h2>
						<p><?php say("title-homepage-1-5q") ?></p> 
						<a href="<?php echo $current_language ?>/p/5q-cloud-connected-rgb-mechanical-keyboard" style="margin-left: 0px;"><?php say("learn-more-5q") ?><i class="icon-angle-right" aria-hidden="true" style="text-decoration: none;"></i></a>					
					</div>
				</div>
			</div> 

		 <div class="item itemSlider">
				<div class="slider-container slide-prime">
					<div class="slide-content text-center center-block">
						<h2><?php say("title-homepage-prime13") ?></h2>
						<p><?php say("title-homepage-1prime13") ?></p>
						
						<div>
							<a href="<?php echo $current_language ?>/p/prime13-mechanical-keyboard"><?php say("learn more -homepage-2") ?><i class="icon-angle-right" aria-hidden="true"></i></a>
						</div>
					
					
					</div>
				</div>
			</div> 

            <div class="item itemSlider">
				<div class="slider-container slide1">
					<div class="slide-content">
						<h2><?php say("title-homepage-1") ?></h2>
						<p><?php say("title-homepage-1next") ?></p>
						<a class="zoombox" href="https://www.youtube.com/watch?v=9byG-aS4Hf0&feature=youtu.be"><?php say("video-homepage-1") ?><i class="icon-play-circle" aria-hidden="true"></i></a>
						<a href="<?php echo $current_language ?>daskeyboard-4-professional/"><?php say("learn more -homepage-2") ?><i class="icon-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="item itemSlider">
				<div class="slider-container slide2">
					<div class="slide-content">
						<h2 ><?php say("title-homepage-21") ?></h2>
						<p><?php say("title-homepage-3") ?></p>
						<a href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?>&nbsp<i class="icon-angle-right" aria-hidden="true"></i></a>
						<a href="<?php echo $current_language ?>/switches/"><?php say("learn more -homepage-1") ?> <i class="icon-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="item itemSlider">
				<div class="slider-container slide3">
					<div class="slide-content">
						<h2><?php say("title-homepage-22") ?></h2>
						<p><?php say("title-homepage-32") ?></p>
						<a class="zoombox" href="https://www.youtube.com/watch?v=9byG-aS4Hf0&feature=youtu.be"><?php say("video-homepage-1") ?><i class="icon-play-circle" aria-hidden="true"></i></a>
						<a href="daskeyboard-4-ultimate/"><?php say("learn more -homepage-2") ?> <i class="icon-angle-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
        </div>
        <a style="display:none" class="left carousel-control" href="#awesome-products" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a style="display:none" class="right carousel-control" href="#awesome-products" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
