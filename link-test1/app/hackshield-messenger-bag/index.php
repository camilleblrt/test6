<?php include_once '../header.php' ?>
<?php
if ($current_language !== "/de") {
    $href = "http://shop.daskeyboard.com/collections/products/products/hackshield-messenger-bag/";
} else {
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
                <h2 class="title"><?php say('hackshield-messenger-bag_brand') ?></h2>
             </div>
             <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                <div class="breadcrumbs pull-right">
                   <ul>
                      <li><?php say('you_are_here') ?></li>
                      <li><a href="index.html"><?php say('home') ?></a></li>
                      <li><a href="#"><?php say('product') ?></a></li>
                      <li><?php say('hackshield-messenger-bag_brand') ?></li>
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
                <span><img  id="home-slider-1" width='1253px' height='783px' src="/images/slider/load-image-slide.png"  alt="RFID blocking messenger bag"></span>
                <div class="carousel-text">
                    <div class=" col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-4 carousel-box">
                        <h3><?php say('hackshield-messenger-bag_slider_1_title') ?></h3>
                        <h4> <?php say('hackshield-messenger-bag_slider_1_subtitle') ?></h4>
                        <a style="background:#9e0b0f" class="btn-special btn-color" href="<?php echo $href ?>"><?php say('buy_now') ?></a>
                    </div>
                </div>
            </div>
            <div class="item itemSlider">
                <span><img id="home-slider-2" width='1253px' height='783px' src="/images/product/hackshield-messenger-bag/RFID_blocking_messenger_bag_2.jpg"  alt="RFID blocking messenger bag"></span>
                <div class="carousel-text">
                    <div class=" col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-4 carousel-box">
                        <h3><?php say('hackshield-messenger-bag_slider_2_title') ?></h3>
                        <h4> <?php say('hackshield-messenger-bag_slider_2_subtitle') ?></h4>
                        <a class="btn-special btn-color" href="<?php echo $href ?>"><?php say('buy_now') ?></a>
                    </div>
                </div>
            </div>
            <div class="item itemSlider">
                <span><img id="home-slider-2" width='1253px' height='783px' src="/images/product/hackshield-messenger-bag/RFID_blocking_messenger_bag_3.jpg"  alt="RFID blocking messenger bag"></span>
                <div class="carousel-text">
                    <div class=" col-sm-offset-0 col-md-offset-6 col-lg-offset-8  col-sm-12 col-md-6 col-lg-4 carousel-box">
                        <h3><?php say('hackshield-messenger-bag_slider_3_title') ?></h3>
                        <h4> <?php say('hackshield-messenger-bag_slider_3_subtitle') ?></h4>
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
            <div class="row" >
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('slogan_hackshield-messenger-bag_title_1') ?></h2>

                        <?php say('slogan_hackshield-messenger-bag_content_1') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a href="https://www.youtube.com/embed/qs8AwRbJZCs" class="zoombox"><img width='555px' height='275px' class='video' src='/images/product/hackshield-wallet/video_hackshield-wallet.jpg'/></a>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img width='542px' height='335px' src="/images/product/hackshield-messenger-bag/slogan_hackshield-messenger-bag_2.jpg"/>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('slogan_hackshield-messenger-bag_title_2') ?></h2>

                        <?php say('slogan_hackshield-messenger-bag_content_2') ?>
                    </div>
                </div>
            </div>

            <div class="line-separator2"></div>

            <div class="row product-slogan-last">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('slogan_hackshield-messenger-bag_title_3') ?></h2>

                        <?php say('slogan_hackshield-messenger-bag_content_3') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img width='503px' height='335px' src="/images/product/hackshield-messenger-bag/slogan_hackshield-messenger-bag_3.jpg"/>
                </div>
            </div>


            <div class="row product-feature">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title"><?php say('hackshield-messenger-bag_features_title') ?></h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                    <?php say('hackshield-messenger-bag_features_1') ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                    <?php say('hackshield-messenger-bag_features_2') ?>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                    <?php say('hackshield-messenger-bag_features_3') ?>
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
                            <h2 class="slogan-title" style="color:white"> <?php say('buy_hackshield-messenger-bag') ?></h2>
                        </div>
                        <div class="col-lg-3 col-md-3 ">
                            <div class="get-started">
                                <a href="<?php echo $href ?>" class="btn btn-special btn-color "> <?php say('buy_now') ?></a>
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
