Vector3 = function(x, y, z) {
    this.x = x || 0;
    this.y = y || 0;
    this.z = z || 0;
};
Vector3.prototype = {
    constructor: Vector3,
    set: function(x, y, z) {
        this.x = x;
        this.y = y;
        this.z = z;
        return this;
    },
    setX: function(x) {
        this.x = x;
        return this;
    },
    setY: function(y) {
        this.y = y;
        return this;
    },
    setZ: function(z) {
        this.z = z;
        return this;
    },
    setComponent: function(index, value) {
        switch (index) {
            case 0:
                this.x = value;
                break;
            case 1:
                this.y = value;
                break;
            case 2:
                this.z = value;
                break;
            default:
                throw new Error('index is out of range: ' + index);
        }
    },
    getComponent: function(index) {
        switch (index) {
            case 0:
                return this.x;
            case 1:
                return this.y;
            case 2:
                return this.z;
            default:
                throw new Error('index is out of range: ' + index);
        }
    },
    copy: function(v) {
        this.x = v.x;
        this.y = v.y;
        this.z = v.z;
        return this;
    },
    add: function(v, w) {
        if (w !== undefined) {
            console.warn('Vector3: .add() now only accepts one argument. Use .addVectors( a, b ) instead.');
            return this.addVectors(v, w);
        }
        this.x += v.x;
        this.y += v.y;
        this.z += v.z;
        return this;
    },
    addScalar: function(s) {
        this.x += s;
        this.y += s;
        this.z += s;
        return this;
    },
    addVectors: function(a, b) {
        this.x = a.x + b.x;
        this.y = a.y + b.y;
        this.z = a.z + b.z;
        return this;
    },
    sub: function(v, w) {
        if (w !== undefined) {
            console.warn('Vector3: .sub() now only accepts one argument. Use .subVectors( a, b ) instead.');
            return this.subVectors(v, w);
        }
        this.x -= v.x;
        this.y -= v.y;
        this.z -= v.z;
        return this;
    },
    subVectors: function(a, b) {
        this.x = a.x - b.x;
        this.y = a.y - b.y;
        this.z = a.z - b.z;
        return this;
    },
    multiply: function(v, w) {
        if (w !== undefined) {
            console.warn('Vector3: .multiply() now only accepts one argument. Use .multiplyVectors( a, b ) instead.');
            return this.multiplyVectors(v, w);
        }
        this.x *= v.x;
        this.y *= v.y;
        this.z *= v.z;
        return this;
    },
    multiplyScalar: function(scalar) {
        this.x *= scalar;
        this.y *= scalar;
        this.z *= scalar;
        return this;
    },
    multiplyVectors: function(a, b) {
        this.x = a.x * b.x;
        this.y = a.y * b.y;
        this.z = a.z * b.z;
        return this;
    },
    applyEuler: function() {
        var quaternion;
        return function(euler) {
            if (euler instanceof Euler === false) {
                console.error('Vector3: .applyEuler() now expects a Euler rotation rather than a Vector3 and order.');
            }
            if (quaternion === undefined) quaternion = new Quaternion();
            this.applyQuaternion(quaternion.setFromEuler(euler));
            return this;
        };
    }(),
    applyAxisAngle: function() {
        var quaternion;
        return function(axis, angle) {
            if (quaternion === undefined) quaternion = new Quaternion();
            this.applyQuaternion(quaternion.setFromAxisAngle(axis, angle));
            return this;
        };
    }(),
    applyMatrix3: function(m) {
        var x = this.x;
        var y = this.y;
        var z = this.z;
        var e = m.elements;
        this.x = e[0] * x + e[3] * y + e[6] * z;
        this.y = e[1] * x + e[4] * y + e[7] * z;
        this.z = e[2] * x + e[5] * y + e[8] * z;
        return this;
    },
    applyMatrix4: function(m) {
        // input: Matrix4 affine matrix
        var x = this.x,
            y = this.y,
            z = this.z;
        var e = m.elements;
        this.x = e[0] * x + e[4] * y + e[8] * z + e[12];
        this.y = e[1] * x + e[5] * y + e[9] * z + e[13];
        this.z = e[2] * x + e[6] * y + e[10] * z + e[14];
        return this;
    },
    applyProjection: function(m) {
        // input: Matrix4 projection matrix
        var x = this.x,
            y = this.y,
            z = this.z;
        var e = m.elements;
        var d = 1 / (e[3] * x + e[7] * y + e[11] * z + e[15]); // perspective divide
        this.x = (e[0] * x + e[4] * y + e[8] * z + e[12]) * d;
        this.y = (e[1] * x + e[5] * y + e[9] * z + e[13]) * d;
        this.z = (e[2] * x + e[6] * y + e[10] * z + e[14]) * d;
        return this;
    },
    applyQuaternion: function(q) {
        var x = this.x;
        var y = this.y;
        var z = this.z;
        var qx = q.x;
        var qy = q.y;
        var qz = q.z;
        var qw = q.w;
        // calculate quat * vector
        var ix = qw * x + qy * z - qz * y;
        var iy = qw * y + qz * x - qx * z;
        var iz = qw * z + qx * y - qy * x;
        var iw = -qx * x - qy * y - qz * z;
        // calculate result * inverse quat
        this.x = ix * qw + iw * -qx + iy * -qz - iz * -qy;
        this.y = iy * qw + iw * -qy + iz * -qx - ix * -qz;
        this.z = iz * qw + iw * -qz + ix * -qy - iy * -qx;
        return this;
    },
    transformDirection: function(m) {
        // input: Matrix4 affine matrix
        // vector interpreted as a direction
        var x = this.x,
            y = this.y,
            z = this.z;
        var e = m.elements;
        this.x = e[0] * x + e[4] * y + e[8] * z;
        this.y = e[1] * x + e[5] * y + e[9] * z;
        this.z = e[2] * x + e[6] * y + e[10] * z;
        this.normalize();
        return this;
    },
    divide: function(v) {
        this.x /= v.x;
        this.y /= v.y;
        this.z /= v.z;
        return this;
    },
    divideScalar: function(scalar) {
        if (scalar !== 0) {
            var invScalar = 1 / scalar;
            this.x *= invScalar;
            this.y *= invScalar;
            this.z *= invScalar;
        } else {
            this.x = 0;
            this.y = 0;
            this.z = 0;
        }
        return this;
    },
    min: function(v) {
        if (this.x > v.x) {
            this.x = v.x;
        }
        if (this.y > v.y) {
            this.y = v.y;
        }
        if (this.z > v.z) {
            this.z = v.z;
        }
        return this;
    },
    max: function(v) {
        if (this.x < v.x) {
            this.x = v.x;
        }
        if (this.y < v.y) {
            this.y = v.y;
        }
        if (this.z < v.z) {
            this.z = v.z;
        }
        return this;
    },
    clamp: function(min, max) {
        // This function assumes min < max, if this assumption isn't true it will not operate correctly
        if (this.x < min.x) {
            this.x = min.x;
        } else if (this.x > max.x) {
            this.x = max.x;
        }
        if (this.y < min.y) {
            this.y = min.y;
        } else if (this.y > max.y) {
            this.y = max.y;
        }
        if (this.z < min.z) {
            this.z = min.z;
        } else if (this.z > max.z) {
            this.z = max.z;
        }
        return this;
    },
    clampScalar: (function() {
        var min, max;
        return function(minVal, maxVal) {
            if (min === undefined) {
                min = new Vector3();
                max = new Vector3();
            }
            min.set(minVal, minVal, minVal);
            max.set(maxVal, maxVal, maxVal);
            return this.clamp(min, max);
        };
    })(),
    floor: function() {
        this.x = Math.floor(this.x);
        this.y = Math.floor(this.y);
        this.z = Math.floor(this.z);
        return this;
    },
    ceil: function() {
        this.x = Math.ceil(this.x);
        this.y = Math.ceil(this.y);
        this.z = Math.ceil(this.z);
        return this;
    },
    round: function() {
        this.x = Math.round(this.x);
        this.y = Math.round(this.y);
        this.z = Math.round(this.z);
        return this;
    },
    roundToZero: function() {
        this.x = (this.x < 0) ? Math.ceil(this.x) : Math.floor(this.x);
        this.y = (this.y < 0) ? Math.ceil(this.y) : Math.floor(this.y);
        this.z = (this.z < 0) ? Math.ceil(this.z) : Math.floor(this.z);
        return this;
    },
    negate: function() {
        this.x = -this.x;
        this.y = -this.y;
        this.z = -this.z;
        return this;
    },
    dot: function(v) {
        return this.x * v.x + this.y * v.y + this.z * v.z;
    },
    lengthSq: function() {
        return this.x * this.x + this.y * this.y + this.z * this.z;
    },
    length: function() {
        return Math.sqrt(this.x * this.x + this.y * this.y + this.z * this.z);
    },
    lengthManhattan: function() {
        return Math.abs(this.x) + Math.abs(this.y) + Math.abs(this.z);
    },
    normalize: function() {
        return this.divideScalar(this.length());
    },
    setLength: function(l) {
        var oldLength = this.length();
        if (oldLength !== 0 && l !== oldLength) {
            this.multiplyScalar(l / oldLength);
        }
        return this;
    },
    lerp: function(v, alpha) {
        this.x += (v.x - this.x) * alpha;
        this.y += (v.y - this.y) * alpha;
        this.z += (v.z - this.z) * alpha;
        return this;
    },
    cross: function(v, w) {
        if (w !== undefined) {
            console.warn('Vector3: .cross() now only accepts one argument. Use .crossVectors( a, b ) instead.');
            return this.crossVectors(v, w);
        }
        var x = this.x,
            y = this.y,
            z = this.z;
        this.x = y * v.z - z * v.y;
        this.y = z * v.x - x * v.z;
        this.z = x * v.y - y * v.x;
        return this;
    },
    crossVectors: function(a, b) {
        var ax = a.x,
            ay = a.y,
            az = a.z;
        var bx = b.x,
            by = b.y,
            bz = b.z;
        this.x = ay * bz - az * by;
        this.y = az * bx - ax * bz;
        this.z = ax * by - ay * bx;
        return this;
    },
    projectOnVector: function() {
        var v1, dot;
        return function(vector) {
            if (v1 === undefined) v1 = new Vector3();
            v1.copy(vector).normalize();
            dot = this.dot(v1);
            return this.copy(v1).multiplyScalar(dot);
        };
    }(),
    projectOnPlane: function() {
        var v1;
        return function(planeNormal) {
            if (v1 === undefined) v1 = new Vector3();
            v1.copy(this).projectOnVector(planeNormal);
            return this.sub(v1);
        }
    }(),
    reflect: function() {
        // reflect incident vector off plane orthogonal to normal
        // normal is assumed to have unit length
        var v1;
        return function(normal) {
            if (v1 === undefined) v1 = new Vector3();
            return this.sub(v1.copy(normal).multiplyScalar(2 * this.dot(normal)));
        }
    }(),
    angleTo: function(v) {
        var theta = this.dot(v) / (this.length() * v.length());
        // clamp, to handle numerical problems
        return Math.acos(Math.clamp(theta, -1, 1));
    },
    distanceTo: function(v) {
        return Math.sqrt(this.distanceToSquared(v));
    },
    distanceToSquared: function(v) {
        var dx = this.x - v.x;
        var dy = this.y - v.y;
        var dz = this.z - v.z;
        return dx * dx + dy * dy + dz * dz;
    },
    setEulerFromRotationMatrix: function(m, order) {
        console.error('Vector3: .setEulerFromRotationMatrix() has been removed. Use Euler.setFromRotationMatrix() instead.');
    },
    setEulerFromQuaternion: function(q, order) {
        console.error('Vector3: .setEulerFromQuaternion() has been removed. Use Euler.setFromQuaternion() instead.');
    },
    getPositionFromMatrix: function(m) {
        console.warn('Vector3: .getPositionFromMatrix() has been renamed to .setFromMatrixPosition().');
        return this.setFromMatrixPosition(m);
    },
    getScaleFromMatrix: function(m) {
        console.warn('Vector3: .getScaleFromMatrix() has been renamed to .setFromMatrixScale().');
        return this.setFromMatrixScale(m);
    },
    getColumnFromMatrix: function(index, matrix) {
        console.warn('Vector3: .getColumnFromMatrix() has been renamed to .setFromMatrixColumn().');
        return this.setFromMatrixColumn(index, matrix);
    },
    setFromMatrixPosition: function(m) {
        this.x = m.elements[12];
        this.y = m.elements[13];
        this.z = m.elements[14];
        return this;
    },
    setFromMatrixScale: function(m) {
        var sx = this.set(m.elements[0], m.elements[1], m.elements[2]).length();
        var sy = this.set(m.elements[4], m.elements[5], m.elements[6]).length();
        var sz = this.set(m.elements[8], m.elements[9], m.elements[10]).length();
        this.x = sx;
        this.y = sy;
        this.z = sz;
        return this;
    },
    setFromMatrixColumn: function(index, matrix) {
        var offset = index * 4;
        var me = matrix.elements;
        this.x = me[offset];
        this.y = me[offset + 1];
        this.z = me[offset + 2];
        return this;
    },
    equals: function(v) {
        return ((v.x === this.x) && (v.y === this.y) && (v.z === this.z));
    },
    fromArray: function(array) {
        this.x = array[0];
        this.y = array[1];
        this.z = array[2];
        return this;
    },
    toArray: function() {
        return [this.x, this.y, this.z];
    },
    clone: function() {
        return new Vector3(this.x, this.y, this.z);
    }
};
function onZoomSlide(event,ui) {
    //var val = -20 * (ui.value/100);
    //console.log(ui.value);
    autoRotateStop();
    var val = ( (ui.value/40) * (g_navMinDolly - g_navMaxDolly) ) + g_navMaxDolly;
    //console.log(val);
    NavSetDolly(val);
    updateZoomBarBg(val);
    scene.clearRefine();
}

function updateZoomBarBg (newval) {
    var scale = -(navMinDolly - navMaxDolly);
    var val = -newval + navMaxDolly;
    $("#zoom_slider_bg").css("height", (val/scale)*100+"%");
}


function onReset() {
        //scene.reset();
        onResetCameraClick(); //in _ui.js
    }
    // initialise plugins
    /*jQuery(function(){
    			
    			jQuery('ul.sf-menu').superfish({
    				onBeforeShow :onShowMenu,
    				onHide: onHideMenu,
    				onInit: onInitMenu,
    				delay : 10
    			});
    			
    		});
    		$(document).ready(function() {
    		
    			$('#dropdownMenu .sf-menu li > ul').each(
    			function() {
    				//thisHeight = ;
    				thisHeight = $(this).height();
    				$(this).css('top', -thisHeight-1);    
    			}
    			);
    		});*/

var mouseIsDown = false;
var loopCtr = 0;
$(function($){

    $('#zoom_slider').slider({
        orientation: "vertical",
        value: 0,
        min : 0,
        max : 40,
        slide: onZoomSlide
    });
    $('nodrag').on('dragstart', function(event) { event.preventDefault(); });
    $('.nodrag').mousedown(function(){return false});


    $("zoomSliderContainer").mouseup(function(e) {
        clearInterval(mouseIsDown);
    }).mouseleave(function(e) {
        clearInterval(mouseIsDown);
     });
    $(document).mouseup(function(){
        clearInterval(mouseIsDown);
    });

    $('#zoomIn').mousedown(function(){
    autoRotateStop();
    loopCtr = 0;
    mouseIsDown = setInterval(function() { 
        loopCtr++;
        if (loopCtr < 35) 
        buttonsZoom(5); 
        else clearInterval(mouseIsDown);
    }, 50);
    }).mouseup(function() {
        clearInterval(mouseIsDown);
    });

    $('#zoomOut').mousedown(function(){
    autoRotateStop();
    loopCtr = 35;
    mouseIsDown = setInterval(function() { 
        loopCtr--;
        if (loopCtr > 0)
        buttonsZoom(-5);
        else clearInterval(mouseIsDown); 
    }, 50);
    }).mouseup(function() {
        clearInterval(mouseIsDown);
    });
});

/* -9 in updateZoomBar - interface updated */
function buttonsZoom(value) {
        //console.log(value);
        var delta = value;
        var deltaScene = (delta * 0.03) * (0.3);
        deltaScene = -deltaScene;
        if (NavSetDolly(g_navDolly + deltaScene)) {
            scene.clearRefine();
            updateZoomBar(g_navDolly);
            updateZoomBarBg(g_navDolly);
        }
}

/*
var zooming = 0;
var isZooimg;
var isPanning;
function onMouseDownZoom(ev){
    NavChangeDolly(zooming);
    scene.clearRefine();
}
function buttonsZoom(value) {
        var delta = value;
        var deltaScene = (delta * 0.03) * (0.3);
        deltaScene = -deltaScene;
        if (NavSetDolly(g_navDolly + deltaScene)) {
            scene.clearRefine();
            updateZoomBar(g_navDolly);
        }
}
$(document).ready(function() {
    var longpress = false;
    var startTime, endTime;
    $("#zoomIn").on('click', function (e) {
        if(g_navDolly <= -0.5) return;
        (longpress) ?  e.preventDefault() : onMouseDownZoom(zooming); g_navDolly += -0.2; buttonsZoom(5);console.log("clicked " + g_navDolly);
    });

    $("#zoomOut").on('click', function (e) {
        if(g_navDolly >= 0) return;
        (longpress) ?  e.preventDefault() : onMouseDownZoom(zooming); g_navDolly += 0.2; buttonsZoom(-5);console.log("clicked " + g_navDolly);
    });

    $("#zoomIn").on('mousedown', function () {startTime = new Date().getTime();
        if (endTime - startTime < 250) {
            longpress = true;
            var a = 0;
            var i = 0.2;
            isZooimg = setInterval(function(){
                if(g_navDolly <= -0.5) return;
                onMouseDownZoom(zooming);
                buttonsZoom(5);
                a = a+0.2;
                g_navDolly += -eval('i*a');
                console.log("down " + g_navDolly);
            }, 10);
        }
    });

    $("#zoomOut").on('mousedown', function () {startTime = new Date().getTime();
        if (endTime - startTime < 250) {
            longpress = true;
            var a = 0;
            var i = 0.2;
            isZooimg = setInterval(function(){
                if(g_navDolly >= 0) return;
                onMouseDownZoom(zooming);
                buttonsZoom(-5);
                a = a+0.2;
                g_navDolly += eval('i*a');
                console.log("down " + g_navDolly);
            }, 10);
        }
    });

    $("#zoomIn").on('mouseup', function () {endTime = new Date().getTime();longpress = false;clearInterval(isZooimg);});
    $("#zoomIn").on('mouseout', function () {endTime = new Date().getTime();longpress = false;clearInterval(isZooimg);});
    $("#zoomIn").on('mouseover', function () {endTime = new Date().getTime();longpress = false;clearInterval(isZooimg);});

    $("#zoomOut").on('mouseup', function () {endTime = new Date().getTime();longpress = false;clearInterval(isZooimg);});
    $("#zoomOut").on('mouseout', function () {endTime = new Date().getTime();longpress = false;clearInterval(isZooimg);});
    $("#zoomOut").on('mouseover', function () {endTime = new Date().getTime();longpress = false;clearInterval(isZooimg);});

            
});*/
//------------------------------------------------------
document.onselectstart = function() {
    return false;
};
var canvas = null,
    canvas2 = null;
var scene = null,
    scene2 = null;
var _scenePollInterval;
var outstandingJobs;
var totalJobs;
var canvasFocus=false;

function isSuperblazeReady() {
    $("#scenediv").css('visibility','visible'); 
    resizePage(window.parent.document.documentElement.clientWidth,window.parent.document.documentElement.clientHeight);
     
    //console.log("sceneready"+scene._outstandingjobs +" total jobs" + _totaljobs );
    if (scene) {
        totalJobs = scene.getTotalJobs();
        scene.start();
        outstandingJobs = scene.getOutstandingJobs();
        if (outstandingJobs <= 0 && scene._prepared) {
            onSuperBlazeReady();
            clearInterval(_scenePollInterval);
            setTimeout(function() {
               $("#loader").css("display", "none");
            }, 500);
            
            $(".ui-slider-handle").css("visibility", "visible");
        } else if (outstandingJobs <= 0) {
            $("#loaderText").html("");
        } else if(scene._projectparsed && scene._started){

            var newwidth = 182 * (outstandingJobs / totalJobs);
            //console.log(outstandingJobs+" outstandingJobs "+totalJobs+" totalJobs");
            //console.log("loaderbar setting width to"+ newwidth);
            $("#loaderbar").css("width", 182 - newwidth + "px");
            var perc = 100 - Math.round(outstandingJobs / totalJobs * 100);
            //$("#loaderText").html("");
        }
    }
}

function onSuperBlazeReady() {
    //console.log("superblaze ready");
    scene.gotoPos(-0.0001, 0.0, 0.0, 0.0, 0.0, 1);
    showScene();
}
var _totaljobs;
//function startSuperBlazeAfterDelay() {
//	setTimeout(function(gl) { SuperblazeStart(gl); },2000); // let the loader render 
//}
function SuperblazeStart(gl) {
    try {
        canvas = document.getElementById("superblaze-canvas");
        //console.log(canvas+"before scene creation");
        scene = new superblaze_scene(gl, "model_gl/", canvas.width, canvas.height);
        //console.log(scene+"after scene creation");
        totalJobs = scene.getTotalJobs();        
        _scenePollInterval = setInterval("isSuperblazeReady()", 50);
        NavInit(canvas.width, canvas.height);
        addMouseListeners(canvas);
         $(window.parent).resize(function(){
             resizePage(window.parent.document.documentElement.clientWidth,window.parent.document.documentElement.clientHeight);

        });
    } catch (e) {
        //console.log(e);
    }
    if (scene != null) {
        setInterval(frameUpdate, 25);
        window.addEventListener('focus', onWindowFocus, false);
        window.addEventListener('blur', onWindowBlur, false);
        $(this).bind("contextmenu",onRightClick);           //prevents a right click    
        //document.body.oncontextmenu = onRightClick;
        //window.addEventListener('oncontextmenu',onRightClick,false);
        if (typeof(onInit()) != 'undefined') onInit();
    }
    initDragCursor();
}
function resizePage(width,height) {
    var s;
    if (width > 940) {
        width=940;
    }
    if (height> 528) {
        height=528;
    }
    var w=eval(width/940);
    var h=eval(height/528);

    if(w<h){
      s=w;
  var div = document.getElementById ("superblaze-canvas");
        if (div.getBoundingClientRect) {
            var rect = div.getBoundingClientRect ();
        }else {
        }
    }
    else
    {
      s=h;
      var div = document.getElementById ("superblaze-canvas");
        if (div.getBoundingClientRect) {
            var rect = div.getBoundingClientRect ();
        }
        else {
        }
    }
    $("#superblaze").css({
        'transform': 'scale('+s+')',
        'transform-origin': '0% 0%',
        
        '-webkit-transform': 'scale('+s+')',
        '-webkit-transform-origin': '0% 0%',
        
         '-moz-transform': 'scale('+s+')',
        '-moz-transform-origin': '0% 0%',
        
         '-o-transform': 'scale('+s+')',
        '-o-transform-origin': '0% 0%',
        
         '-ms-transform': 'scale('+s+')',
        '-ms-transform-origin': '0% 0%',
    });
}
  /*function resizeScene(width){
        //console.log("resize scene");
        var w=eval(width/940);
        if(w>940){
            w = 940;
        }
        $("#scenediv").css({
        'transform': 'scale('+w+')',
        'transform-origin': '0% 0%',
        
        '-webkit-transform': 'scale('+w+')',
        '-webkit-transform-origin': '0% 0%',
        
         '-moz-transform': 'scale('+w+')',
        '-moz-transform-origin': '0% 0%',
        
         '-o-transform': 'scale('+w+')',
        '-o-transform-origin': '0% 0%',
        
         '-ms-transform': 'scale('+w+')',
        '-ms-transform-origin': '0% 0%',
         });
  }*/
  function resizeLoader(width){
    if(width>940){
            width = 940;
        }
    //console.log("resizeLoader");
     var w=eval(width/940);
        $("#loader").css({
        'transform': 'scale('+w+')',
        'transform-origin': '0% 0%',
        
        '-webkit-transform': 'scale('+w+')',
        '-webkit-transform-origin': '0% 0%',
        
         '-moz-transform': 'scale('+w+')',
        '-moz-transform-origin': '0% 0%',
        
         '-o-transform': 'scale('+w+')',
        '-o-transform-origin': '0% 0%',
        
         '-ms-transform': 'scale('+w+')',
        '-ms-transform-origin': '0% 0%',
         });
           
  }

  function resizeMob(){
        $("#scenediv").css({
        'transform': 'scale(.9)',
        'transform-origin': '0% 0%',
        
        '-webkit-transform': 'scale(.9)',
        '-webkit-transform-origin': '0% 0%',
        
         '-moz-transform': 'scale(.9)',
        '-moz-transform-origin': '0% 0%',
        
         '-o-transform': 'scale(.9)',
        '-o-transform-origin': '0% 0%',
        
         '-ms-transform': 'scale(.9)',
        '-ms-transform-origin': '0% 0%',
         });
  }

function addMouseListeners(canvas) {
    canvas.addEventListener('mousemove', mouseMove, false);
    canvas.addEventListener('mousedown', mouseDown, false);
    canvas.addEventListener('mouseup', mouseUp, false);
    canvas.addEventListener('mousewheel', mouseWheel, false);
    canvas.addEventListener('DOMMouseScroll', mouseWheel, false);
    canvas.addEventListener('mouseout', mouseOut, false);
    canvas.addEventListener('touchstart', touchStart, false);
    canvas.addEventListener('touchmove', touchMove, false);    
    canvas.addEventListener('touchend', touchEndCan, false);
     canvas.addEventListener('focus', onWindowFocus, false);
     canvas.addEventListener('blur', onWindowBlur, false);

    document.getElementById("resetButton").addEventListener("mousedown", onReset);
    document.getElementById("resetButtonMO").addEventListener("mousedown", onReset);

    document.getElementById("resetButton").addEventListener("mouseover", mouseOver2D);
    document.getElementById("resetButton").addEventListener("mouseout", mouseOut2D);

    document.getElementById("zoomIn").addEventListener("mouseover", mouseOver2D);
    document.getElementById("zoomIn").addEventListener("mouseout", mouseOut2D);

    document.getElementById("zoomOut").addEventListener("mouseover", mouseOver2D);
    document.getElementById("zoomOut").addEventListener("mouseout", mouseOut2D);
}

document.onselectstart = function() {
    return false;
};


var active2D=false;
function mouseOver2D(){
    active2D=true;
}
function mouseOut2D(){
    setTimeout(function() {
        active2D=false;
     }, 500);
}


var updateId = 0;

function onRightClick(event) {
    //console.log("press right");
    //mdown = true;
    //panNav = true;
    return false; //surpress theright menu 
}

function onWindowFocus() {
    if (updateId == 0) updateId = setInterval(frameUpdate, 25);
    //console.log("window has focus");
}

function onWindowBlur() {
	 //console.log("window is blur");
    if (updateId) {
        clearInterval(updateId);
        updateId = 0;
    }
}

function frameUpdate() {
    var firstframe = (scene._refineCount == 0);
    // Navigation
    if (g_navGotoPosActive) scene.clearRefine();
    scene.setViewMatrix(NavCreateViewMatrix(scene._initialNavMatrix));
    scene.setModelMatrix(NavCreateModelMatrix(scene._initialNavMatrix));
    if (scene2 != null) {
        scene2.setViewMatrix(NavCreateViewMatrix(scene2._initialNavMatrix));
        scene2.setModelMatrix(NavCreateModelMatrix(scene2._initialNavMatrix));
    }
    scene.draw();
    if (scene2 != null) scene2.draw();
}
var mpos = [0, 0];
var mdown = false;

function mouseDown(ev) {
    canvasFocus=true;
    
    autoRotateStop();
    //_gaq.push(['_trackEvent', 'Superblaze GL', 'Interacting', 'Any mouse event']);
    handClosed();
    //console.log("press "+ev.which);
    if (ev.which == 3) {
        panNav = true;
    }
    var mouseDownPos = [ev.clientX - canvas.offsetLeft, ev.clientY - canvas.offsetTop];
    if (!scene.onClick(mouseDownPos, ev.button)) {
        mdown = true;
        mpos = mouseDownPos;
    }
}

function mouseUp(ev) {
    mdown = false;
    if (ev.which == 3 || panNav) panNav = false;
    handOpen();
}

function mouseOut(ev) {
    mdown = false;
    if (ev.which == 3 || panNav) panNav = false;
    handOpen();
}

function mouseMove(ev) {
    if (!mdown) return;
    var mousePos = [ev.clientX - canvas.offsetLeft, ev.clientY - canvas.offsetTop];
    var mdelta = [(mpos[0] - mousePos[0]), (mpos[1] - mousePos[1])];
    mpos = [mousePos[0], mousePos[1]];
    //pan nav is initialized and set in ui\_ui.js for now.
    if (!panNav) {
        if (NavRotation(mpos, mdelta)) scene.clearRefine();
    } else {
        var mdelta2 = [mdelta[0] * 3, mdelta[1] * 3];
        if (NavPan(mdelta2)) scene.clearRefine();
    }
}

function mouseWheel(ev) {
    if(!canvasFocus) return;
    autoRotateStop();
    var delta = ev.wheelDelta?ev.wheelDelta:(-ev.detail*10.0);
    var deltaScene = (delta*0.03)*(0.03);
     //var deltaScene = (delta*0.05)*(scene.sceneRadius*0.01);
     deltaScene = -deltaScene;
    // console.log(g_navDolly);
    if (NavSetDolly(g_navDolly + deltaScene)){
        scene.clearRefine();
        updateZoomBar(g_navDolly);
        updateZoomBarBg(g_navDolly);
    }
}
function updateZoomBar (newval) {
    var scale = -(navMinDolly - navMaxDolly);
    var val = -newval + navMaxDolly;
    $(".ui-slider-handle").css("bottom", (val/scale)*100+"%");
}
//var menuOpen = false;
function onePressed() {
	$("#zoom_slider").slider("option", "value", 42);
    scene.gotoPos(1.9100000000000013 , 0.2599999999999999 , 0 , 0 , 0, 20);
    scene.clearRefine();
}

function twoPressed() {
    $("#zoom_slider").slider("option", "value", 42);
    scene.gotoPos(0.0, 0.0, 0.0, 0.0, 0.0, 20);
    scene.clearRefine();
}
function threePressed() {
    $("#zoom_slider").slider("option", "value", 42);
    scene.gotoPos(7.203185307179587 , 1.1300000000000003 , 0.5000000000000003 , 0.36 , 0, 20);
    scene.clearRefine();
}

/*function toggleDropDown() {
    if (!menuOpen) {
        toggleControls(false);
        //ddMenu('one',1);
        menuOpen = true;
    } else {
        if (!debugMode) scene.gotoPos(0.0, 0.0, 0.0, 0.0, 0.0, 20); // wont reset if its in debug
        toggleControls(true);
        //ddMenu('one',-1);
        menuOpen = false;
    }
}*/
var dragCursor;
var curBrowser = BrowserDetect.browser;
// IE doesn't support co-ordinates
var cursCoords = (curBrowser == "Explorer") ? "" : " 4 4";

function initDragCursor() {
    handOpen();
    $('#zoomIn').mousedown(function() {
        handClosed();
    });
    $('#zoomOut').mousedown(function() {
        handClosed();
    });
    $('.ui-slider-handle').mousedown(function() {
        handClosed();
    });
    $('#scenediv').mousedown(function() {
        handClosed();
    });
    $('.divSize').mousedown(function() {
        handClosed();
    });
    $('#resetButton').mousedown(function() {
        handClosed();
    });
    $('body').mouseup(function() {
        handOpen();
    });
    /*$('.ui-slider-handle').mouseOut(function(){
			    dragCursor = (curBrowser == "Firefox") ? "-moz-grab" : "url(images_gl/openhand.cur)" + cursCoords + ", move";
			    $('.ui-slider-handle').css("cursor", dragCursor);
			});*/
}

function handClosed() {
    dragCursor = (curBrowser == "Firefox") ? "-moz-grabbing" : "url(images_gl/closedhand.cur)" + cursCoords + ", move";
    // Opera doesn't support url cursors and doesn't fall back well...
    if (curBrowser == "Opera") dragCursor = "move";
    $('#zoomIn').css("cursor", dragCursor);
    $('#zoomOut').css("cursor", dragCursor);
    $('.ui-slider-handle').css("cursor", dragCursor);
    $('#superblaze-canvas').css("cursor", dragCursor);
    $('#scenediv').css("cursor", dragCursor);
    $('.divSize').css("cursor", dragCursor);
    $('#resetButton').css("cursor", dragCursor);
    //$('.ui-slider-handle').css("background-image", "url(images_gl/zoom_handle_down.png)");
}

function handOpen() {
    dragCursor = (curBrowser == "Firefox") ? "-moz-grab" : "url(images_gl/openhand.cur)" + cursCoords + ", move";
    $('#zoomIn').css("cursor", dragCursor);
    $('#zoomOut').css("cursor", dragCursor);
    $('.ui-slider-handle').css("cursor", dragCursor);
    $('#superblaze-canvas').css("cursor", dragCursor);
    $('#scenediv').css("cursor", dragCursor);
    $('.divSize').css("cursor", dragCursor);   
    $('#resetButton').css("cursor", dragCursor);
    //$('.ui-slider-handle').css("background-image", "url(images_gl/zoom_handle_up.png)");
}

var touch = new Vector3();
var touches = [new Vector3(), new Vector3(), new Vector3()];
var prevTouches = [new Vector3(), new Vector3(), new Vector3()];
var prevDistance = null;

function touchStart(event) {
    autoRotateStop();
    switch (event.touches.length) {
        case 1:
            touches[0].set(event.touches[0].pageX, event.touches[0].pageY, 0);
            touches[1].set(event.touches[0].pageX, event.touches[0].pageY, 0);
            break;
        case 2:
            touches[0].set(event.touches[0].pageX, event.touches[0].pageY, 0);
            touches[1].set(event.touches[1].pageX, event.touches[1].pageY, 0);
            prevDistance = touches[0].distanceTo(touches[1]);
            break;
    }
    prevTouches[0].copy(touches[0]);
    prevTouches[1].copy(touches[1]);
}

var doubleTouch=false;
function touchMove(event) {
    autoRotateStop();
    event.preventDefault();
    event.stopPropagation();
    var getClosest = function(touch, touches) {
        var closest = touches[0];
        for (var i in touches) {
            if (closest.distanceTo(touch) > touches[i].distanceTo(touch)) closest = touches[i];
        }
        return closest;
    }
    switch (event.touches.length) {
        case 1:
            if(doubleTouch==false){
            touches[0].set(event.touches[0].pageX, event.touches[0].pageY, 0);
            touches[1].set(event.touches[0].pageX, event.touches[0].pageY, 0);
            if (NavRotation([touches[0].x, touches[0].y], [(prevTouches[0].x - touches[0].x) * 0.5, (prevTouches[0].y - touches[0].y) * 0.5])) scene.clearRefine();
            //scope.rotate( touches[ 0 ].sub( getClosest( touches[ 0 ] ,prevTouches ) ).multiplyScalar( - 0.005 ) );
            }
            break;
        case 2:
            doubleTouch=true;
            touches[0].set(event.touches[0].pageX, event.touches[0].pageY, 0);
            touches[1].set(event.touches[1].pageX, event.touches[1].pageY, 0);
            distance = touches[0].distanceTo(touches[1]);
            var deltaScene = (prevDistance - distance) * 0.1;
            if (NavSetDolly(g_navDolly + deltaScene)) {
                scene.clearRefine();
                updateZoomBar(g_navDolly);
            }
            //scope.zoom( new Vector3( 0, 0, prevDistance - distance ) );
            prevDistance = distance;
            console.log("prevDistance = " + prevDistance);
            var offset0 = touches[0].clone().sub(getClosest(touches[0], prevTouches));
            var offset1 = touches[1].clone().sub(getClosest(touches[1], prevTouches));
            offset0.x = -offset0.x;
            offset1.x = -offset1.x;
            var mdelta2 = [offset1.x * 0.5, -offset1.y * 0.5];
            if (NavPan(mdelta2)) scene.clearRefine();
            //scope.pan( offset0.add( offset1 ).multiplyScalar( 0.5 ) );
            break;
    }
    prevTouches[0].copy(touches[0]);
    prevTouches[1].copy(touches[1]);
}
function touchEndCan(event){
    setTimeout(function() {
            doubleTouch=false;
        }, 500);

}