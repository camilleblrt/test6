<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">


.d0-claim{
  font-size: 20px;
  font-weight: lighter;
  text-transform : capitalize;
  display: block;
  color: #EEE;
  text-shadow: 0px 0px 3px black;
  margin-top: 15px;



}
.d0-name{
  font-size: 50px;
  color:#c10916;
  text-transform : capitalize;
  display: block;
  text-shadow: 0px 0px 3px black;
  font-family: "Division Zero";

}
#promoModal btn:visited{
    text-decoration: none;
}

#promoModal .btn:hover{
  background-color:#727272;
  color:#EEE;
}
</style>
 <div class="" id="promoBanner" style="background-image:url(../../images/d0_promo.png); background-size:cover">
   <div class="">
     <div class="" >
       <div class="promoBody" >
         <div class="closeContainer">
           <button type="button" class="close close-banner" aria-label="Close">&times;</span></button>
         </div>
         <div class="row">
           <div class="text-center" >
             <h2>
               Our New Gaming Line is Out !
           </h2>
             <div class="text-center">
                 <div class="text-center">
                   <span class="d0-name">
                     Division Zero
                   </span>
                   <span class="d0-claim">
                     For Gamers to Dominate
                   </span>
               </div>
             </div>
           </div>
           <div class="col-lg-12 col-sm-12 text-center" >
             <img src="../../images/d0_promo-keyboard.png" style="max-height:100%;margin-bottom: 4%;"></img>
           </div>

         </div>
         <div class="row button-row">
           <div class="hidden-xs col-sm-3  col-md-6" style="display:block;">

           </div>
           <div class="col-xs-12 col-sm-4 col-md-3 text-center">
             <button type="button" class="btn btn-special text-center close-banner">Not now</button>
           </div>
           <div class="col-xs-12 col-sm-4 col-md-3 text-center">
             <a href="http://www.divisionzerogaming.com"<button type="submit" id="d0-redirect" class="btn btn-special btn-color text-center">Check this </button>
           </div>
         </div>
       </div>

     </div>
   </div>
 </div>
 <script type="text/javascript">
 //we load the function in Jquery to display when page is set.
  document.addEventListener("DOMContentLoaded", function(event){
                                                   $(window).load(function(){
                                                      $("#promoBanner").slideDown(700);
                                                  var to_close = document.getElementsByClassName("close-banner");
                                                  for(var n=0; n< to_close.length; n++){
                                                    to_close[n].onclick = function () {
                                                            $("#promoBanner").slideUp(400);
                                                          };
                                                  }

                                   });
</script>
