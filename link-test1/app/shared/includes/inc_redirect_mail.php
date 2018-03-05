<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
#promoModal .modal-content{
  background-color: rgb(15,15,15);
  background-image:url(../../shared/images/d0_promo.png);
  background-size:cover;
}
#promoModal .modal-body a{
  color:inherit;
  font-weight: bolder;
}
#promoModal .modal-header{
  border : none;
}
#promoModal .close:hover{
  opacity: .8;
}
#promoModal .close{
  color: #EEE;
  opacity: .5;
}
#promoModal .modal-body{
border:none;


}
#promoModal .modal-footer{
  border:none;
}
.d0-claim{
  font-size: 25px;
  color: #EEE;
  margin-top: 15px;
  font-weight: lighter;
}
.d0-name{
  font-size: 60px;
  color:#AA1317;
  font-family: "Division Zero";

}

#promoModal btn:visited{
    text-decoration: none;
}
#promoModal .not-now{
  opacity: .999;
   border-radius: 0;
   border: #BCBCBA solid 1px;
   color: #121212;
}
#promoModal .not-now:hover{
  opacity: .4;
}
#promoModal .not-now2{
  opacity: 0.999;/* THIS IS A WEIRD TRICK : for any reason, navigators wont show the button if the opacity is set to 1 or not set. */
  border-radius: 0;
  background-color: #AB0D18;
   border: rgb(191, 23, 34) solid 1px;
   color: #DDD;
}
#promoModal .not-now2:hover{
  background-color: rgb(186, 24, 29);
}
#promoModal .modal-body h2{
  color:#EEE;
  margin-bottom: 15px;

}
#promoModal .modal-content{
  border:  rgba(255, 255, 255, 0.1) solid 2px;
    /*max-width: 800px;*/
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="promoModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
                <div class="text-center">
                  <h2>
                    <span class="d0-name">
                      APRIL FOOLS!!!
                    </span>
                </h2>
                <img class="img-responsive center-block"  src="../../shared/images/deadmouse.png" style="max-width:100%; margin-bottom:0%;"></img>
                  <div class="d0-claim">
                     You can still buy some of our
                     <a href="http://shop.daskeyboard.com/collections/products/products/division-zero-x40-pro-gaming-mechanical-keyboard">
                       amazing products
                     </a>
                     or register into our
                      <a href="http://eepurl.com/bN6Tsb">
                     April Fools contest
                     </a>
                     to win some goodies!
                    </div>
              </div>
            <!-- <img class="img-responsive center-block"  src="../../shared/images/trans_main2.png" style="max-width:100%; margin-bottom:0%;"></img> -->
      </div>
      <div class="modal-footer">
          <a href="http://eepurl.com/bN6Tsb"><button type="button" class="btn btn-lg not-now">GOODIES!</button></a>
          <a href="http://shop.daskeyboard.com/collections/products/products/division-zero-x40-pro-gaming-mechanical-keyboard" type="button" class="btn btn-lg not-now2" >SHOPPING!</a>
       </div>

      </div>
    </div>
  </div>
<script type="text/javascript">
//we load the function in Jquery to display when page is set.
 document.addEventListener("DOMContentLoaded", function(event){
                                                  $(window).load(function(){
                                                    $(".buy-button").click(function(){
                                                                          $('#promoModal').modal('show');
                                                                        });

                                                      });
                                                    });


 </script>
