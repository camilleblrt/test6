<?php include_once 'header.php' ?>


  <div id="main">

    <script defer type="text/javascript" src="https://static.criteo.net/js/ld/ld.js" async="true"></script>

    <script defer type="text/javascript">
      window.criteo_q = window.criteo_q || [];
      var deviceType = /iPad/.test(navigator.userAgent) ? "t" : /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : "d";
      window.criteo_q.push({
        event: "setAccount",
        account: 26380
      }, {
        event: "setSiteType",
        type: deviceType
      }, {
        event: "viewHome"
      }, {
        event: "setData",
        ui_product: "daskeyboard"
      });
    </script>
    <?php



include 'library/includes/inc_carousel.php' ;



?>

<style>
  .catalog-image{
    height:240px;
  }
  .btn-product{
    background:#aa030c;
    border:1px solid #92030a;
    color:#ffffff;
    margin-bottom:20px;
  }
</style>

   <div class="promo-section">
        <div class="container">
          <div class="row">
            <div class="promo-heading">
              <h2><?php say("learn more -homepage-23") ?></h2>
              <div class="promo-subline">
              </div>
            </div>
          </div>
        </div>
        <div id="products-list">
          <div class="container">
            <div class="row">
              <ul id="portfolio">
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional cloud-connected backlit filter-new">
                  <div class="inside-item">
                    <div class="catalog-content">
                      <div class="corner-ribbon"><?php say("pre-order")?></div>
                      <div class="catalog-image" style="overflow: hidden; position: relative;">
                        <a href="<?php echo $current_language ?>/p/5q-cloud-connected-rgb-mechanical-keyboard/">
                          <img id="5Q-catalog-image" width="318px" height="239px" src="/5Q/images/5Q-mechanical-keyboard-front-view.png" alt="Mechanical Keyboard 5Q cloud connected">
                        </a>
                      </div>
                      <div class="catalog-info">
                        <h3><?php say("5Q_brand")?></h3>
                        <div class="catalog-price">
                            <?php say("5Qprice")?>
                        </div>
                        <div class="catalog-description">
                            <?php say("5Qdescription")?>
                        </div>
                      </div>
                    </div>
                    <div class="catalog-bottom">
                      <div class="catalog-divider"></div>
                      <div class="catalog-buttons">
                        <a class="catalog-button-left" href="http://shop.daskeyboard.com/products/das-keyboard-5q"><?php say("pre-order")?><i class="icon-caret-right"></i></a>
                        <a class="catalog-button-right" href="<?php echo $current_language ?>/p/5q-cloud-connected-rgb-mechanical-keyboard/">
                            <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional cloud-connected backlit filter-new">
                  <div class="inside-item">
                    <div class="catalog-content">
                      <div class="corner-ribbon"><?php say('new'); ?></div>
                      <div class="catalog-image" style="overflow: hidden; position: relative;">
                        <a href="<?php echo $current_language ?>/x/x50-rgb-mechanical-keyboard/">
                          <img id="5Q-catalog-image" width="318px" height="203px" src="/x/x50-rgb-mechanical-keyboard/images/X50-702x528.jpg" alt="Mechanical Keyboard 5Q cloud connected">
                        </a>
                      </div>
                      <div class="catalog-info">
                        <h3><?php say("x50_brand")?></h3>
                        <div class="catalog-price">
                            <?php say("x50price")?>
                        </div>
                        <div class="catalog-description">
                            <?php say("x50description")?>
                        </div>
                      </div>
                    </div>
                    <div class="catalog-bottom">
                      <div class="catalog-divider"></div>
                      <div class="catalog-buttons">
                        <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say('compare-models_button'); ?> <i class="icon-caret-right"></i></a>
                        <a class="catalog-button-right" href="<?php echo $current_language ?>/x/x50-rgb-mechanical-keyboard/">
                            <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard ultimate">
                  <div class="inside-item">
                    <div class="catalog-content">
                      <div class="catalog-image" style="overflow: hidden; position: relative;">
                        <a href="<?php echo $current_language ?>/daskeyboard-4-ultimate/">
                          <img width="318px" height="239px" src="/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-front-view-thumbnail.jpg" alt="Mechanical Keyboard Daskeyboard 4 Ultimate">
                        </a>
                      </div>
                      <div class="catalog-info">
                        <h3><?php say("daskeyboar-4-ultimate_brand")?></h3>
                        <div class="catalog-price">
                            <?php say("dk4uprice")?>
                        </div>
                        <div class="catalog-description">
                            <?php say("dk4udescription")?>
                        </div>
                      </div>
                    </div>
                    <div class="catalog-bottom">
                      <div class="catalog-divider"></div>
                      <div class="catalog-buttons">
                        <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say('compare-models_button'); ?> <i class="icon-caret-right"></i></a>
                        <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4-ultimate/">
                            <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional">
                  <div class="inside-item">
                    <div class="catalog-content">
                      <div class="catalog-image">
                        <a href="<?php echo $current_language ?>/daskeyboard-4-professional/">
                          <img width="318px" height="239px" src="/images/product/daskeyboard-4-professional/daskeyboard-4-professional-front-view-thumbnail.jpg" alt="Mechanical Keyboard Daskeyboard 4 Professional">
                        </a>
                      </div>
                      <div class="catalog-info">
                        <h3><?php say("daskeyboard-for-professional_brand")?></h3>
                        <div class="catalog-price">
                            <?php say("dk4pprice")?>
                        </div>
                        <div class="catalog-description">
                            <?php say("dkp desc")?>
                        </div>
                      </div>
                    </div>
                    <div class="catalog-bottom">
                      <div class="catalog-divider"></div>
                      <div class="catalog-buttons">
                        <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say('compare-models_button'); ?> <i class="icon-caret-right"></i></a>
                        <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4-professional/">
                            <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional cloud-connected backlit">
                  <div class="inside-item">
                    <div class="catalog-content">
                      <div class="catalog-image" style="overflow: hidden; position: relative;">
                        <a href="<?php echo $current_language ?>/x/x40-mechanical-keyboard/">
                          <img id="x40-catalog-image" width="318px" height="179px" src="/x/x40-mechanical-keyboard/images/division-zero-x40-gaming-mechanical-keyboard-banner3.png" alt="Mechanical Keyboard 5Q cloud connected">
                        </a>
                      </div>
                      <div class="catalog-info">
                        <h3><?php say("x40_brand")?></h3>
                        <div class="catalog-price">
                            <?php say("x40-price")?>
                        </div>
                        <div class="catalog-description">
                            <?php say("d0desc")?>
                        </div>
                      </div>
                    </div>
                    <div class="catalog-bottom">
                      <div class="catalog-divider"></div>
                      <div class="catalog-buttons">
                        <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say('compare-models_button'); ?> <i class="icon-caret-right"></i></a>
                        <a class="catalog-button-right" href="<?php echo $current_language ?>/x/x40-mechanical-keyboard/">
                            <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional">
                  <div class="inside-item">
                    <div class="catalog-content">
                      <div class="catalog-image">
                        <a href="<?php echo $current_language ?>/model-s-professional/">
                          <img width="318px" height="239px" src="/images/products/model-s-professional.jpg" alt="Mechanical Keyboard Model S Professional">
                        </a>
                      </div>
                      <div class="catalog-info">
                        <h3><?php say("model-s-professional_brand")?></h3>
                        <div class="catalog-price">
                            <?php say("model-s-professional_price")?>
                        </div>
                        <div class="catalog-description">
                            <?php say("model-s-professional_desc")?>
                        </div>
                      </div>
                    </div>
                    <div class="catalog-bottom">
                      <div class="catalog-divider"></div>
                      <div class="catalog-buttons">
                        <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say('compare-models_button'); ?> <i class="icon-caret-right"></i></a>
                        <a class="catalog-button-right" href="<?php echo $current_language ?>/model-s-professional/">
                            <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
                <a role="button" class="btn btn-lg btn-product center-block" href="<?php echo $current_language ?>/products/mechanical-keyboards/"><?php say('see-all-keyboards'); ?> </a>
                
        <!--<div class="services-big">
          <div class="container">
            <div class="row">
              <div class="equal-height">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="home-product-box">
                    <div class="home-product-content">
                      <div class="home-product-image">
                        <a href="<?php echo $current_language ?>/daskeyboard-4-ultimate/">
                          <img width="318px" height="170px" src="/images/home-daskeyboard-4-ultimate.jpg" alt="daskeyboard 4 ultimate"></a>
                      </div>
                      <div class="home-product-info">
                        <h3><?php say("learn more -homepageu-33") ?></h3>
                        <div class="home-product-price">
                          <?php say("dk4urice") ?>
                        </div>
                        <div class="home-product-description">
                          <?php say("dk4udescription") ?>
                        </div>
                      </div>
                    </div>
                    <div class="home-product-bottom">
                      <div class="home-product-divider"></div>
                      <div class="home-product-buttons">
                        <a class="home-button-left" href="<?php echo $current_language ?>/compare-keyboards/">
                          <?php say("comparemodelss") ?>&nbsp;<i class="icon-caret-right"></i></a>
                        <a class="home-button-right" href="<?php echo $current_language ?>/daskeyboard-4-ultimate/">
                          <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>-->
                <!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="home-product-box">
                    <div class="home-product-content">
                      <div class="home-product-image">
                        <a href="<?php echo $current_language ?>/daskeyboard-4-professional/"><img width="318px" height="170px" src="/images/home-daskeyboard-4-professional.jpg" alt="daskeyboard 4 ultimate"></a>
                      </div>
                      <div class="home-product-info">
                        <h3><?php say("learn more -homepage-33") ?></h3>
                        <div class="home-product-price">
                          <?php say("dkp price") ?>
                        </div>
                        <div class="home-product-description">
                          <?php say("dkp desc") ?>
                        </div>
                      </div>
                    </div>
                    <div class="home-product-bottom">
                      <div class="home-product-divider"></div>
                      <div class="home-product-buttons">
                        <a class="home-button-left" href="<?php echo $current_language ?>/compare-keyboards/">
                          <?php say("comparemodels4") ?>&nbsp;<i class="icon-caret-right"></i></a>
                        <a class="home-button-right" href="<?php echo $current_language ?>/daskeyboard-4-professional/">
                          <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="home-product-box">
                    <div class="home-product-content">
                      <div class="home-product-image">
                        <a href="/gaming/x40-pro-mechanical-keyboard/"><img width="318px" height="170px" src="/images/home-gaming-mechanical-keyboard.jpg" alt="gaming keyboard"></a>
                      </div>
                      <div class="home-product-info">
                        <h3><?php say("learn more -homepage-34") ?></h3>
                        <div class="home-product-price">
                          <?php say("d0price") ?>
                        </div>
                        <div class="home-product-description">
                          <?php say("d0desc") ?>
                        </div>
                      </div>
                    </div>
                    <div class="home-product-bottom">
                      <div class="home-product-divider"></div>
                      <div class="home-product-buttons">
                        <a class="home-button-left" href="<?php echo $current_language ?>/compare-keyboards/">
                          <?php say("lcompare models 5") ?>&nbsp;<i class="icon-caret-right"></i></a>
                        <a class="home-button-right" href="/gaming/x40-pro-mechanical-keyboard/index.php">
                          <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
        </div>
      </div>
      <div class="promo-section-dark">
        <div class="container">
          <div class="row">
            <div class="promo-heading">
              <h2><?php say("learn more -homepage-24") ?></h2>
              <div class="promo-subline"></div>
            </div>
            <div class="promo-benefits">
              <div class="equal-height">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="benefit-column">
                    <a href="<?php echo $current_language ?>/values/">
                      <img width="568px" height="266px" alt="Daskeyboard 4 for Mac by the window" src="/images/dk4mac-by-the-window.jpg" />
                    </a>
                    <h3><?php say("learn more -homepage-35") ?></h3>
                    <p>
                      <?php say("homepage mechanical experience1") ?>
                        <a href="<?php echo $current_language ?>/values/">
                          <?php say("learn more") ?> <i class="icon-angle-right"></i></a>
                    </p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <div class="benefit-column">
                    <a href="<?php echo $current_language ?>/switches/">
                      <img width="568px" height="266px" alt="Cherry MX Switches in a Daskeyboard 4 ultimate" src="/images/switches.jpg" />
                    </a>
                    <h3><?php say("learn more -homepage-36") ?></h3>
                    <p>
                      <?php say("homepage mechanical experience2") ?>
                        <a href="<?php echo $current_language ?>/switches/">
                          <?php say("learn more") ?> <i class="icon-angle-right"></i></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="promo-section">
        <div class="container">
          <div class="row">
            <div class="promo-heading">
              <h2><?php say("title-homepage-26") ?></h2>
              <div class="promo-subline"></div>
            </div>
          </div>
        </div>
        <div class="clients-section">
          <style>
            .clients-section a:hover {
              border-bottom: 1px white solid;
            }
            
            .clients-section a {
              border-bottom: 1px transparent solid;
            }
          </style>
          <div class="container">
            <div class="row">
              <div class="clients-column">
                <div class="clients-title">
                  <h3><a href="<?php echo $current_language ?>/reviews" style="color:white;"><?php say("Read review") ?><span class="icon-angle-right"></span></a></h3>
                </div>
              </div>
              <div class="clients-column">
                <div class="clients-reviews">
                  <div class="item animate_afc d1">
                    <a href="<?php echo $current_language ?>/reviews">
                      <img alt="Pc Mag Logo" width="102px" height="102px" src="/images/icon-pc-mag.png" />
                    </a>
                  </div>
                  <div class="item animate_afc d2">
                    <a href="<?php echo $current_language ?>/reviews">
                      <img alt="Techradar Logo" width="102px" height="102px" src="/images/icon-tech-radar.png" />
                    </a>
                  </div>
                  <div class="item animate_afc d3">
                    <a href="<?php echo $current_language ?>/reviews">
                      <img alt="Geek Logo" width="102px" height="102px" src="/images/icon-geek.png" />
                    </a>
                  </div>
                  <div class="item animate_afc d4">
                    <a href="<?php echo $current_language ?>/reviews">
                      <img alt="Wired Logo" width="102px" height="102px" src="/images/icon-wired.png" />
                    </a>
                  </div>
                  <div class="item animate_afc d5">
                    <a href="<?php echo $current_language ?>/reviews">
                      <img alt="Tech Crunck Logo" width="102px" height="102px" src="/images/icon-tech-crunch.png" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>

  <?php include_once 'footer.php'; ?>