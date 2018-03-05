<?php
//Create a Pop Up panel made top promote D0
?>
  <style type="text/css">
    .btn-color {
      color: #fff !important;
      text-shadow: 0 1px #555 !important;
    }
    
    .btn-special {
      padding: 15px 30px;
      text-transform: uppercase;
      letter-spacing: 1px;
      font-weight: 700;
      outline: none;
      border-radius: 4px;
    }
    
    .btn-color,
    .subscribe-btn {
      background: #9e0b0f;
      background: -webkit-linear-gradient(#d12d32, #9e0b0f);
      background: -moz-linear-gradient(#d12d32, #9e0b0f);
      background: -o-linear-gradient(#d12d32, #9e0b0f);
      background: -ms-linear-gradient(#d12d32, #9e0b0f);
      background: linear-gradient(#d12d32, #9e0b0f);
      border: 1px solid #883436;
      -webkit-box-shadow: inset 0 1px 1px 0 #e28e90, 0 2px 0 -1px rgba(0, 0, 0, 0.2);
      /* box-shadow: inset 0 1px 1px 0 #e28e90, 0 2px 0 -1px rgba(0,0,0,0.2); */
      cursor: pointer;
    }
    
    #promoModal .modal-content {
      background-size: cover;
      background-image: url('/library/images/christmas.png');
    }
    
    #promoModal .modal-header {
      border: none;
    }
    
    #promoModal .close:hover {
      opacity: .8;
    }
    
    #promoModal .close {
      color: #EEE;
      opacity: .5;
    }
    
    #promoModal .modal-body {
      border: none;
    }
    
    #promoModal .modal-footer {
      border: none;
      padding-bottom: 30px;
    }
    
    .d0-claim {
      font-size: 50px;
      color: #FFF;
      text-transform: capitalize;
      display: block;
      /*font-family: "Division Zero";*/
    }
    
    .d0-name {
      font-size: 50px;
      color: #ff161c;
      text-transform: capitalize;
      display: block;
      /*font-family: "Division Zero";*/
    }
    
    .d0-title1 {
      font-size: 50px;
      color: #FFF;
      text-transform: capitalize;
      display: block;
    }
    
    #promoModal btn:visited {
      text-decoration: none;
    }
    
    #promoModal .not-now {
      opacity: .5;
    }
    
    #promoModal .btn:hover {
      opacity: 1;
      color: #606060;
    }
    
    #promoModal .modal-body h2 {
      color: #EEE;
      margin-bottom: 15px;
    }
    
    #promoModal .modal-content {
      border: rgba(255, 255, 255, 0.1) solid 2px;
    }
    
    #promoModal .modal-lg {
      /*width: 50%;*/
    }
    
    img {
      margin-bottom: 0% !important;
    }
    
    .Sidebar-style-1 {
      color: red;
      margin: 13px;
      font-size: 30px;
    }
    
    .Sidebar-style-2 {
      color: red;
      font-size: 30px;
    }
    
    #headerSidebar .row {
      margin-top: 28%;
      text-align: center;
    }
    
    #buy-now {
      color: white;
      background-color: #aa0114;
    }
    
    #buy-now a {
      color: white;
      text-decoration: none;
    }
    
    #MoreDeals {
      color: orange;
      background-color: white;
    }
    
    #headerSidebar a {
      color: white;
    }
    
    #MoreDeals a {
      color: orange;
    }
    
    #keyboardName {
      font-size: 21px;
    }
    #close-promo span{
      color: red;
    }
  </style>
  <div class="modal fade" tabindex="-1" role="dialog" id="promoModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button id="close-promo" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body text-center">
          <p class="Sidebar-style-1" id="keyboardName" style="margin-bottom:30px;"><b>Das Keyboard Holiday Sale</b></p>
          <p class="Sidebar-style-2" id="keyboardName" style="margin-bottom:30px;">Up to 30% off Select Models</p>
          <div id="clockdiv"></div>
        </div>
        <div class="modal-footer" style="text-align:center;">
          <button class="btn" id="buy-now"><a href="http://shop.daskeyboard.com/collections/black-friday-cyber-monday-deals" target="_blank">Shop Deals</a></button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    //we load the function in Jquery to display when page is set.
    document.addEventListener("DOMContentLoaded", function(event) {
      $(window).load(function() {
        if (typeof(Storage) !== "undefined") {
          if (sessionStorage["PopupShown"] != 'yes') {
            $('#promoModal').modal('show');

          }
        }

      });
      $('#promoModal').on('hidden.bs.modal', function(e) {
        if (typeof(Storage) !== "undefined") {
          sessionStorage["PopupShown"] = 'yes';
        }
      });
    });
  </script>