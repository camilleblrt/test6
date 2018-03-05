<?php

include_once '../../header.php';

if ($current_language !== "/de") {
    $href_hackshield_backpack = "http://shop.daskeyboard.com/collections/products/products/hackshield-backpack";
    $href_gaming_sling = "http://shop.daskeyboard.com/collections/products/products/das-keyboard-gaming-sling";
    $href_messenger_bag = "http://shop.daskeyboard.com/collections/products/products/hackshield-messenger-bag";
    $href_space_pen = "http://shop.daskeyboard.com/collections/products/products/das-keyboard-space-pen";
    
    $href_keykaps = "http://shop.daskeyboard.com/products/wasd-key-cap-set-without-inscriptions";
    $href_keykaps_linux = "http://shop.daskeyboard.com/collections/products/products/linux-key-cap-bundle-1";
} else {
    $href_hackshield_backpack = "/de/where-to-buy/";
    $href_gaming_sling = "/de/where-to-buy/";
    $href_messenger_bag = "/de/where-to-buy/";
    $href_space_pen = "/de/where-to-buy/";
    
    $href_keykaps = "/de/where-to-buy/";
    $href_keykaps_linux = "/de/where-to-buy/";
}

?>

<style>
  .catalog-image{
    height:240px;
  }

  
</style>

  <!-- Content Start -->
  <div id="main" class="products-page">

    <!-- Title, Breadcrumb Start-->
    <div class="breadcrumb-wrapper">
      <div class="container">
        <div class="row">
          <ul id="filter-list" class="clearfix">
            <li class="filter" data-filter="all">
                <?php say("all")?>
            </li>
            <li class="filter" data-filter="professional">
                <?php say("mechanical_Keyboards_category-1")?>
            </li>
            <li class="filter" data-filter="ultimate">
                <?php say("mechanical_Keyboards_category-2")?>
            </li>
            <li class="filter" data-filter="mac">
                <?php say("mechanical_Keyboards_category-3")?>
            </li>
            <!--<li class="filter" data-filter="compact">
                <?php say("mechanical_Keyboards_category-4")?>
            </li>-->
            <li class="filter" data-filter="backlit">
                <?php say("mechanical_Keyboards_category-5")?>
            </li>
            <li class="filter" data-filter="cloud-connected">
                <?php say("mechanical_Keyboards_category-6")?>
            </li>
            <li class="filter" data-filter="cherryMX">
                <?php say("mechanical_Keyboards_category-7")?>
            </li>
            <li class="filter" data-filter="DK_zulu_switch">
                <?php say("mechanical_Keyboards_category-8")?>
            </li>
            <li class="filter" data-filter="RGB">
                <?php say("mechanical_Keyboards_category-9")?>
            </li>
            <li class="filter" data-filter="aluminum">
                <?php say("mechanical_Keyboards_category-10")?>
            </li>
          </ul>
          <!-- @end #filter-list -->
        </div>
      </div>
    </div>

    <!--For banners on images add <div class="corner-ribbon shadow">NEW</div>-->
     <!-- when adding ribbon, set overflow and position on parent div style="overflow: hidden; position: relative;"-->

    <!-- New portfolio -->
    <div id="products-list">
      <div class="container">
        <div class="row">
          <ul id="portfolio">
 
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional cloud-connected backlit DK_zulu_switch RGB aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                <div class="corner-ribbon"><?php say("pre-order")?></div>
                  <div class="catalog-image" style="overflow: hidden; position: relative;">
                    <a href="<?php echo $current_language ?>/p/5q-cloud-connected-rgb-mechanical-keyboard/">
                      <img id="5Q-catalog-image" width="318px" height="239px" src="/p/5q-cloud-connected-rgb-mechanical-keyboard/images/das-keyboard-5Q-front-view.jpg" alt="Mechanical Keyboard 5Q cloud connected">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("5Q_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-1")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-5")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-6")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-8")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-9")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("5Qprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("5Qdescription")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("5Q1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("5Q2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("5Q3")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="http://shop.daskeyboard.com/products/das-keyboard-5q"><?php say("pre-order")?><i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/p/5q-cloud-connected-rgb-mechanical-keyboard/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional backlit DK_zulu_switch RGB aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="corner-ribbon"><?php say('new'); ?></div>
                  <div class="catalog-image" style="overflow: hidden; position: relative;">
                    <a href="<?php echo $current_language ?>/x/x50-rgb-mechanical-keyboard/">  
                      <img id="x50-catalog-image" width="318px" height="239px" src="X50-702x528.jpg" alt="Mechanical Keyboard 5Q cloud connected">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("x50_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-5")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-8")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-9")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("x50price")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("x50description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("x50-1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("x502")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("x50-3")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/x/x50-rgb-mechanical-keyboard/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard backlit DK_zulu_switch aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image" style="overflow: hidden; position: relative;">
                    <a href="<?php echo $current_language ?>/x/x40-mechanical-keyboard/">
                      <img id="x40-catalog-image" width="318px" height="179px" src="/x/x40-mechanical-keyboard/images/division-zero-x40-gaming-mechanical-keyboard-banner3.png" alt="Mechanical Keyboard 5Q cloud connected">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("x40_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-5")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-8")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("x40-price")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("x40-description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("x40-1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("x40-2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("x40-3")?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/x/x40-mechanical-keyboard/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item professional keyboard ultimate cherryMX aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image" style="overflow: hidden; position: relative;">
                    <a href="<?php echo $current_language ?>/daskeyboard-4-ultimate/">
                      <img width="318px" height="239px" src="/images/product/daskeyboard-4-ultimate/daskeyboard-4-ultimate-front-view-thumbnail.jpg" alt="Mechanical Keyboard Daskeyboard 4 Ultimate">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("daskeyboar-4-ultimate_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-2")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("dk4uprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("dk4udescription")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("dk4u1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("dk4u2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("dk4u3")?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4-ultimate/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard backlit ultimate cherryMX aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image" style="overflow: hidden; position: relative;">
                    <a href="<?php echo $current_language ?>/p/prime13-mechanical-keyboard/">
                    
<?php
if ($current_language !== "/de") {
    echo '<img "width="318px" height="239px" src="/p/prime13-mechanical-keyboard/images/p13.png" alt="daskeyboard prime 13"/>';
} else {
    echo '<img width="318px" height="239px" src="/p/prime13-mechanical-keyboard/images/p13.png"/>';
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("p13-professional_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-1")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-2")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-5")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("p13cprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("p13descrition")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("p1341")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("p1342")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("p1343")?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/p/prime13-mechanical-keyboard">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

           
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional mac cherryMX aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/daskeyboard-4-professional-for-mac/">
<?php
if ($current_language !== "/de") {
    echo '<img width="318px" height="239px" src="/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-professional-for-mac-front-view-thumbnail.jpg" alt="daskeyboard 4 professional for mac"/>';
} else {
    echo '<img width="318px" height="239px" src="/images/product/daskeyboard-4-professional-for-mac/daskeyboard-4-professional-for-mac-front-view-thumbnail-de.jpg" alt="daskeyboard 4 professional for mac"/>';
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("dk4pmactitle"); ?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-1")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-3")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("dk4pmacprice"); ?>
                    </div>
                    <div class="catalog-description">
                        <?php say("dk4pmacdesc"); ?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("dk4pmac1"); ?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("dk4pmac2"); ?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("dk4pmac3"); ?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4-professional-for-mac/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional aluminum">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/daskeyboard-4-professional/">
                      <img width="318px" height="239px" src="/images/product/daskeyboard-4-professional/daskeyboard-4-professional-front-view-thumbnail.jpg" alt="Mechanical Keyboard Daskeyboard 4 Professional">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("daskeyboard-for-professional_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-1")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-10")?></span>
                    <div class="catalog-price">
                        <?php say("dk4pprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("dk4pdescription")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("dk4p1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("dk4p2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("dk4p3")?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4-professional/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard ultimate cherryMX">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/model-s-ultimate/">
                      <img width="318px" height="239px" src="/images/products/model-s-ultimate.jpg" alt="Mechanical Keyboard Model S Ultimate">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("model-s-ultimate_brand")?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-2")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <div class="catalog-price">
                        <?php say("model-s-ultimate_brandprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("model-s-ultimate_brand-desc")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("model-s-ultimate_brand-1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("model-s-ultimate_brand-2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("model-s-ultimate_brand-3")?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/model-s-ultimate/">
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
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-1")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <div class="catalog-price">
                        <?php say("model-s-professional_price")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("model-s-professional_desc")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("model-s-professional-1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("model-s-professional-2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("model-s-professional-3")?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/model-s-professional/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard mac cherryMX">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/model-s-professional-for-mac/">
                      <img width="318px" height="239px" src="/images/products/model-s-professional-for-mac.jpg" alt="Model S Professional for Mac">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("Model S Professional Mac") ?></h3>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-1")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-3")?></span>
                    <span class="label label-default"><?php say("mechanical_Keyboards_category-7")?></span>
                    <div class="catalog-price">
                        <?php say("Model S Professional Mac price") ?>
                    </div>
                    <div class="catalog-description">
                        <?php say("Model S Professional Mac desc") ?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("Model S Professional Mac 1") ?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("Model S Professional Mac 2") ?>
                      </div>
                    </div>
                    <div class="catalog-spec-column col-sm-5 col-md-5 col-lg-5">
                      <div class="catalog-spec-title">
                        <?php say("Model S Professional Mac3") ?>
                      </div>
                      <div class="catalog-spec-desc">
                      <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/"><?php say("Compare models") ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/model-s-professional-for-mac/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>


            <!-- <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard ultimate compact">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/daskeyboard-4C-ultimate/">
<?php
if ($current_language !== "/de") {
    echo '<img width="318px" height="239px" src="/images/product/daskeyboard-4C-ultimate/daskeyboard-4C-ultimate-front-view-thumbnail.jpg" alt="daskeyboard 4C ultimate"/>';
} else {
    echo '<img width="318px" height="239px" src="/images/product/daskeyboard-4C-ultimate/daskeyboard-4C-ultimate-front-view-thumbnail-de.jpg" alt="daskeyboard 4C ultimate"/>';
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("daskeyboar-4C-ultimate_brand")?></h3>
                    <div class="catalog-price">
                        <?php say("dkcuprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("dkcudescription")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column" col-sm-5 col-md-5 col-lg-5>
                      <div class="catalog-spec-title">
                        <?php say("catalog-1")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("catalog-2")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column" col-sm-5 col-md-5 col-lg-5>
                      <div class="catalog-spec-title">
                        <?php say("catalog-3")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/">Compare Models <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4C-ultimate/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li> -->

            <!-- <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item keyboard professional compact">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/daskeyboard-4C-professional/">
<?php
if ($current_language !== "/de") {
    echo '<img width="318px" height="239px" src="/images/product/daskeyboard-4C-professional/daskeyboard-4C-professional-front-view-thumbnail.jpg" alt="daskeyboard 4C professional"/>';
} 
else {
    echo '<img width="318px" height="239px" src="/images/product/daskeyboard-4C-professional/daskeyboard-4C-professional-front-view-thumbnail-de.jpg" alt="daskeyboard 4C professional"/>';
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("daskeyboard-forC-professional_brand")?></h3>
                    <div class="catalog-price">
                        <?php say("dk4cprice")?>
                    </div>
                    <div class="catalog-description">
                        <?php say("dk4cdescrition")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-spec">
                    <div class="catalog-spec-column" col-sm-5 col-md-5 col-lg-5>
                      <div class="catalog-spec-title">
                        <?php say("dk41")?>
                      </div>
                      <div class="catalog-spec-desc">
                        <?php say("dk42")?>
                      </div>
                    </div>
                    <div class="catalog-spec-column" col-sm-5 col-md-5 col-lg-5>
                      <div class="catalog-spec-title">
                        <?php say("dk43")?>
                      </div>
                      <div class="catalog-spec-desc">
                       <?php say("switch-brand")?>
                      </div>
                    </div>
                  </div>
                  <div class="catalog-divider"></div>
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/compare-keyboards/">Compare Models <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-4C-professional/">
                        <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li> -->

          </ul>
          <!-- @end #portfolio -->
        </div>
        <!-- @end .row -->
      </div>
      <!-- @end .container -->
    </div>

    <!-- Title, Breadcrumb End-->
    <!-- Main Content start-->

    <!-- Main Content end-->
  </div>
  <!-- Content End -->

    <?php include_once '../../footer.php'; ?>