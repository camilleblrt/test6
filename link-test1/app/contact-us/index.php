<?php include_once '../header.php' ?>


        <div id="main">
            <!-- Title, Breadcrumb Start-->
            <div class="breadcrumb-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <h1 class="title"><?php say('contact-us')?></h1>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Title, Breadcrumb End-->
           <!-- Main Content start-->
            <div class="content">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contact-form" >
                        <h2 class="title"><?php say('send-mail')?></h2>
                        <p>
                            <?php say('send-mail_content')?>
                        </p>
                     </div>
                     <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 ">
                        <h3 class="title" style="margin-bottom:0px;"><?php say('contact-us_Inquiries_about_title')?></h3>
                        <p>
                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6" style="padding-left:0px;">
                            <b><?php say('contact-us_Inquiries_about_content_1')?></b><br>
                            <a href="https://daskeyboard.mojohelpdesk.com/login/create_request" ><?php say('contact-us_Inquiries_about_link_1')?></a><br><br>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6" style="padding-left:0px;">
                            <b><?php say('contact-us_Inquiries_about_content_2')?></b><br>
                            <a href="<?php echo $current_language ?>/company-information/become-a-reseller/" ><?php say('contact-us_Inquiries_about_link_2')?></a><br><br>
                            </div>



                            <?php if ($current_language !== "/de") {
                                echo "<div class='col-lg-4 col-md-4 col-xs-12 col-sm-6' style='padding-left:0px;'>";
                                echo "<b>";
                                echo say('contact-us_Inquiries_about_content_3');
                                echo "</b><br>";
                                echo "<a href='".$current_language."/company-information/education-program/' >".say('contact-us_Inquiries_about_link_3')."</a><br><br></div>";
}?>


                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6" style="padding-left:0px;">
                            <b><?php say('contact-us_Inquiries_about_content_5')?></b><br>
                            <a href="<?php echo $current_language ?>/company-information/our-story/" ><?php say('contact-us_Inquiries_about_link_5')?></a><br><br>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6" style="padding-left:0px;">
                            <b><?php say('contact-us_Inquiries_about_content_8')?></b><br>
                            <a href="https://daskeyboard.mojohelpdesk.com/login/create_request" ><?php say('contact-us_Inquiries_about_link_8')?></a><br><br>
                            </div>

                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6" style="padding-left:0px;">
                            <b><?php say('contact-us_Inquiries_about_content_6')?></b><br>
                            <a href="mailto:media@daskeyboard.com" ><?php say('contact-us_Inquiries_about_link_6')?></a><br>


                            <a href="<?php echo $current_language ?>/company-information/press-kit/" ><?php say('contact-us_Inquiries_about_link_7')?></a>
                            </div>

                        </p>
                     </div>
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="contact-form">
                        <div class="address widget">
                            <h3 class="title" style="margin-bottom:0px;"><?php say('head_office')?></h3>
                            <ul class="contact-us" style="list-style: none;">
                                <?php if ($current_language !== "/de") {
                                    echo "<li>";
                                      echo " <i class='icon-map-marker'></i>";
                                     echo "  <p> ";
                                      echo "     <strong>Address:</strong><br>";
                                      say('metadot_address');
                                      echo " </p>";
                                    echo "</li>";
                                    echo "<li>";
                                      echo " <i class='icon-phone'></i>";
                                      echo " <p><strong>Phone:</strong>";
                                      say('metadot_phone');
                                      echo "</p>";
                                    echo "</li>";
} else {
    echo "<li><i class='icon-map-marker'></i><p><b>Email Address:</b> info@daskeyboard.com</li>";
}?>
                            </ul>
                        </div>
                     </div>
                  </div>
                    <?php if ($current_language !== "/de") {
                        echo "<div class='row'>";
                        echo  "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>";
                        echo    "<h3 class='title'>Our Location</h3>";
                        echo    "<div id='maps' class='google-maps' style='margin:25px 0;'>";
                        echo       "<p><iframe width='100%' height='450px' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;q=9020+N.+Capital+of+Texas+Hwy+Great+Hills+Corp+Ctr+One,+ste+365+Austin,+Texas+78759+-+USA&amp;ie=UTF8&amp;hq=9020+N.+Capital+of+Texas+Hwy+Great+Hills+Corp+Ctr+One,+ste+365&amp;hnear=Austin,+Texas+78759&amp;ll=30.395291,-97.756499&amp;spn=0.044933,0.084543&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=13996803859089669411&amp;output=embed'></iframe><br /></p>";
                        echo    "</div>";
                        echo "</div></div>";
}?>
                  <div class='divider'></div>
               </div>
            </div>
            <!-- Main Content end-->
         </div>

         <!-- Content End -->

<?php include_once '../footer.php'; ?>
