<?php include_once '../../header.php' ;?>
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
    /************ PAGE SPECIFIC STYLE **********************************************************************************************************************************/
      
      .main {
        background-image: url("images/prime13-mechanical-keyboard_zoom.jpg");
        background-size: cover;
        background-attachment: fixed;
      }
      
      h2 {
        margin-bottom: 15px;
        font-size: 40px;
      }
      /* here I am overriding the style.css to default bootstrap settings. */
      
      h3 {
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 18px;
      }
      
      .features-section img {
        border: 3px solid white;
        border-radius: 1100px;
      }
      
      .aluminium-top img {
        margin-top: 4vw;
        width: 100%;
      }
      
      .reviews {
        background-color: transparent;
      }
      
      .specs p {
        display: inline;
      }
      
      #carousel-gallery-p13.slide {
        padding: 0;
        margin: 0;
      }
      
      .switches-section .sound {
        margin: 5px 0px 5px 26px;
      }
      
      .switches-section {
        background-image: url("images/prime13-mechanical-switches-desaturated.jpg");
        background-size: cover;
        background-repeat: no-repeat;
      }
      
      .switches-section,
      .switches-section h2,
      .switches-section h3 {
        color: white;
      }
      
      .item p {
        font-size: 20px;
        color: #5F5F5F;
        font-weight: 300;
      }
      
      .slide1 {
        color: black;
        text-align: center;
        background-image: url("images/prime13-mecahnical-keybaord-front-view.jpg");
        background-size: 105%;
        background-position: center;
        background-repeat: no-repeat;
      }
      
      .slide {
        padding: 40px 0px 0px 0px;
      }
      
      .slide h2 {
        font-size: 40px;
        color: #111111;
        margin: 0px 0px 6px 0px;
        font-weight: 400;
      }
      
      .slide1 {
        text-align: center;
      }
      
      .slide2 {
        background-image: url("images/prime13-mechanical-keyboard-angled-side-view.jpg");
        background-size: 85% auto;
        background-position: center;
        background-repeat: no-repeat;
      }
      
      .slide3 {
        background-image: url("images/prime13-mechanical-keyboard-front-angled-view.jpg");
        background-size: 90% auto;
        background-position: center;
        background-repeat: no-repeat;
      }
      
      @media screen and (min-width: 1521px) {
        .slide1 {
          background-size: auto 116%;
        }
        .slide2 {
          background-size: auto 100%;
        }
        .slide3 {
          background-size: auto 100%;
        }
      }
      
      #prime13,
      #prime13 .carousel-inner,
      #prime13 .item {
        min-height: 650px;
      }
      
      @media screen and (min-width: 1119px) {
        .slide3 {
          background-size: auto 100%;
          background-position: center 100%;
        }
      }
      
      @media only screen and (max-width: 767px) {
        #prime13,
        #prime13 .carousel-inner,
        #prime13 .item {
          min-height: 450px;
        }
        .slide1 {
          background-size: 108vw;
          background-repeat: no-repeat;
          background-position: center;
        }
        .slide2 {
          background-size: 97vw;
          background-repeat: no-repeat;
          background-position: center 120%;
        }
        .slide3 {
          background-size: 97vw;
          background-repeat: no-repeat;
          background-position: center 120%;
        }
      }
      
      @media only screen and (max-width: 500px) {
        #prime13,
        #prime13 .carousel-inner,
        #prime13 .item {
          min-height: 400px;
        }
        .slide1,
        .slide2,
        .slide3 {
          background-size: 98% auto;
          background-position: center 60%;
        }
        .slide2 {
          background-size: 95% auto;
          background-position: center 80%;
        }
        .slide3 {
          background-size: 95% auto;
          background-position: center 80%;
        }
      }
      
      .energy img {
        width: 80%;
        margin: auto;
        display: block;
      }
      
      .btn {
        border-radius: 0px;
      }
      
      .home-button-left {
        width: auto;
        padding: 5px;
        float: none;
      }
      
      body {
        background-color: white;
      }
    }
    main img,
    #prime13 {
      -webkit-animation-name: opacity-switch;
      -webkit-animation-duration: 4s;
      animation-name: opacity-switch;
      animation-duration: 4s;
    }
    @keyframes opacity-switch {
      from {
        opacity: 0;
      }
      
      to {
        opacity: 1;
      }
    }
    @-webkit-keyframes opacity-switch {
      from {
        opacity: 0;
      }
      
      to {
        opacity: 1;
      }
    }
    /********************************************* CSS animations ***********************************************************/
    </style>


    <!-- background fix for ios -->

    <!-- <img src="images/frontview_nocord_zoom.jpg" id="bg" alt="Prime12 close up"> -->
    <!- -------------------------------------------------------- CAROUSEL -------------------------------------------------------------------------------------------------------------------- -->
    <div id="prime13" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators" style="display: none">
        <li data-target="#prime13" data-slide-to="0" class="active"></li>
        <li data-target="#prime13" data-slide-to="1" class=""></li>
        <li data-target="#prime13" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner">
        <div class="item itemSlider slide1 active center-block">
          <div class="text-center">
            <h2><?php say('prime13_slider_1_title') ?></h3>
<p>
<?php say('prine13-professional_slider_1_subtitle') ?>
</p>
</div><!-- end of text-center -->
</div><!-- end of item slide1 -->
<div class="item itemSlider slide2 center-block">
<div class="">
<div class="container">
<h2><?php say('prime13_slider_2_title') ?></h3>
<p>
<?php say('prine13-professional_slider_2_subtitle') ?>
</p>
</div><!-- end of column -->
</div><!-- end of carousel-text-top -->
</div><!-- end of item slide2 -->
<div class="item itemSlider slide3 center-block">

<div class="container">
<div class="text-center">
<h2><?php say('prime13_slider_3_title') ?></h3>
<p>
<?php say('prine13-professional_slider_3_subtitle') ?>
</p>

</div>
</div>
</div>
</div>
<a style="display:none" class="left carousel-control" href="#prime13" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a style="display:none" class="right carousel-control" href="#prime13" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div><!-- end of #prime13 -->


<!-- ------------------------------------------------------------------------------- nav bar --------------------------------------------------------------------------------------- -->
<!-- activating the sticky navbar -->
<script>
document.addEventListener("DOMContentLoaded", function(event) {
    
    var navpos = $('#nav-p13').offset();
    
    $(window).bind('scroll', function() {
        if ($(window).scrollTop() > navpos.top) {
            $(".promo-link").hide();
            $('#nav-p13').addClass('fixed');
        }
        else {
            $('#nav-p13').removeClass('fixed');
            $(".promo-link").show();
        }
    });
});

</script>

<div id="nav-p13" class="product-nav">
<div class="navbar navbar-default">
<div class="navbar-header container">
<button type="button" class="navbar-toggle collapsed home-button-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<i class="icon-reorder icon-2x"></i> Browse
</button>
</div><!-- end of navbar-header container -->
<div class="container">
<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" aria-expanded="false">
<ul class="nav navbar-nav  product-nav" >
<li class="nav-cell"><a href="#feature-section" target="_self"><?php say("p13-feature-title2") ?></a></li class="nav-cell">
<li class="nav-cell"><a href="#specs" target="_self"><?php say("p13-feature-title7") ?></a></li>
<li class="nav-cell"><a href="#faq" target="_self"><?php say("p13-feature-title4") ?></a></li class="nav-cell">
<li class="nav-cell"><a href="#gallery" target="_self"><?php say("p13-feature-title6") ?></a></li class="nav-cell">

<li class="nav-cell"><a href="#reviews" target="_self"><?php say("p13-feature-title5") ?></a></li class="nav-cell">

</ul>
<ul class="nav navbar-nav navbar-right">
<li class="nav-cell nav-buy">
<a style="line-height: 24px;font-size:14px;font-weight: 600; " class="home-button-left " href="<?php echo $href ?>"><?php say('buy_now') ?></a>
</li>
</ul>
</div><!--  end of navbar-nav -->
</div><!-- end of navbar-collapse -->
</div><!-- End of container -->
</div><!--end of navbar-->
</div><!--end of product-nav -->
<!-- ------------------------------------------------------------------------------- SPECS ------------------------------------------------------------------------------------------- -->
<div id="prime13-main" class="main ">

<span class="anchor-only" name="feature-section" id="feature-section" class="anchor-only" ></span><!-- this is the anchor for the menu -->
    <div class="features-section dk-section first" >
<div class="dk-section-content container">
<div class="row text-center">
<div class="col-sm-2">
<img width='159px' height='159px' alt= "Aluminum panel icon" src="images/prime13-aluminum-top-panel.jpg"/>
<p><?php say("p13-feat-name1"); ?></p>
</div>
<div class="col-sm-2">
<img width='159px' height='159px' alt= "Cherry Switch" src="images/cherry_icon_mechanical_switch.jpg"/>
<p><?php say("p13-feat-name2"); ?></p>
</div>
<div class="col-sm-2">
<img width='159px' height='159px' alt= "LED icon" src="images/prime13-backlighting.jpg"/>
<p> <?php say("p13-feat-name3"); ?></p>
</div>
<div class="col-sm-2">
<img width='159px' height='159px' alt= "USB cable icon"src="images/prime13-braided-cable.jpg"/>
<p><?php say("p13-feat-name4"); ?></p>
</div>
<div class="col-sm-2">
<img width='159px' height='159px' alt= "USB icon" src="images/prime13-usb-port.jpg"/>
<p><?php say("p13-feat-name5"); ?></p>
</div>
<div class="col-sm-2">
<img width='159px' height='159px' alt= "N-key Rollover Icon" src="images/nkro_icon.jpg"/>
<p><?php say("p13-feat-name6"); ?></p>
</div>
</div><!-- end of row -->
</div><!-- End of container -->
</div><!-- end of feature-section -->

<!-- ------------------------------------------------------------------------------- TOP PANEL ------------------------------------------------------------------------------------------- -->

<!-- dk-section specific style -->

<span name="aluminium-top" id="aluminium-top" class="anchor-only" ></span><!-- this is the anchor for the menu -->
    <div class="aluminium-top dk-section section-description-first dk-section-content " >
<div class="container">

<div class="row text-center">

<div class=" col-xs-12 col-sm-10 col-sm-offset-1 ">
<h2><?php say("p13-section-topanel-title"); ?></h2>
            <p class="description">
              <?php say("p13-section-topanel-paragraph"); ?>
            </p>
          </div>
        </div>
        <!-- end of row -->
        <div class=" col-xs-12 col-sm-10 col-sm-offset-1 text-center">
          <img width='920px' height='226px' alt "Das Keyboard Prime 13 mechanical keyboard side view" src="images/prime13-mechanical-keyboard-sideview.jpg" />
        </div>
      </div>
      <!-- End of container -->

    </div>
    <!-- end of aluminum-top dk-section -->
    <!-- ------------------------------------------------------------------------------- SWITCHES ------------------------------------------------------------------------------------------- -->

    <!-- dk-section specific style -->


    <a name="switches-section" class="anchor-only"></a>
    <!-- this is the anchor for the menu -->
    <div class="switches-section section">
      <div class="container">
        <div class="row dk-section-content section-description-first">
          <div class="col-sm-8 col-md-8 col-sm-offset-2">
            <h2 class="text-center"><?php say("p13-switches-title"); ?></h2>
            <p class="text-center description">
              <?php say("p13-switches-paragraph"); ?>
            </p>
            <div class="row side-image-row">
              <div class="col-sm-6 col-xs-12">
                <h3 class=""><?php say("p13-switches-sub-title1"); ?></h3>
                <p>
                  <ul>
                    <li>
                      <?php say("p13-switches-graph11"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph12"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph13"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph14"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph15"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph16"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph17"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph18"); ?>
                    </li>
                    <li>
                      <?php say("p13-switches-graph19"); ?>
                    </li>
                  </ul>
                </p>
                <div class="sound">
                  <a href='javascript:;' ng-click='soundBrown()' class='playButton brown btn btn-lg btn-default btn-greetek-play-brown' data-mp3="/sound/Typing-experience-Click-mp3.mp3">
                    <span class='glyphicon glyphicon-play'></span> Play
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <img width='320px' height='263px' alt="Cherry Brown LED Switches" src="images/cherry-brown-curve.png" />
              </div>

            </div>
            <!-- end of row -->
          </div>
          <!-- end of col sm-8 -->

        </div>
        <!-- end of row -->
      </div>
      <!-- End of container -->
    </div>
    <!-- end of feature-section -->
    <!-- ------------------------------------------------------------------------------- LIGHTING dk-SECTION ------------------------------------------------------------------------------------------- -->

    <span name="lighting" id="lighting" class="anchor-only"></span>
    <!-- this is the anchor for the menu -->
    <div class="lighting dk-section dk-section-content section-description-first black-bg">

      <div class="container text-center ">
        <h2> <?php say("p13-lighting-subtitle"); ?></h2>
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-xs-12">
            <p class="description">
              <?php say("p13-lighting-paragraph"); ?>
            </p>
          </div>
        </div>
        <!-- end of row !-->

        <div class="text-center"><img width='360px' height='263px' alt="Das Keyboard Prime 13 mechanical keyboard backlighting" src="images/prime13-backligth-animated.gif" /></div>
      </div>
      <!-- End of container -->
    </div>
    <!-- end of lighting dk-section -->
    <!-- ------------------------------------------------------------------------------- USB SECCTION --------------------------------------------------------------------------------------- -->
    <!-- dk-section specific style -->

    <span name="usb" id="usb" class="anchor-only"></span>
    <!-- this is the anchor for the menu -->
    <div class="usb dk-section dk-section-content section-image-first">
      <div class="container">
        <h2 class="text-center"><?php say("p13-usb-title"); ?></h2>
        <div class="row">
          <div class="col-sm-6">
            <img width='553px' height='369px' class="framed" src="images/prime13-braided-usb.jpg" alt="Das Keyboard Prime 13 mechanical keyboard braided cable" />
            <h3> <?php say("p13-usb-subtitle-1"); ?></h3>
            <p>
              <?php say("p13-usb-paragraph-1"); ?>
            </p>
          </div>
          <!-- end of col -->
          <div class="col-sm-6">
            <img width='553px' height='369px' class="framed" alt="Das Keyboard Prime 13 mechanical keyboard usb port" src="images/prime13-usb-port-side-view.jpg" />
            <h3> <?php say("p13-usb-subtitle-2"); ?></h3>
            <p>
              <?php say("p13-usb-paragraph-2"); ?>

            </p>
          </div>
          <!-- end of col  -->
          <!-- <div class="col-sm-4">
    <img class="framed"  alt="Das Keyboard Prime 13 mechanical keyboard N-Key Rollover" src="images/new_nkro.jpg" />
    <h3> <?php say("p13-mkro-title"); ?></h3>
    <p>
    <?php say("p13-nkro-paragraph"); ?>
    </p>
    </div> -->
          <!-- end of col  -->
        </div>
        <!-- end of row -->
        <div class="row">
          <div class="col-sm-6 ">
          </div>
          <!-- end of col -->
          <div class="col-sm-6 ">
          </div>
          <!-- end of col -->
        </div>
        <!-- end of row -->
      </div>
      <!-- End of container -->
    </div>
    <!-- end of details dk-section -->


    <!-- ------------------------------------------------------------------------------- ENERGY dk-SECTION ------------------------------------------------------------------------------------------- -->

    <span style="" name="energy" id="energy" class="anchor-only"></span>
    <!-- this is the anchor for the menu -->
    <div class="energy dk-section black-bg">
      <div class="dk-section-content container">
        <div class="row side-image-row">
          <div class="col-sm-6 col-xs-12">
            <img width='444px' height='445px' alt="The Earth" src="images/earth.jpg" />
          </div>
          <div class="description col-sm-6 col-xs-12">
            <div class="">
              <h2> <?php say("p13-energy-title"); ?></h2>

              <p>
                <?php say("p13-energy-sub"); ?>
              </p>
              <p>
                <b><?php say("p13-energy-subtitle") ?></b>
                <br/>
                <?php say("p13-energy-paragraph"); ?>
              </p>

              <p>
                <b><?php say("p13-energy-subtitle2") ?></b>
                <br/>
                <?php say("p13-energy-paragraph2"); ?>
              </p>
            </div>
          </div>
        </div>
        <!-- end of row -->
      </div>
      <!-- End of container -->

    </div>
    <!-- end of energy dk-section -->
    <!-- ------------------------------------------------------------------------------- EVERY DETAILS MATTER --------------------------------------------------------------------------------------- -->


    <span name="details" id="details" class="anchor-only"></span>
    <!-- this is the anchor for the menu -->
    <div class="details dk-section dk-section-content  grey-section section-image-first">
      <div class="container">
        <h2 class="text-center"><?php say("p13-details-title")?></h2>
        <div class="row">
          <div class="col-sm-6">
            <div><img width='553px' height='369px' alt="Das Keyboard Prime 13 mechanical keyboard back label" class="framed" src="images/prime13-mechanical-keyboard-backlabel.jpg"></div>
            <h3> <?php say("p13-details-subtitle-1"); ?></h3>

            <p>
              <?php say("p13-details-paragraph-1"); ?>
            </p>

          </div>
          <div class="col-sm-6">
            <div><img width='553px' height='369px' alt="Das Keyboard Prime 13 mechanical keyboard sidelit" class="framed" src="images/prime13-mechanical-keyboard-sidelit.jpg" /></div>
            <h3> <?php say("p13-details-subtitle-2"); ?></h3>

            <p>
              <?php say("p13-details-paragraph-2"); ?>
            </p>

          </div>
        </div>
        <!-- end of row -->
      </div>
      <!-- End of container -->
    </div>
    <!-- end of details dk-section -->

    <!-- ------------------------------------------------------------------------------- CONNECT dk-SECTION ------------------------------------------------------------------------------------------- -->
    <!-- dk-section specific styling -->

    <span style="" name="connect" id="connect" class="anchor-only"></span>

    <!-- this is the anchor for the menu -->
    <div class="connect dk-section dk-section-content section-description-first black-bg">
      <div class=" container text-center section-content">

        <div class="">
          <h2> <?php say("p13-connect-title"); ?></h2>
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-xs-12">
              <p class="description">
                <?php say("p13-connect-paragraph"); ?>
              </p>
            </div>
          </div>

        </div>
        <img width='1048px' height='449px' alt="Das Keyboard Prime 13 mechanical keyboard connecting the user to the machine" src="images/prime13-mechanical-keyboard-connects-user.jpg" />
      </div>
      <!-- End of container -->

    </div>
    <!-- end of energy dk-section -->
    <!-- ------------------------------------------------------------------------------- knolling dk-SECTION ------------------------------------------------------------------------------------------- -->
    <!-- dk-section specific styling -->

    <span style="" name="knolling" id="knolling" class="anchor-only"></span>
    <!-- this is the anchor for the menu -->
    <div class="knolling dk-section section-description-first">
      <div class="dk-section-content container text-center">
        <h2> <?php say("p13-knolling-title"); ?></h2>
        <p class="description">
          <?php say("p13-knolling-paragraph"); ?>
        </p>
        <img width='1140px' height='801px' alt="Das Keyboard Prime 13 mechanical keyboard perfect for desktop knolling" src="images/knolling-wit-prime13-mechanical-keybaord.jpg" />
      </div>
      <!-- End of container -->
    </div>
    <!-- end of energy dk-section -->
    <!-- ------------------------------------------------------------------------------- Review dk-section --------------------------------------------------------------------------------------- -->
    <span name="reviews" id="reviews" class="anchor-only"></span>
    <!-- this is the anchor for the menu -->

    <style>
      .client .carousel-inner,
      .client .item-inner {
        background-color: transparent;
      }
      
      .clients-title {
        line-height: inherit;
        text-align: left;
      }
      
      .client .glyphicon {
        font-size: 14px;
        text-align: center;
      }
      
      .testimonials {
        margin-top: 0px;
      }
      
      .testimonial-author-info {
        color: white;
      }
      
      .testimonial-author-info .color {
        color: white;
        font-weight: 600;
      }
      
      .client .item p {
        font-size: inherit;
      }
      
      .client h3,
      .testimonial-author-info {
        text-shadow: 0 0 4px rgba(0, 0, 0, 1);
      }
    </style>
    <div class="reviews  dk-section">
      <div class="container dk-section-content ">


        <div class="row">
          <div class="client">
            <div class="client-logo">
              <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="clients-title">
                  <h3 class="">Prime 13 Reviews</h3>
                  <div class="carousel-controls pull-right">
                    <a class="prev" href="#client-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                    <a class="next" href="#client-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                  <div id="client-carousel" class="client-carousel carousel slide">
                    <div class="carousel-inner">
                      <div class="item active ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d1">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Tech logo" src="/reviews/images/techcrunch.png"/>
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d1">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Wired logo" src="images/wired.png" />
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d2">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Lifehacker logo" src="images/lifehacker.png" />
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d3 ">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Unbox therapy logo" src="images/unboxtherapy.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d4">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Pc Mag logo" src="images/pcmag.png" />
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d4">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Hothardware Logo" src="images/hothardware.png" />
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d3">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Techspot Logo" src="images/techspot.png" />
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d2">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Tom's hardware Logo" src="images/tomshardware.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d1">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="Tweaktown" src="images/tweaktown.png" />
                            </a>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 item">
                          <div class="item-inner animate_afc d1">
                            <a target="_blank" href="/reviews">
                              <img width='165px' height='175px' alt="My Gamer logo" src="images/mygamer.png" />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <!-- Testimonials Widget Start -->
                <div class="row ">
                  <div class="testimonials widget">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="clients-title">
                        <h3 class="">Testimonials</h3>
                        <div class="carousel-controls pull-right">
                          <a class="prev" href="#testimonials-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                          <a class="next" href="#testimonials-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="testimonials-carousel" class="testimonials-carousel carousel slide animate_afr d5 animate_start">
                      <div class="carousel-inner">
                        <div class="item">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                <?php say('p13-1-review') ?>
                              </p>
                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="images/icon-hothardware.png"></div>
                                <div class="testimonial-author-info">
                                  <a style="cursor: pointer;" target="_blank" href="/reviews"><span class="color"><?php say('p13-1-reviewer') ?></span></a>
                                  <?php say('p13-1-reviewOrga') ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                <?php say('p13-2-review') ?>
                              </p>
                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="images/icon-techspot.png"></div>
                                <div class="testimonial-author-info">
                                  <a style="cursor: pointer;" target="_blank" href="/reviews" target="_blank"><span class="color"><?php say('p13-3-reviewer') ?></span></a>
                                  <?php say('p13-3-reviewOrga') ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                <?php say('p13-3-review') ?>
                              </p>
                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="images/icon-pc-mag.png"></div>
                                <div class="testimonial-author-info">
                                  <a style="cursor: pointer;" target="_blank" href="/reviews"><span class="color"><?php say('p13-3-reviewer') ?></span></a>
                                  <?php say('p13-3-reviewOrga') ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                <?php say('p13-4-review') ?>
                              </p>
                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="images/wired.png"></div>
                                <div class="testimonial-author-info">
                                  <a style="cursor: pointer;" target="_blank" href="/reviews"><span class="color"><?php say('p13-4-reviewer') ?></span></a>
                                  <?php say('p13-4-reviewOrga') ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="item active">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="testimonial item">
                              <p>
                                <?php say('p13-tech-review') ?>
                              </p>
                              <div class="testimonials-arrow">
                              </div>
                              <div class="author">
                                <div class="testimonial-image "><img width='60px' height='60px' alt="" src="/reviews/images/techcrunch.png"></div>
                                <div class="testimonial-author-info">
                                  <a style="cursor: pointer;" target="_blank" href="/reviews"><span class="color"><?php say('p13-tech-reviewer') ?></span></a>
                                  <?php say('p13-tech-reviewOrga') ?>
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
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-offset-8 col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="clients-title">
              <h3><a href="<?php echo $current_language ?>/reviews" style="color:white;"><?php say("Read review prime 13") ?><span class="icon-angle-right"></span></a></h3>
            </div>
          </div>

        </div>
        <!-- End of container -->
      </div>
      <!-- end of specs dk-section -->
      <!-- ------------------------------------------------------------------------------- TECH SPECS --------------------------------------------------------------------------------------- -->
      <span name="specs" id="specs" class="anchor-only"></span>
      <!-- this is the anchor for the menu -->

      <div class="specs dk-section dk-section-content grey-section">
        <div class="container">
          <h2 class="text-center "><?php say("p13-specs-title")?></h2>
          <div class="row">
            <div class="col-sm-3">
              <h3> <?php say("p13-specs-subtitle-1"); ?></h3>
              <ul>
                <li>
                  <?php say("p13-specs-1"); ?>
                </li>
                <li>
                  <?php say("p13-specs-2"); ?>
                </li>
                <li>
                  <?php say("p13-specs-3"); ?>
                </li>
                <li>
                  <?php say("p13-specs-4"); ?>
                </li>
                <li>
                  <?php say("p13-specs-11"); ?>
                </li>
                <li>
                  <?php say("p13-specs-14"); ?>
                </li>
                <li>
                  <?php say("p13-specs-13"); ?>
                </li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h3> <?php say("p13-specs-subtitle-2"); ?></h3>
              <ul>

                <li>
                  <?php say("p13-specs-5"); ?>
                </li>
                <li>
                  <?php say("p13-specs-6"); ?>
                </li>
                <li>
                  <?php say("p13-specs-7"); ?>
                </li>
                <li>
                  <?php say("p13-specs-8"); ?>
                </li>
                <li>
                  <?php say("p13-specs-9"); ?>
                </li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h3> <?php say("p13-specs-subtitle-3"); ?></h3>
              <ul>

                <li>
                  <?php say("p13-specs-32"); ?>
                </li>
                <li>
                  <?php say("p13-specs-42"); ?>
                </li>
                <li>
                  <?php say("p13-specs-52"); ?>
                </li>
                <li>
                  <?php say("p13-specs-62"); ?>
                </li>
              </ul>
            </div>
            <div class="col-sm-3">
              <h3> <?php say("p13-specs-subtitle-4"); ?></h3>
              <ul>
                <li>
                  <?php say("p13-specs-12"); ?>
                </li>
              </ul>
            </div>
          </div>
          <!-- end of row -->
        </div>
        <!-- End of container -->
      </div>
      <!-- end of specs dk-section -->
      <!-- ------------------------------------------------------------------------------- faq dk-section ------------------------------------------------------------------------------------------- -->
      <span style="" name="faq" id="faq" class="anchor-only"></span>
      <!-- this is the anchor for the menu -->
      <div class="faq dk-section  ">
        <div class="dk-section-content container ">
          <h2> <?php say("p13-faqtitle"); ?></h2>
          <p>
            <ul>
              <li>
                <b><?php say("p13-faq-q1"); ?></b>
                <br/>
                <?php say("p13-faq-a1"); ?>
              </li>
              <li>
                <b><?php say("p13-faq-q2"); ?></b>
                <br/>
                <?php say("p13-faq-a2"); ?>
              </li>
              <li>
                <b><?php say("p13-faq-q3"); ?></b>
                <br/>
                <?php say("p13-faq-a3"); ?>
              </li>

              <li>
                <b><?php say("p13-faq-q5"); ?></b>
                <br/>
                <?php say("p13-faq-a5"); ?>
              </li>
            </ul>
          </p>
        </div>
        <!-- End of container -->
      </div>
      <!-- end of faq dk-section -->
      <!-- ------------------------------------------------------------------------------- GALERY --------------------------------------------------------------------------------------- -->
      <span name="gallery" id="gallery" class="anchor-only"></span>
      <!-- this is the anchor for the menu -->
      <div class="gallery dk-section dk-section-content section-image-first">
        <div class="container">
          <h2 class="text-center"><?php say("gallery-title"); ?></h2>
          <div id="carousel-gallery-p13" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-gallery-p13" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-gallery-p13" data-slide-to="1"></li>
              <li data-target="#carousel-gallery-p13" data-slide-to="2"></li>
              <li data-target="#carousel-gallery-p13" data-slide-to="3"></li>
              <li data-target="#carousel-gallery-p13" data-slide-to="4"></li>


            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img width='912px' height='513px'  src="images/prime13-mechanical-keybaord-top-corner.jpg" alt="close up on Prime 13 keycaps">
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <img width='912px' height='513px' src="images/angle-prime13-mechanical-keyboard.jpg" alt="Side view of Prime13">
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <img width='912px' height='513px' src="images/prime13-mechanical-keyboard-bright.jpg" alt="Side view of Prime13">
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <img width='912px' height='513px' src="images/daskeyboard-logo-on-prime13-mechanical-keybaord.jpg" alt="Top right view of Prime13">
                <div class="carousel-caption">

                </div>
              </div>
              <div class="item">
                <img width='912px' height='513px' src="images/mechanical-switches-prime13.jpg" alt="Cherry Brown LED mechanical switches">
                <div class="carousel-caption">

                </div>
              </div>
            </div>
            <!-- end of content -->

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-gallery-p13" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-gallery-p13" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- End of container -->
        </div>
      </div>
      <!-- end of galery dk-section -->

      <!-- buy part -->

      <div class="slogan bottom-pad-small-for-buy no-margin-bottom">
        <div class="container ">

          <div class="text-center">
            <div class="slogan-content">

              <h2 class="slogan-title" style="color:white"> <?php say('buy_daskeyboard_prime13') ?></h2>

              <a style="margin-left:15px;" href="<?php echo $href ?>" class="red-button">
                <?php say('buy_now') ?>
              </a>

            </div>
          </div>
          <!-- end of center block contained -->
        </div>
      </div>
    </div>
    <!-- end of main dk-section -->

    <!-- Content End -->
    <audio id="soundBrown" src="/sound/Typing-experience-Soft-mp3.mp3"></audio>
    <audio id="soundBlue" src="/sound/Typing-experience-Click-mp3.mp3"></audio>
    <audio id="soundOlive" src="/sound/LinearFinal2.0.m4a"></audio>
    <audio id="soundMustard" src="/sound/TactileFinal2.0.m4a"></audio>
    <?php include_once '../../footer.php' ?>