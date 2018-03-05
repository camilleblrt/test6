<?php include_once "i18n/locales/language.php"; ?>
  <!DOCTYPE html>
  <!--[if IE 8]><html class="ie ie8"><![endif]-->
  <!--[if IE 9]><html class="ie ie9"><![endif]-->
  <!--[if gt IE 9]><!-->
  <html>
  <!--<![endif]-->

  <head>
    <meta charset="utf-8" />

    <?php
        

        $current_language = substr($_SERVER['PHP_SELF'], 0, 3);
        
    if ($current_language !== "/de") {
        $current_language = "";
        $current_page_without_language = dirname($_SERVER['PHP_SELF']);
    } else {
        $current_page_without_language = dirname(substr($_SERVER['PHP_SELF'], 3, strlen($_SERVER['PHP_SELF']) - 3));
    }

        
    switch ($_SERVER['PHP_SELF']) {
        case $current_language . "/index.php":
            echo '<title>Das Keyboard - The Ultimate Mechanical Keyboard Experience for Badasses</title>';
                echo '<meta name="description" content="Das Keyboard offers badass geeks the ultimate experience with high-performance mechanical keyboards with superior durability, construction, and design. The mechanical key switches provide tactile and audio feedback for the best experience." />';
            break;

        case $current_language . "/accessories/bungee/index.php":
            echo '<title>Das Keyboard - Gaming Mouse Bungee </title>';
                echo '<meta name="description" content="The Das Keyboard Gaming Mouse Bungee features a sleek design, stability while gaming, and cord isolation." />';
            break;

        case $current_language . "/accessories/mouse-pads/index.php":
            echo '<title>Das Keyboard - Mouse Pads </title>';
                echo '<meta name="description" content="We offer three styles with different superior materials and thickness to push your gaming experience to the max." />';
            break;

        case $current_language . "/accessories/mouse-pads/47w-control/index.php":
            echo '<title>Das Keyboard - 47W Control Mouse Pads </title>';
                echo '<meta name="description" content="The Das Keyboard 47W-Control is optimized for a wide range of sensitivity settings and sensors. Whether your preference is low or high sensitivity or your mouse of choice is a laser, optical or dual sensor system, the 47W-Control offers total tracking responsiveness for optimized reliability and in-game control." />';
            break;

        case $current_language . "/accessories/mouse-pads/47w-flex/index.php":
            echo '<title>Das Keyboard - 47W Flex Mouse Pads </title>';
                echo '<meta name="description" content="The 47W-Flex surface is specifically designed for a wide range of DPI settings, from minimal movements to fast swipes, making it the best choice for games requiring both speed and control. Whether your preference is low or high sensitivity, or your mouse of choice is a laser, optical or dual sensor system, the 47W-Flex offers total tracking responsiveness for optimized reliability and in-game control." />';
            break;

        case $current_language . "/accessories/mouse-pads/47w-speed/index.php":
            echo '<title>Das Keyboard - 47W Speed Mouse Pads </title>';
                echo '<meta name="description" content="The Das Keyboard 47W-Speed ultra low friction, hard polymer surface is optimized for high DPI gaming, improving mouse control and cursor placement precision. The surface allows the mouse to move when applying minimal force which maximizes performance and accuracy." />';
            break;

        case $current_language . "/accessories/top-panels/index.php":
            echo '<title>Das Keyboard - Top Panels </title>';
                echo '<meta name="description" content="Customize your Das Keyboard X40 with five edgy designs to express your domination style. Easily interchangeable." />';
            break;    

        case $current_language . "/affiliates-program/index.php":
            echo '<title>Das Keyboard - The Affiliate Program </title>';
                echo '<meta name="description" content="An affiliate program is a unique way to link to Das Keyboard products and earn commission on sales." />';
            break;

        case $current_language . "/affiliates-program/index.php":
            echo '<title>Das Keyboard - The Affiliate Program </title>';
                echo '<meta name="description" content="An affiliate program is a unique way to link to Das Keyboard products and earn commission on sales." />';
            break;

        case $current_language . "/company-information/become-a-reseller/index.php":
            echo '<title>Das Keyboard - Become a Das Keyboard Mechanical Keyboard Reseller</title>';
              echo '<meta name="description" content="Das Keyboard is expanding the global reseller and distributor community. Learn more about how we can work together." />';
            break;

        case $current_language . "/company-information/education-program/index.php":
            echo '<title>Das Keyboard - Education Program</title>';
              echo '<meta name="description" content="Das Keyboard mechanical keyboards help to improve typing efficiency in schools and universities. Our blank mechanical keyboards help students and teachers to learn touch typing faster" />';
            break;

        case $current_language . "/company-information/our-story/index.php":
            echo '<title>Das Keyboard - The Best Mechanical Keyboard Experience</title>';
              echo '<meta name="description" content="Learn More about Das Keyboard, the Ultimate Mechanical Keyboard Experience for Badasses. Cutting edge, high performance mechanical keyboards with the best switches, quality and design. " />';
            break;

        case $current_language . "/company-information/press-kit/index.php":
            echo '<title>Das Keyboard - Press and News</title>';
              echo '<meta name="description" content="Checkout our press kit for the lastest Das Keyboard Mechanical Keyboard and Division Zero gaming news and new products launches. " />';
            break;   

        case $current_language . "/company-information/veteran-program/index.php":
            echo '<title>Das Keyboard - Veteran Program</title>';
              echo '<meta name="description" content="Das Keyboard provides U.S. military and veterans a special pricing program on mechanical keyboards." />';
            break;

        case $current_language . "/compare-keyboards/index.php":
            echo '<title>Das Keyboard - Compare Keyboards</title>';
              echo '<meta name="description" content="Compare keyboard models online with help of our tool."/>';
            break;

        case $current_language . "/contact-us/index.php":
            echo '<title>Das Keyboard - Contact Us</title>';
              echo '<meta name="description" content="Find the best place to buy your new Das Keyboard mechanical keyboard."/>';
            break;

        case $current_language . "/corporate-sale/index.php":
            echo '<title>Das Keyboard - Corporate Sales</title>';
              echo '<meta name="description" content="Das Keyboard offers special programs to corporate organizations."/>';
            break;

        case $current_language . "/daskeyboard-4-professional/index.php":
            echo '<title>Das Keyboard 4 Professional Mechanical Keyboard</title>';
              echo '<meta name="description" content="The Das Keyboard 4 Professional is a high-performance mechanical keyboard for badass typists. Constructed with Cherry MX mechanical switches, aluminum top panel, two-port USB 3.0 hub and NKRO for the best typing experience. " />';
            break;
        
        case $current_language . "/daskeyboard-4-professional-for-mac/index.php":
          echo '<title>Das Keyboard 4 Professional for Mac Mechanical Keyboard</title>';
            echo '<meta name="description" content="The Das Keyboard 4 Professional for Mac is a high-performance mechanical keyboard designed for the best Mac compatibility. Constructed with Cherry MX mechanical switches, aluminum top panel, two-port USB 3.0 hub and NKRO for the best typing experience. " />';
          break;

        case $current_language . "/daskeyboard-4-ultimate/index.php":
          echo '<title> Das Keyboard 4 Ultimate Mechanical Keyboard </title>';
            echo '<meta name="description" content="The Das Keyboard 4 Ultimate is a completely blank mechanical keyboard for badass typists. Constructed with Cherry MX mechanical switches, aluminum top panel, two-port USB 3.0 hub and NKRO for the best typing experience." />';
          break;

        case $current_language . "/daskeyboard-4C-professional/index.php":
          echo '<title>Das Keyboard 4C Professional Mechanical Keyboard</title>';
            echo '<meta name="description" content="TThe Das Keyboard 4C Professional is a high-performance tenkeyless mechanical keyboard for badass typists. Constructed with Greetech mechanical switches, aluminum top panel, two-port USB 2.0 hub and compact design for the best typing experience." />';
          break;

        case $current_language . "/daskeyboard-4C-ultimate/index.php":
          echo '<title>Das Keyboard 4C Ultimate Mechanical Keyboard</title>';
            echo '<meta name="description" content="The Das Keyboard 4C Ultimate is a completely blank tenkeyless mechanical keyboard for badass typists. Constructed with Greetech mechanical switches, aluminum top panel, two-port USB 2.0 hub and compact design for the best typing experience. " />';
          break;

        case $current_language . "/daskeyboard-5/index.php":
          echo '<title>Das Keyboard 5 Invisible Mechanical Keyboard</title>';
            echo '<meta name="description" content="However, our new Das Keyboard 5 Invisible takes it a giant step further. We are the first to introduce the worlds first, truly, blank keyboard." />';
          break;

        case $current_language . "/daskeyboard-space-pen/index.php":
          echo '<title>Das Keyboard Space Pen</title>';
            echo '<meta name="description" content="A superior ballpoint pen with a lifetime warranty. Write upside down and underwater. The perfect pen for badass typists to take on-the-go. " />';
          break;

        case $current_language . "/gaming-sling/index.php":
            echo '<title>Das Keyboard Gaming Sling for Pro Gamers</title>';
            echo  '<meta name="description" content="For people who are determined to win everywhere. The Das Keyboard Gaming Bag allows you to travel to and from gaming competitions while protecting your mechanical keyboard, gaming mouse, and gear." />';
            break;

        case $current_language . "/giveaway/index.php":
            echo '<title>Das Keyboard Monthly Giveaway</title>';
            echo  '<meta name="description" content="Das Keyboard Monthly Giveaway made with gleam.io" />';
            break;

        case $current_language . "/guarantee/index.php":
          echo '<title>Das Keyboard Warranty and Return Policy</title>';
            echo '<meta name="description" content="Our Engagement to Happiness Mechanical Keyboards Bags and Wallets Space Pen Das Keyboard Mechanical Keyboards Exclusive daskeyboard.com 30-day" />';
          break;
        
        case $current_language . "/hackshield-backpack/index.php":
          echo '<title>Das Keyboard Hackshield Backpack</title>';
            echo '<meta name="description" content="The HackShield Backpack shields your gear from both physical harm and digital assault. Lined with a unique Radio Frequency (RF) blocking material, HackShield media compartments prevent wireless infiltration of your laptop, tablet and smartphone." />';
          break;

        case $current_language . "/hackshield-messenger-bag/index.php":
          echo '<title>Das Keyboard Hackshield Messenger</title>';
            echo '<meta name="description" content="The HackShield Messenger shields your gear from both physical harm and digital assault. Lined with a unique Radio Frequency (RF) blocking material, HackShield media compartments prevent wireless infiltration of your laptop, tablet and smartphone." />';
          break;

        case $current_language . "/history/index.php":
          echo '<title>Das Keyboard - The Best Mechanical Keyboard Experience</title>';
            echo  '<meta name="description" content="Learn More about Das Keyboard, the Ultimate Mechanical Keyboard Experience for Badasses. Cutting edge, high performance mechanical keyboards with the best switches, quality and design. " />';
          break;
                        
        case $current_language . "/m/m50-mouse/index.php":
          echo '<title>Das Keyboard M50 Mouse</title>';
            echo  '<meta name="description" content="The Das Keyboard M50 is a pro gaming mouse with a sleek ambidextrous design, premium materials, metal components, and advanced features to increase performance." />';
          break;
        
        case $current_language . "/mechanical-keyboard-guide/index.php":
          echo '<title>Das Keyboard - Mechanical Keyboard Guide</title>';
            echo  '<meta name="description" content="A mechanical keyboard is a high-performance keyboard with individual switches under each keycap. A mechanical keyboard provides superior performance with tactile and audio feedback to execute every keystroke with superior precision and superior speed." />';
          break;

          case $current_language . "/model-s-professional/index.php":
          echo '<title>Das Keyboard Model S Professional Mechanical Keyboard</title>';
            echo '<meta name="description" content="The Das Keyboard Model S Professional is a high-performance mechanical keyboard for badass typists. Constructed with Cherry MX mechanical switches, premium materials, two-port USB 3.0 hub and NKRO for the best typing experience. " />';
          break;

        case $current_language . "/model-s-professional-for-mac/index.php":
          echo '<title>Das Keyboard Model S Professional for Mac Mechanical Keyboard</title>';
            echo '<meta name="description" content="The Das Keyboard Model S Professional for Mac is a high-performance mechanical keyboard designed for Mac. Constructed with Cherry MX mechanical switches, premium materials, two-port USB 3.0 hub and NKRO for the best typing experience." />';
          break;

        case $current_language . "/model-s-ultimate/index.php":
          echo '<title>Das Keyboard Model S Ultimate Mechanical Keyboard</title>';
            echo '<meta name="description" content="The Das Keyboard Model S Ultimate is a completely blank mechanical keyboard for badass typists. Constructed with Cherry MX mechanical switches, premium materials, two-port USB 3.0 hub and NKRO for the best typing experience." />';
          break;

        case $current_language . "/p/prime13-mechanical-keyboard/index.php":
          echo '<title>Das Keyboard Prime13 Mechanical Keyboard</title>';
            echo  '<meta name="description" content=" Das Keyboard Prime 13, a minimalist, white-LED back-lit, Cherry MX, USB pass-through with extra-long braided cable, super-well built mechanical keyboard that sports a slick aluminium top panel." />';
          break; 
                 
        case $current_language . "/p/5q-cloud-connected-rgb-mechanical-keyboard/index.php":
          echo '<title>Das keyboard 5Q Cloud Connected Keyboard</title>';
            echo  '<meta name="description" content="The Das Keyboard 5Q is a cloud connected keyboard allowing users to display color notifications on each key. Notifications can come from applications such as Twitter, Gmail, eBay, Facebook and many others." />';
          break;               
        
        case $current_language . "/privacy-policy/index.php":
          echo '<title>Das keyboard - Privacy Policy</title>';
            echo  '<meta name="description" content="This privacy policy tells you how we use personal information collected at this site." />';
          break;               
        
        case $current_language . "/products/accessories/index.php":
          echo '<title>Das keyboard - Accessories</title>';
            echo  '<meta name="description" content="The accessories page displays the Das Keyboard accessories" />';
          break; 

        case $current_language . "/products/mechanical-keyboards/index.php":
          echo '<title>Das keyboard - Mechanical Keyboard</title>';
            echo  '<meta name="description" content="The mechanical keyboards page displays the Das Keyboard mechanical keyboards" />';
          break;

        case $current_language . "/products/travel-bags/index.php":
          echo '<title>Das keyboard - Travel Bags</title>';
            echo  '<meta name="description" content="The travel bags page displays the Das Keyboard travel bags" />';
          break;
                  
        case $current_language . "/reviews/index.php":
          echo '<title>Das Keyboard Mechanical Keyboard - Reviews from Professional</title>';
            echo '<meta name="description" content="See Das Keyboard mechanical keyboards and gear tested and reviewed by professional reviewers and tech enthusiasts.  " />';
          break;
        
        case $current_language . "/support/index.php":
          echo '<title>Support</title>';
            echo '<meta name="description" content="The support page of Daskeyboard" />';
          break;

        case $current_language . "/switches/index.php":
            echo '<title>Das Keyboard Mechanical Key Switch Comparison Guide</title>';
            echo '<meta name="description" content="What are the best mechanical key switches? Find the best mechanical switches for you. Compare Cherry MX switches, Greetech switches, and the all-new Alpha-Zulu gaming switches. " />';
            break;

        case $current_language . "/team/index.php":
          echo '<title>Das Keyboard - Team</title>';
            echo '<meta name="description" content="Our team" />';
          break;
                            
        case $current_language . "/typefaster/index.php":
          echo '<title>Das Keyboard Guide to Type Faster</title>';
            echo '<meta name="description" content="Learn how to increase your typing speed with our guide on how to type faster and become the ultimate badass. Learn about the benefits of a mechanical keyboard, healthy typing habits, and more." />';
          break;
        
        case $current_language . "/unauthorized-warning/index.php":
          echo '<title>Das Keyboard - Unauthorized Dealer Warning</title>';
            echo '<meta name="description" content="Das Keyboard products are sold in the United States and internationally through a network of authorized dealers selected by Das Keyboard. These resellers have been chosen for their ability to properly represent Das Keyboard." />';
          break;  

        case $current_language . "/values/index.php":
          echo '<title>Das Keyboard - What Are We About? </title>';
            echo '<meta name="description" content="We are a badass Company that makes badass products for badass customers: We Make Stunning Products which stand for No-compromise and overachievers." />';
          break; 
                                        
        case $current_language . "/where-to-buy/index.php":
            echo '<title>Buy a Das Keyboard Mechanical Keyboard</title>';
              echo '<meta name="description" content="Find the best place to buy your new Das Keyboard mechanical keyboard."/>';
            break;

        case $current_language . "/x/x40-mechanical-keyboard/index.php":
          echo '<title>Das Keyboard X40 Pro Gaming Mechanical Keyboard</title>';
            echo '<meta name="description" content="X40 Pro Gaming Mechanical Keyboard page" />';       
          break;

        case $current_language . "/x/x50-rgb-mechanical-keyboard/index.php":
          echo '<title>Das Keyboard X50 RGB Mechanical Keyboard</title>';
            echo '<meta name="description" content="X50 RGB Mechanical Keyboard page" />';       
          break; 

        case $current_language . "/x40-m50-downloads/index.php":
          echo '<title>Das Keyboard - X40 & M50 Downloads</title>';
            echo '<meta name="description" content="X40 & M50 Downloads" />';       
          break;                                                        
        
        case $current_language . "/blog/index.php":
            echo '<title>Das Keyboard Mechanical Keyboard Blog</title>';
            echo '<meta name="description" content="A blog for mechanical keyboard enthusiasts, elite typists, hackers, and tech enthusiasts. " />';
            break;

        default:
            echo '<title>Das Keyboard</title>';
            echo '<meta name="description" content="Gear for the overachiever. Das Keyboard high-performance mechanical keyboards and RFID blocking, hack-proof bags." />';
            break;
    }
                                                                                ?>

      <meta name="google-site-verification" content="2znsxQwyd6AqEH5vl6QpLSjn-LSWXNxCzgyqHyO5SZ8" />
      <meta name="google-site-verification" content="nI0xzbfh3uoeJDL0Dx0L6N1VHgENBXgqjJ_DXSEXEsk" />
      <meta name="author" content="www.daskeyboard.com">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="icon" href="/images/icon-2017-02-14.png" type="image/x-icon" />

      <!-- <link href='https://fonts.googleapis.com/css?family=Muli:400,300,400italic,300italic' rel='stylesheet' type='text/css'> -->

      <!-- build:css /css/all.css -->
      <link rel="stylesheet" href="/css/bootstrap.min.css">
      <link rel="stylesheet" href="/css/colors/red.css">
      <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="/css/fonts/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" href="/css/animations.css" media="screen">
      <link rel="stylesheet" href="/css/superfish.css" media="screen">
      <link rel="stylesheet" href="/css/prettyPhoto.css" media="screen">
      <link rel="stylesheet" href="/library/zoombox/zoombox.css" media="screen">
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/theme-responsive.css">
      <link rel="stylesheet" href="/css/app.css" media="screen">
      <link rel="stylesheet" href="/css/animate.min.css" media="screen">
      <link rel="stylesheet" href="/css/atom-one-dark.css" media="screen">
      <link rel="stylesheet" href="/css/gaming.css">
      <link rel="stylesheet" href="/css/font-awesome.min.css">

      <!--Script to add gaming.css only if we are on a gaming page -->

      <!--<script type="text/javascript">-->
          <!--if(window.location.pathname.startsWith("/gaming/")) {-->
              <!--document.write("<link rel='stylesheet' type='text/css' href='/css/gaming.css'>");-->
          <!--}-->
      <!--</script>-->

      <!-- endbuild -->
      <!--[if lt IE 9]><script src="///html5shim.googlecode.com/svn/trunk/html5.js"></script>
                                                                                    <script src="/js/respond.min.js"></script><![endif]-->
      <!--[if IE]><link rel="stylesheet" href="/css/ie.css"><![endif]-->


      <!-- Facebook Pixel Code -->
      <script>
        ! function(f, b, e, v, n, t, s) {
          if (f.fbq) return;
          n = f.fbq = function() {
            n.callMethod ?
              n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
        }(window,
          document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '115942085458000');
        fbq('track', "PageView");
      </script>
      <noscript><img height="1px" width="1px" alt="facebook pixel" style="display:none" src="https://www.facebook.com/tr?id=115942085458000&ev=PageView&noscript=1" /></noscript>
      <!-- End Facebook Pixel Code -->
      <script src="https://js.gleam.io/oi-1o5We3zl.js" async="async"></script>
  </head>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/i18n/locales/translation.php'); ?>

<body class="home" ng-app="DaskeyboardApp" ng-controller="ApplicationController">
      <style>
        #dk-mega .mega-desc {
          color: #404040;
        }
        
        #gaming-mega .mega-desc {
          color: #cfcfcf;
        }
        
        .new {
          color: #aa030c;
        }
      </style>

        <?php include ($_SERVER['DOCUMENT_ROOT'] . '/library/includes/inc_google_a.php'); ?>


        <?php
        if ($current_language !== "/de") {
            $href_shop = "http://shop.daskeyboard.com/";
        } else {
            $href_shop = "/de/where-to-buy/";
        }
                                                                                ?>
          <!-- ================== TWITTER INCLUSION ================================ -->
          <script defer>
            window.twttr = (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
              if (d.getElementById(id)) return t;
              js = d.createElement(s);
              js.id = id;
              js.src = "https://platform.twitter.com/widgets.js";
              fjs.parentNode.insertBefore(js, fjs);

              t._e = [];
              t.ready = function(f) {
                t._e.push(f);
              };

              return t;
            }(document, "script", "twitter-wjs"));
          </script>
          <!-- ====================================================================== -->


<div class="wrap">

            <!-- wrapper -->
  <header id="header">

    <!-- <div class="main-header"> -->

      <!--promo BANNER-->
      <!--This is the original promo banner-->
    
      <?php
        if ($_SERVER['PHP_SELF'] == "/index.php") {
          echo '<a class="promo-link" href="/x/x50-rgb-mechanical-keyboard/">
                  <div class="row text-center header-banner ">
                    <div class="container">
                      New - X50 RGB Mechanical Keyboard
                    </div>
                  </div>
                </a>';
        } 
        else if ($_SERVER['PHP_SELF'] == "/de/index.php") {
          echo '<a class="promo-link" href="/de/x/x50-rgb-mechanical-keyboard/">
                  <div class="row text-center header-banner ">
                    <div class="container">
                      Neu - Mechanische Tastatur X50 RGB
                    </div>
                  </div>
                </a>';
        }
        else {
            echo '';
        }
      ?>
                    
                

                  <style>
                    .col-close button {
                      background: tranparent;
                      font-size: 40px;
                      font-weight: bold;
                      line-height: 1;
                      color: #000;
                      text-shadow: 0 1px 0 #fff;
                      opacity: .6;
                      border: none;
                      background-color: inherit;
                    }
                    
                    .col-close button:hover {
                      opacity: 1;
                    }
                    
                    .col-mega {
                      width: 90%;
                      display: inline-block;
                    }
                    
                    .col-close {
                      width: 10%;
                      display: inline-block;
                      float: right;
                    }
                    
                    @media only screen and (max-width: 1044px) {
                      .col-mega {
                        width: 100%;
                      }
                      .col-close {
                        display: none;
                      }
                    }

                  </style>

                <script>
                  var click = null;
                  document.addEventListener("DOMContentLoaded", function addClicksMenu() {
                    $("html").on("click", function(e) {

                      if ($("#product-menu").find($(e.target)).length == 0)
                        $("#product-mega").hide();
                      if ($("#community-menu").find($(e.target)).length == 0)
                        $("#community-mega").hide();
                      if ($("#technology-menu").find($(e.target)).length == 0)
                        $("#technology-mega").hide();
                    });

                    $("#community-menu").on("click", function() {
                      if ($("#community-mega").css("display") == "none")
                        $("#community-mega").show();
                      else
                        $("#community-mega").hide();

                    });
                    $("#product-menu").on("click", function() {
                      if ($("#product-mega").css("display") == "none")
                        $("#product-mega").show();
                      else
                        $("#product-mega").hide();

                    });

                    $("#technology-menu").on("click", function() {
                      if ($("#technology-mega").css("display") == "none")
                        $("#technology-mega").show();
                      else
                        $("#technology-mega").hide();

                    });
                  });
                </script>
                  <nav class="navbar navbar-static-top" style="background: #111; margin-bottom:0px;">
                    <div class="container">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed hamburger-navbar" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <div class="logo logo-on pull-left visible-lg-block hidden-md-block hidden-sm-block hidden-xs-block" id="logo_company">
                          <a href="<?php echo $current_language ?>/"><?php
                          if ($_SERVER['PHP_SELF'] == $current_language . "/index.php") {
                              echo "<img class='logo-animation' id='logo_arrow' width='49px' height='63px' style='opacity:0' src='/images/DK_Logos/DK_mark_white.png' alt='Daskeyboard Logo'>";
                          } else {
                              echo "<img width='49px' height='63px' id='logo_arrow' src='/images/DK_Logos/DK_mark_white.png' alt='Daskeyboard Logo'>";
                          }
                          ?>
                          <img id="daskeyboard-logo"  width="300" height="46.55" src="/images/DKlogo_daskeyboard.png" alt="daskeyboard"></a>
                        </div>
                        <div class="logo logo-on pull-left hidden-lg-block visible-md-block visible-sm-block visible-xs-block" id="logo_company">
                          <a href="<?php echo $current_language ?>/">
                            <img width='32px' height='46px' id='logo_arrow' src='/images/DK_Logos/DK_mark_white.png' alt='Daskeyboard Logo'>
                          </a>
                        </div>
                        <?php switch ($_SERVER['PHP_SELF']) {
                        case "/p/5q-cloud-connected-rgb-mechanical-keyboard/index.php":
                          echo '<a href="https://shop.daskeyboard.com/products/das-keyboard-5q" class="buy-btn-navbar btn hidden-sm hidden-md hidden-lg" role="button">
                                    PRE ORDER
                                </a>';
                          break;  
                        case "/de/p/5q-cloud-connected-rgb-mechanical-keyboard/index.php":
                          echo '<a href="/de/where-to-buy/" class="buy-btn-navbar btn hidden-sm hidden-md hidden-lg">
                                    VOR BESTELLEN
                                  </a>';
                          break;         
                        
                        case "/x/x50-rgb-mechanical-keyboard/index.php":
                          echo '<a href="https://shop.daskeyboard.com/products/das-keyboard-x50-rgb-mechanical-keyboard" class="buy-btn-navbar btn hidden-sm hidden-md hidden-lg" role="button">
                                    BUY NOW
                                </a>';
                          break;  
                        case "/de/x/x50-rgb-mechanical-keyboard/index.php":
                          echo '<a href="/de/where-to-buy/" class="buy-btn-navbar btn hidden-sm hidden-md hidden-lg">
                                      JETZ KAUFEN
                                  </a>';
                          break;   

                        default:
                          echo '';
                          break;
                        }?>
                        
                        
                      </div>
                      
                      <div id="navbar" class="navbar-collapse collapse menu">
                        <ul class="navbar-nav navbar-right">
                          <li id="product-menu" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              <?php say('products-menu') ?> <span class="caret"></span>
                            </a>
                            <ul id="product-mega" class="dropdown-menu">
                              <li>
                                <a href="<?php echo $current_language ?>/products/mechanical-keyboards/" style="color: orange;">
                                <img width='10px' height='12px' style="padding-bottom:3px;" src='/images/DK_Logos/DK_mark_orange.png' alt='Daskeyboard Logo'>&nbsp;<?php say('mechanical-keyboards-menu') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/m/m50-mouse/" class="sf-with-ul">
                                  <?php say('mice-menu') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/products/accessories/">
                                    <?php say('accessories-menu') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/products/travel-bags/">
                                    <?php say('rfid-menu') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/compare-keyboards/">
                                    <?php say('compare-keyboards-menu') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/reviews/">
                                    <?php say('prof-reviews-menu') ?>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li id="technology-menu" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              <?php say('technology-menu') ?> <span class="caret"></span>
                            </a>
                            <ul id="technology-mega" class="dropdown-menu">
                              <li>
                                <a href="<?php echo $current_language ?>/technology/gamma-zulu-switch/">
                                  <?php say('gamma-zulu-switch-menu') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/technology/q-software/" class="sf-with-ul">
                                  <?php say('q-software-menu') ?>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="<?php echo $href_shop ?>" class="sf-with-ul">
                                <?php say('shop') ?>
                            </a>
                          </li>
                          <li id="community-menu" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                              <?php say('social') ?> <span class="caret"></span></span>
                            </a>
                            <ul id="community-mega" class="dropdown-menu">
                              <li>
                                <a href="https://daskeyboard.github.io/">
                                  <?php say('download-link') ?>
                                </a>
                              </li>
                              <li>
                                <a href=" <?php echo $current_language ?>/blog/">
                                    <?php say('Blog') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/reviews/">
                                    <?php say('Reviews') ?>
                                </a>
                              </li>
                              <li>
                                <a href="http://app.typrx.com/">
                                    <?php say('Typing-Training') ?>
                                </a>
                              </li>
                              <li>
                                <a href="http://daskeyboard.mojohelpdesk.com/">
                                    <?php say('support') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/values/">
                                    <?php say('values') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/team">
                                    <?php say('team') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/history/">
                                    <?php say('history') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/mechanical-keyboard-guide/">
                                    <?php say('Mechanical-keyboard-guide') ?>
                                </a>
                              </li>
                              <li>
                                <a href="<?php echo $current_language ?>/5-meta-hacks/" class="sf-with-ul">
                                    <?php say('5-meta-hacks') ?>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <?php switch ($_SERVER['PHP_SELF']) {
                        case "/p/5q-cloud-connected-rgb-mechanical-keyboard/index.php":
                          echo '<li>
                                  <a href="https://shop.daskeyboard.com/products/das-keyboard-5q" class="buy-btn-navbar btn hidden-xs" role="button">
                                      PRE ORDER
                                  </a>
                                </li>';
                          break;  
                        case "/de/p/5q-cloud-connected-rgb-mechanical-keyboard/index.php":
                          echo '<li>
                                  <a href="/de/where-to-buy/" class="buy-btn-navbar hidden-xs">
                                  VOR BESTELLEN
                                  </a>
                                </li>';
                          break;         
                        
                        case "/x/x50-rgb-mechanical-keyboard/index.php":
                          echo '<li>
                                  <a href="https://shop.daskeyboard.com/products/das-keyboard-x50-rgb-mechanical-keyboard" class="buy-btn-navbar btn hidden-xs" role="button">
                                    PRE ORDER
                                  </a>
                                </li>';
                          break;  
                        case "/de/x/x50-rgb-mechanical-keyboard/index.php":
                          echo '<li>
                                  <a href="/de/where-to-buy/" class="buy-btn-navbar hidden-xs">
                                      JETZ KAUFEN
                                  </a>
                                </li>';
                          break;   

                        default:
                          echo '';
                          break;
                        }?>
                        </ul>
                        
                      </div><!--/.nav-collapse -->
                      
                    </div>
                          
                  </nav>
    <!-- </div> -->
</header>
<modal-translation></modal-translation>
<div style="display: none"> 
  <markdown-help></markdown-help>
</div>