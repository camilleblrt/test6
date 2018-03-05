<style>
  #sliderSidebar {
    width: 20%;
    height: 52%;
    position: fixed;
    bottom: 0px;
    left: 50px;
  }
  
  #headerSidebar {
    width: 100%;
    height: 100%;
    padding: 20px 40px;
    border-radius: 3px;
    background: url("/library/images/background-sidebar.png");
    background-size: 100%;
    background-repeat: no-repeat;
    background-color: black;
  }
  
  #sidebar {}
  
  #sidebar1 {}
  
  @media (max-width: 768px) {
    #sliderSidebar {
    width: 75%;
    height: 67%;
    }
  }
  /* Small devices (tablets, 768px and up) */
  
  @media (min-width: 768px) {
    #sliderSidebar {
    width: 65%;
    height: 67%;
    }
  }
  /* Medium devices (desktops, 992px and up) */
  
  @media (min-width: 992px) {
    #sliderSidebar {
      width: 35%;
      height: 45%;
    }
  }
  /* Large devices (large desktops, 1200px and up) */
  
  @media (min-width: 1200px) {
    #sliderSidebar {
      width: 20%;
      height: 52%;
    }
  }
  
  .Sidebar-style-1 {
    color: orange;
   
    margin:13px;
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
  
  }
  #MoreDeals{
    color: orange;
    background-color: white;
  }
  
  #headerSidebar a {
    color: white;
    
  }
    #MoreDeals a{
    color: orange;
  }
  #keyboardName{
        font-size: 21px;
  }
</style>



<!-- Sliding div starts here -->
<div id="sliderSidebar" style="bottom: -42%;">
  <div id="sidebar" onclick="open_panel()"><img src="/library/images/top-sidebar.png" style="width: 100%;"></div>
  <div id="headerSidebar">
    <div class="row">
      <div class "col-xs-12">
        <h3 class="Sidebar-style-1"><strong>FEATURED<br>SPOOKY DEAL</strong></h3>
        <p class="Sidebar-style-2" id="keyboardName"><b>Revived Model S Gen 2 </b></p>
        <h3 class="Sidebar-style-1">ONLY $99</h3>
        <p class="Sidebar-style-2">Brand NEW <br>Limited Quanitites Available </p>
        <button class="btn" id="buy-now"><a href="http://shop.daskeyboard.com/products/revived-das-keyboard-model-s-gen-2" target="_blank">BUY NOW</a></button>&nbsp;
        <button id="MoreDeals" class="btn"><a href="http://shop.daskeyboard.com/collections/halloween-deals" target="_blank">More Deals</a></button>
      </div>
    </div>
  </div>
</div>
<script src="/library/js/sidebar-slider.js"></script>
<script type="text/javascript">
</script>
<!-- Sliding div ends here -->