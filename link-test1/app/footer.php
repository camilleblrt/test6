<!-- Footer Start -->

<footer id="footer" style="bottom: 0px" ng-controller="ApplicationController">
    <a class="promo-link" href="/giveaway">
        <div class="row text-center footer-banner">
            <div id="giveaway-content" class="container">
                <span id="big-gift" class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                <span id="giveaway-link-box">
                    <span id="giveaway-link" metadot-translation="" class="ng-isolate-scope">
                        <strong><?php say("giveaway-link") ?></strong>
                    </span>
                <span>
            </div>
        </div>
    </a>
   

    <!-- Footer Top Start -->
    <div class="footer-top">
    
        <div class="container">
            <div class="row-about">
                <section class="col-sm-4" style="padding-bottom:10px; padding-top:20px;">
                    <h3 class="footer-widget-title"><?php say('footer_about_title') ?></h3>
                    <p><?php say('footer_about_content') ?></p>
                    </br>
                    <b style="color:white; font-size:20px">  <?php say('news-signup')?> </b>
                    <div class="news-signup" style="max-width:290px;margin-top:15px;">

                      <!-- Begin MailChimp Signup Form -->
                      <form  class="news-signup-form" action="//daskeyboard.us5.list-manage.com/subscribe">
                        <input type="hidden" name="u" value="56e3c495115ea26f98ce8d429"></input>
                        <input type="hidden" name="id" value="4dbc73ce60"></input>
                        <input type="email" name="MERGE0" id="MERGE0" style="width:80%;"  placeholder ="myemail@example.com"></input>
                        <button type="submit" class="home-button form-control" style="width:20%; float:right;height: 36px;" ><i class="glyphicon glyphicon-send"></i> </button>
                      </form>
                 </div>
                </section>
                <section>
                 
                     <div class="contact-us">
                        <div class="connect-footer col-sm-4" style="padding-bottom:10px; padding-top:20px;">
                            <h3 class="footer-widget-title"><?php say('footer_contact_title') ?></h3>
                            <ul>
                            <li><i class="icon-dollar"></i><p><a href="<?php echo $current_language ?>/where-to-buy/"><?php say('were_to_buy') ?> </a></p></li>
                            <li><i class="icon-ok-sign"></i><p><a href="<?php echo $current_language ?>/guarantee/"><?php say('guarantee') ?></a></p></li>
                            <?php
                            if ($current_language !== "/de") {
                                echo'<li><i class="icon-briefcase"></i><p><a href="' . $current_language . '/company-information/education-program/">';
                                say('education_program');
                                echo '</a></p></li>';
                            }
                            ?>
                            <li><i class="icon-dollar"></i><p><a href="<?php echo $current_language ?>/corporate-sale/"><?php say('corpoarate-sale') ?></a></p></li>
                            <li><i class="icon-move"></i><p><a href="<?php echo $current_language ?>/company-information/become-a-reseller"><?php say('become_a_reseller') ?></a></p></li>
                            <li><i class="icon-gamepad"></i><p><a href="javascript:var%20s%20=%20document.createElement('script');s.type='text/javascript';document.body.appendChild(s);s.src='/library/js/asteroids.min.js';void(0);"><?php say("kickass") ?></a></p></li>
                            <li><i class="glyphicon glyphicon-send"></i><p><a href="<?php echo $current_language ?>/5-meta-hacks/"><?php say('5-meta-hacks') ?></a></p></li>
                            <li><i class="icon-briefcase"></i><p><a href="<?php echo $current_language ?>/privacy-policy/"><?php say('privacy-policy') ?></a></p></li>
                            <li><i class="icon-keyboard"></i><p><a href="<?php echo $current_language ?>/mechanical-keyboard-guide/"><?php say('Mechanical-guide') ?></a></p></li>
                            
                            <?php
                            if ($current_language == "/de") {
                                echo'<li><i class="icon-briefcase"></i><p><a href="' . $current_language . '/imprint/">Impressum';
                                echo '</a></p></li>';
                            }
                            ?>
                            </ul>
                        </div>
                        <div style="padding-bottom:10px; padding-top:15px;" class="warranty-footer col-sm-4">
                          <ul>
                          <a href="<?php echo $current_language ?>/guarantee" class="btn btn-warning" role="button" style="margin-bottom:10px; color:#000;"><i class="fa fa-gears fa-1x text-left"></i> <?php say('das-keyboard-warranty'); ?></a>
                            
                            <li><i class="icon-edit"></i><p><a href="<?php echo $current_language ?>/company-information/press-kit" class="sf-with-ul"><?php say('press_kit') ?></a></p></li>
                            <li><i class="glyphicon glyphicon-search"></i><p><a href="<?php echo $current_language ?>/switches" class="sf-with-ul"><?php say('switches-comp') ?></a></p></li>
                            <li><i class="icon-rss-sign"></i><p><a href="http://www.daskeyboard.com/blog/"><?php say('blog') ?></a></p></li>
                            <li><i class="icon-phone-sign"></i><p><a href="<?php echo $current_language ?>/contact-us/"><?php say('contact_us') ?></a></p></li>
                            <?php
                            if ($current_language !== "/de") {
                                echo'<li><i class="icon-book"></i><p><a href="' . $current_language . '/history/">';
                                say('our-story');
                                echo '</a></p></li>';
                            }
                            ?>
                            <li><i class="icon-dashboard"></i><p><a href="http://app.typrx.com/" class="sf-with-ul" target="_blank"><?php say('typefaster') ?></a></p></li>
                            <li><i class="glyphicon glyphicon-star-empty"></i><p><a href="<?php echo $current_language ?>/reviews"><?php say('reviews') ?></a></p></li>
                            <?php
                            echo'<li><i class="icon-exclamation-sign"></i><p><a href="' . $current_language . '/unauthorized-warning/">';
                            say('Unauthorized_warning');
                            echo '</a></p></li>';
                            ?>
                            <?php
                            if ($current_language !== "/de") {
                                echo'<li><i class="icon-globe"></i><p><a href="' . $current_language . '/affiliates-program/">';
                                say('affiliates-program');
                                echo '</a></p></li>';
                            }
                            ?>
                            </ul>
                        </div>
                    </div> 
                </section>
            </div>
            <div class="divider"></div>

        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-8 ">
                    <div>
                        <span>Hello from Austin</span>
                        <span style="vertical-align: sub;">
                        <a class="twitter-follow-button"
                        href="https://twitter.com/DasKeyboard">Follow @DasKeyboard</a></span>
                    </div>
                    <div>© 2005-{{date| date:'yyyy'}} - All Rights Reserved. Das Keyboard is a registered trademark and copyright of Metadot.</div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4">
                    <div class="footer-icons-group">
                        <ul class="language-selector">
                            <li><a href="<?php echo $current_page_without_language ?>"><img alt="" src="/images/us-icon.png" width="28px" height="28px"></a></li>
                            <li><a href="/de<?php echo $current_page_without_language ?>"><img alt="" src="/images/germany-icon.png" width="25px" height="25px"></a></li>
                        </ul>
                        <ul class="social social-icons-footer-bottom">
                            <li class="facebook"><?php

                            if ($current_language !== "/de") {
                                echo "<a href='https://www.facebook.com/DasKeyboard'>";
                            } else {
                                echo "<a href='https://www.facebook.com/DasKeyboard/de?fref=ts'>";
                            }

                            ?><i class="icon-facebook"></i></a>
                            </li>
                            <li class="twitter"><a href="https://twitter.com/daskeyboard"><i class="icon-twitter"></i></a></li>
                           
                            <li class="youtube"><a href="https://www.youtube.com/user/DasKeyboardCommunity"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <li style="background:transparent; display:inline;"><a href="http://www.daskeyboard.com/blog/"><i class="fa fa-rss-square fa-lg"></i> Blog</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->

    <!-- Modal -->
    <div class="modal fade" id="chimpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><?php say('footer_newletters_title') ?></h4>
                </div>
                <div class="modal-body" style="height:60px;">
                    <form action="https://mojohelpdesk.us5.list-manage.com/subscribe/post?u=56e3c495115ea26f98ce8d429&id=4dbc73ce60" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div class="col-lg-4 col-md-5 col-xs-12 col-sm-6 ">

                            <div class="input-group">
                                <input type="email" name="EMAIL" class="form-control" placeholder="Enter email address here" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" ><i style ="font-size: 18px;position: relative;top: 2px;" class="icon-chevron-sign-right"></i></button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll To Top -->
    <a href="/#" class="scrollup"><i class="icon-angle-up"></i></a>
   
</footer>
</div>
<!-- Wrap End -->
<!-- The Scripts -->

<!--==================================================================-->

<!-- build:js /js/jquery.slider.filter.min.js -->
<!-- <script src="/js/jquery-1.8.3.js"></script> -->
<script src="/js/jquery-1.9.1.js"></script>

<script src="/js/slider.js" ></script>
<script src="/js/filterProducts.js" ></script>
<!-- endbuild -->



<script src="/js/bootstrap.min.js" ></script>
<script src="/js/jquery.gmap.min.js" ></script>
<script src="/js/angular/angular.min.js"  ></script>
<script src="/js/angular/angular-sanitize.min.js" ></script>
<!-- <script src="/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script> -->
<!-- <script src="/js/jquery.nivo.slider.pack.js"></script> -->
<script src="/js/carousel-swipe.js"></script>

<!-- <script src="/js/jquery.parallax.js"></script> -->
<!-- <script src="/js/modernizr-2.6.2.min.js"></script> -->
<script src="/js/jquery.prettyPhoto.js"></script> <!-- TO BE REMOVED AFTER TRANSLATION -->
<script src="/js/superfish.js"></script><!-- TO BE REMOVED AFTER TRANSLATION -->
<script src="/js/tweetMachine.js"></script>
<!-- <script src="/js/tytabs.js"></script> -->
<script src="/js/jquery.sticky.js"></script>
<!-- <script src="/js/jflickrfeed.js"></script> -->
<!-- <script src="/js/imagesloaded.pkgd.min.js"></script> -->
<script src="/js/waypoints.min.js"></script>

<script src="/js/jquery.isotope.js"></script>
<script src="/js/custom.js" ></script>
<script src="/js/jquery.mixitup.js"></script>

<!-- endbuild -->

<!--script src="/js/portfolio.js"></script-->

<!-- build:js /js/angularAll.js -->
<script src="/library/js/Markdown.Converter.js"></script>
<script src="/library/js/Markdown.Sanitizer.js"></script>
<script src="/library/js/Markdown.Editor.js" ></script>

<script src="/library/bower_components/angular-cookies/angular-cookies.min.js" ></script>
<script src="/library/bower_components/angular-resource/angular-resource.min.js" ></script>

<script src="/js/angular/app.js" ></script>
<script src="/js/angular/functions.js"></script>

<script src="/js/angular/controllers/appController.js"  ></script>
<script src="/js/angular/services.js" ></script>
<script src="/js/angular/directives.js" ></script>
<script src="/js/angular/filters.js" ></script>
<script src="/js/angular/controllers/rssController.js"></script>
<script src="/js/angular/ext/array.js"></script>
<script src="/js/angular/interceptors/httpStateInterceptor.js" ></script>
<script src="/js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<!-- endbuild -->



<script src="/library/zoombox/zoombox.js"></script>


<!-- For the carousel to be swipeable -->
<script>
         $("#carousel-example-generic").carousel()
</script>



<!-- For the portfolio in product page -->
<script type="text/javascript">
    $(function () {
        var filterOnLoad = document.location.search == '' ? 'all' : (document.location.search.substring(8));

        $('#portfolio').mixitup({
            showOnLoad: filterOnLoad,
            targetDisplayGrid : 'flex',
            targetSelector: '.item',
            transitionSpeed: 450
        });
    });

</script>


<script type='text/javascript'>
    jQuery(function ($) {
        $('a.zoombox').zoombox({
            theme: 'zoombox', //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
            opacity: 0.8, // Black overlay opacity
            duration: 800, // Animation duration
            animation: true, // Do we have to animate the box ?
            width: 1200, // Default width
            height: 800, // Default height
            gallery: true, // Allow gallery thumb view
            autoplay: true                // Autoplay for video
        });

    });</script>


<!-- <script defer type="text/javascript">
    adroll_adv_id = "IQD3EJZITNBJDPDB24TLBS";
    adroll_pix_id = "YOTIKCQQ4VDPBNKVRFYKEA";
    (function () {
        var _onload = function () {
            if (document.readyState && !/loaded|complete/.test(document.readyState)) {
                setTimeout(_onload, 10);ranslation-app/config.php
                return
            }
            if (!window.__adroll_loaded) {
                __adroll_loaded = true;
                setTimeout(_onload, 50);
                return
            }
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {
            window.addEventListener('load', _onload, false);
        }
        else {
            window.attachEvent('onload', _onload)
        }
    }());
</script>

 <!-- <script type="text/javascript">
(function(){"use strict";var e=null,b="4.0.0",
n="12710",
additional="",
t,r,i;try{t=top.document.referer!==""?encodeURIComponent(top.document.referrer.substring(0,2048)):""}catch(o){t=document.referrer!==null?document.referrer.toString().substring(0,2048):""}try{r=window&&window.top&&document.location&&window.top.location===document.location?document.location:window&&window.top&&window.top.location&&""!==window.top.location?window.top.location:document.location}catch(u){r=document.location}try{i=parent.location.href!==""?encodeURIComponent(parent.location.href.toString().substring(0,2048)):""}catch(a){try{i=r!==null?encodeURIComponent(r.toString().substring(0,2048)):""}catch(f){i=""}}var l,c=document.createElement("script"),h=null,p=document.getElementsByTagName("script"),d=Number(p.length)-1,v=document.getElementsByTagName("script")[d];if(typeof l==="undefined"){l=Math.floor(Math.random()*1e17)}h="dx.steelhousemedia.com/spx?"+"dxver="+b+"&shaid="+n+"&tdr="+t+"&plh="+i+"&cb="+l+additional;c.type="text/javascript";c.src=("https:"===document.location.protocol?"https://":"http://")+h;v.parentNode.insertBefore(c,v)})()
</script>  -->



</body>

</html>
