<?php include_once '../header.php' ?>
<?php
if ($current_language !== "/de"){
    $href = "http://shop.daskeyboard.com/collections/products/products/das-keyboard-ultimate-model-s";
}
else{
    $href = "/de/where-to-buy/";
}
?>
<!-- Content Start -->
         <div id="main">
            <!-- Title, Breadcrumb Start-->
            <!--<div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title"><?php say('model-s-ultimate_brand') ?></h2>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                           <ul>
                              <li><?php say('you_are_here') ?></li>
                              <li><a href="index.html"><?php say('home') ?></a></li>
                              <li><a href="#"><?php say('product') ?></a></li>
                              <li><?php say('model-s-ultimate_brand') ?></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>-->
            <!-- Title, Breadcrumb End-->

            <div id="awesome-products" style="background-color: #222;" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators" style="display:none">
                 <li data-target="#awesome-products" data-slide-to="0" class="active"></li>
                 <li data-target="#awesome-products" data-slide-to="1" class=""></li>
                 <li data-target="#awesome-products" data-slide-to="2" class=""></li>
               </ol>
               <div class="carousel-inner">
                 <div class="item itemSlider active">
                   <span><img id="home-slider-1" width='1253px' height='783px' src="/images/slider/load-image-slide.png"  alt="blank mechanical keyboard"></span>
                   <div class="carousel-text" >
                       <div class=" col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-4 carousel-box">
                             <h3><?php say('model-s-ultimate_slider_1_title') ?></h3>
                             <h4> <?php say('model-s-ultimate_slider_1_subtitle') ?></h4>
                             <p><?php say('model-s-ultimate_brand') ?></p>
                             <p style="color: #4495f8; font-weight: bolder;"><?php say('discontinued') ?></p>
                             <!-- <a style="background:#9e0b0f" class="btn-special btn-color" href="<?php echo $href ?>"><?php say('buy_now') ?></a> -->
                       </div>
                   </div>
                 </div>
                 <div class="item itemSlider">
                   <span><img id="home-slider-2" width='1253px' height='783px' src="/images/product/model-s-ultimate/blank_mechanical_keyboard_2.jpg"  alt="blank mechanical keyboard"></span>
                   <div class="carousel-text" >
                       <div class=" col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-4 carousel-box">
                             <h3><?php say('model-s-ultimate_slider_2_title') ?></h3>
                             <h4> <?php say('model-s-ultimate_slider_2_subtitle') ?></h4>
                             <p><?php say('model-s-ultimate_brand') ?></p>
                             <p style="color: #4495f8; font-weight: bolder;"><?php say('discontinued') ?></p>
                       </div>
                   </div>
                 </div>
                 <div class="item itemSlider">
                   <span><img id="home-slider-2" width='1253px' height='783px' src="/images/product/model-s-ultimate/blank_mechanical_keyboard_3.jpg"  alt=""></span>
                   <div class="carousel-text">
                       <div class=" col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-4 carousel-box">
                             <h3><?php say('model-s-ultimate_slider_3_title') ?></h3>
                             <h4> <?php say('model-s-ultimate_slider_3_subtitle') ?></h4>
                             <p><?php say('model-s-ultimate_brand') ?></p>
                             <p style="color: #4495f8; font-weight: bolder;"><?php say('discontinued') ?></p>
                       </div>
                   </div>
                 </div>
               </div>
               <a style="display:none" class="left carousel-control" href="#awesome-products" data-slide="prev">
                 <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a  style="display:none" class="right carousel-control" href="#awesome-products" data-slide="next">
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
                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-s-ultimate_title_1') ?></h2>

                          <?php say('slogan_model-s-ultimate_content_1') ?>
                       </div>
                     </div>
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <a href="https://www.youtube.com/embed/s0xG77IRFD4" class="zoombox"><img class='video' width='555px' height='310px' style="padding-top:15px;" src='/images/product/model-s-ultimate/video_model-s-ultimate.jpg'/></a>
                     </div>
                  </div>

                  <div class="line-separator2"></div>

                  <div class="row product-slogan">
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img src="/images/product/model-s-ultimate/slogan_model-s-ultimate_2.jpg"  width='555px' height='382px'/>
                     </div>

                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-s-ultimate_title_2') ?></h2>

                          <?php say('slogan_model-s-ultimate_content_2') ?>
                       </div>
                     </div>
                  </div>

                  <div class="line-separator"></div>

                  <div class="row product-slogan-last">
                    <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="widget">
                          <h2 class="xtitle"> <?php say('slogan_model-s-ultimate_title_3') ?></h2>

                          <?php say('slogan_model-s-ultimate_content_3') ?>
                       </div>
                     </div>
                     <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <img width='552px' height='283px' src="/images/product/model-s-ultimate/slogan_model-s-ultimate_3.jpg"/>
                     </div>
                  </div>
               </div>
            </div>
            <div class="divider"></div>
            <div id="tactileExperience">
                  <div class="container">

                          <hgroup>
                                  <h2><?php say('tactileExperience-title')?></h2>
                                  <h3><?php say('tactileExperience-subtitle')?></h3>
                          </hgroup>
                <audio id="soundBrown" src="/sound/Typing-experience-Soft-mp3.mp3"></audio>
                <audio id="soundBlue" src="/sound/Typing-experience-Click-mp3.mp3"></audio>


                                   <div id="audio">
                                       <div class='row'>
                                            <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-md-3 col-sm-offset-2 col-sm-3  ">
                                                <figure>
                                                <a href="javascript:;"
                                                ng-click='soundBlue()'
                                                class="playButton blue btn btn-lg btn-default btn-greetek-play-blue"
                                                data-mp3="/sound/Typing-experience-Click-mp3.mp3">
                                                <span class='glyphicon glyphicon-play'></span>
                                                Play</a>
                                                     <hgroup>
                                                         <h4><?php say('tactileExperience-blue-title')?></h4>
                                                         <h5><?php say('tactileExperience-blue-subtitle')?></h5>
                                                     </hgroup>
                                                         <p><?php say('tactileExperience-blue-content')?></p>
                                                </figure>
                                           </div>
                                            <div class="col-lg-offset-2 col-lg-3 col-md-offset-2 col-sm-offset-2 col-md-3 col-sm-3">
                                             <figure>
                                                 <a href="javascript:;"
                                                 ng-click='soundBrown()'
                                                 class="playButton brown btn btn-lg btn-default btn-greetek-play-brown"
                                                 data-mp3="/sound/Typing-experience-Soft-mp3.mp3">
                                                 <span class='glyphicon glyphicon-play'></span>
                                                 Play</a>
                                                 <hgroup>
                                                         <h4><?php say('tactileExperience-brown-title')?></h4>
                                                         <h5><?php say('tactileExperience-brown-subtitle')?></h5>
                                                 </hgroup>
                                                 <p><?php say('tactileExperience-brown-content')?></p>
                                             </figure>
                                          </div>
                                       </div>
                                  </div>
                </div>
             </div>
          <div class="content" style="padding-top:15px;">
               <div class="container">
                    <!-- 3 Column Big Services -->
                    <div class="services-big">
                       <div class="">
                             <h2 class="title"><?php say('model-s-ultimate_features_title')?></h2>
                             <div class="clearfix"></div>
                             <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                   <div class="content-box">
                                      <div class="content-box-icon">
                                         <img width='252px' height='126px' src="/images/product/model-s-ultimate/feature_model-s-ultimate_1.jpg"/>
                                      </div>
                                      <div class="content-box-info">
                                         <h4><?php say('feature_model-s-ultimate_title_1')?> </h4>
                                         <p>
                                            <?php say('feature_model-s-ultimate_content_1')?>
                                         </p>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                   <div class="content-box">
                                      <div class="content-box-icon">
                                         <img width='252px' height='126px' src="/images/product/model-s-ultimate/feature_model-s-ultimate_2.jpg"/>
                                      </div>
                                      <div class="content-box-info">
                                         <h4><?php say('feature_model-s-ultimate_title_2')?> </h4>
                                         <p>
                                            <?php say('feature_model-s-ultimate_content_2')?>
                                         </p>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                   <div class="content-box">
                                      <div class="content-box-icon">
                                         <img width='252px' height='126px' src="/images/product/model-s-ultimate/feature_model-s-ultimate_3.jpg" alt=" "/>
                                      </div>
                                      <div class="content-box-info">
                                         <h4><?php say('feature_model-s-ultimate_title_3')?></h4>
                                         <p>
                                             <?php say('feature_model-s-ultimate_content_3')?>
                                         </p>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                   <div class="content-box">
                                      <div class="content-box-icon">
                                         <img width='252px' height='126px' src="/images/product/model-s-ultimate/feature_model-s-ultimate_4.jpg" alt=" "/>
                                      </div>
                                      <div class="content-box-info">
                                         <h4><?php say('feature_model-s-ultimate_title_4')?></h4>
                                         <p>
                                             <?php say('feature_model-s-ultimate_content_4')?>
                                         </p>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <!-- 3 Column Services End-->
                             <div class="clearfix"></div>
                       </div>
                    </div>

                  <div class="product-feature" style="padding-top:15px;">
                     <h2 class="title"><?php say('model-s-ultimate_information_title')?></h2>
                     <div class="row ">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <h4><?php say('mmodel-s-ultimate_information_title_1')?></h4>
                        <?php say('model-s-ultimate_information_content_1')?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <h4><?php say('mmodel-s-ultimate_information_title_2')?></h4>
                        <?php say('model-s-ultimate_information_content_2')?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <h4><?php say('mmodel-s-ultimate_information_title_3')?></h4>
                        <?php say('model-s-ultimate_information_content_3')?>
                    </div>
                     </div>
                      <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <h4><?php say('mmodel-s-ultimate_information_title_4')?></h4>
                        <?php say('model-s-ultimate_information_content_4')?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <h4><?php say('mmodel-s-ultimate_information_title_5')?></h4>
                        <?php say('model-s-ultimate_information_content_5')?>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <h4><?php say('mmodel-s-ultimate_information_title_6')?></h4>
                        <?php say('model-s-ultimate_information_content_6')?>
                    </div>
                      </div>
                  </div>
               </div>
               <!-- Recent work end-->

            <!-- Slogan Start-->
            <div class="slogan bottom-pad-small-for-buy">
               <div class="container text-center">
                  <div class="row">

                     <div class="slogan-content" >
                        <div class="col-lg-offset-2 col-md-offset-1 col-lg-6 col-md-6">
                            <h2 class="slogan-title" style="color:white"> <?php say('buy_model_s_ultimate') ?></h2>
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
