<?php include_once '../header.php' ?>
<?php
if ($current_language !== "/de"){
  $href = "https://shop.daskeyboard.com/products/das-keyboard-4-professional-for-mac/";
}
else{
  $href = "/de/where-to-buy/";
}
?>
  <!-- Content Start -->
  <div id="main">
    <div id="awesome-products" style="background-color: #222;" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators" style="display: none">
        <li data-target="#awesome-products" data-slide-to="0" class="active"></li>
        <li data-target="#awesome-products" data-slide-to="1" class=""></li>
        <li data-target="#awesome-products" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item itemSlider active">
          <span><img  class="img-slider" id="home-slider-1" width="1090px" height='681px' src="/images/slider/load-image-slide.png"  alt="daskeyboard 4 professional front view"></span>
          <div class="carousel-text-top">
            <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
              <h3>
                <?php say('model-4-professional-for-mac_slider_1_title') ?>
              </h3>
              <h4>
                <?php say('model-4-professional-for-mac_slider_1_subtitle') ?>
              </h4>
              <a style="background:#9e0b0f" class="btn-special btn-color" href="<?php echo $href ?>">
                <?php say('buy_now') ?>
              </a>
            </div>
          </div>
        </div>
        <div class="item itemSlider">
          <span><img class="img-slider" id="home-slider-2" width="1090px" height='681px' src="/images/product/daskeyboard-4-professional-for-mac/daskeyboad-4-professional-for-mac-rear-view.jpg"  alt="daskeyboard 4 professional rear view"></span>
          <div class="carousel-text-top">
            <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
              <h3>
                <?php say('model-4-professional-for-mac_slider_2_title') ?>
              </h3>
              <h4>
                <?php say('model-4-professional-for-mac_slider_2_subtitle') ?>
              </h4>
              <a class="btn-special btn-color" href="<?php echo $href ?>">
                <?php say('buy_now') ?>
              </a>
            </div>
          </div>
        </div>
        <div class="item itemSlider">
          <span><img class="img-slider" id="home-slider-3" width="1090px" height='681px' src="/images/product/daskeyboard-4-professional-for-mac/daskeyboad-4-professional-for-mac-side-view.jpg"  alt="daskeyboad 4 professional side view"></span>
          <div class="carousel-text-top">
            <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
              <h3>
                <?php say('model-4-professional-for-mac_slider_3_title') ?>
              </h3>
              <h4>
                <?php say('model-4-professional-for-mac_slider_3_subtitle') ?>
              </h4>
              <a class="btn-special btn-color" href="<?php echo $href ?>">
                <?php say('buy_now') ?>
              </a>
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
        <!-- Testimonials Widget Start -->
        <div class="">
          <div class="row">
            <div class="testimonials widget">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="testimonials-title">
                  <h2 class="title">
                    <?php say('testimonials')?>
                  </h2>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="" style="margin-top:10px;">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="col-sm-4">
                      <div class="testimonial item">
                        <p>
                          <?php say('testimonials_content_10') ?>
                        </p>
                        <div class="testimonials-arrow">
                        </div>
                        <div class="author">
                          <div class="testimonial-image "><img width="60px" height='60px' alt="" src="/images/team/team-member.jpg"></div>
                          <div class="testimonial-author-info">
                            <div class="red"><span class="color"><?php say('testimonials_autor_10')?></span></div>
                            <?php say('testimonials_enterprise_10')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="testimonial item">
                        <p>
                          <?php say('testimonials_content_11') ?>
                        </p>
                        <div class="testimonials-arrow">
                        </div>
                        <div class="author">
                          <div class="testimonial-image "><img width="60px" height='60px' alt="" src="/images/team/team-member.jpg"></div>
                          <div class="testimonial-author-info">
                            <div class="red"><span class="color"><?php say('testimonials_autor_11')?></span></div>
                            <?php say('testimonials_enterprise_11')?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="testimonial item">
                        <p>
                          <?php say('testimonials_content_12') ?>
                        </p>
                        <div class="testimonials-arrow">
                        </div>
                        <div class="author">
                          <div class="testimonial-image "><img width="60px" height='60px' alt="" src="/images/team/team-member.jpg"></div>
                          <div class="testimonial-author-info">
                            <div class="red"><span class="color"><?php say('testimonials_autor_12')?></span></div>
                            <?php say('testimonials_enterprise_12')?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      if ($current_language !== "/de"){
        echo '<div class="row product-slogan-first hidden-xs hidden-sm" style="background-image:url(\'/images/product/daskeyboard-4-professional-for-mac/das-keyboard-4-for-mac-bg.png\'); height:650px; background-repeat:no-repeat;">';
      }
      else{
        echo '<div class="row product-slogan-first hidden-xs hidden-sm" style="background-image:url(\'/images/product/daskeyboard-4-professional-for-mac/das-keyboard-4-for-mac-bg-de.png\'); height:650px; background-repeat:no-repeat;">';
      }?>
          <div class="posts-block col-sm-9 col-md-8 col-lg-7">
            <div class="widget">
              <h1 class="xtitle">
                <?php say('slogan_model-4-professional-for-mac_title_1') ?>
              </h1>
              <?php say('slogan_model-4-professional-for-mac_content_1') ?>
            </div>
          </div>
          <!-- <div class="posts-block col-lg-8 col-md-8 col-sm-8 col-xs-12"> -->
          <!-- <img src="/images/product/daskeyboard-4-professional-for-mac/das-keyboard-4-for-mac.png" width="100%"/> -->
          <!-- </div> -->
      </div>
      <div class="row product-slogan-first hidden-lg hidden-md">
        <div class="posts-block col-sm-12 col-xs-12">
          <div class="widget">
            <h1 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_1') ?>
            </h1>
            <?php say('slogan_model-4-professional-for-mac_content_1') ?>
          </div>
        </div>
        <div class="posts-block col-sm-12 col-xs-12">
          <img width="720px" height='480px' src="/images/product/daskeyboard-4-professional-for-mac/das-keyboard-4-for-mac.png" />
        </div>
      </div>
      <div class="divider"></div>
      <div class="product-feature">
        <h2 class="title" style="padding-bottom:10px;">
          <?php say('model-4-professional-for-mac_information_title')?>
        </h2>
        <div class="row ">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
            <div class="content-product-box">
              <h3>
                <?php say('mmodel-4-professional-for-mac_information_title_1')?>
              </h3>
              <?php say('model-4-professional-for-mac_information_content_1')?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
            <div class="content-product-box">
              <h3>
                <?php say('mmodel-4-professional-for-mac_information_title_2')?>
              </h3>
              <?php say('model-4-professional-for-mac_information_content_2')?>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
            <div class="content-product-box">
              <h3>
                <?php say('mmodel-4-professional-for-mac_information_title_3')?>
              </h3>
              <?php say('model-4-professional-for-mac_information_content_3')?>
            </div>
          </div>
        </div>
      </div>
      <div class="line-separator2"></div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional_title_2') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_2') ?>
            <div style="text-align: center;font-size: 12px;padding-top: 15px;padding-bottom: 10px;" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
              <img width="432px" height='315px' src="/images/product/force-diagram-soft.jpg" />
              <?php say('force-diagram-soft-caption') ?>
            </div>
            <div style="text-align: center;font-size: 12px; padding-top: 15px;padding-bottom: 10px;" class="col-lg-6 col-md-6  col-sm-12 col-xs-12 item">
              <img width="432px" height='315px' src="/images/product/force-diagram-click.jpg" />
              <?php say('force-diagram-click-caption') ?>
            </div>
          </div>
        </div>
      </div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
          <img width="400px" height='267px' src="..//images/product/cherry_MX_brown_switches.jpg" />
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h3 class="xtitle">
              <?php say('slogan_model-4-professional_title_4') ?>
            </h3>
            <?php say('slogan_model-4-professional_content_4') ?>
          </div>
          <div id="audioTests" class=" unit-audio">
            <figure>
              <a href="javascript:;" ng-click='soundBrown()' class="playButton brown" data-mp3="/sound/Typing-experience-Soft-mp3.mp3">Play</a>
            </figure>
          </div>
          <div>
            <?php say('listen_blue_brown') ?>
          </div>
        </div>
      </div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-bottom: 15px;">
          <img width="400px" height='267px' src="/images/product/cherry_MX_blue_switches.jpg" />
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h3 class="xtitle">
              <?php say('slogan_model-4-professional_title_3') ?>
            </h3>
            <?php say('slogan_model-4-professional_content_3') ?>
          </div>
          <div id="audioTests" class=" unit-audio">
        <figure>
                                <a href="javascript:;" ng-click="soundBlue()" class="playButton blue" data-mp3="/sound/Typing-experience-Click-mp3.mp3">Play</a>
                            </figure>
          </div>
          <div>
            <?php say('listen_blue_button') ?>
          </div>
        </div>
      </div>
      <div class="line-separator2"></div>
      <div class="row product-slogan-last">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12" style="padding-right:13px;">
          <img width="557px" height='303px' src="/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-professional-for-mac-media-view.jpg"
          />
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_5') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_5') ?>
            <br>
            <br>
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_5bis') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_5bis') ?>
          </div>
        </div>
      </div>
      <div class="line-separator2"></div>
      <div class="row product-slogan-last">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_6') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_6') ?>
          </div>
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img width="555px" height='262px' src="/images/product/daskeyboard-4-professional-for-mac/daskeyboar-4-professional-for-mac-usb3-hub.jpg" width="100%"
          />
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan-last">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img width="550px" height='279px' src="/images/product/daskeyboard-4-professional-for-mac/N-key-rollover.jpg" />
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_7') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_7') ?>
          </div>
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan-last">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_7bis') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_7bis') ?>
          </div>
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img width="412px" height='216px' src="/images/product/daskeyboard-4-professional-for-mac/mac-key-function.jpg" />
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img width="550px" height='332px' src="/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-professional-for-mac-font.jpg" />
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_11') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_11') ?>
          </div>
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_8') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_8') ?>
          </div>
        </div>
        <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <img src="/images/product/daskeyboard-4-professional-for-mac/Ruler_with_feet_1.png" width="360px" height='360px' />
        </div>
        <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <img src="/images/product/daskeyboard-4-professional-for-mac/Ruler_with_feet_2.png" width="360px" height='360px' />
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img width="555px" height='240.5px' src="/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-usb-cable.jpg" />
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_9') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_9') ?>
          </div>
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan">
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_10') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_10') ?>
          </div>
        </div>
        <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <img src="/images/product/aluminum_bottom_label.jpg" width="555px" height='281px' />
        </div>
      </div>
      <div class="line-separator"></div>
      <div class="row product-slogan product-video">
        <div class="posts-block col-sm-offset-3  col-lg-offset-3 col-md-offset-3 col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: center">
          <div class="widget">
            <h2 class="xtitle">
              <?php say('slogan_model-4-professional-for-mac_title_12') ?>
            </h2>
            <?php say('slogan_model-4-professional-for-mac_content_12') ?>
          </div>
          <a href="https://www.youtube.com/embed/9byG-aS4Hf0" class="zoombox hidden-xs "><img class='video' src='/images/daskeyboard-4-video.png' width="555px" height='311px' /></a>
          <a target="_blank" href="https://www.youtube.com/embed/9byG-aS4Hf0" class="hidden-sm hidden-lg hidden-md"><img class='video' src='/images/daskeyboard-4-video.png' width="555px" height='311px' /></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Slogan Start-->
  <div class="slogan bottom-pad-small-for-buy">
    <div class="container text-center">
      <div class="row">
        <div class="slogan-content">
          <div class="col-lg-offset-2 col-md-offset-1 col-lg-6 col-md-6">
            <h2 class="slogan-title" style="color:white">
              <?php say('buy_daskeyboard_4_professional-for-mac') ?>
            </h2>
          </div>
          <div class="col-lg-3 col-md-3">
            <div class="get-started">
              <a href="<?php echo $href ?>" class="btn btn-special btn-color">
                <?php say('buy_now') ?>
              </a>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Slogan End-->
  </div>
  <audio id="soundBrown" src="/sound/Typing-experience-Soft-mp3.mp3"></audio>
  <audio id="soundBlue" src="/sound/Typing-experience-Click-mp3.mp3"></audio>
  <!-- Main Content end-->
  </div>
  <!-- Content End -->
  <?php include_once '../footer.php' ?>