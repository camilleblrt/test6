<?php include_once '../header.php' ?>
<?php
if ($current_language !== "/de"){
    $href = "https://shop.daskeyboard.com/products/das-keyboard-4-ultimate/";
}
else{
    $href = "/de/where-to-buy/";
}
?>

                <audio id="soundBrown" src="/sound/Typing-experience-Soft-mp3.mp3"></audio>
                <audio id="soundBlue" src="/sound/Typing-experience-Click-mp3.mp3"></audio>

 <!-- Content Start -->
         <div id="main">
            <!-- Title, Breadcrumb Start-->
            <!--<div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title"><?php say('model-4-ultimate_brand') ?></h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li><?php say('you_are_here') ?></li>
                              <li><a href="index.html"><?php say('home') ?></a></li>
                              <li><a href="#"><?php say('product') ?></a></li>
                              <li><?php say('model-4-ultimate_brand') ?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <!-- Title, Breadcrumb End-->

            <div id="awesome-products" style="background-color: #222;" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators" style="display: none">
                 <li data-target="#awesome-products" data-slide-to="0" class="active"></li>
                 <li data-target="#awesome-products" data-slide-to="1" class=""></li>
                 <li data-target="#awesome-products" data-slide-to="2" class=""></li>
               </ol>
               <div class="carousel-inner">
                 <div class="item itemSlider active">
                   <span><img  class="img-slider" id="home-slider-1" width="1253px" height='782px' src="/images/slider/load-image-slide.png"  alt="daskeyboard 4 ultimate front view"></span>
                   <div class="carousel-text-top">
                       <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
                             <h3><?php say('model-4-ultimate_slider_1_title') ?></h3>
                             <h4> <?php say('model-4-ultimate_slider_1_subtitle') ?></h4>

                             <a style="background:#9e0b0f" class="btn-special btn-color" href="<?php echo $href ?>"><?php say('buy_now') ?></a>
                       </div>
                   </div>
                 </div>
                 <div class="item itemSlider">
                   <span><img class="img-slider" id="home-slider-2" width="1253px" height='782px' src="/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-rear-view-carousel.jpg"  alt="daskeyboard 4 ultimate rear view"></span>
                   <div class="carousel-text-top">
                       <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
                             <h3><?php say('model-4-ultimate_slider_2_title') ?></h3>
                             <h4> <?php say('model-4-ultimate_slider_2_subtitle') ?></h4>
                             <a class="btn-special btn-color" href="<?php echo $href ?>"><?php say('buy_now') ?></a>
                       </div>
                   </div>
                 </div>
                 <div class="item itemSlider">
                   <span><img class="img-slider" id="home-slider-3" width="1253px" height='782px' src="/images/product/daskeyboard-4-ultimate/daskeyboad-4-ultimate-side-view.jpg"  alt="daskeyboad 4 ultimate side view"></span>
                   <div class="carousel-text-top">
                       <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
                             <h3><?php say('model-4-ultimate_slider_3_title') ?></h3>
                             <h4> <?php say('model-4-ultimate_slider_3_subtitle') ?></h4>
                             <a class="btn-special btn-color" href="<?php echo $href ?>"><?php say('buy_now') ?></a>
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

            <!-- Main Content start-->
            <div class="content">
               <div class="container">
                 <!-- include social sharing -->
                 <div class="text-center">
                   <?php include ($_SERVER['DOCUMENT_ROOT'] . '/library/includes/inc_social_share.php') ?>
                 </div>
                 <!-- end social sharing -->



                    <div class="row product-slogan-first">
                      <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <h1 class="xtitle"> <?php say('slogan_model-4-ultimate_title_1') ?></h1>
                    </div>
                     <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="widget">

                          <?php say('slogan_model-4-ultimate_content_1') ?>
                       </div>
                     </div>
                     <div class="posts-block col-lg-8 col-md-8 col-sm-8 col-xs-12">
                         <img src="/images/product/daskeyboard-4-ultimate/daskeyboad-4-ultimate-rear-view.jpg" width="750px" height='448px'/>

                     </div>
                  </div>


                  <div class=" product-feature">
                    <h2 class="title"><?php say('model-4-ultimate_information_title')?></h2>
                    <div class="row ">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                            <div class="content-product-box">
                                <h3><?php say('mmodel-4-ultimate_information_title_1')?></h3>
                                <?php say('model-4-ultimate_information_content_1')?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                            <div class="content-product-box">
                                <h3><?php say('mmodel-4-ultimate_information_title_2')?></h3>
                                <?php say('model-4-ultimate_information_content_2')?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                            <div class="content-product-box">
                                <h3><?php say('mmodel-4-ultimate_information_title_3')?></h3>
                                <?php say('model-4-ultimate_information_content_3')?>
                            </div>
                        </div>


                    </div>
                  </div>

                 <div class="line-separator7"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_2') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_2') ?>
                            <div style="text-align: center;font-size: 12px;padding-top: 15px;padding-bottom: 10px;" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                                <img width="540px" height='394px' src="/images/product/force-diagram-soft.jpg"/>
                                <?php say('force-diagram-soft-caption') ?>
                            </div>

                          <div style="text-align: center;font-size: 12px;padding-top: 15px;padding-bottom: 10px;" class="col-lg-6 col-md-6  col-sm-12 col-xs-12 item">
                                <img width="540px" height='394px' src="/images/product/force-diagram-click.jpg"/>
                                <?php say('force-diagram-click-caption') ?>
                            </div>

                       </div>
                     </div>
                  </div>

                  <div class="divider"></div>
                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
                         <img width="400px" height='267px' src="/images/product/cherry_MX_brown_switches.jpg" />
                     </div>
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h3 class="xtitle"> <?php say('slogan_model-4-ultimate_title_4') ?></h3>

                          <?php say('slogan_model-4-ultimate_content_4') ?>
                       </div>
                       <div id="audioTests" class=" unit-audio">
                            <figure>
                            <a href="javascript:;" ng-click='soundBrown()' class="playButton brown" data-mp3="/sound/Typing-experience-Soft-mp3.mp3">Play</a>
                            </figure>
                       </div>
                        <div><?php say('listen_blue_brown') ?></div>
                     </div>
                  </div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
                         <img width="400px" height='267px' src="/images/product/cherry_MX_blue_switches.jpg"/>
                     </div>
                    <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h3 class="xtitle"> <?php say('slogan_model-4-ultimate_title_3') ?></h3>

                          <?php say('slogan_model-4-ultimate_content_3') ?>
                       </div>
                       <div id="audioTests" class=" unit-audio">
                            <figure>
                                <a href="javascript:;" ng-click='soundBlue()' class="playButton blue" data-mp3="/sound/Typing-experience-Click-mp3.mp3">Play</a>
                            </figure>
                       </div>
                        <div><?php say('listen_blue_button') ?></div>
                     </div>
                  </div>

                 <div class="line-separator"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img width="500px" height='284px' src="/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-media.jpg" />
                     </div>
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_5') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_5') ?>
                       </div>
                     </div>

                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_6') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_6') ?>
                       </div>
                     </div>
                     <div class="posts-block col-lg-8 col-md-8 col-sm-6 col-xs-12">
                         <img src="/images/product/daskeyboard-4-ultimate/USB3-Hub.jpg"  width="750px" height='245px'/>
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan-last">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img width="555px" height='338px' src="/images/product/daskeyboard-4-professional/N-key-rollover.jpg"/>
                     </div>
                    <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_7') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_7') ?>
                       </div>
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_11') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_11') ?>
                       </div>
                     </div>
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img width="550px" height='285px' src="/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-font.jpg"  />
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <img width="360px" height='360px' src="/images/product/daskeyboard-4-ultimate/Ruler_with_feet_1.png"/>
                     </div>
                     <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
                         <img width="360px" height='360px' src="/images/product/daskeyboard-4-ultimate/Ruler_with_feet_2.png"/>
                     </div>

                     <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_8') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_8') ?>
                       </div>
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_9') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_9') ?>
                       </div>
                     </div>
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img width="555px" height='240px' src="/images/product/daskeyboard-4-professional/daskeyboard-4-usb-cable.jpg"  />
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img width="555px" height='281px' src="/images/product/aluminum_bottom_label.jpg"/>
                     </div>

                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_10') ?></h2>

                          <?php say('slogan_model-4-ultimate_content_10') ?>
                       </div>
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan product-video" >
                     <div class="posts-block col-sm-offset-3  col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: center">
                         <div class="widget">
                            <h2 class="xtitle"> <?php say('slogan_model-4-ultimate_title_12') ?></h2>

                            <?php say('slogan_model-4-ultimate_content_12') ?>
                         </div>
                         <a href="https://www.youtube.com/embed/9byG-aS4Hf0" class="zoombox hidden-xs "><img width="555px" height='311px' class='video' src='/images/daskeyboard-4-video.png'/></a>
                         <a target="_blank" href="https://www.youtube.com/embed/9byG-aS4Hf0" class="hidden-sm hidden-lg hidden-md"><img width="555px" height='311px' class='video' src='/images/daskeyboard-4-video.png'/></a>                     </div>
                  </div>

               </div>

            <!-- Slogan Start-->
            <div class="slogan bottom-pad-small-for-buy">
               <div class="container text-center">
                  <div class="row">

                     <div class="slogan-content">
                        <div class="col-lg-offset-1 col-md-offset-1 col-lg-6 col-md-6">
                            <h2 class="slogan-title" style="color:white"> <?php say('buy_daskeyboard_4_ultimate') ?></h2>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <div class="get-started">
                              <a href="<?php echo $href ?>" class="btn btn-special btn-color"> <?php say('buy_now') ?></a>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Slogan End-->

            </div>

            <!-- Main Content end-->
         </div>

         <!-- Content End -->
        <?php include_once '../footer.php' ?>
