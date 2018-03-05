<?php include_once '../../header.php' ?>

<div class="space-from-header" >

  <!--content start -->
  <?php
if ($current_language !== "/de"){
    $href = "http://shop.daskeyboard.com/products/das-keyboard-prime-13";
}
else{
    $href = "/de/where-to-buy/";
}
?>

<style>
  .row {
    margin-right: 0px;
    margin-left: 0px;
  }
</style>
   <!---->
    <!-------------------------------------------------------- CAROUSEL ---------------------------------------------------------------------------------------------------->
  <div class="top-row ">
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
          <img class="first-slide center-block" src="images/division-zero-x40-gaming-mechanical-keyboard-banner1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption center-block">
              <a class="btn btn-lg buy-button pull-right not-in-game" href="http://shop.daskeyboard.com/products/division-zero-x40-pro-gaming-mechanical-keyboard" role="button">BUY NOW</a>
              <h1 class="red"><?php say('x40-slider-title1-subtitle') ?></h1>
              <h2 class=""><?php say('x40-slider-title1') ?></h2>
            </div>
            <div class="block-bottom pull-right">
              <img src="images/logos-banner.png">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide center-block" src="images/division-zero-x40-gaming-mechanical-keyboard-banner2.png"  alt="Second slide">
          <div class="container">
            <div class="carousel-caption center-block">
              <a class="btn btn-lg buy-button pull-right not-in-game" href="http://shop.daskeyboard.com/products/division-zero-x40-pro-gaming-mechanical-keyboard" role="button">BUY NOW</a>
              <h1 class="red"><?php say('x40-slider-title2-subtitle') ?></h1>
              <h2 class=""><?php say('x40-slider-title2') ?></h2>
            </div>
            <div class="pull-right block-bottom">
              <img src="images/logos-banner.png">
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide center-block" src="images/division-zero-x40-gaming-mechanical-keyboard-banner3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption center-block">
              <a class="btn btn-lg buy-button pull-right not-in-game buy-button" href="http://shop.daskeyboard.com/products/division-zero-x40-pro-gaming-mechanical-keyboard" role="button">BUY NOW</a>
              <h1 class="red"><?php say('x40-slider-title3-subtitle') ?></h1>
              <h2 class=""><?php say('x40-slider-title3') ?></h2>
            </div>
            <div class="pull-right block-bottom">
              <img src="images/logos-banner.png">
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

    </div><!-- /.carousel -->
      <div class="container-fluid" style="background-color:black;">
        <div class="row social-share">
          <?php include("../../shared/includes/inc_social_share_module.php"); ?>  
        </div>
      </div>
    </div>

  <!-- =====================================================================  -->
  <!-- =====================================================================  -->
  <!-- =                            VIDEO                                  =  -->
  <!-- =====================================================================  -->
  <!-- =====================================================================  -->

  <div class="wrap" >


    <div  class="container-row-body" style="background-color: #3D3E3E;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12 video-comment" style="padding-left:0px;">
            <h2 class="gaming-text" style="font-weight:bold; text-shadow: black -2px -2px 0.7em;"><?php say('x40-title4') ?></h2>
            <p class="gaming-text"><?php say('x40-title4-paragraph') ?></p>
          </div>
          <div class="col-lg-12 col-md-12 col-xs-12 content right">
            <div class="video embed-responsive embed-responsive-16by9" >
              <iframe alt="Division Zero Presentation video" width="100%" height="100%" class='embed-responsive-item' src="https://www.youtube.com/embed/oFTa8zpax6o"allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--END VIDEO -->


    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                         CUSTOMIZE PRODUCT                         =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->

    <div id="x40-animation" class="container-row-body hidden-xs" style="background-color:black;">
        <div style="width:80%; margin-left: 5%; margin-bottom:20px;" class=" hidden-xs">
          <div class="row">
              <iframe  src="https://emersya.com/en/apps/daskeyboard_x40" width="100%" height="800px" style="background-color:black !important;" frameborder=0 webkitallowfullscreen mozallowfullscreen allowfullscreen ></iframe>
          </div>
        </div>
        <div class="container text-center text-comment">
          <div class="row text-comment">
            <div class="col-lg-12 col-md-12 col-xs-12 content left">
              <h2 class="gaming-text" ><?php say('x40-title5') ?></h2>
              <p style="text-align: center; " class="gaming-text"><?php say('x40-title6-paragraph') ?></p>
            </div>
          </div>
          <div class="row text-center">
            <a class="btn btn-lg buy-button" href="../top-panels" style="margin-bottom:20px;">
              LEARN MORE
            </a>
          </div>
        </div>
    </div>

    <!--END CUSTOMIZE PRODUCT-->

     <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                       PRODUCT DESCRIPTION                         =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <div id="prod-desc" class="container-row-body">
      <div class="container prod-desc-container ">
        <div class="row" style="padding-bottom:70px;">
          <div class="col-md-6">
            <h1><?php say('x40-title-winning') ?></h1>
            <h2 class="gaming-text"><?php say('x40-title7-subtitle1') ?></h2>
            <p class="gaming-text"><?php say('x40-title7-subtitle1-paragraph') ?></p>
            <div class="text-center image-padding-top">
              <img src="images/division-zero-x40-gaming-mechanical-keyboard-skeleton.png" alt="Skeleton of the Gaming Keyboard x40 by Division Zero">
            </div>
            <h3 class="gaming-text"><?php say('x40-title-icons') ?></h3>
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/CS-GO-icon.png" alt="Icon of Counter Strike GO" title = "Counter Strike : Global Offensive">
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/LoL-Icon.png" alt="Icon of LoL" title="League of Legends">
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/OSU-icon.png" alt="Icon of OSU" title="OSU!">
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/SC2-Icon.png" alt="Icon of SC2" title = "Starcraft II">
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/WoW-Icon.png" alt="Icon of WoW" title="World of Warcraft">
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/dota-2-icon.png" alt="Icon of dota 2" title="DOTA 2">
              <img class="game-icons" src="/gaming/mechanical-keyboard/images/icons/heroes-of-the-storm-icon.png" alt="Icon of heroes of the storm" title="Heroes of the Storm">
            <h3 class="gaming-text"><?php say('x40-title11') ?></h3>
            <p><?php say('x40-title11-paragraph1') ?></p>
            <img src="/gaming/mechanical-keyboard/images/images_with_logo/AZ-logo.png">
          </div>
          <div class="col-md-6">
            <div class="text-center image-padding-top">
              <img src="images/division-zero-x40-gaming-mechanical-keyboard-shadow.png" alt="Placeholder image for now">
            </div>
            <h3 class="gaming-text"><?php say('x40-title8') ?></h3>
            <p><?php say('x40-title8-paragraph') ?></p>
            <h3 class="gaming-text"><?php say('x40-title9') ?></h3>
            <p><?php say('x40-title9-paragraph') ?></p>
            <h3 class="gaming-text"><?php say('x40-title10') ?></h3>
            <p><?php say('x40-title10-paragraph') ?></p>
            <img src="/gaming/mechanical-keyboard/images/images_with_logo/redled-logo.png">
          </div>
        </div>
      </div>

      <div class="container prod-desc-container ">
        <h2 class="gaming-text"><?php say('x40-title14') ?></h2>
        <div class="row other-features" id="other_feat">
          <div class="col-md-6" style="padding-top:0px;">
            <div class="col-xs-2 image">
              <img src="images/x40_icon_usb.png">
            </div>
            <div class="col-xs-10 content">
              <h3 class="gaming-text"><?php say('x40-title14-subtitle1') ?></h3>
              <p><?php say('x40-title14-subtitle1-paragraph') ?></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-6" style="padding-top:0px;">
            <div class="col-xs-2 image">
              <img src="images/x40_icon_game.png">
            </div>
            <div class="col-xs-10 content">
              <h3 class="gaming-text"><?php say('x40-title14-subtitle2') ?></h3>
              <p><?php say('x40-title14-subtitle2-paragraph') ?></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-6" style="padding-top:0px;">
            <div class="col-xs-2 image">
              <img src="images/x40_icon_volume.png">
            </div>
            <div class="col-xs-10 content">
              <h3 class="gaming-text"><?php say('x40-title14-subtitle3') ?></h3>
              <p><?php say('x40-title14-subtitle3-paragraph') ?></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="col-md-6" style="padding-top:0px;">
            <div class="col-xs-2 image">
              <img src="images/x40_icon_cable.png">
            </div>
            <div class="col-xs-10 content">
              <h3 class="gaming-text"><?php say('x40-title14-subtitle4') ?></h3>
              <p><?php say('x40-title14-subtitle4-paragraph') ?></p>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="clearfix"></div>
            <div class="row col-md-12" style="margin-bottom:30px; padding-bottom:70px;">
              <div class="col-md-6" style="padding-top:0px; padding-bottom:0px;">
                <img src="images/division-zero-x40-gaming-mechanical-keyboard-jacks.png">
              </div>
              <div class="col-md-6" style="padding-top:0px; padding-bottom:0px;">
                <img src="images/division-zero-x40-gaming-mechanical-keyboard-cable.png">
              </div>
            </div>
        </div>
      </div>

    <!-- =====================================================================  -->
    <!-- =====================================================================  -->
    <!-- =                             SWITCHES                              =  -->
    <!-- =====================================================================  -->
    <!-- =====================================================================  -->

      <div class="switch_row" id="switch_bottom">
          <div class="switch_bg"></div>
          <div class="container prod-desc-container switches-x40  ">
            <h2 class="gaming-text"><?php say('x40-title16') ?></h2>
            <div class="row" style="padding-bottom:50px;">
              <div class="col-md-6 col-sm-12 col-xs-12" style="padding:0px;">
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <h3 class="gaming-text"><?php say('x40-title13-subtitle') ?></h3>
                  <div class="description-switches-x40-2"><?php say('x40-title12-paragraph') ?></div>
                  <button id='btnStart1'
                            class="btn btn-default btn-sound hidden-xs"
                            ng-click='SoundTactile()'
                            data-mp3="/gaming/mechanical-keyboard/sound/TactileFinal2.0.m4a"
                            style="margin-right:10px;">
                      <span id="musicSign1" class="glyphicon glyphicon-play"></span>
                      <div class="bar-container">
                        <div class="inline-block-wrapper">
                            <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 25.6209px;"></div></div>
                        </div>
                        <div class="inline-block-wrapper">
                            <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 1.837189px;"></div></div>
                        </div>
                        <div class="inline-block-wrapper">
                            <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 23.8256px;"></div></div>
                        </div>
                        <div class="inline-block-wrapper">
                            <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 18.5844px;"></div></div>
                        </div>
                        <div class="inline-block-wrapper">
                            <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 1.32851px;"></div></div>
                        </div>
                    </div>
                  </button>
                  <a href="/switches">
                    <button id="switches-page"
                    class= "btn btn-default btn-sound btn-switch hidden-xs"
                    style="height:43px; color:#DDD;"
                    >
                    Learn more
                  </button>
                </a>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <img src="images/division-zero-x40-gaming-mechanical-keyboard-linear-switch.png" >
                  <div class="description-switches-x40"><?php say('x40-title12-paragraph2') ?></div>
                  <div class="">
                    <button id='btnStart1'
                              class="btn btn-default btn-sound visible-xs"
                              ng-click='SoundTactile()'
                              data-mp3="sound/TactileFinal2.0.m4a"
                              style="margin-right:10px;">
                        <span id="musicSign1" class="glyphicon glyphicon-play"></span>
                        <div class="bar-container">
                          <div class="inline-block-wrapper">
                              <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 25.6209px;"></div></div>
                          </div>
                          <div class="inline-block-wrapper">
                              <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 1.837189px;"></div></div>
                          </div>
                          <div class="inline-block-wrapper">
                              <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 23.8256px;"></div></div>
                          </div>
                          <div class="inline-block-wrapper">
                              <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 18.5844px;"></div></div>
                          </div>
                          <div class="inline-block-wrapper">
                              <div class="bar-wrapper"><div class="bar1 tactile-button" style="height: 1.32851px;"></div></div>
                          </div>
                      </div>
                    </button>
                    <a href="/switches">
                      <button id="switches-page"
                      class= "btn btn-default btn-sound btn-switch visible-xs"
                      style="height:43px; color:#DDD;"
                      >
                      Learn more
                    </button>
                  </a>
                  </div>
                </div>
              </div>
                <div class="col-md-6 col-sm-12 col-xs-12" style="padding:0px;">
                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <h3 class="gaming-text"><?php say('x40-title16-subtitle') ?></h3>
                    <div class="description-switches-x40-1"><?php say('x40-title16-paragraph-') ?></div>
                    <button id='btnStart'
        							class="btn btn-default btn-sound hidden-xs"
        							ng-click='SoundLinear()'
        							data-mp3="sound/LinearFinal2.0.m4a"
                      style="margin-right:10px;">
        								<span id="musicSign" class="glyphicon glyphicon-play"></span>
        								<div class="bar-container">
        									<div class="inline-block-wrapper">
        											<div class="bar-wrapper"><div class="bar linear-button" style="height: 25.6209px;"></div></div>
        									</div>
        									<div class="inline-block-wrapper">
        											<div class="bar-wrapper"><div class="bar linear-button" style="height: 1.837189px;"></div></div>
        									</div>
        									<div class="inline-block-wrapper">
        											<div class="bar-wrapper"><div class="bar linear-button" style="height: 23.8256px;"></div></div>
        									</div>
        									<div class="inline-block-wrapper">
        											<div class="bar-wrapper"><div class="bar linear-button" style="height: 18.5844px;"></div></div>
        									</div>
        									<div class="inline-block-wrapper">
        											<div class="bar-wrapper"><div class="bar linear-button" style="height: 1.32851px;"></div></div>
        									</div>
        							</div>
        						</button>
                      <a href="/switches">
                        <button id="switches-page"
                        class= "btn btn-default btn-sound btn-switch hidden-xs"
                        style="height:43px; color:#DDD;"
                        >
                        Learn more
                      </button>
                    </a>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-12">
                    <img src="images/division-zero-x40-gaming-mechanical-keyboard-tactile-switch.png" >
                    <div class="description-switches-x40"><?php say('x40-title16-paragraph-2') ?></div>
                    <div class="">
                      <button id='btnStart'
                        class="btn btn-default btn-sound visible-xs"
                        ng-click='SoundLinear()'
                        data-mp3="sound/LinearFinal2.0.m4a"
                        style="margin-right:10px;">
                          <span id="musicSign" class="glyphicon glyphicon-play"></span>
                          <div class="bar-container">
                            <div class="inline-block-wrapper">
                                <div class="bar-wrapper"><div class="bar linear-button" style="height: 25.6209px;"></div></div>
                            </div>
                            <div class="inline-block-wrapper">
                                <div class="bar-wrapper"><div class="bar linear-button" style="height: 1.837189px;"></div></div>
                            </div>
                            <div class="inline-block-wrapper">
                                <div class="bar-wrapper"><div class="bar linear-button" style="height: 23.8256px;"></div></div>
                            </div>
                            <div class="inline-block-wrapper">
                                <div class="bar-wrapper"><div class="bar linear-button" style="height: 18.5844px;"></div></div>
                            </div>
                            <div class="inline-block-wrapper">
                                <div class="bar-wrapper"><div class="bar linear-button" style="height: 1.32851px;"></div></div>
                            </div>
                        </div>
                      </button>
                        <a href="/switches">
                          <button id="switches-page"
                          class= "btn btn-default btn-sound btn-switch visible-xs"
                          style="height:43px; color:#DDD;"
                          >
                          Learn more
                        </button>
                      </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      <div class="container prod-desc-container ">



        <!-- =====================================================================  -->
        <!-- =====================================================================  -->
        <!-- =                     TECHNICAL SPECIFICATIONS                      =  -->
        <!-- =====================================================================  -->
        <!-- =====================================================================  -->
        <h2 class="gaming-text"><?php say('x40-title15') ?></h2>
        <div class="row-md-height" id="tech-spec" style="padding-bottom:70px;">
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background">
            <ul>
              <li><?php say('x40-title15-ul1-li1') ?></li>
              <li><?php say('x40-title15-ul1-li2') ?></li>
              <li><?php say('x40-title15-ul1-li3') ?></li>
              <li><?php say('x40-title15-ul1-li4') ?></li>
              <li><?php say('x40-title15-ul1-li5') ?></li>
              <li><?php say('x40-title15-ul1-li6') ?></li>
              <li><?php say('x40-title15-ul1-li7') ?></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-red-background">
            <ul>
              <li><?php say('x40-title15-ul2-li1') ?></li>
              <li><?php say('x40-title15-ul2-li2') ?></li>
              <li><?php say('x40-title15-ul2-li3') ?></li>
              <li><?php say('x40-title15-ul2-li4') ?></li>
              <li><?php say('x40-title15-ul2-li5') ?></li>
              <li><?php say('x40-title15-ul2-li6') ?></li>
              <li><?php say('x40-title15-ul2-li7') ?></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 col-md-height ts-grey-background">
            <ul>
              <li><?php say('x40-tech-spec-ul3-li1') ?></li>
              <li><?php say('x40-tech-spec-ul3-li2') ?></li>
              <li><?php say('x40-tech-spec-ul3-li3') ?></li>
              <li><?php say('x40-tech-spec-ul3-li4') ?></li>
              <li><?php say('x40-tech-spec-ul3-li5') ?></li>
              <li><?php say('x40-tech-spec-ul3-li7') ?></li>
            </ul>
          </div>
        </div>
</div>

      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <!-- =                    MORE PRODUCTS                                  =  -->
      <!-- =====================================================================  -->
      <!-- =====================================================================  -->
      <div class="container  " id="productBottomPage">
        <div class="row">
          <div class="col-md-12">
            <h2 class="gaming-text"><?php say ('titleProductBottom') ?></h2>

            <div class="col-lg-4 col-md-4 col-xs-12 accessory-item text-center" href="../../accessories/mouse-pads">
                <a href="../../accessories/mouse-pads">
                    <img src="images/product_bottom/CTRL-1bottom.png">
                </a>
                <a href="../../accessories/mouse-pads">
                  <h2 class="text-center product-item-link gaming-green">47W-Control Mouse Pad</h2>
                </a>
            </div>


            <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="../../m/m50-mouse">
              <a href="../../m/m50-mouse">
                <img src="images/product_bottom/M50-2bottom.png">
              </a>
              <a href="../../m/m50-mouse">
                <h2 class="text-center product-item-link gaming-green">M50 Pro Gaming Mouse</h2>
              </a>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-12 text-center accessory-item " href="../../accessories/top-panels">
              <a href="../../accessories/top-panels">
                <img src="images/product_bottom/top-panels.png">
              </a>
              <a href="../../accessories/top-panels">
                <h2 class="text-center product-item-link gaming-green">Top Panels</h2>
              </a>
            </div>
        </div>
      </div>
    
    <div class="row" >
    <div class="col-sm-offset-5 col-sm-2 text-center">
      <a class="btn btn-lg buy-button center-block" href="http://shop.daskeyboard.com/products/division-zero-x40-pro-gaming-mechanical-keyboard" role="button">BUY NOW</a>
    </div>
    </div>

    </div>


        <!--
      <a class="checkitout" href="" style="margin:50px auto 0px auto">
        Division Zero X40
        <div>Buy now</div>
      </a> -->
    </div>
  </div> <!-- #main -->
</div>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="../../js/custom_sound_switch_gaming.js"></script>
<audio id="SoundTactile" src="/x/x40-mechanical-keyboard/sound/TactileFinal2.0.m4a"></audio>
<audio id="SoundLinear" src="/x/x40-mechanical-keyboard/sound/LinearFinal2.0.m4a"></audio>


</div> <!-- closing space-from-header -->


<?php include_once '../../footer.php' ?>