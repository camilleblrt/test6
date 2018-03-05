<?php
        //Create a Pop Up panel made top promote D0
        echo "<script> console.log('loaded promotion');</script>";
?>
<style type="text/css">
#promo-modal .modal-content{
  background-color: #FFF;
  background-image:url(../../images/dkbannerbg.png);
  background-size:cover;
}
#promo-modal .modal-header{
  border : none;
  /*margin-top: 25px;*/
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
display: block;

}
#promo-modal .modal-footer{
  border:none;
  margin-top: 0px;
  padding-top: 0px;
  /*margin-bottom: 15px;*/
}


#promo-modal btn:visited{
    text-decoration: none;
}
#promo-modal .not-now{

  opacity: .7;
  color:#FFF;
  background-color: #333;
}
#promo-modal .not-now:hover{
  opacity:1;
  color:#FFF;
}

#promo-modal .modal-content{
  border:  rgba(255, 255, 255, 0.1) solid 2px;
}
#promo-modal .btn-color{
  background: #9e0b0f;
}
#promo-modal .btn-color:hover{
  background: #b11e22;
}
.modal-big{
  text-transform: uppercase;
  letter-spacing: 5px;
  display:block;
  text-align:center;
  font-weight: bold;
  font-size: 42px;
  line-height: 30px;
  color:#333;
}
.modal-caption{
  margin-top: 10px;
  display:block;
  text-align: center;
  font-size: 22px;
}
.red{
  color:#9e0b0f;
}
</style>



<div class="modal fade" tabindex="-1" role="dialog" id="promo-modal">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <img class="img-responsive center-block"  src="../../images/dkbannertext.png"></img>
      </div>
      <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-special not-now">later</button>
          <a href="http://shop.daskeyboard.com/products/division-zero-m50-pro-gaming-mouse" type="button" class="btn btn-special btn-color" >buy now</a>
       </div>

      </div>
    </div>
  </div>
  <script type="text/javascript">
  //we load the function in Jquery to display when page is set.
   document.addEventListener("DOMContentLoaded", function(event){
                                                    $(window).load(function(){
                                                        $('#promo-modal').modal('show');
                                                        });
                                                      });


   </script>
