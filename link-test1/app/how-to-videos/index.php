<?php include_once '../header.php' ;?>

    <?php
        if ($current_language !== "/de") {
            $href = "http://shop.daskeyboard.com/products/das-keyboard-prime-13";
        } 
        else {
            $href = "/de/where-to-buy/";
        }
    ?>
<link rel = "stylesheet" type = "text/css" href = "../x/x50-rgb-mechanical-keyboard/css/x50-css.css" />
 
 
</head> 

<style> 
@media screen and (max-width:425px){ 
  .videoWrapper { 
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 35px;
    height: 0;
    overflow: hidden;
    
  } 
  .videoWrapper iframe { 
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
    max-width:560px;
    max-height:315px;
    margin:auto;
  } 
} 
.howTo-video-title {
    color: #efefef;
    text-align: center;
    padding: 40px 20px 20px;
    border-bottom: 1px solid #222222;
}
.howTo-video-title h1{
    color: #fff;
}
.howTo-video-title p {
    color: #afafaf;
}
.howTo-video-title a{
    color: #afafaf;
    text-decoration:underline;
}

h2{
    color:#fff;
}
</style> 

    <div class="howTo-video-title">
        <div class="container">
            <h1> 
                <?php say('how-to-videos-title') ?> 
                
            </h1> 
            <p><?php say('how-to-videos-subtitle') ?> <a href="http://q.daskeyboard.com/download">here.</a> </p>
        </div>
    </div>
    
    
    <div class="container">
        <section class="dk-section-content section-description-first black-bg"> 
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="videoWrapper"> 
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3oBj0rcnlvE?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div> 
                    <h2><?php say('how-to-videos-IFTT-tutorial') ?></h2>
                </div>
                <div class="col-md-6">
                    <div class="videoWrapper"> 
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RhkKgCqTNpk?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h2><?php say('how-to-videos-Zapier-tutorial') ?> </h2>
                </div>
            </div>
        </section>
    </div>



<?php include_once '../footer.php' ?>