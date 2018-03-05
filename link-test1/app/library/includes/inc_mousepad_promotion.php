<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
#promoModal .modal-content{
  background-color: black;
  background-image:url(../../images/d0_promo.png);
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
.d0-claim{
  font-size: 20px;
  font-weight: lighter;
  text-transform : capitalize;
  display: block;
  color: #EEE;
  margin-top: 15px;
}
.d0-name{
  font-size: 50px;
  color:#AA1317;
  text-transform : capitalize;
  display: block;
  font-family: "Division Zero";

}

#promoModal btn:visited{
    text-decoration: none;
}
#promoModal .not-now{
  opacity: .5;

}
#promoModal .btn:hover{
  opacity:1;
  color:#606060;
}


#promoModal .modal-body h2{
  color:#EEE;
  margin-bottom: 15px;

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
        <div class="row" style="">
          <div class="text-center" >
            <h2>
              <span class="d0-name">
                Division Zero
              </span>
          </h2>
            <div class="text-center">
                <div class="text-center">

                  <div class="d0-claim">
                    BUY A KEYBOARD NOW, GET A FREE MOUSEPAD!
                  </div>
              </div>
            </div>
          </div>
            <img class="img-responsive center-block"  src="../../images/mousepad_promo.png" style="max-width:100%; margin-bottom :-10%;"></img>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-special not-now" data-dismiss="modal">later</button>
          <a href="http://shop.daskeyboard.com/collections/products/products/division-zero-x40-pro-gaming-mechanical-keyboard"><button type="button" id="d0-redirect" class="btn btn-special btn-color">buy now!</button></a>
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
