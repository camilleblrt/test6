var imageBasePath = "../images/spin/M50";
var imageType = ".jpg";
var imageCount = 72;
var imageTarget = 0;
var imageSequence = [];
var imageSeqErr = [];
var imagesLoaded = 0;
var angVelocity = 0;
var friction = 0.94;
var forceAmplification = 2;
var currentAngle = 55;
var thumbAngs = [55, 90, 270, 180, 01];
var currentStepSize = 8;
var lastmousex = -1;
var mousetravel = 0;
var mousetimer = new Timer(null, 10);
var mouseAcceleration = 0;
var lastTime;
(function () {
    var b = 0;
    var c = ["ms", "moz", "webkit", "o"];
    for (var a = 0; a < c.length && !window.requestAnimationFrame; ++a) {
        window.requestAnimationFrame = window[c[a] + "RequestAnimationFrame"];
        window.cancelAnimationFrame = window[c[a] + "CancelAnimationFrame"] || window[c[a] + "CancelRequestAnimationFrame"]
    }
    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function (h, e) {
            var d = new Date().getTime();
            var f = Math.max(0, 16 - (d - b));
            var g = window.setTimeout(function () {
                h(d + f)
            }, f);
            b = d + f;
            return g
        }
    }
    if (!window.cancelAnimationFrame) {
        window.cancelAnimationFrame = function (d) {
            clearTimeout(d)
        }
    }
}());

function initSlider() {
    if (document.addEventListener) {
        document.getElementById("sliderframe").addEventListener("mousedown", onMousebtClick, false);
        document.addEventListener("mouseup", onMousebtRelease, false);
        document.getElementById("sliderframe").addEventListener("mousemove", mouseTrack, false);
        document.getElementById("sliderframe").addEventListener("touchstart", onTouchStart, false);
        document.getElementById("sliderframe").addEventListener("touchend", onTouchEnd, false);
		document.getElementById("sliderframe").addEventListener("touchstart", onTouchStart, false);
        document.getElementById("sliderframe").addEventListener("touchend", onTouchEnd, false);
        document.getElementById("sliderframe").addEventListener("touchmove", onTouchMove, false);		
        document.addEventListener("mouseout", onMousebtRelease, false);
        document.getElementById("leftButton").addEventListener("touchstart", onPressLeft, false);
        document.getElementById("rightButton").addEventListener("touchstart", onPressRight, false);
        document.getElementById("leftButton").addEventListener("touchend", onReleaseRotate, false);
        document.getElementById("rightButton").addEventListener("touchend", onReleaseRotate, false);
        document.getElementById("leftButton").addEventListener("mousedown", onPressLeft, false);
        document.getElementById("rightButton").addEventListener("mousedown", onPressRight, false);
        document.getElementById("leftButton").addEventListener("mouseup", onReleaseRotate, false);
        document.getElementById("rightButton").addEventListener("mouseup", onReleaseRotate, false);
    } else {
        if (document.attachEvent) {
            document.attachEvent("onmousedown", onMousebtClick);
            document.attachEvent("onmouseup", onMousebtRelease);
            document.attachEvent("onmousemove", mouseTrack);
            document.attachEvent("ondragstart", function () {
                return false
            });
            document.getElementById("leftButton").attachEvent("onmousedown", onPressLeft, false);
            document.getElementById("rightButton").attachEvent("onmousedown", onPressRight, false);
            document.getElementById("leftButton").attachEvent("onmouseup", onReleaseRotate, false);
            document.getElementById("rightButton").attachEvent("onmouseup", onReleaseRotate, false)
        }
    }
    preloadImages(currentStepSize)
}

function onPressLeft(a) {
    if (a.preventDefault) {
        a.preventDefault();
        a.stopPropagation()
    } else {
        a.returnValue = false;
        a.cancelBubble = true
    }
    onRotPress(-2)
}

function onPressRight(a) {
    if (a.preventDefault) {
        a.preventDefault();
        a.stopPropagation()
    } else {
        a.returnValue = false;
        a.cancelBubble = true
    }
    onRotPress(2)
}

function onReleaseRotate(a) {
    buttonTracking = false
}

function onRotPress(a) {
    $(".shotSelector").fadeOut();
    trackMouse = false;
    buttonAngleAmount = a;
    buttonTracking = true
}

function Timer(b, a) {
    var c = time = new Date(b || null).valueOf(),
        a = a || 100;
    setInterval(function () {
        time += a
    }, a);
    this.elapsed = function () {
        return time - c
    };
    this.getDate = function () {
        return new Date(time)
    }
}

function mouseTrack(d) {
    var c = mousetimer.elapsed();
    var a = c - lastTime;
    if (d.touchX) {
        var b = d.touchX
    } else {
        if (d.pageX) {
            var b = d.pageX
        } else {
            var b = d.clientX
        }
    } if (lastmousex > -1) {
        mousetravel = (b - lastmousex)
    }
    if (mousetravel != 0 && a > 0) {
        mouseAcceleration = mousetravel / (c - lastTime)
    } else {
        mouseAcceleration = 0
    }
    lastmousex = b;
    lastTime = c
}

function QueueImageLoad(d) {
    var a = imageBasePath + "_" + (d + 1) + imageType;
    var b = loadImage(a);
    imageSequence[d] = b;
    for (var c = 0; c < imageCount; c++) {
        var e = Math.abs(d - c);
        if (Math.abs((d + imageCount) - c) < e) {
            e = Math.abs((d + imageCount) - c)
        }
        if (Math.abs(d - (c + imageCount)) < e) {
            e = Math.abs(d - (c + imageCount))
        }
        if (e < imageSeqErr[c]) {
            imageSeqErr[c] = e;
            imageSequence[d] = b
        }
    }
    imageTarget++
}

function preloadImages(b) {
    if (imageSequence.length == 0) {
        for (var c = 0; c < imageCount; c++) {
            imageSequence.push(null);
            imageSeqErr.push(-1000000)
        }
        var a = Math.round(currentAngle / (360 / imageCount));
        QueueImageLoad(a);
        for (var c = 1; c < 5; c++) {
            a = Math.round(thumbAngs[c] / (360 / imageCount));
            QueueImageLoad(a)
        }
    }
    var c = 0;
    while (c < imageCount) {
        if (imageSequence[c] == null) {
            QueueImageLoad(c)
        }
        c += b
    }
}

function loadImage(a) {
    var b = new Image();
    if (b.addEventListener) {
        b.addEventListener("load", imageLoaded, false);
        b.addEventListener("error", imageError, false)
    } else {
        if (b.attachEvent) {
            b.attachEvent("onload", imageLoaded, false);
            b.attachEvent("onerror", imageError, false)
        }
    }
    b.src = a;
    return b
}

function imageLoaded() {
    imagesLoaded++;
    var a = (imagesLoaded / imageTarget) * 660;
    var b = Math.round((imagesLoaded / imageTarget) * 100);
    $(".bar").css("width", a + "px");
    if (imagesLoaded >= imageTarget) {
        $(".thumbHolder").css("visibility", "visible");
        $(".transbox").css("display", "none");
        onLoadedImages()
    }
}

function imageError() {}
var deg_inc;

function onLoadedImages() {
    deg_inc = 360 / imageCount;
    populateThumbs();
    mainLoop();
    if (currentStepSize != 1) {
        currentStepSize /= 2;
        preloadImages(currentStepSize)
    }
}

function populateThumbs() {
    var c = 1;
    while (c < 6) {
        var a = Math.round(thumbAngs[c - 1] / deg_inc);
        var d = imageSequence[a];
        var b = (document.addEventListener);
        if (d != undefined) {
            if (b) {
                document.getElementById("link" + c).addEventListener("mousedown", pressThumb, false);
                document.getElementById("link" + c).addEventListener("touchstart", pressThumb, false)
            } else {
                document.getElementById("link" + c).attachEvent("onmousedown", pressThumb)
            }
            $("#tb" + c).attr("src", d.src)
        }
        c++
    }
}

function pressThumb(b) {
    if (b.preventDefault) {
        b.preventDefault();
        b.stopPropagation()
    } else {
        b.returnValue = false;
        b.cancelBubble = true
    }
    target = (b.target) ? b.target : b.srcElement;
    var a = 0;
    switch (target.id) {
    case "tb1":
        a = 0;
        break;
    case "tb2":
        a = 1;
        break;
    case "tb3":
        a = 2;
        break;
    case "tb4":
        a = 3;
        break;
    case "tb5":
        a = 4;
        break
    }
    $(".shotSelector").fadeIn();
    goAngle(thumbAngs[a]);
    var c = a * 132;
    $(".shotSelector").animate({
        left: c
    }, 1000, function () {})
}
var trackMouse = false;

function onTouchStart(a) {
    if (a.preventDefault) {
        a.preventDefault();
        a.stopPropagation()
    } else {
        a.returnValue = false;
        a.cancelBubble = true
    }
    trackMouse = true
}

function onTouchEnd(a) {
    if (a.preventDefault) {
        a.preventDefault();
        a.stopPropagation()
    } else {
        a.returnValue = false;
        a.cancelBubble = true
    }
    trackMouse = false
}

function onTouchMove(b) {
    if (b.preventDefault) {
        b.preventDefault();
        b.stopPropagation()
    }
    var a;
    if (b.targetTouches[0] != undefined) {
        a = b.targetTouches[0].pageX
    } else {
        a = b.touches[0].pageX
    }
    b.touchX = a;
    mouseTrack(b)
}

function onMousebtClick(a) {
    $("body").css("cursor", "pointer");
    $("#leftButton").fadeOut();
    $("#rightButton").fadeOut();
    $(".shotSelector").fadeOut();
    if (a.preventDefault) {
        a.preventDefault()
    } else {
        a.returnValue = false
    } if (!a.which) {
        var a = window.event;
        if (a.button == 1) {
            a.which = 1
        }
    }
    switch (a.which) {
    case 1:
        trackMouse = true;
        break
    }
}

function fadeIn() {
    if (!trackMouse) {
        $("#leftButton").fadeIn();
        $("#rightButton").fadeIn()
    }
}

function onMousebtRelease(a) {
	handOpenSpin();
    setTimeout("fadeIn()", 2000);
    $("body").css("cursor", "default");
    if(navigator.userAgent.indexOf('MSIE') !== -1) {
        trackMouse = false;
        return;
     }
    if (a.preventDefault) {
        a.preventDefault()
    } else {
        a.returnValue = false
    } if (!a.which) {
        var a = window.event;
        if (a.button == 1) {
            a.which = 1
        }
    }
    switch (a.which) {
    case 1:
        trackMouse = false;
        break
    }
}
var goingToTargetAngle = false;
var targetAngle = -1;
var autoTracking = false;
var buttonTracking = false;

function goAngle(a) {
    $("#leftButton").fadeOut();
    $("#rightButton").fadeOut();
    autoTracking = true;
    if ((currentAngle - a + 360) % 360 > 180) {
        angVelocity = 2
    } else {
        angVelocity = -2
    }
    targetAngle = a
}

function mainLoop() {
    if (!autoTracking && !buttonTracking) {
        if (trackMouse && mouseAcceleration != 0) {
            angVelocity = mouseAcceleration * forceAmplification
        } else {
            if (angVelocity != 0) {
                angVelocity *= friction
            }
        }
        currentAngle += angVelocity
    } else {
        if (!buttonTracking && autoTracking) {
            var h = currentAngle + angVelocity;
            var g = targetAngle + angVelocity * 2;
            var d = targetAngle - angVelocity * 2;
            var e = Math.max(g, d) + 360;
            var b = Math.min(g, d) + 360;
            var c = h + 360;
            if (c < e && c > b) {
                currentAngle = targetAngle;
                angVelocity = 0;
                autoTracking = false;
                $("#leftButton").fadeIn();
                $("#rightButton").fadeIn()
            } else {
                currentAngle = h
            }
        } else {
            currentAngle += buttonAngleAmount
        }
    } if (currentAngle > 360) {
        currentAngle = currentAngle - 360
    } else {
        if (currentAngle < 0) {
            currentAngle = currentAngle + 360
        }
    }
    var a = Math.round(currentAngle / deg_inc);
    var f = imageSequence[a];
    if (f != undefined && f != $("#sliderframe").attr("src")) {
        $("#sliderframe").attr("src", f.src)
    }
    if (requestAnimationFrame) {
        requestAnimationFrame(mainLoop)
    } else {
        setTimeout("mainLoop()", 10)
    }
};