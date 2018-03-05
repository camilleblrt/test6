var blaze3d_normalize = function(pt) {
    var d = Math.sqrt((pt[0] * pt[0]) + (pt[1] * pt[1]) + (pt[2] * pt[2]));
    if (d == 0) return [0, 0, 0];
    return [pt[0] / d, pt[1] / d, pt[2] / d];
}
var blaze3d_dp = function(v1, v2) {
    return v1[0] * v2[0] + v1[1] * v2[1] + v1[2] * v2[2];
}

function MatrixGetX(m) {
    return [m[0], m[1], m[2]];
}

function MatrixGetY(m) {
    return [m[4], m[5], m[6]];
}

function MatrixGetZ(m) {
    return blaze3d_normalize([0 - m[0], 0 - m[1], 0 - m[2]]);
}

function MatrixGetPos(m) {
    return [m[0], m[1], m[2]];
}

function MatrixRotationAxis(fAngle, fX, fY, fZ) {
    var s = Math.sin(fAngle);
    var c = Math.cos(fAngle);
    var x = fX;
    var y = fY;
    var z = fZ;
    var mOut = Array();
    mOut[0] = x * x * (1 - c) + c;
    mOut[4] = x * y * (1 - c) - (z * s);
    mOut[8] = x * z * (1 - c) + (y * s);
    mOut[12] = 0;
    mOut[1] = y * x * (1 - c) + (z * s);
    mOut[5] = y * y * (1 - c) + c;
    mOut[9] = y * z * (1 - c) - (x * s);
    mOut[13] = 0;
    mOut[2] = z * x * (1 - c) - (y * s);
    mOut[6] = z * y * (1 - c) + (x * s);
    mOut[10] = z * z * (1 - c) + c;
    mOut[14] = 0.0;
    mOut[3] = 0.0;
    mOut[7] = 0.0;
    mOut[11] = 0.0;
    mOut[15] = 1.0;
    return mOut;
}

function MatrixMultiply(mA, mB) {
        var mRet = Array();
        // Perform calculation on a dummy matrix (mRet)
        mRet[0] = mA[0] * mB[0] + mA[1] * mB[4] + mA[2] * mB[8] + mA[3] * mB[12];
        mRet[1] = mA[0] * mB[1] + mA[1] * mB[5] + mA[2] * mB[9] + mA[3] * mB[13];
        mRet[2] = mA[0] * mB[2] + mA[1] * mB[6] + mA[2] * mB[10] + mA[3] * mB[14];
        mRet[3] = mA[0] * mB[3] + mA[1] * mB[7] + mA[2] * mB[11] + mA[3] * mB[15];
        //
        mRet[4] = mA[4] * mB[0] + mA[5] * mB[4] + mA[6] * mB[8] + mA[7] * mB[12];
        mRet[5] = mA[4] * mB[1] + mA[5] * mB[5] + mA[6] * mB[9] + mA[7] * mB[13];
        mRet[6] = mA[4] * mB[2] + mA[5] * mB[6] + mA[6] * mB[10] + mA[7] * mB[14];
        mRet[7] = mA[4] * mB[3] + mA[5] * mB[7] + mA[6] * mB[11] + mA[7] * mB[15];
        //
        mRet[8] = mA[8] * mB[0] + mA[9] * mB[4] + mA[10] * mB[8] + mA[11] * mB[12];
        mRet[9] = mA[8] * mB[1] + mA[9] * mB[5] + mA[10] * mB[9] + mA[11] * mB[13];
        mRet[10] = mA[8] * mB[2] + mA[9] * mB[6] + mA[10] * mB[10] + mA[11] * mB[14];
        mRet[11] = mA[8] * mB[3] + mA[9] * mB[7] + mA[10] * mB[11] + mA[11] * mB[15];
        //
        mRet[12] = mA[12] * mB[0] + mA[13] * mB[4] + mA[14] * mB[8] + mA[15] * mB[12];
        mRet[13] = mA[12] * mB[1] + mA[13] * mB[5] + mA[14] * mB[9] + mA[15] * mB[13];
        mRet[14] = mA[12] * mB[2] + mA[13] * mB[6] + mA[14] * mB[10] + mA[15] * mB[14];
        mRet[15] = mA[12] * mB[3] + mA[13] * mB[7] + mA[14] * mB[11] + mA[15] * mB[15];
        return mRet
    }
    //////////////
function onResetCameraClick() {
    autoRotate();
    $("#zoom_slider_bg").css("height", 0);
    $("#zoom_slider").slider("option", "value", 0);
    scene.gotoPos(0.0, 0.0, 0.0, 0.0, 0.0, 20);
    scene.clearRefine();
    //scene.reset();	
}

function on360() {
    clearCurrentOverlay();
    g_navEnabled = true;
    //_normalAnim = false;
    //allowScreenAnim = false;
    scene.clearRefine();
}

function fullScreenPressed() {
    scene.toggleFullScreen();
}

function _initFlash() {
    scene = document.getElementById('superblazeFlash');
    //console.log("_initFlash"+scene);
}

function coordsToCentered($x, $y) {
        var x = (($x / 900) * 2) - 1;
        var y = ((-$y / 506) * 2) + 1;
        return [x, y];
    }
    //var sld;
    //var sld2;
    // Fixed SuperBlaze Function triggered once
var panOffButton;
var panOnButton;
var panLabel;
var rotateLabel;
var allowScreenAnim = true;
var currentColour = "onActive";
var swaps = [{
    type: "materialSwap",
    onActive: "glow_logo_mat_g_logo_color",
    offActive: "glow_logo_off"
}];

function changeColour(newColour) {
    if (newColour != currentColour) {
        for (var i = 0; i < swaps.length; i++) {
            if (swaps[i].type == "materialSwap") {
                if (swaps[i][currentColour] != swaps[i][newColour]) {
                    //setTimeout(function(){scene.materialReplace(swaps[i][currentColour], swaps[i][newColour]);},i*10);//stagger the swaps
                    scene.materialReplace(swaps[i][currentColour], swaps[i][newColour]);
                }
            } else if (swaps[i].type == "visible") {
                scene.instanceSet(swaps[i].name, "visible", swaps[i][newColour]);
            }
        }
        currentColour = newColour;
    }
    scene.clearRefine();
}

function NowOffPressed() {
    animationStop();
    if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPad') != -1) || (navigator.userAgent.indexOf('iPod') != -1)) {
    		document.getElementById("heartBeatsActivateMO").style.visibility = "hidden";
		    document.getElementById("offDeactivateMO").style.visibility = "hidden";
		    document.getElementById("onActivateMO").style.visibility = "visible";
    	}else{
    		document.getElementById("heartBeatsActivate").style.visibility = "hidden";
		    document.getElementById("offDeactivate").style.visibility = "hidden";
		    document.getElementById("onActivate").style.visibility = "visible";
    	}
    scene.instanceSet("_1", "visible", false);
    scene.instanceSet("int_1", "visible", false);
    for (var i = 1; i <= 20; i++) {
        scene.instanceSet("_" + i, "visible", false);
    }
    for (var i = 1; i <= 19; i++) {
        scene.instanceSet("r_" + i, "visible", false);
        scene.instanceSet("L_" + i, "visible", false);
    }
    oneTimeFlag = true;
    scene.clearRefine();
    animationStop();
    changeColour("offActive");
}

function NowOnPressed() {
	if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPad') != -1) || (navigator.userAgent.indexOf('iPod') != -1)) {
    		document.getElementById("heartBeatsActivateMO").style.visibility = "visible";
		    document.getElementById("offDeactivateMO").style.visibility = "hidden";
		    document.getElementById("onActivateMO").style.visibility = "hidden";
    	}else{
    		document.getElementById("heartBeatsActivate").style.visibility = "visible";
		    document.getElementById("offDeactivate").style.visibility = "hidden";
		    document.getElementById("onActivate").style.visibility = "hidden";
    	}
    for (var i = 1; i <= 20; i++) {
        scene.instanceSet("_" + i, "visible", true);
    }
    for (var i = 1; i <= 20; i++) {
        scene.instanceSet("r_" + i, "visible", true);
        scene.instanceSet("L_" + i, "visible", true);
    }
    scene.clearRefine();
    animationStop();
    changeColour("onActive");
}
var parFlag = false;
var animPlay = false;
var oneTimeFlag = true;
var myObj = 0;

function animationPlay() {
    if (oneTimeFlag) {
    	if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPad') != -1) || (navigator.userAgent.indexOf('iPod') != -1)) {
    		document.getElementById("heartBeatsActivateMO").style.visibility = "hidden";
		    document.getElementById("offDeactivateMO").style.visibility = "visible";
		    document.getElementById("onActivateMO").style.visibility = "hidden";
    	}else{
    		document.getElementById("heartBeatsActivate").style.visibility = "hidden";
		    document.getElementById("offDeactivate").style.visibility = "visible";
		    document.getElementById("onActivate").style.visibility = "hidden";
    	}
        
        scene.gotoPos(1.8, 0.1, 0.0, 0.0, 0.0, 10);
        for (var i = 1; i <= 20; i++) {
            scene.animPlay("_" + i, 1, 45);
            scene.animPlay("r_" + i, 1, 45);
            scene.animPlay("L_" + i, 1, 45);
        }
        parFlag = true;
        animPlay = true;
        oneTimeFlag = false;
        scene.clearRefine();
    }
}

function animationStop() {
        animPlay = false;
        oneTimeFlag = true;
        for (var i = 1; i <= 20; i++) {
            scene.animPlay("_" + i, 0, 1);
        }
        for (var i = 1; i <= 16; i++) {
            scene.animPlay("r_" + i, 0, 1);
            scene.animPlay("L_" + i, 0, 1);
        }
        scene.stop;
    }
    //
    //-----------var overlay0;
    //-----------var overlayimage0;
    //-----------var overlay1;
    //-----------var overlayimage1;
    //-----------var overlay2;
    //-----------var overlayimage2;
    //-----------var overlay3;
    //-----------var overlayimage3;
    //-----------var overlay4;
    //-----------var overlayimage4;
    //-----------var overlay5;
    //-----------var overlayimage5;
    //-----------var overlays;
    /*var power;
    var powerBtn;
    var viewFinder;
    var viewFinderBtn;*/
var backscreen;
var screenBtn;
var flash;
var flashBtn;
/*var currentColour = "black";

var swaps = [
{type:"materialSwap",
black:"screen_aura_env_lambert1",
grey:"screen_mat_env_screen_mat"},
{type:"materialSwap",
black:"",
grey:""}
];

function changeToBlack()
{
	changeColour("black");
}
function changeToGrey()
{
	changeColour("grey");
}

function changeColour(newColour)
{
	if (newColour != currentColour)
	{
		for (var i=0; i < swaps.length; i++)
		{
			if (swaps[i].type == "materialSwap")
			{
				if(swaps[i][currentColour] != swaps[i][newColour]){
					//setTimeout(function(){scene.materialReplace(swaps[i][currentColour], swaps[i][newColour]);},i*10);//stagger the swaps
					scene.materialReplace(swaps[i][currentColour], swaps[i][newColour]);
				}
			}

			else if (swaps[i].type == "visible")
			{
				scene.instanceSet(swaps[i].name, "visible", swaps[i][newColour]);
			}

		}
		currentColour  = newColour;
	}

	scene.clearRefine();
}*/
function onInitFlash() {
    /*flash  = scene.createImage("flash", "images_gl/up.png");
	if (flash) flashBtn = scene.placeImage(flash, coordsToCentered(838, 71), 1, [0,0], "flashFPressed" , "onflashRollover", "onflashRollout");
	flashDown  = scene.createImage("flash", "images_gl/up_rollOver.png");
	if (flashDown) flashDownBtn = scene.placeImage(flashDown, coordsToCentered(838, 71), 1, [0,0], "flashFPressed", "onflashRollover", "onflashRollout");
	scene.imageSet(flashBtn, "alpha", 1);
	scene.imageSet(flashDownBtn, "alpha", 0);
	
	flash1  = scene.createImage("flash1", "images_gl/down.png");
	if (flash1) flashBtn1 = scene.placeImage(flash1, coordsToCentered(838, 140), 1, [0,0], "flashF1Pressed" , "onflash1Rollover", "onflash1Rollout");
	flashDown1  = scene.createImage("flash1", "images_gl/down_rollOver.png");
	if (flashDown1) flashDownBtn1 = scene.placeImage(flashDown1, coordsToCentered(838, 140), 1, [0,0], "flashF1Pressed", "onflash1Rollover", "onflash1Rollout");
	scene.imageSet(flashBtn1, "alpha", 0);
	scene.imageSet(flashDownBtn1, "alpha", 1);
	
	reset  = scene.createImage("reset", "images_gl/reset_up.png");
	if (reset) resetBtn = scene.placeImage(reset, coordsToCentered(837, 448), 1, [0,0], "onResetCameraClick" , "onResetRollover", "onResetRollout");
	resetDown  = scene.createImage("reset", "images_gl/reset_down.png");
	if (resetDown) resetDownBtn = scene.placeImage(resetDown, coordsToCentered(837, 448), 1, [0,0], "onResetCameraClick", "onResetRollover", "onResetRollout");
	scene.imageSet(resetDownBtn , "alpha", 0);
	
	scene.addZoomSlider(coordsToCentered(837, 292));
	scene.imageSet(resetBtn, "alpha", 1);*/
}
var flash = false;

function _uiSetFlash() {
    flash = true;
}

function onInit() {
    var curBrowser = BrowserDetect.browser;
    if (flash) {
        onInitFlash();
    }
    //scene.imageSet(resetDownBtn, "alpha", 0);
    scene.instanceSet("lense", "visible", true);
    scene.instanceSet("gp_lens", "visible", true);
    //scene.setParam("nav.mindist", 0.5);
    //scene.setParam("nav.maxdist", -1.0);
    scene.setParam("nav.mindistrotationrate", 0.035);
    scene.setParam("nav.maxdistrotationrate", 0.1);
    var allowZoomChange = true;
    autoRotate();
}
/* auto rotate */
var yPos = 0;
var yEnd = 300;
var yStarted = false;
var yLevel = 0;

var yStep = [2];
var ySpeed = [15];

function autoRotate(){
        if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPod') != -1)) {
         // no rotation 
        }
        else
        {
            yPos = 0;
            //console.log('rotate');
            if (!yStarted)
                autoRotateRequest();
        }

}
function autoRotateStop() {
        yPos = yEnd;
}   
function autoRotateRequest() {
        setTimeout(function() {
                yStarted = true;
                yPos += 0.5;
                var mpos = [ 0.0, 0.0 ];
                var mdelta = [yStep[yLevel],0.0];
              if (NavRotation(mpos, mdelta))
                    scene.clearRefine();
    
            if (yPos < yEnd && mdown != true) {
                if (yPos > yEnd - 5) yPos = 0;
                autoRotateRequest();
                }
            else
                yStarted = false;
        }, ySpeed[yLevel]);
 }

function showScene() {
    //console.log("showing scene");
    $("#scenediv").css("visibility", "visible");
    scene.gotoPos(0.0, 0.0, 0.0, 0.0, 0.0, 1);
    $("#zoom_slider").slider("option", "value", 0);
    if ((navigator.userAgent.indexOf("iPhone") != -1) || ((navigator.userAgent.indexOf("Android") != -1) && (navigator.userAgent.indexOf("Mobile") != -1)) || (navigator.userAgent.indexOf('iPad') != -1) || (navigator.userAgent.indexOf('iPod') != -1)) {
        mobileImags();
    }else{
        $("#zoomSliderContainer").css("visibility", "visible");
        $("#resetButton").css("visibility", "visible");
    }
    
    //ShowNextImage();
}
var panNav = false;
var debugMode = false; // always set this to false for the producton version !
var debugMenu = [{
    label: "Output Position",
    handler: "outputMatrixAndPan",
    viewMatrix: "",
    viewPan: "",
    tip: "this is the tipitem1",
    tipx: 0,
    tipy: 0
}];
var initialised = 0;

function onEnterFrame() {
        //console.log("hot_battery_closed: "+hot_battery_closed);
        _normalAnim = false;
        if (initialised == 0) {
            initialised = 1;
        }
    }
    // Fixed SuperBlaze Function triggered every frame
function onExitFrame() {}
var lastMatrix; // matrix of 9 
var lastPan; // array 
// handlers for clicks on the menu 
function outputMatrixAndPan() {
    // this function is only used in test mode to aquire panning info , should be copy pasted into the array above
    //console.log('{label:"xxx",handler:"menuItemClicked" , viewMatrix:"'+scene.getViewMatrix()+'",viewPan:"'+[g_navPan[0],g_navPan[1]]+'",tip:"xxxx",tipx:0,tipy:0}');	
}

function onHideMenu() {
    //console.log("Menu hiding");
    if (g_navEnabled) toggleControls(true); // dont toggle 
}

function onShowMenu() {
    //console.log("Menu showing");
    // happens 
    toggleControls(false);
}

function onInitMenu() {
    //console.log("Menu onInit");
}

function toggleControls(on) {
    if (on) {
        //console.log("fade in controls");
        $("#zoomSliderContainer").fadeTo(1, 1);
        //have to do it twice due to a bug in jquery
        $("#zoom_slider").slider("option", "disabled", false);
        //$("#zoom_slider").disable();
        $("#screenSliderContainer").fadeTo(1, 1);
        $("#screen_slider").slider("option", "disabled", false);
        //$("#resetbutton").fadeTo(1,1);
        $("#infobut").fadeTo(1, 1);
    } else {
        //console.log("fade out controls");
        $("#zoomSliderContainer").fadeTo(1, 0.5);
        $("#zoom_slider").slider("option", "disabled", true);
        //$("#zoom_slider").disable();
        $("#screenSliderContainer").fadeTo(1, 0.5);
        $("#screen_slider").slider("option", "disabled", true);
        //$("#screen_slider").disable();
        //$("#resetbutton").fadeTo(1,0.5);
        $("#infobut").fadeTo(1, 0.5);
    }
}

function toggleUiVisible(on) {
    if (on) {
        $("#slider").show();
        $("#slider2").show();
        $("#panTog").show();
    } else {
        $("#slider").hide();
        $("#slider2").hide();
        $("#panTog").hide();
    }
}

function NavOnDoneAnim() {
    //scene.imageSet(overlayimage4, "alpha", 0);
    if (showTip) {
        //a first endpoint 
        showOverlay();
        showTip = false;
        if (twoStageAnim == false) {
            allowClick = true;
        }
    } else if (twoStageAnim == false) {
        // final position but this is not a two stage
        clearCurrentOverlay();
        g_navEnabled = true; // this unlocks the navigation , can be found in ../SuperBlaze_Navigation.js 
        //ddMenu('one',-1); // ddropdown roll up
        //clearMenuHighlight();
        allowClick = true;
        toggleControls(true);
    } else {
        //this is sat in a final position of a two stage
        allowClick = true;
        twoStageAnim = false;
    }
    //console.log("heard anim finish aloowing click");
    //fade("feature");	
}; // defined in the ui javascript 
var menuItem;
var showTip = false;

function menuItemClicked(index) {
    //console.log("pressed menu item" + index);
    menuItem = menuData[index];
    if (menuItem) {
        switch (index) {
            case 1:
                scene.animPlay("screen", 0.5, 20) // halfway position
                break;
            case 10:
                scene.animPlay("screen", 1, 20) // close position
                break;
            default:
                scene.animPlay("screen", 0, 20) // the default open position 
        }
        /*
		if(index == 1){
			scene.animPlay("screen",0.5, 20);
		}else{
			scene.animPlay("screen", 0, 20);
		}*/
        var nmatrix = menuItem.viewMatrix.split(",");
        var npan = menuItem.viewPan.split(",");
        scene.gotoPos(nmatrix, 30);
        NavPanTo(npan, 30);
        if (menuItem.tip) {
            showTip = true;
        }
        $("#feature").fadeOut();
        if (!debugMode) g_navEnabled = false; // this locks the navigation found in Superblaze_Navigation.js
    }
    //clear the other backgrounds
    var i = 0;
    while (i < menuData.length) {
        var selector = "a#menu_item_" + i;
        if (i == index) {
            $(selector).addClass("highlight");
        } else {
            $(selector).removeClass("highlight");
        }
        i++;
    }
}
var overlayindex = -1; // the overlay that is shown
function clearCurrentOverlay() {
    if (overlayindex != -1 && overlays[overlayindex]) {
        scene.imageSet(overlays[overlayindex], "alpha", 0);
    }
}

function showOverlay() {
    if (overlayindex != -1) {
        scene.imageSet(overlays[overlayindex], "alpha", 1);
    }
}
var allowClick = true;

function preclick() {
    allowClick = false;
    //console.log("locked click");
    clearCurrentOverlay();
    showTip = true;
    g_navEnabled = false;
}
var twoStageAnim = false;