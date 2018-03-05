<?php include_once '../../header.php' ;?>
<!--content start -->
<?php
if ($current_language !== "/de") {
    $href = "https://shop.daskeyboard.com/products/das-keyboard-x50-rgb-mechanical-keyboard";
} else {
    $href = "/de/where-to-buy/";
}
?>
<link rel = "stylesheet" type = "text/css" href = "css/x50-css.css" />
 
 
 </head>


  
  <!-- ----------------------------------------------
      ------------------ CAROUSEL --------------------
      -------------------------------------------- -->
<style>

  @media screen and (max-width:375px){
    .size-div{
      height:282px;
    }
  }
</style>


<section id="x50-carousel" class="dk-section-content section-description-first carousel black-bg" style="padding-bottom:0px;" data-ride="carousel">
  <div class="container">  
  <h1 class="x50-big-name">
      <?php say('x50_big_title') ?>
  </h1>
    <div class="carousel-inner x50-carousel-inner">
      <div class="gaming">
        <ol class="carousel-indicators effect-carousel-indicators">
          <li data-target="#carousel-customizable-lighting" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="1"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="2"></li>
        </ol>
      </div>
      <div class="carousel-inner text-center">
        <div class="item active text-center center-block size-div">
          <div class="heading-underscore">
            <h2>
                <?php say('x50_slider_1_title') ?>
            </h2>
          </div>
          <p class="x50-centered-text">
            <?php say('x50_slider_1_subtitle') ?>
          </p>
          <img style="width: 80%;" alt="Das Keyboard X50 RGB Mechanical Keyboard Front View" src="images/x50-mechanical-keyboard-front-view.png" width="912px" height="545px" />
        </div>

        <div class="item text-center center-block size-div">
          <div class="heading-underscore">
            <h2>
                <?php say('x50_slider_2_title') ?>
            </h2>
          </div>
          <p class="x50-centered-text">
            <?php say('x50_slider_2_subtitle') ?>
          </p>
          <img style="width:80%" alt="Das Keyboard X50 RGB Mechanical Keyboard Diagonal View" src="images/x50-rgb-mechanical-keyboard-diagonal-view.jpg"  width="912px" height="544px" />
        </div>

        <div class="item text-center center-block size-div">
          <div class="heading-underscore">
            <h2>
                <?php say('x50_slider_3_title') ?>
            </h2>
          </div>
          <p class="x50-centered-text">
            <?php say('x50_slider_3_subtitle') ?>
          </p>
          <img style="width:80%" alt="Das Keyboard X50 RGB Mechanical Keyboard Side View" src="images/x50-rgb-mechanical-keyboard-side-view.jpg"  width="912px" height="544px" />
        </div>
      </div>

      <a style="display:none" class="left carousel-control" href="#x50-carousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" style="top:50%"></span>
      </a>
      <a style="display:none" class="right carousel-control" href="#x50-carousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" style="top:50%"></span>
      </a>
    </div>
  </div>
</section> 

    <!-- --------------------------------------------
    ----------------- END CAROUSEL ------------------
    ----------------------------------------------- -->

<section class="dk-section-content black-bg"> 
    <div class="container">
      <div class="row text-center" style="margin:0px 50px">
        <div class=" col-xs-12 col-sm-10 col-sm-offset-1">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" width="560px" height="315px"  src="https://www.youtube.com/embed/G2RxBS0ZseY?rel=0&amp;showinfo=0" frameborder="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>  
</section>
    
  <!-- -----------------------------------------------------------
      -------------- PERFORMANCE MEETS DESIGN PANEL ---------------
      ---------------------------------------------------------- -->

<span class="anchor-only" name="feature-section"  class="anchor-only"></span>
<span name="performance-top" id="perfomance-top" class="anchor-only"></span>
<section id="x50-first-section" class="dk-section-content section-description-first black-bg">
  <div class="container"> 
    <div class="row text-center">
      <div class=" col-xs-12 col-sm-10 col-sm-offset-1 ">
        <div class="heading-underscore">
          <h2>
                <?php say("x50-section-topanel-title"); ?>
          </h2>
        </div>
        <p class= "x50-centered-text">
            <?php say("x50-section-topanel-text"); ?>
        </p>
      </div>
    </div>
    <div class="x50-centered-image">
      <img alt="Das Keyboard X50 RGB Side View" id="50-sideview" src="images/x50-rgb-sideview.jpg"  width="1140px" height="305px"/>
    </div>
    <div class="col-xs-12">
      <div class="col-sm-4">
        <figure style="text-align:center; padding-top:10px;">
          <img style="width:100px; height:auto;" alt="Das Keyboard X50 RGB Mechanical Keyboard Gamma Zulu Switch Badge." src="images/gamma-zulu-badge.png"  width="100px" height="134px"/>
            <figcaption style="text-transform: capitalize;"><?php say("GammaZulu_badge"); ?></figcaption>
        </figure>
      </div>
      <div class="col-sm-4">
        <figure style="text-align:center; padding-top:10px;">
          <img style="width:100px; height:auto;" alt="Das Keyboard X50 RGB Mechanical Keyboard Color Badge." src="images/color-badge.png"  width="100px" height="134px"/>
          <figcaption style="text-transform: capitalize;"><?php say("Color_badge"); ?>  </figcaption>
        </figure>
      </div>
      <div class="col-sm-4">
        <figure style="text-align:center; padding-top:10px;">
          <img style="width:100px; height:auto;" alt="Das Keyboard X50 RGB Mechanical Keyboard Aluminum Badge." src="images/aluminum-badge.png"  width="100px" height="134px"/>
          <figcaption style="text-transform: capitalize;"><?php say("Aluminum_badge"); ?> </figcaption>   
        </figure>
      </div>
    </div>
  </div>  
</section>
 
      <!---------------------------------------------
      ------------ END PERFOMANCE PANEL --------------
      ---------------------------------------------- -->

      <!------------------------------------------------
      ----------------- SWITCHES ---------------------
      -------------------------------------------- -->
   
<a name="switches-section" class="anchor-only"></a>
<section class="dk-section-content black-bg"> 
<div class="container"> 
  <div class="row"> 
    <div class="col-xs-12 col-sm-12"> 
      <div class="col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs" style=" display: block; "> 
        <img style="display: block; margin-left: 50px;" alt="Gamma Zulu Switch 3D" src="https://staging.daskeyboard.com/p/5q-cloud-connected-rgb-mechanical-keyboard/images/switch-3D.png" width="229px" height="466px"> 
        <div style="margin-left: 50px; padding-top:2%;" class="download"> 
          <a href="/x/x50-rgb-mechanical-keyboard/switch.php">
            <?php say("switch-3D"); ?>
          </a> 
        </div> 
      </div> 
      <div class="col-md-8 col-sm-12 col-xs-12 "> 
        <div class="heading-underscore" style="text-align:left;"> 
          <h2 class="dk-5q-color"> 
            <?php say("5q-switches-title"); ?>
          </h2> 
        </div> 
        <p class="switch-content"> 
          <?php say("x50-switches-paragraph"); ?> 
        </p> 
        <table class="table"> 
          <thead> 
            <tr> 
              <th></th> 
              <th style="text-align:right; font-size:13px"> 
                <?php say("gamma-zulu-table-line-1-col-2"); ?>
              </th> 
              <th style="text-align:right; font-size:13px" class="dk-5q-color">
                <?php say("gamma-zulu-table-line-1-col-3"); ?> 
              </th> 
            </tr> 
          </thead> 
          <tbody> 
            <tr> 
              <td style="vertical-align: middle;" class="title-line" nowrap="">
                <?php say("x50-table-actuation"); ?> 
              </td> 
              <td class="gamma-zulu-column">
                <?php say("x50-table-2mm"); ?>
              </td> 
              <td class="gamma-zulu-column dk-5q-color">
                <?php say("x50-table-1point5mm"); ?>
              </td> 
            </tr> 
            <tr> 
              <td style="vertical-align: middle;" class="title-line" nowrap="">
                <?php say("x50-table-travel"); ?>
              </td> 
              <td class="gamma-zulu-column">
                <?php say("x50-table-4mm"); ?>
              </td> 
              <td class="gamma-zulu-column dk-5q-color">
                <?php say("x50-table-3point5mm"); ?>
              </td> 
            </tr> 
            <tr> 
              <td style="vertical-align: middle;" class="title-line" nowrap="">
                <?php say("x50-table-life"); ?>
              </td> 
              <td class="gamma-zulu-column">
                <?php say("x50-table-50million"); ?>
              </td> 
              <td class="gamma-zulu-column dk-5q-color">
                <?php say("x50-table-100million"); ?>
              </td> 
            </tr> 
            <tr style="border-bottom: 1px solid #ddd;"> 
              <td style="vertical-align: middle;" class="title-line" nowrap="">
                <?php say("x50-table-contact"); ?>
              </td> 
              <td class="gamma-zulu-column">
                <?php say("x50-table-sigle-point"); ?>
              </td> 
              <td class="gamma-zulu-column dk-5q-color">
                <?php say("x50-table-double-point"); ?>
              </td> 
            </tr> 
          </tbody> 
        </table> 
        <div class="asterisk" style="margin-bottom:40px"> 
          <?php say("5q-based-on-manufacturer"); ?>
      </div> 
      <div class="col-md-4 col-sm-12 col-xs-12 hidden-lg hidden-md" style="padding-top:5%; padding-bottom:40px; display: block;"> 
        <img style="display: block; margin-left: auto; margin-right: auto;" alt="Gamma Zulu Switch 3D" src="/p/5q-cloud-connected-rgb-mechanical-keyboard/images/switch-3D.png" width="229px" height="466px"> 
        <div style="text-align:center; padding-top:2%;" class="download"> 
          <a style="max-width:450px;" href="/x/x50-rgb-mechanical-keyboard/switch.php">
            <?php say("switch-3D"); ?>
          </a> 
        </div> 
      </div> 
      <div class="row"> 
        <div class="sound">
          <button id='btnStart'
                  class="btn btn-lg button-switch"
                  ng-click='SoundLinear()'
                  data-mp3="sounds/gammaZulu_soft_tactile-cut.mp3"
                  style="margin-right:10px;">
            <span id="musicSign" class="glyphicon glyphicon-play " style="left: 0%; top: 1px; font-size: 18px;"></span>
            <div class="bar" style="height: 0px;"></div>
            <?php say("5q-play-sound"); ?>
          </button>
        </div> 
      </div> 
      <div class="row"> 
        <button type="button" data-toggle="collapse" class="btn btn-lg button-switch" href="#collapseLearnMore"> 
          <?php say("learn-more-about-switch"); ?>
        </button> 
      </div> 
    </div> 
  </div> 
</div>
</section>

  <!-- Learn More -->
  <section class="collapse" id="collapseLearnMore">
    <div class="container collapse-container">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <div class="col-xs-12" style="padding-bottom:30px;">
          <h3><?php say("x50_learn_more"); ?></h3>
          <p class="learn-more-description">
            <?php say("x50-switches-paragraph-learn-more"); ?>
          </p>
            <img style="width:100%" alt="Gamma Zulu RGB LED Switches" src="images/gamma-zulu-switches-drawing.jpg"  width="865px" height="501px"/>
        </div>
        <div class="col-xs-12">
          <h4> 
            <?php say("x50-switches-technical-title"); ?>
          </h4>
          <div class="img-container1 col-xs-12 col-sm-6">
          <figure>
            <img class="img1" alt="Gamma Zulu Mechanical Switches Characteristics" src="images/gamma-zulu-switch-characteristics.jpg"  width="427px" height="311px" />
            <figcaption style="text-align:center;"><?php say("x50-switches-technical-img1"); ?> </figcaption>   
          </figure>
          </div>
          <div class="img-container2 col-xs-12 col-sm-6"> 
          <figure>
            <img class="img2" alt="Gamma Zulu Switch Diagram" src="images/gamma-zulu-switches-graph.jpg"  width="427px" height="311px" />
            <figcaption style="text-align:center;"><?php say("x50-switches-technical-img2"); ?> </figcaption>   
          </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
      <!---------------------------------------------
      ----------------- END SWITCHES -----------------
      ------------------------------------------------>

      <!------------------------------------------------
      ----------------- RGB LIGHTING -----------------
      -------------------------------------------- -->


<span name="lighting" id="lighting" class="anchor-only"></span>
<section class="dk-section-content section-description-first black-bg rgb-section">
  <div class="container">
    <div class="heading-underscore">
      <h2>
            <?php say("rgb-lighting-title"); ?>
      </h2>
    </div>
    <div class="col-xs-12">
      <div style="border-bottom: 0px; padding-bottom:0px; align-items:flex-start;" class="row side-image-row side-image-cut side-image-normal">
        <div style= "text-align:center;"  class="col-md-6">
          <img style="width:315px; height:auto;" alt="Gamma Zulu colored LED Switches" src="images/gama-zulu-color-switch.jpg" />
        </div>
        <div class="description col-md-6">
          <div>
            <h3>
                  <?php say("rgb-lighting-subtitle"); ?>
            </h3>
            <h4>
                  <?php say("rgb-lighting-subtitle-2"); ?>
            </h4>
            <p>
                  <?php say("rgb-lighting-paragraph"); ?>
            </p>
            <p class="asterisk">
                <?php say("rgb-lighting-asterisk"); ?>
            </p>
          </div>
        </div>
      </div>  
    </div>
  </div>
</section>

      <!---------------------------------------------
      --------------- END RGB LIGHTING ---------------
      ------------------------------------------------>

      <!------------------------------------------------
      ------------- CUSTOMIZABLE LIGHTING ------------
      -------------------------------------------- -->

<section class="dk-section-content dk-section-content-carousel section-description-first black-bg">
  <div class="container">  
    <div style="width: 100%;" class="container text-center">
      <div class="heading-underscore">
        <h2>
            <?php say("customizable-lighing-title"); ?>
        </h2>
      </div>
      <p class="x50-centered-text">
        <?php say("customizable-lighing-subtitle"); ?>
      </p>
    </div>
    <div id="carousel-customizable-lighting" class="carousel carousel2 slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="gaming">
        <ol style="bottom:0px;" class="carousel-indicators effect-carousel-indicators">
          <li data-target="#carousel-customizable-lighting" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="1"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="2"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="3"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="4"></li>
          <li data-target="#carousel-customizable-lighting" data-slide-to="5"></li>
        </ol>
      </div>

      <!-- Wrapper for slides -->
      <div class="carousel-inner text-center">

        <figure class="item active">
          <img style="width:80%;" class="img-xs" src="animation-gifs/wave-lighting-effect.gif" alt="Wave Lighting Effect" width="912px" height="342px">
          <figcaption class="effect-name">Wave Effect </figcaption>
        </figure>

        <figure class="item">
          <img style="width:80%;" class="img-xs" src="animation-gifs/ripple-lighting-effect.gif" alt="Ripple Lighting Effect" width="912px" height="342px">
          <figcaption class="effect-name">Ripple Effect</figcaption>
        </figure>

        <figure class="item">
          <img style="width:80%;" class="img-xs" src="animation-gifs/laser-lighting-effect.gif" alt="Laser Lighting Effect" width="912px" height="342px">
          <figcaption class="effect-name">Laser Effect</figcaption>
        </figure>

        <figure class="item">
          <img style="width:80%;" class="img-xs" src="animation-gifs/key-press-reactive-effect.gif" alt="Key Press Reactive Effect" width="912px" height="342px">  
          <figcaption class="effect-name">Key Press Reactive Effect</figcaption>
        </figure>

        <figure class="item">
          <img style="width:80%;" class="img-xs" src="animation-gifs/in-ward-ripple-effect.gif" alt="In Ward Ripple Effect" width="912px" height="342px">
          <figcaption class="effect-name">In Ward Ripple Effect</figcaption>
        </figure>

        <figure class="item">
          <img style="width:80%;" class="img-xs" src="animation-gifs/bouncing-lights-effect.gif" alt="Bouncing Lights Effect" width="912px" height="342px">
          <figcaption class="effect-name">Bouncing Lights Effect</figcaption>
        </figure>

        
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#carousel-customizable-lighting" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left gaming-green"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-customizable-lighting" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right gaming-green"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
     
  </div>
</section>


    
      <!---------------------------------------------
      ----------- END CUSTOMIZABLE LIGHTING ----------
      ------------------------------------------------>


      <!------------------------------------------------
      ----------- DURABLE PREMIUM MATERIAL -----------
      -------------------------------------------- -->

  <span name="durable-premium-material" id="durable-premium-material" class="anchor-only"></span>
    
      <!-- this is the anchor for the menu -->
    <section class="dk-section-content dk-section-content-multi section-description-first black-bg">
      <div class="container">
        <div class="section-content">
          <div class="heading-underscore">
            <h2 class="text-center">
                <?php say("x50-durable-premium-title"); ?>
            </h2>
          </div>
            <!-- ALUMINUM TOP PANEL -->
            <div style="align-items: center;" class="row side-image-row side-image-cut side-image-normal">
              <div class="description col-md-6 col-sm-6 col-xs-12">
                <div>
                  <h3>
                    <?php say("x50-aluminum-top-panel-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-aluminum-top-panel-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-aluminum-top-panel-paragraph"); ?>
                  </p>
                  <p class="asterisk">
                    <?php say("asterisk-durable-aluminium"); ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img class="img-responsive img-durable" alt="X50 RGB Mechanical Keyboard with a Durable Aluminium Panel" src="images/das-keyboard-x50-aluminum-panel.jpg" width="421px" height="279px"/>
              </div>
            </div>
            <!-- end of row -->
            <!-- QUICK ACCESS AUDIO CONTROL -->
            <div style="align-items: center;" class="row side-image-row side-image-cut  side-image-normal">
              <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
                <img class="img-responsive img-durable" alt="X50 RGB Mechanical Keyboard with a Media Control" src="images/das-keyboard-x50-audio-control.jpg" width="393px" height="234px"/>
              </div>
              <div class="description col-md-6 col-sm-6 col-xs-12">
                <div>
                  <h3 >
                    <?php say("x50-quick-audio-access-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-quick-audio-access-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-quick-audio-access-paragraph"); ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 visible-xs">
                <img class="img-responsive img-durable" alt="X50 RGB Mechanical Keyboard with a Media Control" src="images/das-keyboard-x50-audio-control.jpg" width="393px" height="234px"/>
              </div>
            </div>
            <!--end of row-->
            <!-- N-KEY -->
            <div style="align-items: center;" class="row side-image-row side-image-cut push-down-row">
              <div class="col-md-6 col-sm-6 col-xs-12 description">
                <div>
                  <h3>
                    <?php say("x50-n-key-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-n-key-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-n-key-paragraph"); ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img class="img-responsive img-durable" alt="X50 RGB Mechanical Keyboard with N-Key" src="images/x50-rgb-mechanical-keyboard-side-view.jpg" width="490px" height="250px"/>
              </div>
            </div>
            <!--end of row-->
            <!-- ENERGY-SAVING -->
            <div style="align-items: center;" class="row side-image-row side-image-cut  side-image-normal">
              <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
                <img class="img-responsive img-durable" alt="The Earth" src="images/earth.jpg" width="299px" height="300px"/>
              </div>
              <div class="description col-md-6 col-sm-6 col-xs-12">
                <div>
                  <h3>
                    <?php say("x50-energy-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-energy-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-energy-paragraph"); ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 visible-xs">
                <img class="img-responsive img-durable" alt="The Earth" src="images/earth.jpg" width="299px" height="300px"/>
              </div>
            </div>

            <!-- <div style="align-items: center;" class="row side-image-row side-image-cut  side-image-normal">
              <div class="description col-md-6 col-sm-6 col-xs-12">
                <div>
                  <h3>
                    <?php say("x50-energy-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-energy-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-energy-paragraph"); ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img class="img-responsive img-durable img-earth" alt="The Earth" src="images/earth.jpg" width="299.5" height="300" />
              </div>
            </div> -->
            <!-- end of row -->
            <!--LONG CABLE-->
            <div class=" side-image-cut-middle row side-image-normal">
              <h3 class="text-center">
                    <?php say("x50-long-cable-title"); ?>
              </h3>
              <h4 class="text-center">
                    <?php say("x50-long-cable-subtitle"); ?>
              </h4>

              <div style= "width:100%;">
                <figure style="text-align:center">
                  <img class="x50-centered" alt="Long dog with long braided cable" style= "width:60%;" src="images/long-dog-with-long-cable.png" width="624px" height="321px"/>
                  <figcaption class="img-dog"><?php say("x50-long-cable-paragraph"); ?></figcaption>
                </figure>
              </div>
            </div>
            <!-- end of row -->
          <!--BEAST BELLY-->
            <div style="align-items: center;" class="row side-image-row side-image-cut  side-image-normal">
              <div class="description col-md-6 col-sm-6 col-xs-12">
                  <h3>
                    <?php say("x50-inside-the-beast-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-inside-the-beast-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-inside-the-beast-paragraph"); ?>
                  </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img class="img-responsive img-durable" alt="Black PCB" src="images/das-keybaord-x50-black-pcb.jpg" width="250px" height="250px"/>
              </div>
          </div>
          <!--end of row-->
          <!--SOFT TOUCH PALM-->
          <div style="align-items: center;" class="row side-image-row side-image-cut">
              <div class="col-md-6 col-sm-6 col-xs-12 hidden-xs">
                <img class="img-responsive img-durable" alt="Soft Touch Palm Rest" src="images/soft-touch-palm-blurred.jpg" width="490px" height="292px" />
              </div>
              <div class="description col-md-6 col-sm-6 col-xs-12">
                  <h3>
                    <?php say("x50-soft-touch-palm-rest-title"); ?>
                  </h3>
                  <h4>
                    <?php say("x50-soft-touch-palm-rest-subtitle"); ?>
                  </h4>
                  <p>
                    <?php say("x50-soft-touch-palm-rest-paragraph"); ?>
                  </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 visible-xs">
                <img class="img-responsive img-durable" alt="Soft Touch Palm Rest" src="images/soft-touch-palm-blurred.jpg" width="490px" height="292px"/>
              </div>
          </div>
        <!--enf of row -->
        <!-- WASD keycaps -->
          <div style="align-items: center;" class="row side-image-row side-image-cut-dernier side-image-normal"> 
              <div class="description col-md-6 col-sm-6 col-xs-12">
                  <h3>
                    <?php say("x50-WASD-keycaps-title"); ?>
                  </h3>
                  <p>
                    <?php say("x50-WASD-keycaps-paragraph"); ?>
                    <?php say("x50-WASD-keycaps-subparagraph"); ?>
                  </p>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <img class="img-responsive img-durable" alt="WASD Keycaps" src="images/wasd-keycaps.png"  width="490px" height="326px"/>
              </div>
          </div>
          <!--end of row-->
        </div>
      </div>
    </section>

      <!------------------------------------------------
        --------- END DURABLE PREMIUM MATERIAL ---------
        ------------------------------------------------>


      <!------------------------------------------------
        ---------------- SPECIFICATIONS ----------------
        -------------------------------------------- -->
<style>
  @media screen and (max-width:1200px) {
    .specification-container {
        width:auto;
        margin-left:0px;

    }
  }

</style>
    <span class="anchor-only" name="specs-section" id="specs" class="anchor-only"></span>
  <section class="container-fluid x50-specification-text black-bg dk-section-content dk-section-content-spec">
    <div class="container">
      <section class="specification-container">
        <h2 style="background-color: #92B241; color:#fff; text-align:left;">
            <?php say("x50-specifications-title"); ?>
        </h2>
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <!-- product information -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-1"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-1"); ?>
              </li>
              <li>
                <?php say("x50-specifications-2"); ?>
              </li>
              <li>
                <?php say("x50-specifications-3"); ?>
              </li>
              <li>
                <?php say("x50-specifications-4"); ?>
              </li>
              <li>
                <?php say("x50-specifications-5"); ?>
              </li>
              <li>
                <?php say("x50-specifications-6"); ?>
              </li>
              <li>
                <?php say("x50-specifications-7"); ?>
              </li>
              <li>
                <?php say("x50-specifications-8"); ?>
              </li>
              <li>
                <?php say("x50-specifications-10"); ?>
              </li>
            </ul>
              <!-- SYSTEM REQUIREMENTS -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-2"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-11"); ?>
              </li>
              <li>
                <?php say("x50-specifications-12"); ?>
              </li>
              <li>
                <?php say("x50-specifications-13"); ?>
              </li>
            </ul>
            <!-- WARRANTY INFORMATION -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-3"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-14"); ?>
              </li>
            </ul>
            <!-- PACKAGE CONTENT -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-4"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-15"); ?>
              </li>
              <li>
                <?php say("x50-specifications-16"); ?>
              </li>
              <li>
                <?php say("x50-specifications-17"); ?>
              </li>
              <li>
                <?php say("x50-specifications-18"); ?>
              </li>
              <li>
                <?php say("x50-specifications-19"); ?>
              </li>
            </ul>
          </div>
            <!-- Second column -->
          <div class="col-md-6 col-xs-12">
            <!-- SYSTEM REQUIREMENTS -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-5"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-20"); ?>
              </li>
              <li>
                <?php say("x50-specifications-21"); ?>
              </li>
              <li>
                <?php say("x50-specifications-22"); ?>
              </li>
              <li>
                <?php say("x50-specifications-23"); ?>
              </li>
              <li>
                <?php say("x50-specifications-24"); ?>
              </li>
            </ul>
            <!-- GAMMA ZULU SWITCHES MADE BY OMRON FOR DAS KEYBOARD -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-6"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-25"); ?>
              </li>
              <li>
                <?php say("x50-specifications-26"); ?>
              </li>
              <li>
                <?php say("x50-specifications-27"); ?>
              </li>
              <li>
                <?php say("x50-specifications-28"); ?>
              </li>
              <li>
                <?php say("x50-specifications-29"); ?>
              </li>
              <li>
                <?php say("x50-specifications-30"); ?>
              </li>
            </ul>
            <!-- AVAILABLE LAYOUTS:  -->
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-7"); ?>
            </div>
            <ul class="tab-spec">
              <li>
                <?php say("x50-specifications-31"); ?>
              </li>
              <li>
                <?php say("x50-specifications-32"); ?>
              </li>
              <li>
                <?php say("x50-specifications-33"); ?>
              </li>
              <li>
                <?php say("x50-specifications-34"); ?>
              </li>
              
            </ul>   
            <div class="specification-subtitle">
                <?php say("x50-specifications-subtitle-8"); ?>
            </div>
            <ul class="tab-spec">
              <li class="download">
                <a href="https://daskeyboard.github.io/"><?php say("download-daskeyboard-software"); ?></a>
              </li>         
            </ul> 
            
          <div class="specification-subsubtitle">
              <?php say("x50-specifications-35"); ?>
          </div>
        </div>
        </div>
      
            <!------------------------------------------------
            ------------------ END SPECIALISATIONS ----------
            -------------------------------------------- -->


            <!------------------------------------------------
            ------------------ ACCESSORIES -----------------
            -------------------------------------------- -->
      
        <span class="anchor-only" name="accessories-section" id="accessories" class="anchor-only"></span>
        <h2 style="background-color: #92B241; color:#fff; text-align:left; padding-top:10px;">
            <?php say("x50-accessories-title"); ?>
        </h2>
        <div class="specification-subtitle">
          <?php say("x50-accessories-title-1"); ?>
        </div>
        <ul class="tab-spec">
          <li>
            <?php say("x50-accessories-1"); ?>
          </li>
          <li>
            <?php say("x50-accessories-2"); ?>
          </li>
          <li>
            <?php say("x50-accessories-3"); ?>
          </li>
        </ul>   
        <div class="specification-subtitle">
          <?php say("x50-accessories-title-4"); ?>
        </div>
        <ul class="tab-spec">
          <li>
          <?php say("x50-accessories-4"); ?>
          </li>
        </ul>
      </section>
      
    </div>
  </section>
  

            <!-- -------------------------------------------
            ---------------- END ACCESSORIES ---------------
            ---------------------------------------------- -->

    <!--Gamma Zulu Sound-->
    <audio id="gammaZulu" src="sounds/gammaZulu_soft_tactile.mp3"></audio>
    <script src="https://code.jquery.com/jquery.min.js" type="text/javascript"></script>
    <script>
    function soundGammaZulu(){
      document.getElementById('gammaZulu').play();
    };
    

    </script>
    <script src="../../js/custom_sound_switch_gaming.js"></script>
    <audio id="SoundLinear" src="sounds/gammaZulu_soft_tactile-cut.mp3"></audio>
    <!--End Gamma Zulu Sound-->

</div>
<?php include_once '../../footer.php' ?>