<?php include_once '../i18n/locales/language.php' ?>
<?php include_once '../header.php' ?>

<style>

.values-page{
  background-color: #fff;
  padding-bottom: 45px;
}
.values-page .jumbotron{
  border-bottom: solid 1px #727272;
  padding-bottom: 30px;
  color:black;
}
.values-section img {
    /*float:left;*/
    max-width: 100%;
    /*max-height:300px;*/
}
.values-section{
  margin-top:25px;
  margin-bottom: 35px;

}
.values-section .pull-left{
  max-width: 100%;
}
.values-section img{
  margin-bottom:20px;
}
.values-section ul{
  margin-bottom:20px;
}
</style>
<!-- page -->
<div class="values-page"><!-- values page -->
  <div class="jumbotron">
      <div class="container">
        <h1 class="title">
          <?php say("Value page title"); ?>
        </h1>
      </div><!-- end of jumbo container  -->
  </div><!-- end of jumbotron -->
  <div class="container page-content">
    <h2 class="title">
      <?php say("next level title"); ?>
    </h2>
    <div class="values-section">
      <div>
          <?php say("next level content"); ?>
      </div>
    </div>

    <div class="values-section row">

      <div class="col-md-6">
          <?php say("value content 2"); ?>
          <?php say("value content 3"); ?>
      </div>
      <div class="col-md-6">
        <img width='555px' height='370px' class="img-responsive" src="images/close-clipper.jpg"></img>
      </div>
    </div>
    <div class="values-section row">
      <div class="col-md-6 pull-right">
          <?php say("value content 4"); ?>
          <?php say("next level content 5"); ?>
      </div>
      <div class="col-md-6">
        <img width='555px' height='371px' class="img-responsive" src="images/computer.jpg" ></img>
      </div>
    </div>
  </div>
</div><!-- end of values page -->
<script>

</script><!-- -->
<!-- end of page -->
<!-- includes -->
<?php include_once '../footer.php'; ?>
<!-- end of includes -->
