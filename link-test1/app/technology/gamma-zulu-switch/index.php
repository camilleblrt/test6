<?php include_once '../../header.php' ;?>

<link rel= "stylesheet" href="../css/technology-style.css">

<style>
    
</style>

<section class="black-bg">
    <div class="container gamma-zulu-page">
        <div class="banner-image feature" >
            <h1 class="title-position"><?php say('gamma-zulu-page-title') ?></h1>
            <h4 class="text-position"><?php say('gamma-zulu-subtitle') ?></h4>
            <img src="img/gamma-zulu-banner.jpg" alt="5Q keyboard with the Gamma Zulu switches above">
        </div>
      <!-- Example row of columns -->
        <div class="row feature">
            
            <div class="col-sm-7 col-sm-push-5 col-xs-12">
                <h2><?php say('gamma-zulu-lifecycle-title') ?></h2>
                <h4><?php say('gamma-zulu-lifecycle-subtitle') ?></h4>
                <p><?php say('gamma-zulu-lifecycle-paragraph') ?></p>
            </div>
            <div class="col-sm-5 col-sm-pull-7 col-xs-12">
                <img class="img-responsive img-durable" src="img/gammazulu.gif" alt="Gamma Zulu Switch 3D view animation" width="350" height="350">
            </div>
        </div>
        <div class="row feature">
            
            <div class="col-sm-7 col-sm-push-5 col-xs-12">
                <h2><?php say('gamma-zulu-brighter-rgb-title') ?></h2>
                <h4><?php say('gamma-zulu-brighter-rgb-subtitle') ?></h4>
                <p><?php say('gamma-zulu-brighter-rgb-paragraph') ?></p>
            </div>
            <div class="col-sm-5 col-sm-pull-7 col-xs-12">
                <img class="img-responsive img-durable" src="img/gama-zulu-color-switch.jpg" alt="Gamma Zulu switch is 2 times brighter: RGB+" width="350" height="350">
            </div>
            
        </div>
        <div class="row feature">
            
            <div class="col-sm-7 col-sm-push-5 col-xs-12">
                <h2><?php say('gamma-zulu-custom-designed-title') ?></h2>
                <h4><?php say('gamma-zulu-custom-designed-subtitle') ?></h4>
                <p><?php say('gamma-zulu-custom-designed-paragraph') ?></p>
            </div>
            <div class="col-sm-5 col-sm-pull-7 col-xs-12">
                <img class="img-responsive img-durable" src="img/gamma-zulu-switches-graph-invert.png" alt="Graphic of the speed and the comfort of Gamma Zulu switch " width="350" height="350">
            </div>

        </div>
        <div class="row feature">
            
            <div class="col-sm-7 col-sm-push-5 col-xs-12">
                <h2><?php say('gamma-zulu-force-curves-title') ?></h2>
                <h4><?php say('gamma-zulu-force-curves-subtitle') ?></h4>
                <p><?php say('gamma-zulu-force-curves-paragraph') ?></p>
                <div class="col-xs-12" style="padding-left:0">
                    <button id='btnStart'
                                        class="btn btn-lg button-switch"
                                        ng-click='SoundLinear()'
                                        data-mp3="sounds/gammaZulu_soft_tactile-cut.mp3"
                        style="margin: 0px 10px 20px 0px;">
                            <span id="musicSign" class="glyphicon glyphicon-play " style="left: 0%; top: 1px; font-size: 18px;"></span>
                            <div class="bar" style="height: 0px;"></div>
                    <?php say("5q-play-sound"); ?>
                    </button>
                </div>
            </div>
            <div class="col-sm-5 col-sm-pull-7 col-xs-12">
                <img class="img-responsive img-durable" src="img/gamma-zulu-tuned.jpg" alt="Gamma Zulu switch provides a soft tactile sound" width="350" height="350">
            </div>

        </div>
        <div class="row feature">
            
            <div class="col-sm-7 col-sm-push-5 col-xs-12">
                <h2><?php say('gamma-zulu-best-class-title') ?></h2>
                <h4><?php say('gamma-zulu-best-class-subtitle') ?></h4>
                <p><?php say('gamma-zulu-best-class-paragraph') ?></p>
                
            </div>
            <div class="col-sm-5 col-sm-pull-7 col-xs-12">
                <img class="img-responsive img-durable" src="img/switchdiagramB-B.png" alt="Draw of the Gamma Zulu switch" width="350" height="350">
            </div>

            <table class="table" style="margin-right:15px; margin-left:15px;"> 
                    <thead> 
                        <tr> 
                        <th></th> 
                        <th style="text-align:right; font-size:13"> 
                            <?php say("gamma-zulu-table-line-1-col-2"); ?>
                        </th> 
                        <th style="text-align:right; font-size:13" class="dk-5q-color">
                            <?php say("gamma-zulu-table-line-1-col-3"); ?> 
                        </th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        <tr> 
                        <td style="vertical-align: middle;" class="title-line">
                            <?php say("x50-table-actuation"); ?> 
                        </td> 
                        <td class="gamma-zulu-column">
                            <?php say("x50-table-2mm"); ?>
                        </td> 
                        <td class="gamma-zulu-column dk-5q-color">
                            <?php say("x50-table-1point5mm"); ?>
                        </td> 
                        </tr> 
                        <tr> 
                        <td style="vertical-align: middle;" class="title-line" >
                            <?php say("x50-table-travel"); ?>
                        </td> 
                        <td class="gamma-zulu-column">
                            <?php say("x50-table-4mm"); ?>
                        </td> 
                        <td class="gamma-zulu-column dk-5q-color">
                            <?php say("x50-table-3point5mm"); ?>
                        </td> 
                        </tr> 
                        <tr> 
                        <td style="vertical-align: middle;" class="title-line" >
                            <?php say("x50-table-life"); ?>
                        </td> 
                        <td class="gamma-zulu-column">
                            <?php say("x50-table-50million"); ?>
                        </td> 
                        <td class="gamma-zulu-column dk-5q-color">
                            <?php say("x50-table-100million"); ?>
                        </td> 
                        </tr> 
                        <tr style="border-bottom: 1px solid #ddd;"> 
                        <td style="vertical-align: middle;" class="title-line" >
                            <?php say("x50-table-contact"); ?>
                        </td> 
                        <td class="gamma-zulu-column">
                            <?php say("x50-table-sigle-point"); ?>
                        </td> 
                        <td class="gamma-zulu-column dk-5q-color">
                            <?php say("x50-table-double-point"); ?>
                        </td> 
                        </tr> 
                    </tbody> 
            </table> 
        </div>
        
        <div class="row feature-last">
                <h2><?php say('gamma-zulu-tuned-title') ?></h2>
                <h4><?php say('gamma-zulu-tuned-subtitle') ?></h4>
                <p><?php say('gamma-zulu-tuned-paragraph') ?></p>
                <img id="img-animation" src="img/gamma-zulu-switch-animation.png" alt="Click on the Gamma Zulu picture to check out the 3D view">
                
            </div>
            <p style="text-align:center; padding-bottom:100px;"><?php say('gamma-zulu-in-5q-x50') ?></p>
        </div>
       
    </div>
</section>
<script src="https://code.jquery.com/jquery.min.js" type="text/javascript"></script>
<script src="../../js/custom_sound_switch_gaming.js"></script>
<audio id="SoundLinear" src="sounds/gammaZulu_soft_tactile-cut.mp3"></audio>
<?php include_once '../../footer.php' ?>

<script>
    $(document).ready(function(){
        $("#img-animation").click(function(){
            $("#img-animation").replaceWith("<iframe id='”emersyaIframe”' frameborder='0' src='https://emersya.com/showcase/ZMFZFFTAWF' width='100%' height='500px' ></iframe>");
        });
    });
</script>