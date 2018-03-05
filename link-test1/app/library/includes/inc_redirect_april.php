<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
#promo-modal .modal-content{
  background-color: #FFF;
  /*background-image:url(../../images/d0_promo.png);*/
  background-size:cover;
}
#promo-modal .modal-header{
  border : none;
}
#promo-modal .close:hover{
  opacity: .8;
}
#promo-modal .close{
  color: #666;
  opacity: .5;
}
#promo-modal .modal-body{
border:none;

}
#promo-modal .modal-footer{
  border:none;
}

.d0-claim{
  font-size: 20px;
  color: #666;
  margin-top: 15px;
}
.d0-claim .lighter{
  font-weight: lighter;
}
.d0-claim a{
  color:inherit;
  font-weight: bolder!important;
}
.d0-claim a:hover{
  color:inherit;
  font-weight: bolder!important;
  text-decoration: underline;
}


#promo-modal btn:visited{
    text-decoration: none;
}
#promo-modal .not-now{
  opacity: .7;
  color:#FFF;
  background-color: #666;
}
#promo-modal .btn:hover{
  opacity:1;
  color:#FFF;
}


#promo-modal .modal-body h2{
  color:#666;
  margin-bottom: 15px;

}
#promo-modal .modal-content{
  border:  rgba(255, 255, 255, 0.1) solid 2px;
}
</style>
<div class="modal fade" tabindex="-1" role="dialog" id="promo-modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
                <div class="text-center">
                  <h2>
                      APRIL FOOLS!
                </h2>
                <!-- <img class="img-responsive center-block"  src="../../shared/images/trans_main2.png" style="max-width:100%; margin-bottom:0%;"></img> -->
                <img class="img-responsive center-block"  src="../../daskeyboard-5/images/mcfly.gif" style="max-width:100%; margin-bottom:0%;"></img>
                  <div class="d0-claim">
                     <span class="lighter">You can still buy some of our</span>
                     <a href="http://shop.daskeyboard.com/collections/products/mechanical-keyboards">
                       amazing products
                     </a>
                     <span class="lighter">or register into our</span>
                      <a href="http://eepurl.com/YA97r ">
                     April Fools contest
                     </a>
                     <span class="lighter">to win some goodies!</span>
                    </div>
              </div>

      </div>
      <div class="modal-footer">
          <a href="http://eepurl.com/YA97r"><button type="button" class="btn btn-special not-now">GOODIES!</button></a>
          <a href="http://shop.daskeyboard.com/collections/products/mechanical-keyboards" type="button" class="btn btn-special btn-color" >SHOPPING!</a>
       </div>

      </div>
    </div>
  </div>
<script type="text/javascript">

//we load the function in Jquery to display when page is set.
 document.addEventListener("DOMContentLoaded", function(event){
                                                  $(window).load(function(){
                                                    $('.buy-button').click(function(){
                                                          $('#promo-modal').modal('show');
                                                        });
                                                      });
                                                    });


 </script>
