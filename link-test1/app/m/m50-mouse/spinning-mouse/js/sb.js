//google analytics 
/*var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-35339424-1']);
_gaq.push(['_trackPageview']);
(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();*/

if (document.addEventListener) {
 window.addEventListener('load', isWebGlSupported);
}else if(document.attachEvent){

 window.attachEvent('onload', isWebGlSupported);
}

if (navigator.userAgent.match(/iPad/i)) {
    var spinImage = "spin2high";
} else {
    var spinImage = "spin";
}

function isWebGlSupported() {
    var canvasSupported = !!window.HTMLCanvasElement;
    var context = null;
    var ua = navigator.userAgent.toLowerCase();
    var isAtLeastIE10 = (navigator.userAgent.match(/Trident\/[6]/i)); //test IE10;
    if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)) { //test for MSIE x.x;
        var ieversion = new Number(RegExp.$1) // capture x.x portion and store as a number
        if (ieversion >= 9 || ieversion >= 8) var IeUser = true;
    }
    if (ieversion >= 7 || ieversion >= 6 || ieversion >= 5) {
        canvasSupported = false;
    }
    if (canvasSupported) {
        var canvas = document.getElementById("superblaze-canvas");
        var names = ["webgl", "experimental-webgl", "webkit-3d", "moz-webgl"];
        for (var ii = 0; ii < names.length; ++ii) {
            try {
                context = canvas.getContext(names[ii], {
                    antialias: true,
                    depth: true,
                    alpha: false
                });
            } catch (e) {}
            if (context) {
                break;
            }
        }
        canvasSupported = !!(window.WebGLRenderingContext && context);
    }
    if (canvasSupported) {
        addLoader();
        SuperblazeStart(context);
        if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPad') != -1) || (navigator.userAgent.indexOf('iPod') != -1)) {
            $("#zoomSliderContainer").css("display", "none");
            $(".ui-slider-handle").css("display", "none");
            $("#resetButton").css("display", "none");
        }else{
            scene.forceAA(true);
        }
    } else {
        $("#superblaze").html(spinHTML);
        initSlider();
        if (navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(
                /iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
            var w = 0.75;
            $("#superblaze").css({
                'transform': 'scale(' + w + ')',
                '-webkit-transform': 'scale(' + w + ')',
                '-webkit-transform-origin': 'left',
                '-moz-transform': 'scale(' + w + ')',
                '-moz-transform-origin': 'left',
                '-o-transform': 'scale(' + w + ')',
                '-o-transform-origin': 'left',
                '-ms-transform': 'scale(' + w + ')',
                '-ms-transform-origin': 'left'
            });
            if (navigator.userAgent.match(/iPad/i)) {
                var wi = 1;
                $("#sliderframe").css({
                    'left': '120px',
                    'top': '50px',
                    'transform': 'scale(' + wi + ')',
                    '-webkit-transform': 'scale(' + wi + ')',
                    '-webkit-transform-origin': 'left',
                    '-moz-transform': 'scale(' + wi + ')',
                    '-moz-transform-origin': 'left',
                    '-o-transform': 'scale(' + wi + ')',
                    '-o-transform-origin': 'left',
                    '-ms-transform': 'scale(' + wi + ')',
                    '-ms-transform-origin': 'left'
                });
            }
        }
        initDragCursorSpin();
    }
}

function addLoader() {
    $('#loader').css('display', 'block');
    $('#loader').html('<image src="images_gl/loaderblock.png" /><div id="loaderbar" style="position:absolute; left:380px; top:0; height:528px; width:1px; overflow:hidden;"><image src="images_gl/loaderbar.png" /></div>');
}
var spinHTML = '<img src="../images/spin/M50_12.jpg" id="sliderframe" /><div class="transbox"><div class="loadtext" id="loadingText">Loading</div><div class="bar" id="loaderBar" ></div></div><div class="rotateLeft" ><a href="javascript:void(0)" id="leftButton"><img style="border:none" src="./interface_images/spin_arrow_left.png" /></a></div><div class="rotateRight" ><a href="javascript:void(0)" id="rightButton" ><img style="border:none" src = "./interface_images/spin_arrow_right.png" /></a></div><div class="thumbHolder" ><div class="shotSelector"><!-- --></div><a href="javascript:void(0)" id="link1"><img src="../images/spin/M50_11.jpg" id="tb1" class="thumbnail" style="display: block;" /></a><a href="javascript:void(0)" id="link2"><img src="../images/spin/M50_11.jpg" id="tb2" class="thumbnail" style="display: block;" /></a><a href="javascript:void(0)" id="link3"><img src="../images/spin/M50_11.jpg" id="tb3" class="thumbnail" style="display: block;" /></a><a href="javascript:void(0)" id="link4"><img src="../images/spin/M50_11.jpg" id="tb4" class="thumbnail" style="display: block;" /></a><a href="javascript:void(0)" id="link5"><img src="../images/spin/M50_11.jpg" id="tb5" class="thumbnail" style="display: block;" /></a></div>';

var firstTimeBTN = 0;
function mobileImags() {
            
    if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPad') != -1) || (navigator.userAgent.indexOf('iPod') != -1)) {
        if (firstTimeBTN == 0) {			
			$('#resetButtonMO').css('visibility', 'visible');
            firstTimeBTN = 1;
        }
		$('#resetButton').css('display', 'none');
        //if (document.addEventListener) {
            //document.getElementById("mobileOrangeBtn").addEventListener("touchstart", changeToOrangeMobile, false);
           // document.getElementById("mobileGreyBtn").addEventListener("touchstart", changeToGreyMobile, false);
           // document.getElementById("mobileBrownBtn").addEventListener("touchstart", changeToBrownMobile, false);
        //}
    }
}



var dragCursor;
var curBrowser = BrowserDetect.browser;
// IE doesn't support co-ordinates
var cursCoords = (curBrowser == "Explorer") ? "" : " 4 4";

function initDragCursorSpin() {
    handOpenSpin();
    $('#sliderframe').mousedown(function() {
        handClosedSpin();
    });
    $('body').mouseup(function() {
        handOpenSpin();
    });
}

function handClosedSpin() {
    dragCursor = (curBrowser == "Firefox") ? "-moz-grabbing" : "url(images_gl/closedhand.cur)" + cursCoords + ", move";
    // Opera doesn't support url cursors and doesn't fall back well...
    if (curBrowser == "Opera") dragCursor = "move";
    $('#sliderframe').css("cursor", dragCursor);
}

function handOpenSpin() {
    dragCursor = (curBrowser == "Firefox") ? "-moz-grab" : "url(images_gl/openhand.cur)" + cursCoords + ", move";
    $('#sliderframe').css("cursor", dragCursor);
}

function getCanvasSupported() {
    return canvasSupported;
}