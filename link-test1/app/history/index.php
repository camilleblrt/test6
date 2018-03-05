<?php include_once '../i18n/locales/language.php' ?>
<?php include_once '../header.php' ?>

<style>
  .history-page .jumbotron{
  border-bottom: solid 1px #727272;
}
  .row-separator{
    margin-bottom: 25px;
  }

  .date-container{
    background-color: #fff;
  }
  .date-container .row-separator {
    margin-top: -4px;
  }
  .date-container .carousel-control.right{
    top:-46px;
    background: transparent;
  }
  .date-container .carousel-control.right:hover{

    background: transparent;
  }
  .date-container .carousel-control.left{
    top:-46px;
    background: transparent;
  }
  .date-container .carousel-control.left:hover{

    background: transparent;
  }
  .event-container .carousel {
    height: 700px;
  }
  .event-container{
    background-color:  #fff;
    /*height: 600px;*/
    overflow: hidden;
    padding-bottom:20px;

  }
  .event-container .row-separator img{
    position: relative;
    top: -4px;
  }
  .event-container .row-separator img{
        margin-bottom:0px;
  }
  .event-box{
    /*background: transparent url("/images/bg_off.png") repeat scroll 0% 0%;
    padding:4px;*/
  }
  .event-content{
    background-color:#fff;
    padding: 20px;
  }
  .introduction {
    background-color: #f9f9f9;
    padding-top: 30px; /* this is the jumbotron value */
    padding-bottom: 30px;
  }
  .history-page .jumbotron{
    margin-bottom: 0px;
    /* Here we just remove the margin to prevent
    a black band between intro and jumbotron.
    Margin will be respected in introduction class */
  }
  .event-box img {
    margin-right: 15px;
    margin-bottom: 25px;
    max-width: 100%;
    display: block;
  }
  .event-desc {
    /*height: 400px;*/

  }
  .date-container h2{
    color:black;
  }
  .date-title{
    text-align: center;
    margin-bottom: 60px;
  }
  .carousel-control.right{
      background-image: none;
  }
  .carousel-control.left{
      background-image: none;
  }
  .carousel-control.right:hover{
      background-image: none;
  }
  .carousel-control.left:hover{
      background-image: none;
  }
  .carousel-control .glyphicon-chevron-right {
    top: 2.3%;
  }
  .carousel-control .glyphicon-chevron-left {
    top: 2.3%;
  }
</style>
<!-- page -->
<div class="history-page"><!-- history page -->
  <div class="jumbotron">
      <div class="container">
        <h1 class="title">
          <?php say("history page title"); ?>
        </h1>
      </div><!-- end of jumbo container  -->

  </div><!-- end of jumbotron -->
  <div class="introduction">
    <div class="container">
        <h2> <?php say("introd-title");?></h2>
        <?php say("intro-content");?>
  </div>
  </div>


    <div  class="event-container">
      <div class="container">
        <div id="history-carousel-event" class="carousel slide history-carousel" data-wrap="false" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date1"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <img width='535px' height='355px' class="" src="images/dk1.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate1-title"); ?>
                      </h3>
                      <?php say("EventDate1-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date2"); ?>
                    </h2>
                  </div>
                    <div class="row">
                      <div class="col-md-6">
                          <img width='535px' height='234px' class="" src="images/daskv2face.png">
                      </div>
                      <div class="col-md-6 event-desc">
                        <h3 class="">
                          <?php say("EventDate2-title"); ?>
                        </h3>
                        <?php say("EventDate2-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date3"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='283px' class="" src="images/dk31.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate3-title"); ?>
                      </h3>
                      <?php say("EventDate3-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date4"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='321px' class="" src="images/dksp.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate4-title"); ?>
                      </h3>
                      <?php say("EventDate4-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date5"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <img width='535px' height='252px' class="" src="images/dk3su.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate5-title"); ?>
                      </h3>
                      <?php say("EventDate5-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date6"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='361px' class="" src="images/dk3spm.png">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate6-title"); ?>
                      </h3>
                      <?php say("EventDate6-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date7"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='232px' class="" src="images/dk3pls.png">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate7-title"); ?>
                      </h3>
                      <?php say("EventDate7-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date8"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='316px' class="" src="images/dk4.png">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate8-title"); ?>
                      </h3>
                      <?php say("EventDate8-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date9"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='334px' class="" src="images/dkc.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate9-title"); ?>
                      </h3>
                      <?php say("EventDate9-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date10"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='271px' class="" src="images/x40.png">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate10-title"); ?>
                      </h3>
                      <?php say("EventDate10-content"); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='535px' height='271px' class="" src="images/5q-timeline.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate11-title"); ?>
                      </h3>
                      <?php say("EventDate11-content"); ?>
                    </div>
                  </div>
                </div> 
              </div><!-- end of event-box -->
            </div><!-- end of item -->
            <div class="item">
              <div class="event-box">
                <div class="event-content">
                  <div class="date-title">
                    <h2>
                      <?php say("Date11"); ?>
                    </h2>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <img width='435px' height='260px'class="" src="images/x50-rgb-timeline.jpg">
                    </div>
                    <div class="col-md-6 event-desc">
                      <h3 class="">
                        <?php say("EventDate12-title"); ?>
                      </h3>
                      <?php say("EventDate12-content"); ?>
                    </div>
                  </div>
                </div>
              </div><!-- end of event-box -->
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href=".history-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:black;"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href=".history-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:black;"></span>
            <span class="sr-only">Next</span>
          </a>

        </div>
      </div>
    </div>
</div><!-- end of history page -->
<script>
  document.addEventListener("DOMContentLoaded", function(event){
                                                   $(window).load(function(){
                                                       $('.history-carousel').carousel('pause');
                                                       });
                                                     });
</script><!-- we desactivate the auto rotation of the carousels-->
<!-- end of page -->
<!-- includes -->
<?php include_once '../footer.php'; ?>
<!-- end of includes -->
