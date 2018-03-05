<?php include '../../header.php' ?>

<div class="space-from-header" >




  <!-- =====================================================================  -->
  <!-- =====================================================================  -->
  <!-- =                            SLIDER                                 =  -->
  <!-- =====================================================================  -->
  <!-- =====================================================================  -->

  <div id="loading" class="container text-center">
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>
  <div>

    <div class="body-row top-row">
      <div id="x40-carousel" class="carousel slide" data-ride="carousel">


        <!-- Indicators -->
        <div class="gaming">
          <ol class="carousel-indicators">
            <li data-target="#x40-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#x40-carousel" data-slide-to="1"></li>
            <li data-target="#x40-carousel" data-slide-to="2"></li>
          </ol>
        </div>
        <div class="carousel-inner background-carousel-inner" role="listbox">
          <div class="item active">
            <img width='916px' height='517px'class="first-slide center-block" src="images/division-zero-gaming-mouse-banner1.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption center-block">
                <a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/products/division-zero-m50-pro-gaming-mouse" role="button">BUY NOW</a>
                <h1 class="red"><?php say('m50-slider-title1-subtitle') ?></h1>
                <h2 class="gaming-text"><?php say('m50-slider-title1') ?></h2>
              </div>
            </div>
          </div>
          <div class="item">
            <img width='916px' height='517px' class="second-slide center-block" src="images/division-zero-gaming-mouse-banner2.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption center-block">
                <a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/products/division-zero-m50-pro-gaming-mouse" role="button">BUY NOW</a>
                <h1 class="red"><?php say('m50-slider-title2-subtitle') ?></h1>
                <h2 class="gaming-text"><?php say('m50-slider-title2') ?></h2>
              </div>
            </div>
          </div>
          <div class="item">
            <img width='916px' height='517px' class="third-slide center-block" src="images/division-zero-gaming-mouse-banner3.png" alt="Third slide">
            <div class="container">
              <div class="carousel-caption center-block">
                <a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/products/division-zero-m50-pro-gaming-mouse" role="button">BUY NOW</a>
                <h1 class="red"><?php say('m50-slider-title3') ?></h1>
                <h2 class="gaming-text"><?php say('m50-slider-title3-subtitle') ?></h2>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#x40-carousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-menu-left icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#x40-carousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-menu-left icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- /.carousel -->
        <div class="container-fluid" style="background-color:black;">
        <div class="row social-share"><?php include("../../shared/includes/inc_social_share_module.php"); ?>  </div>
      </div>

      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                         VIDEO                                     =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->

    <div class="wrap">
      <div  class="container-row-body" style="background-color: #3D3E3E;">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 video-comment" style="padding-left:0px;">
              <h2 class="gaming-text" style="font-weight:bold; text-shadow: black -2px -2px 0.7em;"><?php say('m50-title4') ?></h2>
              <p class="gaming-text"><?php say('m50-title4-paragraph') ?></p>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 content right">
              <div class="video embed-responsive embed-responsive-16by9" >
                <iframe alt="Division Zero Presentation video" width="100%" height="100%" class='embed-responsive-item' src="https://www.youtube.com/embed/oFTa8zpax6o"allowfullscreen></iframe>
              </div>
            </div>
        </div>
      </div>
    </div>
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                         SPINNING MOUSE                            =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      
      <div id="x40-animation" class="container-row-body hidden-xs" style="background-color:black;">
        <div class="body-row hidden-xs" style="background-color:black">
          <iframe id="spinning-mouse" src="spinning-mouse/index.html" scrolling="no" content="user-scalable=no;"></iframe>
        </div>
      </div>

    </div>
    <!-- WRAP -->



    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                       PRODUIT DESCRIPTION                         =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <div id="prod-desc" class="container-row-body">
      <div class="container prod-desc-container">
        <div class="row" style="padding-bottom:70px;">
          <div class="col-md-6">
            <h1><?php say('m50-title5') ?></h1>
            <h2 class="gaming-text"><?php say('m50-title5-subtitle') ?></h2>
            <p>
              <?php say('m50-title5-paragraph') ?>
            </p>
            <h3 class="gaming-text"><?php say('m50-title-icons') ?></h3>
            <img width='60px' height='60px' class="game-icons" src="../../shared/icons/CS-GO-icon.png" alt="Icon of Counter Strike GO">
            <img width='60px' height='60px' class="game-icons" src="../../shared/icons/LoL-Icon.png" alt="Icon of LoL">
            <img width='60px' height='60px' class="game-icons" src="../../shared/icons/SC2-Icon.png" alt="Icon of SC2">
            <img width='60px' height='60px' class="game-icons" src="../../shared/icons/dota-2-icon.png" alt="Icon of dota 2">
            <h3 class="gaming-text"><?php say('m50-title6') ?></h3>
            <p>
              <?php say('m50-title6-paragraph') ?>
            </p>
            <div class="text-center image-padding-top"><img width='455px' height='257px' src="images/division-zero-gaming-mouse-banner1.png" alt="Mouse front view"></div>
            <h3 class="gaming-text"><?php say('m50-title7') ?></h3>
            <p>
              <?php say('m50-title7-paragraph') ?>
            </p>
            <h3 class="gaming-text"><?php say('m50-title8') ?></h3>
            <p>
              <?php say('m50-title8-paragraph') ?>
            </p>
            <h3 class="gaming-text"><?php say('m50-title11') ?></h3>
            <p class="last">
              <?php say('m50-title11-paragraph') ?>
            </p>
          </div>
          <div class="col-md-6">
            <div class="text-center image-padding-top"><img width='455px' height='278px' src="images/m50-3Q-description.png" alt="Mouse 3Q with mouse background"></div>
            <h3 class="gaming-text"><?php say('m50-title9') ?></h3>
            <p>
              <?php say('m50-title9-paragraph') ?>
            </p>
            <h3 class="gaming-text"><?php say('m50-title10') ?></h3>
            <p>
              <?php say('m50-title10-paragraph') ?>
            </p>
            <div class="text-center image-padding-top"><img width='230px' height='272px' src="images/division-zero-gaming-mouse-skeleton.png" alt="Skeleton Mouse"></div>

            <style type="text/css">
              .prod-desc-list-number {
                color: #ffffff;
              }
            </style>

            <div class="prod-desc-bullet-point last">
              <ol>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">1.</span> -->
                  <?php say('m50-title11-ul-li1') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">2.</span> -->
                  <?php say('m50-title11-ul-li2') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">3.</span> -->
                  <?php say('m50-title11-ul-li4') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">4.</span> -->
                  <?php say('m50-title11-ul-li5') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">5.</span> -->
                  <?php say('m50-title11-ul-li6') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">6.</span> -->
                  <?php say('m50-title11-ul-li7') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">7.</span> -->
                  <?php say('m50-title11-ul-li8') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">8.</span> -->
                  <?php say('m50-title11-ul-li9') ?>
                </li>
                <li style="line-height:19px;">
                  <!-- <span class="prod-desc-list-number">10.</span> -->
                  <?php say('m50-title11-ul-li11') ?>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>


      <div class="container other-features body-row prod-desc-container" style="padding-bottom:55px">
        <h2 class="gaming-text"><?php say('m50-title12') ?></h2>
        <div class="row">
          <div class="col-md-6">
            <div class="col-xs-2">
              <img width='40px' height='40px' src="images/wheel.png" alt="">
            </div>
            <div class="col-xs-10">
              <h3 class="gaming-text"><?php say('m50-title12-subtitle1') ?></h3>
              <p>
                <?php say('m50-title12-subtitle1-paragraph') ?>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-xs-2">
              <img width='40px' height='40px' src="images/pf-3.png" alt="">
            </div>
            <div class="col-xs-10">
              <h3 class="gaming-text"><?php say('m50-title12-subtitle3') ?></h3>
              <p>
                <?php say('m50-title12-subtitle3-paragraph') ?>
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="col-xs-2">
              <img width='40px' height='40px' src="images/pf-2.png" alt="">
            </div>
            <div class="col-xs-10">
              <h3 class="gaming-text"><?php say('m50-title12-subtitle2') ?></h3>
              <p class="last">
                <?php say('m50-title12-subtitle2-paragraph') ?>
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-xs-2">
              <img width='40px' height='40px' src="images/pf-4.png" alt="">
            </div>
            <div class="col-xs-10">
              <h3 class="gaming-text"><?php say('m50-title12-subtitle4') ?></h3>
              <p class="last">
                <?php say('m50-title12-subtitle4-paragraph') ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                     TECHNICAL SPECIFICATIONS                      =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <div class="body-row container other-features prod-desc-container" style="padding-bottom:55px">
        <h2 class="bold gaming-text"><?php say('m50-title13') ?></h2>
        <div class="row-md-height" id="tech-spec">
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background last">
            <ul>
              <li>
                <?php say('m50-title13-ul1-li1') ?>
              </li>
              <li>
                <?php say('m50-title13-ul1-li2') ?>
              </li>
              <li>
                <?php say('m50-title13-ul1-li3') ?>
              </li>
              <li>
                <?php say('m50-title13-ul1-li4') ?>
              </li>
              <li>
                <?php say('m50-title13-ul1-li5') ?>
              </li>
              <li>
                <?php say('m50-title13-ul1-li6') ?>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-red-background last">
            <ul>
              <li>
                <?php say('m50-title13-ul2-li1') ?>
              </li>
              <li>
                <?php say('m50-title13-ul2-li2') ?>
              </li>
              <li>
                <?php say('m50-title13-ul2-li3') ?>
              </li>
              <li>
                <?php say('m50-title13-ul2-li4') ?>
              </li>
              <!-- <li><?php say('m50-title13-ul2-li5') ?></li> -->
              <li>
                <?php say('m50-title13-ul2-li6') ?>
              </li>
              <li>
                <?php say('m50-title13-ul2-li7') ?>
              </li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background last">
            <ul>
              <li>
                <?php say('m50-tech-spec-ul3-li1') ?>
              </li>
              <li>
                <?php say('m50-tech-spec-ul3-li2') ?>
              </li>
              <li>
                <?php say('m50-tech-spec-ul3-li3') ?>
              </li>
              <li>
                <?php say('m50-tech-spec-ul3-li4') ?>
              </li>
              <!-- <li><?php say('m50-tech-spec-ul3-li5') ?></li> -->
              <li>
                <?php say('m50-tech-spec-ul3-li6') ?>
              </li>
              <li>
                <?php say('m50-tech-spec-ul3-li7') ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- ====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                         PRODUCT GALLERY                           =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <div class="container prod-desc-container body-row" style="padding-bottom:50px;">
        <h2 class="bold gaming-text">Product Gallery</h2>
        <div id="product-gallery-slider">
          <ul class="slides">
            <li data-thumb="images/m50-3Q-thumb.png">
              <img width='680px' height='384px' src="images/m50-3Q-gallery.png" alt="Mouse M50 3Q View" />
            </li>
            <li data-thumb="images/m50-top-thumb.png">
              <img width='680px' height='384px' src="images/m50-top-gallery.png" alt="Mouse M50 Top View" />
            </li>
            <li data-thumb="images/m50-front-thumb.png">
              <img width='680px' height='384px' src="images/m50-front-gallery.png" alt="Mouse M50 Front View" />
            </li>
          </ul>
        </div>
      </div>



      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                    MORE PRODUCTS                                  =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->

      <div class="container body-row other-features" id="productBottomPage">
        <h2 class="bold gaming-text"><?php say ('titleProductBottom') ?></h2>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-12 accessory-item text-center" href="../../x/x40-mechanical-keyboard">
            <a href="../../x/x40-mechanical-keyboard">
              <img width='260px' height='260px' src="../../shared/images/product_bottom/X40-1bottom.png">
            </a>
            <a href="../../x/x40-mechanical-keyboard">
              <h2 class="text-center product-item-link gaming-green">X40 Pro Gaming Mechanical Keyboard</h2>
            </a>
          </div>


          <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="../../accessories/mouse-pads">
            <a href="../../accessories/mouse-pads">
              <img width='260px' height='260px' src="../../shared/images/product_bottom/SpeedBanner2.png">
            </a>
            <a href="../../accessories/mouse-pads">
              <h2 class="text-center product-item-link gaming-green">47W-Speed Mouse Pad</h2>
            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="../../accessories/bungee">
            <a href="../../accessories/bungee">
              <img width='260px' height='260px' src="../../shared/images/product_bottom/Bungee-2bottom.png">
            </a>
            <a href="../../accessories/bungee">
              <h2 class="text-center product-item-link gaming-green">Gaming Mouse Bungee</h2>
            </a>
          </div>
        </div>
        
        <div class="row">
          <div class="text-center">
            <a class="btn btn-lg buy-button" href="http://shop.daskeyboard.com/products/division-zero-m50-pro-gaming-mouse" role="button">BUY NOW</a>
          </div>
        </div>
      </div>

    </div>
    <!-- prod-desc -->
  </div>
  <!-- #main -->
  </div>
  <!--contents -->

  </div> <!-- closing space-from-header -->
  

<?php include '../../footer.php' ?>