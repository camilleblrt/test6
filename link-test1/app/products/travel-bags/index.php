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
            <li class="filter" data-filter="hackshield">
              <?php say("travel_bags_category-1")?>
            </li>
            <li class="filter" data-filter="gaming-bag">
              <?php say("travel_bags_category-2")?>
            </li>
          </ul>
          <!-- @end #filter-list -->
        </div>
      </div>
    </div>

    <!-- New portfolio -->
    <div id="products-list">
      <div class="container">
        <div class="row">
          <ul id="portfolio">
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item hackshield">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/hackshield-backpack/">
<?php
if ($current_language !== "/de") {
    echo "<img width='318px' height='239px' src='/images/product/hackshield-backpack/sale_hackshieldbackpack.png' alt='RFID Blocking backpack'/>";
}
else {
    echo "<img width='318px' height='239px' src='/images/product/hackshield-backpack/sale_hackshieldbackpack.png' alt='RFID Blocking backpack'/>";
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("backpack_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("backpackprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("backpack_description")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $href_hackshield_backpack ?>">
                      <?php say('buy_now'); ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/hackshield-backpack/">
                      <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item hackshield">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/hackshield-messenger-bag/">
<?php
if ($current_language !== "/de") {
    echo "<img width='318px' height='239px' src='/images/product/hackshield-messenger-bag/sale_messengerbag.png' alt='RFID Blocking messenger bag'/>";
}
else {
    echo "<img width='318px' height='239px' src='/images/product/hackshield-messenger-bag/sale_messengerbag.png' alt='RFID Blocking messenger bag'/>";
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("messenger-bag_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("messengerbagprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("messengerbagdescription")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $href_messenger_bag ?>">
                      <?php say('buy_now'); ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/hackshield-messenger-bag/">
                      <?php say('read_more_button'); ?> <i class="icon-caret-right"></i></a>
                  </div>
                </div>
              </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item gaming-bag">
              <div class="inside-item">
                <div class="catalog-content">
                  <div class="catalog-image">
                    <a href="<?php echo $current_language ?>/gaming-sling/">
<?php
if ($current_language !== "/de") {
    echo "<img width='318px' height='239px' src='/images/product/gaming_sling/sale_gamingsling.png' alt='Das Keyboard gaming sling'/>";
}
else {
    echo "<img width='318px' height='239px' src='/images/product/gaming_sling/sale_gamingsling.png' alt='Das Keyboard gaming sling'/>";
} ?>
</a>
                  </div>
                  <div class="catalog-info">
                    <h3><?php say("gaming-sling_brand")?></h3>
                    <div class="catalog-price">
                      <?php say("gamingslingprice")?>
                    </div>
                    <div class="catalog-description">
                      <?php say("gamingslingdescription")?>
                    </div>
                  </div>
                </div>
                <div class="catalog-bottom">
                  <div class="catalog-buttons">
                    <a class="catalog-button-left" href="<?php echo $href_gaming_sling ?>">
                      <?php say('buy_now'); ?> <i class="icon-caret-right"></i></a>
                    <a class="catalog-button-right" href="<?php echo $current_language ?>/gaming-sling/">
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