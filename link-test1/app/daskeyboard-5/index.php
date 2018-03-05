<?php include_once '../header.php' ?>
<?php
if ($current_language !== "/de") {
    $href = "http://shop.daskeyboard.com/products/das-keyboard-4c-ultimate-compact-mechanical-keyboard/";
} else {
    $href = "/de/where-to-buy/";
}
?>
<?php include_once '../library/includes/inc_redirect_april.php' ?>
<audio id="soundBrown" src="/sound/Typing-experience-Soft-mp3.mp3"></audio>
<audio id="soundBlue" src="/sound/Typing-experience-Click-mp3.mp3"></audio>

<!-- Content Start -->
<div id="main">

    <div id="awesome-products" style="background-color: #222;" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="display: none">
            <li data-target="#awesome-products" data-slide-to="0" class="active"></li>
            <li data-target="#awesome-products" data-slide-to="1" class=""></li>
            <li data-target="#awesome-products" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
            <div class="item itemSlider">
                <span><img  class="img-slider" id="home-slider-1" width='1253px' height='835px' src="images/Invisible-typing-demo.png"  alt="daskeyboard 4C ultimate front view"></span>
                <div class="carousel-text-top">
                    <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
                        <h3><?php say('dk5-model-5-ultimate_slider_1_title') ?></h3>
                        <h4> <?php say('dk5-model-5-ultimate_slider_1_subtitle') ?></h4>
                        <a style="background:#9e0b0f" class="btn-special buy-button btn-color" href="#"><?php say('dk5-buy_now') ?></a>
                    </div>
                </div>
            </div>
            <div class="item itemSlider active">
              <!-- greetech-blue-switch.jpg blue-and-brown-switches.png-->
                <span><img width='1253px' height='782px' class="img-slider" style="background-color:white;" id="home-slider-2"  src="images/DasKeyboard-4C-ultimate_outline.png"  alt="daskeyboard 4C ultimate rear view"></img></span>
                <div class="carousel-text-top">
                    <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
                        <h3><?php say('dk5-model-5-ultimate_slider_2_title') ?></h3>
                        <h4> <?php say('dk5-model-5-ultimate_slider_2_subtitle') ?></h4>
                        <a class="btn-special btn-color buy-button" href="#"><?php say('dk5-buy_now') ?></a>
                    </div>
                </div>
            </div>
            <div class="item itemSlider">
                <span><img class="img-slider" id="home-slider-3" width='1253px' height='835px' src="images/Invisible-typing-demo_side_view.jpg"  alt="daskeyboad 4C ultimate rear view"></span>
                <div class="carousel-text-top">
                    <div class="col-sm-offset-0 col-md-offset-0 col-lg-offset-0  col-sm-12 col-md-10 col-lg-5 carousel-box">
                        <h3><?php say('dk5-model-5-ultimate_slider_3_title') ?></h3>
                        <h4> <?php say('dk5-model-5-ultimate_slider_3_subtitle') ?></h4>
                        <a class="btn-special btn-color buy-button" href="#"><?php say('dk5-buy_now') ?></a>
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
                                <h2 class="title"><?php say('dk5-testimonials') ?></h2>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="testimonials-carousel-fourc" class="testimonials-carousel-fourc slide">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="testimonial item">
                                            <p>
                                                <?php say('dk5-testimonials_content_4') ?>
                                            </p>
                                            <div class="testimonials-arrow">
                                            </div>
                                            <div class="author">
                                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/images/team/team-member.jpg"></div>
                                                <div class="testimonial-author-info">
                                                    <div class="red"><span class="color"><?php say('dk5-dk5-testimonials_autor_4') ?></span></div> <?php say('dk5-testimonials_enterprise_4') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="testimonial item">
                                            <p>
                                                <?php say('dk5-testimonials_content_5') ?>
                                            </p>
                                            <div class="testimonials-arrow">
                                            </div>
                                            <div class="author">
                                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/images/team/team-member.jpg"></div>
                                                <div class="testimonial-author-info">
                                                    <div class="red"><span class="color"><?php say('dk5-testimonials_autor_5') ?></span></div> <?php say('dk5-testimonials_enterprise_5') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="testimonial item">
                                            <p>
                                                <?php say('dk5-testimonials_content_6') ?>
                                            </p>
                                            <div class="testimonials-arrow">
                                            </div>
                                            <div class="author">
                                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/images/team/team-member.jpg"></div>
                                                <div class="testimonial-author-info">
                                                    <div class="red"><span class="color"><?php say('dk5-testimonials_autor_6') ?></span></div> <?php say('dk5-testimonials_enterprise_6') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="testimonial item">
                                            <p>
                                                <?php say('dk5-testimonials_content_7') ?>
                                            </p>
                                            <div class="testimonials-arrow">
                                            </div>
                                            <div class="author">
                                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/images/team/team-member.jpg"></div>
                                                <div class="testimonial-author-info">
                                                    <a href="/#"><span class="color"><?php say('dk5-testimonials_autor_7') ?></span></a> <?php say('dk5-testimonials_enterprise_7') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="testimonial item">
                                            <p>
                                                <?php say('dk5-testimonials_content_8') ?>
                                            </p>
                                            <div class="testimonials-arrow">
                                            </div>
                                            <div class="author">
                                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/images/team/team-member.jpg"></div>
                                                <div class="testimonial-author-info">
                                                    <a href="/#"><span class="color"><?php say('dk5-testimonials_autor_8') ?></span></a> <?php say('dk5-testimonials_enterprise_8') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="testimonial item">
                                            <p>
                                                <?php say('dk5-testimonials_content_9') ?>
                                            </p>
                                            <div class="testimonials-arrow">
                                            </div>
                                            <div class="author">
                                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/images/team/team-member.jpg"></div>
                                                <div class="testimonial-author-info">
                                                    <a href="/#"><span class="color"><?php say('dk5-testimonials_autor_9') ?></span></a> <?php say('dk5-testimonials_enterprise_9') ?>
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
            <div class="row product-slogan-first">
                <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1> <?php say('dk5-slogan_model-4C-ultimate_title_1') ?></h1>
                </div>
                <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget">
                        <?php say('dk5-slogan_model-4C-ultimate_content_1') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div style="height:300px;border: #DDD solid 2px;"></div>
                </div>
            </div>
            <div class="divider2"></div>
            <div class="product-feature">
                <h2 class="title"><?php say('dk5-model-5-ultimate_information_title') ?></h2>
                <div class="row ">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <div class="content-product-box">
                            <h3><?php say('dk5-mmodel-4C-ultimate_information_title_1') ?></h3>
                            <?php say('dk5-model-5-ultimate_information_content_1') ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <div class="content-product-box">
                            <h3><?php say('dk5-mmodel-4C-ultimate_information_title_2') ?></h3>
                            <?php say('dk5-model-5-ultimate_information_content_2') ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <div class="content-product-box">
                            <h3><?php say('dk5-mmodel-4C-ultimate_information_title_3') ?></h3>
                            <?php say('dk5-model-5-ultimate_information_content_3') ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line-separator4"></div>

            <div class='row product-slogan'>
                <div class='col-sm-12'>
                    <h2> <?php say('dk5-slogan_model-4C-ultimate_title_2') ?></h2>
                    <?php say('dk5-slogan_model-4C-ultimate_content_2') ?>
                    <br>
                    <br>
                </div>
            </div>

            <div class='line-separator5'></div>

            <div class='row product-slogan'>
                <div class='posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                    <div class='widget' style='background-color:#f4f4f4; padding:20px;'>
                        <h2><?php say('dk5-slogan_model-4C-ultimate_title_switch_blue') ?></h2>
                        <div><?php say('dk5-slogan_model-4C-ultimate_content_switch_blue') ?></div>
                        <div><?php say('dk5-listen_blue_button') ?></div>
                        <br>
                        <div class='text-center'>
                            <a href='javascript:;'
                               ng-click='soundBlue()'
                               class='playButton blue btn btn-lg btn-default btn-greetek-play-blue' data-mp3='/sound/Typing-experience-Click-mp3.mp3'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>
                    </div>
                </div>
                <div class='posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                    <?php
                    if ($current_language !== "/de") {
                        echo "<img width='293px' height='329px' src='images/Blue-Greetech-switch_diagram.png' />";
                    } else {
                        echo "<img width='293px' height='329px' src='images/Blue-Greetech-switch_diagram.png' />";
                    }
                    ?>
                </div>
            </div>

            <div class='line-separator4'></div>

            <div class='row product-slogan'>
                <div class='posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                    <div class='widget' style='background-color:#f4f4f4; padding:20px;'>
                        <h2><?php say('dk5-slogan_model-4C-ultimate_title_switch_brown') ?></h2>
                        <div><?php say('dk5-slogan_model-4C-ultimate_content_switch_brown') ?></div>
                        <div><?php say('dk5-listen_brown_button') ?></div>
                        <br>
                        <div class='text-center'>
                            <a href='javascript:;'
                               ng-click='soundBrown()'
                               class='playButton brown btn btn-lg btn-default btn-greetek-play-brown'
                               data-mp3='/sound/Typing-experience-Click-mp3.mp3'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>
                    </div>
                </div>
                <div class='posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                    <?php
                    if ($current_language !== "/de") {
                        echo "<img width='293px' height='224px' src='images/Brown-Greetech-switch_diagram.png' />";
                    } else {
                        echo "<img width='293px' height='224px' src='images/Brown-Greetech-switch_diagram.png' />";
                    }
                    ?>
                </div>
            </div>
            <div class='line-separator4'></div>

            <div class='product-slogan'>
                <?php
                if ($current_language !== "/de") {
                    echo "<img width='1140px' height='420px' src='images/Blue-Brown-Greetech-switch_tree_diagram.png' />";
                } else {
                    echo "<img width='1140px' height='420px' src='images/Blue-Brown-Greetech-switch_tree_diagram.png' />";
                }
                ?>
            </div>

            <div class='line-separator6'></div>

            <div class='row product-slogan'>
                <div class='posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
                <div class='posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                    <div class='widget'>
                        <h2 class='xtitle'> <?php say('dk5-slogan_model-4C-ultimate_title_5') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_5') ?>
                    </div>
                </div>

            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_6') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_6') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan-last">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_7') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_7') ?>
                    </div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_7bis') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_7bis') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img width='555px' height='370px' src="images/Invisible-typing-demo_side_view.jpg"  width="100%"/>
                </div>

                <div class="posts-block col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_8') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_8') ?>
                    </div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_9') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_9') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
                <div class="posts-block col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_10') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_10') ?>
                    </div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_11') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_11') ?>
                    </div>
                </div>
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>
            </div>

            <div class="line-separator"></div>

            <div class="row product-slogan product-video">
                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div style="height:250px;border: #DDD solid 2px;"></div>
                </div>

                <div class="posts-block col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h2 class="xtitle"> <?php say('dk5-slogan_model-4C-ultimate_title_12') ?></h2>

<?php say('dk5-slogan_model-4C-ultimate_content_12') ?>
                    </div>
                </div>
            </div>
        </div>




        <!-- Slogan Start-->
        <div class="slogan bottom-pad-small-for-buy">
            <div class="container text-center">
                <div class="row">

                    <div class="slogan-content" >
                        <div class="col-lg-offset-2 col-md-offset-1 col-lg-5 col-md-6">
                            <h2 class="slogan-title" style="color:white"> <?php say('dk5-buy_daskeyboard_4C_ultimate') ?></h2>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="get-started">
                                <a href="#" class="btn btn-special buy-button btn-color "> <?php say('dk5-buy_now') ?></a>
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
