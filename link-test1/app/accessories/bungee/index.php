<?php include '../../header.php' ?>

<div class="space-from-header" >

  <div id="loading" class="container text-center">
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>


  <div class="bungee">

    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                            SLIDER                                 =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <div class="body-row top-row">
      <div id="bungee-carousel" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <div class="gaming">
          <ol class="carousel-indicators">
            <li data-target="#bungee-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#bungee-carousel" data-slide-to="1"></li>
            <li data-target="#bungee-carousel" data-slide-to="3"></li>
          </ol>
        </div>
        <div class="carousel-inner background-carousel-inner" role="listbox">
          <div class="item active">
            <img width='991px' height:'560px' class="first-slide center-block" src="images/division-zero-bungee-banner1.png" alt="Gaming Bungee Side View">
            <div class="container">
              <div class="carousel-caption center-block">
                <a class="btn btn-lg buy-button pull-right" href="https://shop.daskeyboard.com/products/division-zero-mouse-bungee" role="button">BUY NOW</a>
                <h1 class="gaming-green"><?php say('bungee-slider-title1-subtitle') ?></h1>
                <h2 class=""><?php say('bungee-slider-title1') ?></h2>
              </div>
            </div>
          </div>
          <div class="item">
            <img width='991px' height:'560px' class="second-slide center-block" src="images/division-zero-bungee-banner2.png" alt="Gaming Bungee 3Q View">
            <div class="container">
              <div class="carousel-caption center-block">
                <a class="btn btn-lg buy-button pull-right" href="https://shop.daskeyboard.com/products/division-zero-mouse-bungee" role="button">BUY NOW</a>
                <h1 class="gaming-green"><?php say('bungee-slider-title2-subtitle') ?></h1>
                <h2 class=""><?php say('bungee-slider-title2') ?></h2>
              </div>
            </div>
          </div>
          <div class="item">
            <img width='991px' height:'560px' class="fourth-slide center-block" src="images/division-zero-bungee-banner3.png" alt="Gaming Bungee Back View">
            <div class="container">
              <div class="carousel-caption center-block">
                <a class="btn btn-lg buy-button pull-right" href="https://shop.daskeyboard.com/products/division-zero-mouse-bungee" role="button">BUY NOW</a>
                <h1 class="gaming-green"><?php say('bungee-slider-title3') ?></h1>
                <h2 class=""><?php say('bungee-slider-title3-subtitle') ?></h2>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#bungee-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-menu-left icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#bungee-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-menu-right icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
      <!-- /.carousel -->
       <div class="container-fluid" style="background-color:black;">
        <div class="row social-share">
          <?php include("../../shared/includes/inc_social_share_module.php"); ?>  
        </div>
      </div>
    </div>


    <div class="wrap">
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                            VIDEO                                  =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- <div  class="background-home-row background-home-row load-background" background='/backgrounds/home_row2_bg.jpg''>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-7 col-xs-12 content left">
<h2><?php say('bungee-title4') ?></h2>
<p><?php say('bungee-title4-paragraph') ?></p>
</div>
<div class="col-lg-4 col-md-5 col-xs-12 content right">
<div class="video">
<iframe width="560" height="315" src="//www.youtube.com/embed/9byG-aS4Hf0" class='loading-iframe' frameborder="0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>
</div> -->


      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                         PRODUCT GALLERY                           =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->

          <div class="container prod-desc-container body-row" style="padding-bottom:50px; padding-top:70px; border-bottom-width: 0px;">
        <h2 class="bold gaming-text"><center> Product Gallery </center></h2>
        <div id="product-gallery-slider">
          <ul class="slides">
             <li data-thumb="images/bungee-thumb-1.png">
                <img width='530px' height:'455px' src="images/Bungee-front-gallery.png" />
              </li>
              <li data-thumb="images/bungee-thumb-2.png">
                <img width='530px' height:'455px' src="images/Bungee-side-gallery.png" />
              </li>
              <li data-thumb="images/bungee-thumb-3.png">
                <img width='530px' height:'455px' src="images/Bungee-3Q-gallery.png" />
              </li>
              <li data-thumb="images/bungee-thumb-4.png">
                <img width='530px' height:'455px' src="images/Bungee-back-gallery.png" />
              </li>
          </ul>
        </div>
      </div>


      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                       PRODUIT DESCRIPTION                         =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <div id="prod-desc" class="container-row-body">

        <div class="container prod-desc-container" style="border-bottom-width:0px;">
          <div class="col-md-6">
            <h1><?php say('bungee-title6') ?></h1>
            <h2><?php say('bungee-title6-subtitle') ?></h2>
            <p>
              <?php say('bungee-title6-paragraph') ?>
            </p>
            <h3><?php say('bungee-title9') ?></h3>
            <p>
              <?php say('bungee-title9-paragraph') ?>
            </p>
            <div class="text-center image-padding-top">
              <img width='445px' height:'238px' src="images/bungee-desc-1.png" alt="">
            </div>
            <h3><?php say('bungee-title7') ?></h3>
            <p>
              <?php say('bungee-title7-paragraph') ?>
            </p>
            <h3><?php say('bungee-title8') ?></h3>
            <p class="last">
              <?php say('bungee-title8-paragraph') ?>
            </p>
          </div>
          <div class="col-md-6">
            <div class="text-center image-padding-top">
              <img width='468px' height:'384px' src="images/bungee-desc-2.png" alt="">
            </div>
            <h3><?php say('bungee-title10') ?></h3>
            <p>
              <?php say('bungee-title10-paragraph') ?>
            </p>
            <div class="last text-center image-padding-top">
              <img width='366px' height:'301px' src="images/bungee-desc-3.png" alt="">
            </div>
          </div>
        </div>



        <!-- =====================================================================  -->
        <!-- =====================================================================  -->
        <!-- =                     TECHNICAL SPECIFICATIONS                      =  -->
        <!-- =====================================================================  -->
        <!-- =====================================================================  -->
        <div class="container body-row prod-desc-container">
          <h2 class="bold" style="margin-top:0px; color:#fff;"><?php say('technical-specifications') ?></h2>
          <div class="row-md-height" id="tech-spec">
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background">
              <ul>
                <li>
                  <?php say('bungee-title11-ul1-li1') ?>
                </li>
                <li>
                  <?php say('bungee-title11-ul1-li2') ?>
                </li>
                <!-- <li><?php say('bungee-title11-ul1-li3') ?></li>
<li><?php say('bungee-title11-ul1-li4') ?></li>
<li><?php say('bungee-title11-ul1-li5') ?></li>
<li><?php say('bungee-title11-ul1-li6') ?></li>
<li><?php say('bungee-title11-ul1-li7') ?></li> -->
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-red-background">
              <ul>
                <li>
                  <?php say('bungee-title11-ul2-li1') ?>
                </li>
                <li>
                  <?php say('bungee-title11-ul2-li2') ?>
                </li>
                <!-- <li><?php say('bungee-title11-ul2-li3') ?></li>
<li><?php say('bungee-title11-ul2-li4') ?></li>
<li><?php say('bungee-title11-ul2-li5') ?></li>
<li><?php say('bungee-title11-ul2-li6') ?></li>
<li><?php say('bungee-title11-ul2-li7') ?></li> -->
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background">
              <ul>
                <li>
                  <?php say('bungee-tech-spec-ul3-li1') ?>
                </li>
                <!-- <li><?php say('bungee-tech-spec-ul3-li2') ?></li> -->
                <!-- <li><?php say('bungee-tech-spec-ul3-li3') ?></li>
<li><?php say('bungee-tech-spec-ul3-li4') ?></li>
<li><?php say('bungee-tech-spec-ul3-li5') ?></li>
<li><?php say('bungee-tech-spec-ul3-li6') ?></li>
<li><?php say('bungee-tech-spec-ul3-li7') ?></li> -->
              </ul>
            </div>
          </div>
        </div>

        <!-- =====================================================================  -->
        <!-- =====================================================================  -->
        <!-- =                    MORE PRODUCTS                                  =  -->
        <!-- =====================================================================  -->
        <!-- =====================================================================  -->

        <div class="container body-row other-features" id="productBottomPage">
          <h2 style="bold gaming-text" class="bold"><?php say ('titleProductBottom') ?></h2>

          <div class="col-lg-4 col-md-4 col-xs-12 accessory-item text-center" href="/47w-control">
            <a href="/accessories/mouse-pads/index.php">
              <img width='260px' height:'260px' src="../../shared/images/product_bottom/CTRL-1bottom.png">
            </a>
            <a href="/accessories/mouse-pads/index.php">
              <h2 class="text-center product-item-link red">47W-Control Mouse Pad</h2>
            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="/m50">
            <a href="/accessories/m50-pro-mouse/index.php">
              <img width='260px' height:'260px' src="../../shared/images/product_bottom/M50-2bottom.png">
            </a>
            <a href="/accessories/m50-pro-mouse/index.php">
              <h2 class="text-center product-item-link red">M50 Pro Gaming Mouse</h2>
            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="/47w-flex">
            <a href="/accessories/mouse-pads/index.php">
              <img width='260px' height:'260px' src="../../shared/images/product_bottom/Flex-1bottom.png">
            </a>
            <a href="/accessories/mouse-pads/index.php">
              <h2 class="text-center product-item-link red">47W-Flex Mouse Pad</h2>
            </a>
          </div>

          </div>

        <div class="row" >
             <div class="col-sm-offset-5 col-sm-2 text-center">
                 <a class="btn btn-lg buy-button " href="https://shop.daskeyboard.com/products/division-zero-mouse-bungee" role="button">BUY NOW</a>
             </div>
        </div>
          

        </div>


        <!-- <a class="checkitout" href="" style="margin:50px auto 0px auto">
Division Zero Bungee
<div>Buy now</div>
</a> -->
      </div>

    </div>
    <!-- #main -->

</div> <!-- closing space-from-header -->

<?php include '../../footer.php' ?>