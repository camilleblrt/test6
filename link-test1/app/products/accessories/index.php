<?php

include_once '../../header.php';

if ($current_language !== "/de")
{
    $href_hackshield_backpack = "http://shop.daskeyboard.com/collections/products/products/hackshield-backpack";
    $href_gaming_sling = "http://shop.daskeyboard.com/collections/products/products/das-keyboard-gaming-sling";
    $href_messenger_bag = "http://shop.daskeyboard.com/collections/products/products/hackshield-messenger-bag";
    $href_space_pen = "http://shop.daskeyboard.com/collections/products/products/das-keyboard-space-pen";
    
    $href_keykaps = "http://shop.daskeyboard.com/products/wasd-key-cap-set-without-inscriptions";
    $href_keykaps_linux = "http://shop.daskeyboard.com/collections/products/products/linux-key-cap-bundle-1";
}
else
{
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
    height:239px;
  }

  
</style>
  <!-- Content Start -->
  <div id="main" class="products-page">
    <!-- New portfolio -->
    <div id="products-list">
      <div class="container">
        <div class="row">
          <ul id="portfolio">
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories hidden">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/daskeyboard-space-pen/">
                      <img width="318px" height="239px" src="/images/products/Das-keyboard-space-pen.jpg" alt="Space Pen">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("space_pen_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("space_pen_price")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("space_pen_desc")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $href_space_pen ?>">
                      <?php say('buy_now'); ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/daskeyboard-space-pen/">
                      <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $href_keykaps ?>">
                      <img width="318px" height="239px" src="/images/products/key-caps-without-inscription.jpg" alt="Red and Green Key Caps">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("key-caps_brand_2")?></h3>
                    <div class="catalog-price">
                      <?php say("key-caps_brand_2price")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("key-caps_brand_2description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $href_keykaps ?>">
                      <?php say('buy_now'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $href_keykaps_linux ?>">
                      <img width="318px" height="239px" src="/images/products/key-caps.jpg" alt="Linux Key Caps">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("key-caps_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("key-caps_brandprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("key-caps_brandpdescroption")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $href_keykaps_linux ?>">
                      <?php say('buy_now'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="https://shop.daskeyboard.com/products/das-keyboard-professional-font-rgb-keycap-set-for-gamma-zulu-switches-black">
                      <img width="318px" height="239px" src="images/Das-Keyboard-black-professional-font-keycaps.png" alt="Das Keyboard black professional font RGB keycap set for Gamma Zulu switches ">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("gamma-zulu-keycaps-black-rgb-brand")?></h3>
                    <div class="catalog-price">
                      <?php say("gamma-zulu-keycaps-black-rgb-brandprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("gamma-zulu-keycaps-black-rgb-brandpdescroption")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="https://shop.daskeyboard.com/products/das-keyboard-professional-font-rgb-keycap-set-for-gamma-zulu-switches-black">
                      <?php say('pre_order'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="https://shop.daskeyboard.com/products/das-keyboard-blank-rgb-keycap-set-for-gamma-zulu-switches-translucent">
                      <img width="318px" height="239px" src="images/Das-Keyboard-translucent-blank-keycaps.png" alt="Das Keyboard Translucent Blank Key Cap Set For Gamma Zulu Switches">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("gamma-zulu-keycaps-translucent-blank-brand")?></h3>
                    <div class="catalog-price">
                      <?php say("gamma-zulu-keycaps-translucent-blank-brandprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("gamma-zulu-keycaps-translucent-blank-brandpdescroption")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="https://shop.daskeyboard.com/products/das-keyboard-blank-rgb-keycap-set-for-gamma-zulu-switches-translucent">
                      <?php say('pre_order'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="https://shop.daskeyboard.com/products/das-keyboard-modern-font-dvorak-rgb-keycap-set-for-gamma-zulu-switches-translucent">
                      <img width="318px" height="239px" src="images/Das-Keyboard-translucent-modern-font-dvorak-keycaps.png" alt="Das Keyboard black professional font RGB keycap set for Gamma Zulu switches ">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("gamma-zulu-keycaps-translucent-dvorak-brand")?></h3>
                    <div class="catalog-price">
                      <?php say("gamma-zulu-keycaps-translucent-dvorak-brandprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("gamma-zulu-keycaps-translucent-dvorak-brandpdescroption")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="https://shop.daskeyboard.com/products/das-keyboard-modern-font-dvorak-rgb-keycap-set-for-gamma-zulu-switches-translucent">
                      <?php say('pre_order'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="https://shop.daskeyboard.com/products/das-keyboard-modern-font-english-rgb-keycap-set-for-gamma-zulu-switches-translucent">
                      <img width="318px" height="239px" src="images/Das-Keyboard-translucent-modern-font-english-keycaps.png" alt="Das Keyboard black professional font RGB keycap set for Gamma Zulu switches ">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("gamma-zulu-keycaps-translucent-english-brand")?></h3>
                    <div class="catalog-price">
                      <?php say("gamma-zulu-keycaps-translucent-english-brandprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("gamma-zulu-keycaps-translucent-english-brandpdescroption")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="https://shop.daskeyboard.com/products/das-keyboard-modern-font-english-rgb-keycap-set-for-gamma-zulu-switches-translucent">
                      <?php say('pre_order'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/accessories/bungee/">
                      <img width="318px" height="239px" src="/accessories/bungee/images/Bungee-3Q-gallery.png" alt="Das Keyboard Mouse Bungee">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("bungee_brand_2")?></h3>
                    <div class="catalog-price">
                      <?php say("bungee_brand_2price")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("bungee-description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/accessories/bungee/">
                      <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/accessories/mouse-pads/">
                      <img width="318px" height="239px" src="/accessories/mouse-pads/images/division-zero-47w-speed-mousepad.png" alt="Das Keyboard Mouse Pads">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("mouse-pads_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("mouse-pads-price")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("mouse-pads-description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/accessories/mouse-pads/">
                      <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>

            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item accessories">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/accessories/top-panels/">
                      <img style="padding: 70px 0;" width="318px" height="122px" src="/accessories/top-panels/images/defamer_silver_thumb.png" alt="Das Keyboard Top Panels">
                    </a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("top-panels_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("top-panels-price")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("top-panels-description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $current_language ?>/accessories/top-panels/">
                      <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
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