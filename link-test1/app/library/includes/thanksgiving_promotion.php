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
      background-color: black;
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
      color: orange;
      margin: 13px;
    }
    
    .Sidebar-style-2 {
      color: white;
    }
    
    #headerSidebar .row {
      margin-top: 28%;
      text-align: center;
    }
    
    #buy-now {
      color: white;
      background-color: orange;
      display: none;
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
    
    #clockdiv {
      font-size: 18px;
      color: white;
    }
  </style>
  <div class="modal fade" tabindex="-1" role="dialog" id="promoModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body text-center">
          <p class="Sidebar-style-1" id="keyboardName" style="margin-bottom:30px;"><b>BLACK FRIDAY & CYBER MONDAY</b></p>
          <p class="Sidebar-style-1" id="keyboardName" style="margin-bottom:30px;"><b>-SALE-</b></p>
          <div id="clockdiv"></div>
        </div>
        <div class="modal-footer" style="text-align:center;">
          <button class="btn" id="buy-now"><a href="http://shop.daskeyboard.com/collections/black-friday-cyber-monday-deals" target="_blank">SHOP NOW</a></button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    };

    function pluralize_date(word, number) {

      if (number <= 0) {
        return "";
      }
      if (number == 1) {
        return number + word + " ";
      }
      if (number > 0) {
        return number + word + "s ";
      }


    };

    function initializeClock(id, endtime) {
      var clock = document.getElementById(id);
      var timeinterval = setInterval(function() {
        var t = getTimeRemaining(endtime);

        clock.innerHTML = 'Available in ' + pluralize_date(' day', t.days) + pluralize_date(' hour', t.hours) + pluralize_date(' minute', t.minutes) + pluralize_date(' second', t.seconds);
        if (t.total <= 0) {
          clearInterval(timeinterval);
          clock.style.display = 'none';
          document.getElementById('buy-now').style.display = 'inline-block';
        }
      }, 1000);
    };
    //we load the function in Jquery to display when page is set.
    document.addEventListener("DOMContentLoaded", function(event) {
      $(window).load(function() {
        if (typeof(Storage) !== "undefined") {
          if (sessionStorage["PopupShown"] != 'yes') {
            var deadline = 'November 24 2016 17:00:00 GMT-0600';
            initializeClock('clockdiv', deadline);
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