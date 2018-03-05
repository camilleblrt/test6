

//we load the function in Jquery to display when page is set.
document.addEventListener("DOMContentLoaded", function (event) {
  $(window).load(function () {
    var slidingDiv = document.getElementById("sliderSidebar");
    var headerSidebarDiv = document.getElementById("headerSidebar");
    var sidebarDiv = document.getElementById("sidebar");
    var stopPosition = -(parseInt(headerSidebarDiv.clientHeight) - parseInt(sidebarDiv.clientHeight));
    slidingDiv.style.bottom = stopPosition + "px";
    if (typeof (Storage) !== "undefined") {
      if (sessionStorage["PopupShown"] != 'yes') {
        open_panel();
      }
    }

  });

});
/*
------------------------------------------------------------
Function to activate form button to open the slider.
------------------------------------------------------------
*/
function open_panel() {
  slideIt();
  var a = document.getElementById("sidebar");
  a.setAttribute("id", "sidebar");
  a.setAttribute("onclick", "close_panel()");
}
/*
------------------------------------------------------------
Function to slide the sidebar form (open form)
------------------------------------------------------------
*/
function slideIt() {
  var slidingDiv = document.getElementById("sliderSidebar");
  var stopPosition = 123;
  if (parseInt(slidingDiv.style.bottom) < stopPosition) {
    slidingDiv.style.bottom = parseFloat(slidingDiv.style.bottom) + 4 + "px";
    setTimeout(slideIt, 1);
  }
}
/*
------------------------------------------------------------
Function to activate form button to close the slider.
------------------------------------------------------------
*/
function close_panel() {
  slideIn();
  a = document.getElementById("sidebar");
  a.setAttribute("id", "sidebar");
  a.setAttribute("onclick", "open_panel()");
  if (typeof (Storage) !== "undefined") {
    sessionStorage["PopupShown"] = 'yes';
  }
}
/*
------------------------------------------------------------
Function to slide the sidebar form (slide in form)
------------------------------------------------------------
*/
function slideIn() {
  var slidingDiv = document.getElementById("sliderSidebar");
  var headerSidebarDiv = document.getElementById("headerSidebar");
  var sidebarDiv = document.getElementById("sidebar");

  // var stopPosition = -42;
  var stopPosition = -(parseInt(headerSidebarDiv.clientHeight) - parseInt(sidebarDiv.clientHeight));
  if (parseInt(slidingDiv.style.bottom) > stopPosition) {
    slidingDiv.style.bottom = (parseFloat(slidingDiv.style.bottom) - 4) + "px";
    setTimeout(slideIn, 1);
  }
}