<?php include '../../../header.php' ?>
<style>
#prod-desc h3,h2.upperbold{font-size:24px;margin-bottom:20px;font-weight:700}
#prod-desc h2{font-size:30px;font-weight:700;margin-bottom:20px}
#productBottomPage h2{padding-top:0}
h1,h2,h3{text-shadow:1px 1px 9px #000}
.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:#fff;margin-top:20px;margin-bottom:10px}
body{color:#ddd;background-color:#080808}
.carousel .item{background-color:#000}
.container>.social-share{background-color:#000}
#main{background-color:#000}
</style>
<div  id="loading" class="container text-center" >
  <div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
  </div>
</div>


<div id ="main" class="f47w">

<!-- Carousel  ================================================== -->
  <div id="47w-flex-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#47w-flex-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#47w-flex-carousel" data-slide-to="1"></li>
      <li data-target="#47w-flex-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div style="background-color:#000;" class="item active">
        <img width='916px' height='517px' class="first-slide center-block" src="images/47w-flex-front_view.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption center-block">
            <a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/products/division-zero-47w-flex" role="button">BUY NOW</a>
            <h1 class="red"><?php say('47w-flex-slider-title1-subtitle') ?></h1>
            <h2 class=""><?php say('47w-flex-slider-title1') ?></h2>
          </div>
        </div>
      </div>
      <div style="background-color:#000;" class="item">
        <img width='916px' height='511px' class="second-slide center-block" src="images/47w-flex-flat_view.png" alt="Second slide">
        <div class="container">
          <div class="carousel-caption center-block">
            <a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/products/division-zero-47w-flex" role="button">BUY NOW</a>
            <h1 class="red"><?php say('47w-flex-slider-title2-subtitle') ?></h1>
            <h2 class=""><?php say('47w-flex-slider-title2') ?></h2>
          </div>
        </div>
      </div>
      <div style="background-color:#000;" class="item">
        <img width='916px' height='517px' class="third-slide center-block" src="images/47w-flex-angled_right_view.png" alt="Third slide">
        <div class="container">
          <div class="carousel-caption center-block">
            <a class="btn btn-lg buy-button pull-right" href="http://shop.daskeyboard.com/products/division-zero-47w-flex" role="button">BUY NOW</a>
            <h1 class="red"><?php say('47w-flex-slider-title3-subtitle') ?></h1>
            <h2 class=""><?php say('47w-flex-slider-title3') ?></h2>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#47w-flex-carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-menu-left icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#47w-flex-carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-menu-right icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->
  <div class="container">
  <div class="row social-share"><?php include("../../../shared/includes/inc_social_share_module.php"); ?>  </div>
  </div>

  <div  class="wrap">

    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                         PRODUCT GALLERY                           =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <div id="product-gallery">
      <div class="container">
        <h2 class="text-center"><?php say('product-gallery-text') ?></h2>
        <div id="product-gallery-slider">
          <ul class="slides">
            <li data-thumb="images/47w-flex-front_view_small.png">
              <img width='680px' height='384px' src="images/47w-flex-front_view.png" />
            </li>
            <li data-thumb="images/47w-flex-flat_view_small.png">
              <img width='680px' height='380px' src="images/47w-flex-flat_view.png" />
            </li>
            <li data-thumb="images/47w-flex-angled_right_view_small.png">
              <img width='680px' height='384px' src="images/47w-flex-angled_right_view.png" />
            </li>
            <li data-thumb="images/47w-flex-angled_left_view_small.png">
              <img width='680px' height='384px' src="images/47w-flex-angled_left_view.png" />
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                       PRODUIT DESCRIPTION                         =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->

    <div id="prod-desc">
      <div class="container prod-desc-container">
        <div class="row">
          <div class="col-md-6">
          <h1><?php say('47w-flex-title5') ?></h1>
            <h2><?php say('47w-flex-title5-subtitle1') ?></h2>
            <p><?php say('47w-flex-title5-paragraph') ?></p>
            <h3><?php say('47w-flex-title-icons') ?></h3>
            <div class="row">
              <img width='60px' height='60px' class="game-icons" src="../../../shared/icons/CS-GO-icon.png" alt="Icon of Counter Strike GO" title = "Counter Strike : Global Offensive">
              <img width='60px' height='60px' class="game-icons" src="../../../shared/icons/smite.png" alt="Icon of Smite" title="Smite">
            </div>
            <h3><?php say('47w-flex-title6') ?></h3>
            <p><?php say('47w-flex-title6-paragraph') ?></p>
            <div class="text-center image-padding-top"><img width='455px' height='251px' src="images/47w-flex-with-shadow-front_view.png" alt=""></div>
            <h3><?php say('47w-flex-title9') ?></h3>
            <p><?php say('47w-flex-title9-paragraph') ?></p>
            <h3><?php say('47w-flex-title10') ?></h3>
            <p><?php say('47w-flex-title10-paragraph') ?></p>
            </div>
          <div class="col-md-6">
            <div class="text-center image-padding-top"><img width='455px' height='254px' src="images/47w-flex-flat_view.png" alt=""></div>
            <h3><?php say('47w-flex-title7') ?></h3>
            <p><?php say('47w-flex-title7-paragraph') ?></p>
            <h3><?php say('47w-flex-title8') ?></h3>
            <p><?php say('47w-flex-title8-paragraph') ?></p>
            <div class="text-center image-padding-top"><img width='334px' height='276px' src="images/47w-flex-outline.png" alt="Skeleton of the gaming mousepad 47W-Flex by Division Zero"></div>
          </div>
        </div>
      </div>


      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                     TECHNICAL SPECIFICATIONS                      =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->

      <div id="technical-specifications" class="container">
        <h2 class="bold"><?php say('technical-specifications') ?></h2>
        <div class="row-md-height" id="tech-spec">
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background">
            <ul>
              <li><?php say('47w-flex-title11-ul1-li1') ?></li>
              <li><?php say('47w-flex-title11-ul1-li2') ?></li>
              <!-- <li><?php say('47w-flex-title11-ul1-li3') ?></li> -->
              <!-- <li><?php say('47w-flex-title11-ul1-li4') ?></li>
              <li><?php say('47w-flex-title11-ul1-li5') ?></li>
              <li><?php say('47w-flex-title11-ul1-li6') ?></li>
              <li><?php say('47w-flex-title11-ul1-li7') ?></li> -->
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-red-background">
            <ul>
              <li><?php say('47w-flex-title11-ul2-li1') ?></li>
              <li><?php say('47w-flex-title11-ul2-li2') ?></li>
              <!-- <li><?php say('47w-flex-title11-ul2-li3') ?></li> -->
              <!-- <li><?php say('47w-flex-title11-ul2-li4') ?></li>
              <li><?php say('47w-flex-title11-ul2-li5') ?></li>
              <li><?php say('47w-flex-title11-ul2-li6') ?></li>
              <li><?php say('47w-flex-title11-ul2-li7') ?></li> -->
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background">
            <ul>
              <li><?php say('47w-flex-tech-spec-ul3-li1') ?></li>
              <li><?php say('47w-flex-tech-spec-ul3-li2') ?></li>
              <li><?php say('47w-flex-tech-spec-ul3-li3') ?></li>
              <!-- <li><?php say('47w-flex-tech-spec-ul3-li4') ?></li>
              <li><?php say('47w-flex-tech-spec-ul3-li5') ?></li>
              <li><?php say('47w-flex-tech-spec-ul3-li6') ?></li>
              <li><?php say('47w-flex-tech-spec-ul3-li7') ?></li> -->
            </ul>
          </div>
        </div>
      </div>



      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                    MORE PRODUCTS                                  =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->

        <div class="container" id="productBottomPage">
          <h2 class="bold"><?php say ('titleProductBottom') ?></h2>

          <div class="col-lg-4 col-md-4 col-xs-12 accessory-item text-center" href="/47w-control">
              <a href="../47w-control">
                  <img width='260px' height='260px' src="../../../shared/images/product_bottom/CTRL-1bottom.png">
              </a>
              <a href="../47w-control">
                <h2 class="text-center product-item-link red">47W-Control Mouse Pad</h2>
              </a>
          </div>


          <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="../../../m/m50-mouse">
            <a href="../../../m/m50-mouse">
              <img width='260px' height='260px' src="../../../shared/images/product_bottom/M50-2bottom.png">
            </a>
            <a href="../../../m/m50-mouse">
              <h2 class="text-center product-item-link red">M50 Pro Gaming Mouse</h2>
            </a>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12 accessory-item text-center" href="../../../x/x40-mechanical-keyboard">
              <a href="../../../x/x40-mechanical-keyboard">
                  <img width='260px' height='260px' src="../../../shared/images/product_bottom/X40-1bottom.png">
              </a>
              <a href="../../../x/x40-mechanical-keyboard">
                <h2 class="text-center product-item-link red">X40 Pro Gaming Mechanical Keyboard</h2>
              </a>
          </div>

        </div>
        <div style="padding-bottom:20px;" class="text-center">
          <a class="btn btn-lg buy-button" style="margin:0px auto 0px auto" href="http://shop.daskeyboard.com/products/division-zero-47w-flex" role="button">BUY NOW</a>
        </div>

      <!-- <a class="checkitout" href="" style="margin:50px auto 0px auto">
      Division Zero 47W-Flex
      <div>Buy now</div>
    </a> -->
    </div>

  </div> <!-- #main -->
</div>

<?php include '../../../footer.php' ?>
