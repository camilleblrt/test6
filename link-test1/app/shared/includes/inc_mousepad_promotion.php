<?php
        //Create a Pop Up panel made top promote D0
?>
<style type="text/css">
#promoModal .modal-content{
  background-color: rgb(15,15,15);
  background-image:url(../../shared/images/d0_promo.png);
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
  font-size: 25px;
  text-transform : capitalize;
  display: block;
  color: #EEE;
  margin-top: 15px;
  font-weight: bolder;
}
.d0-name{
  font-size: 60px;
  color:#AA1317;
  text-transform : capitalize;
  display: block;
  font-family: "Division Zero";

}
/*#promoModal .yes-now{
  opacity: 1;
  border-radius: 0;
  background-color: #AB0D18;
   border: rgb(191, 23, 34) solid 1px;
   color: #DDD;
}
#promoModal .yes-now:hover{
  opacity: 1;
  background-color: rgb(186, 24, 29);
}*/
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
            <img class="img-responsive center-block"  src="../../shared/images/mousepad_promo.png" style="max-width:100%; margin-bottom:-8%;"></img>
        </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-lg not-now" data-dismiss="modal">LATER</button>
          <a href="http://shop.daskeyboard.com/collections/products/products/division-zero-x40-pro-gaming-mechanical-keyboard" type="button" class="btn btn-lg not-now2" >BUY NOW</a>
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


 <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id=modal-test>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">.col-md-4</div>
          <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
          <div class="col-md-2 col-md-offset-4">.col-md-2 .col-md-offset-4</div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
        </div>
        <div class="row">
          <div class="col-sm-9">
            Level 1: .col-sm-9
            <div class="row">
              <div class="col-xs-8 col-sm-6">
                Level 2: .col-xs-8 .col-sm-6
              </div>
              <div class="col-xs-4 col-sm-6">
                Level 2: .col-xs-4 .col-sm-6
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
