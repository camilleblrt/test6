<?php include '../header.php' ?>
  <style>
    body {
      background-image: url('/images/professional-reviews.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    
    .home #main {
      background-color: transparent;
      padding-top: 25px;
    }
    
    .breadcrumb-wrapper {
      border-bottom: none;
    }
    
    p.review-quote {
      color: rgb(20, 20, 20);
      font-weight: 500;
      font-size: 1.3em;
    }
    
    @media screen and (max-width: 625px) {
      p.review-quote {
        margin-top: 20px;
      }
    }
    
    .quote-icon {
      max-height: 1em;
    }
  </style>
  <div id="loading" class="container text-center">
    <div class="spinner">
      <div class="rect1"></div>
      <div class="rect2"></div>
      <div class="rect3"></div>
      <div class="rect4"></div>
      <div class="rect5"></div>
    </div>
  </div>
  <div class="row reviews-page-title">
    <div class="col-md-12 breadcrumb-wrapper">
      <div class="container">
        <h1 class="title"><?php say('reviews_title1')?></h1>
        <p>
          <?php say('reviews_paragraph1')?>
        </p>
      </div>
    </div>
  </div>
  <div id="main" class="page-review">
    <!--                                        HERE STARTS THE PAGE REVIEW                                                                -->
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img  width='82px' height='88px' class="logo" src="images/techcrunch.png" alt="wired logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('techcrunch_review')?>
          </p>
          <p>
            <?php say('techcrunch_review_subtitle')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="https://techcrunch.com/2016/11/22/the-das-keyboard-prime-13-brings-the-gaming-keyboard-to-the-board-room/">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/wired.png" alt="wired logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content07')?>
          </p>
          <p>
            <?php say('reviews_subtitle07')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="https://www.wired.com/2016/09/review-das-keyboard-prime-13/">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/unboxtherapy.png" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content25')?>
          </p>
          <p>
            <?php say('reviews_subtitle025')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="https://www.youtube.com/watch?v=NNzcqxUtz7g">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/lifehacker.png" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content26')?>
          </p>
          <p>
            <?php say('reviews_subtitle026')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://lifehacker.com/the-das-keyboard-prime-13-is-a-sleek-backlit-mechanica-1786064326">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/hothardware.png" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content27')?>
          </p>
          <p>
            <?php say('reviews_subtitle027')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://hothardware.com/reviews/das-keyboard-prime-13-mechanical-keyboard-review">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/techspot.png" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content28')?>
          </p>
          <p>
            <?php say('reviews_subtitle028')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.techspot.com/review/1240-das-keyboard-prime-13/">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">

      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/mygamer.png" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content29')?>
          </p>
          <p>
            <?php say('reviews_subtitle029')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.mygamer.com/das-keyboard-prime-review/">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/tweaktown.png" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content30')?>
          </p>
          <p>
            <?php say('reviews_subtitle030')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.tweaktown.com/reviews/7866/das-keyboard-prime-13-mechanical-review/index.html">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/gomechanical-logo.jpg" alt="gomechanicalkeyboard logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content00')?>
          </p>
          <p>
            <?php say('reviews_subtitle000')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://gomechanicalkeyboard.com/best-mechanical-keyboards/">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class=" reviews-boxes container flex-container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/pcmag_logo.jpg" alt="www.pcmag.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content0')?>
          </p>
          <p>
            <?php say('reviews_subtitle0')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.pcmag.com/article2/0,2817,2455340,00.asp">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class=" reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="https://www.geek.com/wp-content/themes/geek7/images/geek_logo.svg" alt="www.geek.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content1')?>
          </p>
          <p>
            <?php say('reviews_subtitle1')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="https://www.geek.com/news/das-keyboard-4-announced-with-aluminum-design-and-dedicated-media-controls-1588928/">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container" alt "www.gamecrate.com review logo">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/tweaktown_logo.jpg" alt="wwww.tweaktown.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content3')?>
          </p>
          <p>
            <?php say('reviews_subtitle3')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.tweaktown.com/news/36538/das-keyboard-4-rocks-mechanical-keys-with-or-without-labels/index.html" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/mygamer_logo.png" alt="wwww.mygamer.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content2')?>
          </p>
          <p>
            <?php say('reviews_subtitle2')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.mygamer.com/das-keyboard-announces-new-das-keyboard-4-model" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>



    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/engadget_logo.png" alt="wwww.engaget.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content4')?>
          </p>
          <p>
            <?php say('reviews_subtitle4')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.engadget.com/products/metadot/das-keyboard/4/professional/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/techradar_logo.jpg" alt="wwww.techradar.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content5')?>
          </p>
          <p>
            <?php say('reviews_subtitle5')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.techradar.com/us/reviews/pc-mac/peripherals/das-keyboard-4-professional-1243653/review" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>


    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="   reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/techspot_logo.jpg" alt="www.techspot.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content6')?>
          </p>
          <p>
            <?php say('reviews_subtitle6')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.techspot.com/review/817-das-keyboard-4-professional/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>

    <!--                                        TAB DK4Mac CONTENT                                                                       -->

    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class="   reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/imore_logo.jpg" alt="www.imore.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content8')?>
          </p>
          <p>
            <?php say('reviews_subtitle8')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.imore.com/das-keyboard-4-brings-full-featured-mechanical-typing-experience-mac" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/slashgear_logo.png" alt="www.slashgear.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content9')?>
          </p>
          <p>
            <?php say('reviews_subtitle9')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.slashgear.com/das-keyboard-4-professional-the-new-macbook-antithesis-10373136/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>


    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="   reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/tell_logo.png" alt="www.technologytell.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content10')?>
          </p>
          <p>
            <?php say('reviews_subtitle10')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.technologytell.com/apple/147680/das-keyboard-4-professional-mac-significant-update/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/geardiary_logo.png" alt="www.geardiary.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content11')?>
          </p>
          <p>
            <?php say('reviews_subtitle11')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://geardiary.com/2015/03/11/das-keyboard-4-professional-for-mac-up-for-pre-order-175/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="   reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/macgasm_logo.png" alt="macgasm logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content12')?>
          </p>
          <p>
            <?php say('reviews_subtitle12')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.macgasm.net/2015/03/11/das-keyboard-debuts-ew-model-for-mac/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/tell_logo.png" alt="www.technologytell.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content13')?>
          </p>
          <p>
            <?php say('reviews_subtitle13')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.technologytell.com/apple/148773/review-das-keyboard-4-professional-for-mac/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="   reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/imore_logo.jpg" alt="www.imore.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content14')?>
          </p>
          <p>
            <?php say('reviews_subtitle14')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.imore.com/das-keyboard-4-professional-mac-review" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/cultofmac_logo.png" alt="wwww.cultofmac.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content15')?>
          </p>
          <p>
            <?php say('reviews_subtitle15')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.cultofmac.com/273134/the-new-das-keyboard-looks-so-cool-your-desk-will-feel-ashamed-of-itself/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>


    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/slashgear_logo.png" alt="wwww.slashgear.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content16')?>
          </p>
          <p>
            <?php say('reviews_subtitle16')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.slashgear.com/das-keyboard-4c-review-28366509/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/techcrunch_logo.png" alt="wwww.techcrunch.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content17')?>
          </p>
          <p>
            <?php say('reviews_subtitle17')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://techcrunch.com/2015/02/03/the-blank-das-keyboard-4c-is-for-mavis-beacon-graduates-only/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/wired_logo.png" alt="wwww.wired.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content18')?>
          </p>
          <p>
            <?php say('reviews_subtitle18')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.wired.com/2015/02/das-keyboard-4c/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>

    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/tomshardware_logo.jpg" alt="wwww.tomshardware.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content19')?>
          </p>
          <p>
            <?php say('reviews_subtitle19')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.tomshardware.com/news/das-keyboard-4c,28466.html" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/pcmag_logo.jpg" alt="wwww.pcmag.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content20')?>
          </p>
          <p>
            <?php say('reviews_subtitle20')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.pcmag.com/article2/0,2817,2478602,00.asp" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>

    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/WSJ_logo.jpg" alt="Wall Street Journal logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content21')?>
          </p>
          <p>
            <?php say('reviews_subtitle21')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://note.taable.com/post/1389/www.wsj.com/articles/3-mechanical-keyboards-that-bring-back-that-satisfying-clatter-1429210121?mod=WSJ_GoogleNews" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/slashgear_logo.png" alt="wwww.slashgear.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content22')?>
          </p>
          <p>
            <?php say('reviews_subtitle22')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href="http://www.slashgear.com/das-keyboard-4c-review-28366509/" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
    <div class="reviews-separator"></div>
    <div class="row review-row">
      <div class="  reviews-boxes container flex-container">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 text-center">
          <img width='82px' height='88px' class="logo" src="images/laptopmemo_logo.png" alt="wwww.laptopmemo.com logo">
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
          <p class="review-quote"><img width='27px' height='18px' src="images/icon-apos-red.png" class="quote-icon" alt="Quote icon">
            <?php say('reviews_content23')?>
          </p>
          <p>
            <?php say('reviews_subtitle23')?>
          </p>
          <a class="btn btn-md review-button" target="_blank" href=" http://laptopmemo.com/2015/05/24/das-keyboard-4c-professional-review-smaller-mechanical-master" target="_blank">
            <?php say('read_more_review')?>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="reviews-separator"></div>

  </div>


  <?php include '../footer.php' ?>