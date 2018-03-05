<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
#promoModal{
  width: auto;
}
#promoModal .modal-content{
  background-color: rgb(15,15,15);
  background-image:url(../../shared/images/independance-banner.jpg);
  background-size:cover;
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

#promoModal btn:visited{
    text-decoration: none;
}
#promoModal .not-now{
  opacity: .2;
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
  /*margin-bottom: 15px;*/
}
#promoModal .modal-content{
  border:  rgba(255, 255, 255, 0.1) solid 2px;
}

/*.red{
  color:#AB0D18;
    text-shadow:none;

}
.red:hover{
  color:#AB0D18;
  text-shadow:none;
}*/

</style>
<div class="modal fade" tabindex="-1" role="dialog" id="promoModal">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

            <img class="img-responsive center-block"  src="../../shared/images/independance-content.png" style="max-width:100%; "></img>
      </div>

      <div class="modal-footer">
          <button type="button" class="btn btn-lg not-now" data-dismiss="modal">LATER</button>
          <a href="http://shop.daskeyboard.com/collections/products/gaming-sale" type="button" class="btn btn-lg not-now2" >SHOP NOW</a>
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
