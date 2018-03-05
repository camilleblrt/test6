<?php include_once '../header.php' ?>

        <?php
        if ($current_language !== "/de"){
            $href = "http://shop.daskeyboard.com/products/das-keyboard-4-professional/";
        }
        else{
            $href = "/de/where-to-buy/";
        }
        ?>
<style>
    #mc_embed_signup .button{
        background:#9E0B0F!important;
    }
    .bottom-5weeklymetahacks{
        background-color:#cccccc;
        margin-top: 70px;

    }
    .content-5weeklymetahacks .btn-primary{
        background-color: #003366;
        border-color: #003366;
    }
    .content-5weeklymetahacks .btn{
        font-size: 13px;
        padding: 3px 6px;
    }
    #mc_embed_signup{
        background:#fff; 
        clear:left; 
        font:14px Helvetica,Arial,sans-serif; 
        width:100%;
    }
    .signature, .share-idea{
        margin-top:30px;
    }

    .blog-header{
        margin-top:70px;
        
    }
    
    .blog-title{
        font-size:30px;
    }


</style>

<div id="main">
<div class="container" >

      
      <div class="row">

        <div class="col-sm-offset-3 col-sm-6 blog-main">
        
        <div class="blog-header">
            <img src="images/5-meta-hacks-wide.png" alt="5 Meta Hacks of the Week" width="625px" style="margin-bottom: 20px;">
        </div>

          <div class="blog-post letter">
            <p><?php say("introduction-5weeklymetahacks"); ?></p>
            <p><?php say("content-5weeklymetahacks"); ?>
            <p><?php say("signup-5weeklymetahacks"); ?>
          </div><!-- /.blog-post -->

          <div class="blog-post">
                <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
            
            <div id="mc_embed_signup">
            <form action="https://daskeyboard.us5.list-manage.com/subscribe/post?u=56e3c495115ea26f98ce8d429&amp;id=80814cfb3c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="text-align:left;">
                <div id="mc_embed_signup_scroll">
                
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="myemail@example.com" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_56e3c495115ea26f98ce8d429_80814cfb3c" tabindex="-1" value="">
                    </div>
                    <div class="clear">
                        <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
                    </div>
                </div>
            </form>
          </div><!-- /.blog-post -->

          <div class="blog-post signature">
            <p><?php say("CEOsignature-5weeklymetahacks"); ?></p>
          </div><!-- /.blog-post -->

          <div class="blog-post share-idea">
            <p><?php say("submit-meta-hack"); ?><a href="https://goo.gl/forms/wYyAEhXKBh8vmQ8S2"> here.</a>
          </div><!-- /.blog-post -->

        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </div>
</div>
<div class="slogan bottom-5weeklymetahacks">
    <div class="container text-center">
        <div class="slogan-content">
            <div class="row">
                <div class="col-md-4">
                    <img src="images/logo_metadot.png" alt="Metadot Logo" style="height:54px">
                </div>
                <div class="col-md-4">
                    <img src="images/logo_dk.png" alt="Das Keyboard Logo" style="height:54px">
                </div>
                <div class="col-md-4">
                    <img src="images/logo_mojo.png" alt="Mojo Helpdesk Logo" style="height:54px">
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<!-- <div id="main">
    <div class="jumbotron">
        <div class="container">
            <h1 class="title">
                <?php say("5weeklymetahacks-title"); ?>
            </h1>
        </div>
    </div>
    <div class="container page-content">
        <div class="content-5weeklymetahacks">
            <p><?php say("introduction-5weeklymetahacks"); ?></p>
            <p><?php say("content-5weeklymetahacks"); ?>
            <p><?php say("signup-5weeklymetahacks"); ?>
        </div>
        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
        
        <div id="mc_embed_signup">
        <form action="https://daskeyboard.us5.list-manage.com/subscribe/post?u=56e3c495115ea26f98ce8d429&amp;id=80814cfb3c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="text-align:left;">
            <div id="mc_embed_signup_scroll">
            
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="myemail@example.com" required>
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                    <input type="text" name="b_56e3c495115ea26f98ce8d429_80814cfb3c" tabindex="-1" value="">
                </div>
                <div class="clear">
                    <input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button">
                </div>
            </div>
        </form>
        </div>
        <div class="content-5weeklymetahacks">
            <p><?php say("CEOsignature-5weeklymetahacks"); ?></p>
        </div>
        <div class="content-5weeklymetahacks">
            <p><?php say("submit-meta-hack"); ?><a class="btn btn-primary" href="https://goo.gl/forms/wYyAEhXKBh8vmQ8S2" role="button">Here</a>
        </div>
    </div>
    
    

</div> -->
<?php include '../footer.php' ?>
