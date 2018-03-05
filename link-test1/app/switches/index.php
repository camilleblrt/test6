<?php include_once '../header.php' ;?>

<?php
if ($current_language !== "/de") {
    $href = "http://shop.daskeyboard.com/products/das-keyboard-4c-professional-compact-mechanical-keyboard/";
} else {
    $href = "/de/where-to-buy/";
}

?>
<style>
h1 {
  margin-top:20px;
}
table{
  border-collapse: separate;
}
.row-label {
  border-right: 3px solid #ddd;
  width:15%;
}
thead td{
  border-bottom: 2px solid #ddd;
}
table img{
  width:100%;
}

.btn-greetek-play-gamma{
  background-color:#000;
  color: white;
}

.btn-greetek-play-gamma:hover{
  background-color:#000;
  color: white;
}
.btn-greetek-play-gamma:focus{
  background-color:#000;
  color: white;
}

.btn-greetek-play-mustard{
  background-color:#FFC72A ;
  color: white;
}
.btn-greetek-play-mustard:hover{
  background-color:#E1B129;
  color: white;
}

.btn-greetek-play-olive{
  background-color: #858E59;
  color: white;
}

.btn-greetek-play-olive:hover{
  background-color: #6C7447;
  color: white;
}

td:nth-child(2) { 
  color: black; 
}

td:nth-child(3) { 
  color: black; 
}
</style>
<script>
// This script is here to set the right column size.we don't copy an html class
// because we have toooo many cells
  document.addEventListener("DOMContentLoaded", function(event){
  var col1=  $(".row-label").next();
  col1.css("width", "42.5%");
  col1.next().css("width", "42.5%");
  });
  </script>
<!-- Content Start -->
<div class="row reviews-page-title">
    <div class="col-md-12 breadcrumb-wrapper">
      <div class="container">
        <h1 class="title">Mechanical Keyboard Switch Comparison </h1>
      </div>
    </div>
</div>

<div id="main">
  <div class="container">
  <table class="table table-stripped">
    <thead>
    <tr >
      <td class="row-label"></td>
      <td>
        <div class="col-sm-12 col-md-7">
           Brand: <select ng-change="changeSwBrand()" ng-model="selector_sw" ng-options="item for item in sw_brand"></select>
        </div>
        <div class="col-sm-12 col-md-4">
           Model: <select ng-model="selector_sw_type" ng-options="item for item in sw_brand_cat[selector_sw]"></select>
        </div>
      </td>
      <td>
        <div class="col-sm-12 col-md-7">
           Brand: <select ng-change="changeSwBrand2()" ng-model="selector_sw2" ng-options="item for item in sw_brand"></select>
        </div>
        <div class="col-sm-12 col-md-4">
           Model: <select  ng-model="selector_sw_type2" ng-options="item for item in sw_brand_cat[selector_sw2]"></select>
        </div>
      </td>
    </tr>
  </thead>
  <!-- table Body -->
    <tbody>
      <tr class="below-thead">
        <td class="row-label"><?php say("swtch-brand")?></td>
        <td style="text-align: center;">
          <div ng-if="selector_sw=='Cherry'" style="width:55%;display:inline-block;">
            <?php say("cherry-logo") ?></div>
          <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'" style="width:55%;display:inline-block;">
            <?php say("Az-logo") ?></div>
          <div  ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'" style="width:55%;display:inline-block;">
            <?php say("GammaZulu-logo") ?></div>
        </td>
        <td style="text-align: center;">
          <div class="text-center"  ng-if="selector_sw2=='Cherry'" style="width:55%;display:inline-block;">
            <?php say("cherry-logo") ?></div>
          <div class="text-center" ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'" style="width:55%;display:inline-block;">
            <?php say("Az-logo") ?></div>
          <div  ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'" style="width:55%;display:inline-block;">
            <?php say("GammaZulu-logo") ?></div>
          </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-switchView-Cherry")?>
        </td>
        <td >
            <div class="center-block" style="width:20%;text-align" ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-switchView-Cherry-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-switchView-Cherry-2")?>
              </div>
            </div>
            <div class="center-block" style="width:20%" ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-switchView-Cherry-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-switchView-Cherry-2Alpha-Zulu")?>
              </div>
            </div>
            <div class="center-block" style="width:20%" ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-switchView-Cherry-1Gamma-Zulu")?>
              </div>
            </div>
          </td>
        <td>
            <div class="center-block" style="width:20%" ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-switchView-Cherry-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-switchView-Cherry-2")?>
              </div>
            </div>
            
            <div class="center-block" style="width:20%" ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-switchView-Cherry-1GreetechAlpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-switchView-Cherry-2GreetechAlpha-Zulu")?>
              </div>
            </div>
            <div class="center-block" style="width:20%" ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-switchView-Cherry-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>
      <tr>
      <tr>
        <td class="row-label"><?php say("swtch-tagline")?></td>
          <td>
            <div ng-if="selector_sw=='Cherry'">
                    <?php say("swtch-tagline-cherry")?>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
                    <?php say("swtch-tagline-Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
                    <?php say("swtch-tagline-Gamma-Zulu")?>
            </div>
          </td>
          <td>
            <div ng-if="selector_sw2=='Cherry'">
                    <?php say("swtch-tagline-cherry")?>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
                    <?php say("swtch-tagline-Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
                    <?php say("swtch-tagline-Gamma-Zulu")?>
            </div>
          </td>
      </tr>
      <tr>
        <td class="row-label"><?php say("swtch-overview")?></td>
          <td>
            <div ng-if="selector_sw=='Cherry'">
                    <?php say("swtch-overview-cherry")?>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
                    <?php say("swtch-overview-Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
                    <?php say("swtch-overview-Gamma-Zulu")?>
            </div>
          </td>

        </td>
          <td>
            <div ng-if="selector_sw2=='Cherry'">
                    <?php say("swtch-overview-cherry")?>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
                    <?php say("swtch-overview-Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
                    <?php say("swtch-overview-Gamma-Zulu")?>
            </div>
          </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-Details")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-Details-cherry-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-Details-cherry-2")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-Details-Alpha-Zulu-1")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-Details-Alpha-Zulu-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-Details-Gamma-Zulu-1")?>
              </div>
            </div>

          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-Details-cherry-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-Details-cherry-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-Details-Alpha-Zulu-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-Details-Alpha-Zulu-2")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-Details-Gamma-Zulu-1")?>
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td class="row-label"><?php say("swtch-swtch")?></td>
        <td>
          {{selector_sw}} {{selector_sw_type}}
        </td>
        <td>
          {{selector_sw2}} {{selector_sw_type2}}
        </td>
      </tr>
      <tr>
        <td class="row-label"><?php say("swtch-color")?></td>
        <td>
          {{selector_sw_type}}
        </td>
        <td>
          {{selector_sw_type2}}
        </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-pretravel")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-pretravel-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-pretravel-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-pretravel-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-pretravel-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-pretravel-1Gamma-Zulu")?>
              </div>
            </div>
          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-pretravel-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-pretravel-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-pretravel-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-pretravel-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-pretravel-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-totaltravel")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-totaltravel-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-totaltravel-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-totaltravel-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-totaltravel-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-totaltravel-1Gamma-Zulu")?>
              </div>
            </div>
          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-totaltravel-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-totaltravel-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-totaltravel-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-totaltravel-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-totaltravel-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-actuation")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-actuation-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-actuation-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-actuation-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-actuation-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-actuation-1Gamma-Zulu")?>
              </div>
            </div>
          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-actuation-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-actuation-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-actuation-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-actuation-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-actuation-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-tactileforce")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-tactileforce-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-tacticelforce-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-tactileforce-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-tacticelforce-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-tactileforce-1Gamma-Zulu")?>
              </div>
            </div>
          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-tactileforce-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-tacticelforce-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-tactileforce-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-tacticelforce-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-tactileforce-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>
         <tr>
      <td class="row-label">
        <?php say("swtch-Switch Lifecycle")?>
      </td>
      <td>
          <div ng-if="selector_sw=='Cherry'">
            <div ng-if="selector_sw_type=='Blue - Clicky'">
                <?php say("swtch-Switch Lifecycle-1")?>
            </div>
            <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-Switch Lifecycle-2")?>
            </div>
          </div>
          
          <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
            <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                <?php say("swtch-Switch Lifecycle-1Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-Switch Lifecycle-2Alpha-Zulu")?>
            </div>
          </div>
          <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
            <div ng-if="selector_sw_type=='Soft Tactile'">
                <?php say("swtch-Switch Lifecycle-1Gamma-Zulu")?>
            </div>
          </div>
        </td>
      <td>
          <div ng-if="selector_sw2=='Cherry'">
            <div ng-if="selector_sw_type2=='Blue - Clicky'">
                <?php say("swtch-Switch Lifecycle-1")?>
            </div>
            <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-Switch Lifecycle-2")?>
            </div>
          </div>
          
          <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
            <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                <?php say("swtch-Switch Lifecycle-1Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-Switch Lifecycle-2Alpha-Zulu")?>
            </div>
          </div>
          <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
            <div ng-if="selector_sw_type2=='Soft Tactile'">
                <?php say("swtch-Switch Lifecycle-1Gamma-Zulu")?>
            </div>
          </div>
      </td>
    </tr>
    <tr>
      <td class="row-label">
        <?php say("swtch-Switch contact-type")?>
      </td>
      <td>
          <div ng-if="selector_sw=='Cherry'">
            <div ng-if="selector_sw_type=='Blue - Clicky'">
                <?php say("swtch-Switch contact-type-1")?>
            </div>
            <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-Switch contact-type-2")?>
            </div>
          </div>
          <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
            <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                <?php say("swtch-Switch contact-type-1Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-Switch contact-type-2Alpha-Zulu")?>
            </div>
          </div>
          <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
            <div ng-if="selector_sw_type=='Soft Tactile'">
                <?php say("swtch-Switch contact-type-1Gamma-Zulu")?>
            </div>
          </div>
        </td>
      <td>
          <div ng-if="selector_sw2=='Cherry'">
            <div ng-if="selector_sw_type2=='Blue - Clicky'">
                <?php say("swtch-Switch contact-type-1")?>
            </div>
            <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-Switch contact-type-2")?>
            </div>
          </div>
          
          <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
            <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                <?php say("swtch-Switch contact-type-1Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-Switch contact-type-2Alpha-Zulu")?>
            </div>
          </div>
          <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
            <div ng-if="selector_sw_type2=='Soft Tactile'">
                <?php say("swtch-Switch contact-type-1Gamma-Zulu")?>
            </div>
          </div>
      </td>
    </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-Actuationfeell")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-Actuationfeell-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-Actuationfeell-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-Actuationfeell-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-Actuationfeell-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-Actuationfeell-1Gamma-Zulu")?>
              </div>
            </div>
          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-Actuationfeell-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-Actuationfeell-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-Actuationfeell-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-Actuationfeell-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-Actuationfeell-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td class="row-label">
            <?php say("swtch-Sound")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                <div>
                  <a href='javascript:;'
                    ng-click='soundBlue()'
                    class='playButton blue btn btn-default btn-greetek-play-blue' data-mp3="/sound/typing-experience-click-cherry-mp3.mp3">
                    <span class='glyphicon glyphicon-play'></span>
                    Play
                  </a>
                </div>  
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                <div>
                  <a href='javascript:;'
                      ng-click='soundBrown()'
                      class='playButton brown btn btn-default btn-greetek-play-brown' data-mp3='/sound/typing-experience-soft-cherry-mp3.mp3'>
                      <span class='glyphicon glyphicon-play'></span>
                      Play
                  </a>
                </div>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                <div >
                    <a href='javascript:;'
                        ng-click='soundMustard()'
                        class='playButton yellow btn btn-default btn-greetek-play-mustard'
                        data-mp3='/sound/typing-experience-yellow-alphaZulu.m4a'>
                        <span class='glyphicon glyphicon-play'></span>
                        Play
                    </a>
                </div>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                          <div ng-if="selector_sw_type=='Olive - Linear'">
                           <div >
                            <a href='javascript:;'
                               ng-click='soundOlive()'
                               class='playButton green btn btn-default btn-greetek-play-olive'
                               data-mp3='/sound/typing-experience-olive-alphaZulu.m4a'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>
               
              </div>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                           <div >
                            <a href='javascript:;'
                               ng-click='soundMustard()'
                               class='playButton yellow btn btn-default btn-greetek-play-gamma'
                               data-mp3='/sound/typing-experience-yellow-gammaZulu.m4a'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>
               
              </div>
               
              </div>
              </div>
            </div>
          </td>
        <td>
          <div ng-if="selector_sw2=='Cherry'">
            <div ng-if="selector_sw_type2=='Blue - Clicky'">
              <div>
                <a href='javascript:;'
                  ng-click='soundBlue()'
                  class='playButton blue btn btn-default btn-greetek-play-blue' data-mp3="/sound/typing-experience-click-cherry-mp3.mp3">
                  <span class='glyphicon glyphicon-play'></span>
                  Play
                </a>
              </div>  
            </div>
            <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
              <div >
                <a href='javascript:;'
                    ng-click='soundBrown()'
                    class='playButton brown btn btn-default btn-greetek-play-brown' data-mp3='/sound/typing-experience-soft-cherry-mp3.mp3'>
                    <span class='glyphicon glyphicon-play'></span>
                    Play
                </a>
              </div>
            </div>
          </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                        <div >
                            <a href='javascript:;'
                               ng-click='soundMustard()'
                               class='playButton yellow btn btn-default btn-greetek-play-mustard'
                               data-mp3='/sound/typing-experience-yellow-alphaZulu.m4a'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                  <div >
                            <a href='javascript:;'
                               ng-click='soundOlive()'
                               class='playButton green btn btn-default btn-greetek-play-olive'
                               data-mp3='/sound/typing-experience-olive-alphaZulu.m4a'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>
               
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                        <div >
                            <a href='javascript:;'
                               ng-click='gammaZulu()'
                               class='playButton yellow btn btn-default btn-greetek-play-gamma'
                               data-mp3='/sound/typing-experience-yellow-gammaZulu.m4a'>
                                <span class='glyphicon glyphicon-play'></span>
                                Play
                            </a>
                        </div>               
              </div>
            </div>
        </td>
      </tr>
      
      <tr>
        <td class="row-label">
            <?php say("swtch-switchImage-Cherry")?>
        </td>
        <td>
            <div ng-if="selector_sw=='Cherry'">
              <div ng-if="selector_sw_type=='Blue - Clicky'">
                    <?php say("swtch-switchImage-Cherry-1")?>
              </div>
              <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-switchImage-Cherry-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                    <?php say("swtch-switchImage-Cherry-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-switchImage-Cherry-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type=='Soft Tactile'">
                    <?php say("swtch-switchImage-Cherry-1Gamma-Zulu")?>
              </div>
              
            </div>
          </td>
        <td>
            <div ng-if="selector_sw2=='Cherry'">
              <div ng-if="selector_sw_type2=='Blue - Clicky'">
                    <?php say("swtch-switchImage-Cherry-1")?>
              </div>
              <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                    <?php say("swtch-switchImage-Cherry-2")?>
              </div>
            </div>
            
            <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
              <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                    <?php say("swtch-switchImage-Cherry-1Alpha-Zulu")?>
              </div>
              <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-switchImage-Cherry-2Alpha-Zulu")?>
              </div>
            </div>
            <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
              <div ng-if="selector_sw_type2=='Soft Tactile'">
                    <?php say("swtch-switchImage-Cherry-1Gamma-Zulu")?>
              </div>
            </div>
        </td>
      </tr>

      <style>
        .border-image{
          border: 1px solid;
          border-radius: 30px;
        } 
      </style>
    <tr>
    <tr>
      <td class="row-label">
        <?php say("swtch-switchDiagram-Cherry")?>
      </td>
      <td>
          <div ng-if="selector_sw=='Cherry'">
            <div ng-if="selector_sw_type=='Blue - Clicky'">
                <?php say("swtch-switchDiagram-Cherry-1")?>
            </div>
            <div ng-if="selector_sw_type=='Brown - Soft Tactile'">
                    <?php say("swtch-switchDiagram-Cherry-2")?>
            </div>
          </div>
          
          <div  ng-if="selector_sw=='Das Keyboard - Alpha-Zulu'">
            <div ng-if="selector_sw_type=='Mustard - Soft Tactile'">
                <?php say("swtch-switchDiagram-Cherry-1Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw_type=='Olive - Linear'">
                    <?php say("swtch-switchDiagram-Cherry-2Alpha-Zulu")?>
            </div>
          </div>
          <div ng-if="selector_sw=='Das Keyboard - Gamma-Zulu'">
            <div ng-if="selector_sw_type=='Soft Tactile'">
                <?php say("swtch-switchDiagram-Cherry-1Gamma-Zulu")?>
            </div>
          </div>
        </td>
      <td>
        <div ng-if="selector_sw2=='Cherry'">
          <div ng-if="selector_sw_type2=='Blue - Clicky'">
                <?php say("swtch-switchDiagram-Cherry-1")?>
          </div>
          <div ng-if="selector_sw_type2=='Brown - Soft Tactile'">
                <?php say("swtch-switchDiagram-Cherry-2")?>
          </div>
        </div>
          
          <div ng-if="selector_sw2=='Das Keyboard - Alpha-Zulu'">
            <div ng-if="selector_sw_type2=='Mustard - Soft Tactile'">
                <?php say("swtch-switchDiagram-Cherry-1Alpha-Zulu")?>
            </div>
            <div ng-if="selector_sw_type2=='Olive - Linear'">
                    <?php say("swtch-switchDiagram-Cherry-2Alpha-Zulu")?>
            </div>
          </div>
          <div ng-if="selector_sw2=='Das Keyboard - Gamma-Zulu'">
            <div ng-if="selector_sw_type2=='Soft Tactile'">
                <?php say("swtch-switchDiagram-Cherry-1Gamma-Zulu")?>
            </div>
          </div>
      </td>
    </tr>

  </tbody><!--End of Table Body -->
  </table>
  </div>
      <!-- Main Content end-->
</div>

<audio id="soundBrown" src="/sound/typing-experience-soft-cherry-mp3.mp3"></audio>
<audio id="soundBlue" src="/sound/typing-experience-click-cherry-mp3.mp3"></audio>
<audio id="soundBrown" src="/sound/typing-experience-soft-greetech-mp3.mp3"></audio>
<audio id="soundBlue" src="/sound/typing-experience-click-greetech-mp3.mp3"></audio>
<audio id="soundOlive" src="/sound/typing-experience-olive-alphaZulu.m4a"></audio>
<audio id="soundMustard" src="/sound/typing-experience-yellow-alphaZulu.m4a"></audio>
<audio id="gammaZulu" src="/sound/gammaZulu_soft_tactile.mp3"></audio>
<!-- Content End -->
<?php include_once '../footer.php' ?>
