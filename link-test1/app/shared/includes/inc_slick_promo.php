<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
 .modal-content{
     background-color:black;

 }
.modal img {
  width:100%;
}
.modal-body {
  padding:0px;
}
#promoModal btn:visited{
    text-decoration: none;
}
#promoModal .close:hover{
  opacity: .8;

}
#promoModal .close{
  color: #EEE;
  opacity: .5;
}
#promoModal .not-now{
  opacity: .2;
   border-radius: 0;
   border: #BCBCBA solid 1px;
   color: #121212;
}
#promoModal .not-now:hover{
       color:white;
}
#promoModal .not-now2:hover{

    background-color: #D20514;
}
#promoModal .not-now2{
  opacity: 0.999;/* THIS IS A WEIRD TRICK : for any reason, navigators wont show the button if the opacity is set to 1 or not set. */
  border-radius: 0;
  background-color: #AB0D18;
   border: rgb(191, 23, 34) solid 1px;
   color: #DDD;
}
</style>

<div class="modal fade" tabindex="-1" role="dialog" id="promoModal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
 
      <div class="modal-body">
        <img src="/shared/images/slick-popup.jpg" />
      </div><!-- end of the body -->
      <div class="modal-footer">
         <button type="button" class="btn btn-lg not-now" data-dismiss="modal">LATER</button>
          <a href="http://shop.daskeyboard.com/collections/products/products/division-zero-x40-pro-gaming-mechanical-keyboard" type="button" class="btn btn-lg not-now2" >BUY NOW</a>
       </div><!-- end of the footer -->
    </div><!-- end of the content -->
  </div><!-- end of the modal dialog -->
</div><!-- end of the modal -->
<script type="text/javascript">

 document.addEventListener("DOMContentLoaded", function(event){
                                                  $(window).load(function(){
                                                      $('#promoModal').modal('show');
                                                      });
                                                    });


 </script>
