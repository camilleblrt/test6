<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
#promoModal .modal-content{
  background-color: rgb(15,15,15);
  background-image:url(../../shared/images/sling-promo-back.png);
  background-size:cover;
}
#promoModal .modal-header{
  border : none;
}
#promoModal .close:hover{
  opacity: .8;
}
#promoModal .close{
  color: #121212;
  opacity: .5;
}
#promoModal .modal-body{
  padding-top: 0px;
border:none;
}
#promoModal .modal-footer{
  border:none;
  margin-top: 0px;
  padding-top: 0px;
}
#promoModal btn:visited{
    text-decoration: none;
}
#promoModal .not-now{
  opacity: .5;
   border-radius: 0;
   border: #BCBCBA solid 1px;
   color: #DDD;
   background-color: #121212;
}
#promoModal .not-now:hover{
  opacity: .7;
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
}
#promoModal .modal-content{
  border:  rgba(255, 255, 255, 0.1) solid 2px;
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="promoModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
            <img class="img-responsive center-block"  src="shared/images/sling-promo.png" style="max-width:100%; margin-bottom:-8%;"></img>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-lg not-now" data-dismiss="modal">LATER</button>
          <a href="http://shop.daskeyboard.com/products/das-keyboard-gaming-sling" type="button" class="btn btn-lg not-now2" >BUY NOW</a>
       </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
//we load the function in Jquery to display when page is set.
 document.addEventListener("DOMContentLoaded", function(event){
                                                  $(window).load(function(){
                                                      $('#promoModal').modal('show');
                                                      });
                                                    });


 </script>
