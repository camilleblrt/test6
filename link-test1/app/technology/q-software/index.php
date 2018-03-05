<?php include_once '../../header.php' ;?>

<link rel= "stylesheet" href="../css/technology-style.css">

 <style>
    img{
        margin: 0px auto;
    }
 </style>   
    
<section class="black-bg">
    <div class="container q-software-page">
        <div class="feature text-center">
            <h1><?php say('q-software-page-title') ?></h1>
            <h4><?php say('q-software-page-subtitle') ?></h4>
            <img src="img/software-animated-banner.gif" alt="Animation of the Q Software" width="1412" height="588">
        </div>
      <!-- Example row of columns -->
        <div class="row feature text-center">
                <h2><?php say('q-software-cloud-title') ?></h2>
                <h4><?php say('q-software-cloud-subtitle') ?></h4>
                <img class="img-responsive img-durable" src="img/q-desktop-advanced-software.gif" alt="The Q Software is cloud connected with IFTTT and Zapier" width="700" height="450">
                <p><?php say('q-software-cloud-paragraph') ?></p>
        </div>
        <div class="row feature text-center">
                <h2><?php say('q-software-dashboard-title') ?></h2>
                <h4><?php say('q-software-dashboard-subtitle') ?></h4>
                <img style="border: 2px solid #3e3e3e;" class="img-responsive img-durable" src="img/das-keyboard-5q-dashboard-email.png" alt="Dashboard View with a notification" width="700" height="450">   
                <p><?php say('q-software-dashboard-paragraph') ?></p>        
        </div>
        <div class="row feature text-center">
                <h2><?php say('q-software-signal-center-title') ?></h2>
                <h4><?php say('q-software-signal-center-subtitle') ?></h4>
                <img class="img-responsive img-durable" src="img/das-keyboard-5q-q-button-signal-center.png" alt="The Q button and the Q Signal Center"  width="700" height="450">
                <p><?php say('q-software-signal-center-paragraph') ?></p>

                <p style="padding-top:75px; max-width:none; text-align:left;"><?php say('q-software-specification-5q-paragraph') ?></p>
        </div>
        <div class="row feature text-center">
                <h2><?php say('q-software-illumination-title') ?></h2>
                <h4><?php say('q-software-illumination-subtitle') ?></h4>
                <img style="border: 2px solid #3e3e3e;" class="img-responsive img-durable" src="img/capture-illumination.png" alt="The Illumination section of the Q Sotware" width="700" height="450">
                <p><?php say('q-software-illumination-paragraph') ?></p>
        </div>
        <div class="row feature text-center">
                <h2><?php say('q-software-marketplace-title') ?></h2>
                <h4><?php say('q-software-marketplace-subtitle') ?></h4>
                <img style="border: 2px solid #3e3e3e;" class="img-responsive img-durable" src="img/capture-market-place.png" alt="The Market Place section of the Q Software" width="700" height="450">
                <p><?php say('q-software-marketplace-paragraph') ?></p>
        </div>
        <div class="row feature-last">
                <?php include '../../library/includes/inc_rest_api_q_software.php'?>
        </div>
        
       
    </div>
</section>

<script src="../../js/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<?php include_once '../../footer.php' ?>