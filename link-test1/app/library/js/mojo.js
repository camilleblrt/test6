/*
 * CVS version control block - do not edit manually
 * $RCSfile: mojo.js,v $ - $Name:  $
 * $Revision: 1.2 $
 * $Date: 2012/07/27 14:19:05 $
 * $Source: /usr/local/repository/DasKeyboardTiger/library/js/mojo.js,v $
 *
 * Mojo Helpdesk local javascript functions.
 *
 */
 
var ns4 = document.layers;
var op5 = (navigator.userAgent.indexOf("Opera 5")!=-1) ||(navigator.userAgent.indexOf("Opera/5")!=-1);
var op6 = (navigator.userAgent.indexOf("Opera 6")!=-1) ||(navigator.userAgent.indexOf("Opera/6")!=-1);
var agt=navigator.userAgent.toLowerCase();
var mac = (agt.indexOf("mac")!=-1);
var ie = (agt.indexOf("msie") != -1); 
var mac_ie = mac && ie;

function getElementsByClass(searchClass,node,tag) {
	var classElements = new Array();
	if ( node == null )
		node = document;
	if ( tag == null )
		tag = '*';
	var els = node.getElementsByTagName(tag);
	var elsLen = els.length;
	var pattern = new RegExp('(^|\\s)'+searchClass+'(\\s|$)');
	for (i = 0, j = 0; i < elsLen; i++) {
		if ( pattern.test(els[i].className) ) {
			classElements[j] = els[i];
			j++;
		}
	}
	return classElements;
}
function RegisterOnloadHandler(func){
	var oldonload=window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldonload();
			func();
		}
	}
}
function RegisterOnresizeHandler(func){
	var oldonresize=window.onresize;
	if (typeof window.onresize != 'function') {
		window.onresize = func;
	} else {
		window.onresize = function() {
			oldonresize();
			func();
		}
	}
}
function RegisterOnscrollHandler(func){
	var oldonscroll=window.onscroll;
	if (typeof window.onscroll != 'function') {
		window.onscroll = func;
	} else {
		window.onscroll = function() {
			oldonscroll();
			func();
		}
	}
}
function RegisterOnclickHandler(func){
	var oldonclick=document.body.onclick;
	if (typeof document.body.onclick != 'function') {
		document.body.onclick = func;
	} else {
		document.body.onclick = function() {
			oldonclick();
			func();
		}
	}
}
function RegisterOnmousemoveHandler(func){
	var oldonmousemove=document.body.onmousemove;
	if (typeof document.body.onmousemove != 'function') {
		document.body.onmousemove = func;
	} else {
		document.body.onmousemove = function() {
			oldonmousemove();
			func();
		}
	}
}

function getStyleObject(objectId) {
    if(document.getElementById && document.getElementById(objectId)) {
	return document.getElementById(objectId).style;
    } else if (document.all && document.all(objectId)) {
	return document.all(objectId).style;
    } else if (document.layers && document.layers[objectId]) {
		return getObjNN4(document,objectId);
    } else {
	return false;
    } 
} 

function getObjNN4(obj,name)
{
	var x = obj.layers;
	var foundLayer;
	for (var i=0;i<x.length;i++)
	{
		if (x[i].id == name)
		 	foundLayer = x[i];
		else if (x[i].layers.length)
			var tmp = getObjNN4(x[i],name);
		if (tmp) foundLayer = tmp;
	}
	return foundLayer;
}

function getElementHeight(Elem) {
	if (ns4) {
		var elem = getObjNN4(document, Elem);
		return elem.clip.height;
	} else {
		var elem;
		if(document.getElementById) {
			var elem = document.getElementById(Elem);
		} else if (document.all){
			var elem = document.all[Elem];
		}
		if (op5) {
			xPos = elem.style.pixelHeight;
		} else {
			xPos = elem.offsetHeight;
		}
		return xPos;
	} 
}

function getElementWidth(Elem) {
	if (ns4) {
		var elem = getObjNN4(document, Elem);
		return elem.clip.width;
	} else {
		var elem;
		if(document.getElementById) {
			var elem = document.getElementById(Elem);
		} else if (document.all){
			var elem = document.all[Elem];
		}
		if (op5) {
			xPos = elem.style.pixelWidth;
		} else {
			xPos = elem.offsetWidth;
		}
		return xPos;
	}
}

function setElementHeight(element, height) {
	if (element && element.style) {
		element.style.height = height + "px";
	}
}

function setElementWidth(element, width) {
	if (element && element.style) {
		element.style.width = width + "px";
	}
}

function getElementLeft(Elem) {
	if (ns4) {
		var elem = getObjNN4(document, Elem);
		return elem.pageX;
	} else {
		var elem;
		if(document.getElementById) {
			var elem = document.getElementById(Elem);
		} else if (document.all){
			var elem = document.all[Elem];
		}
		xPos = elem.offsetLeft;
		tempEl = elem.offsetParent;
  		while (tempEl != null) {
  			xPos += tempEl.offsetLeft;
	  		tempEl = tempEl.offsetParent;
  		}
		return xPos;
	}
}


function getElementTop(Elem) {
	if (ns4) {
		var elem = getObjNN4(document, Elem);
		return elem.pageY;
	} else {
		if(document.getElementById) {	
			var elem = document.getElementById(Elem);
		} else if (document.all) {
			var elem = document.all[Elem];
		}
		yPos = elem.offsetTop;
		tempEl = elem.offsetParent;
		while (tempEl != null) {
  			yPos += tempEl.offsetTop;
	  		tempEl = tempEl.offsetParent;
  		}
		return yPos;
	}
}
function getWindowHeight() {
	var myHeight=0;
	if (typeof(window.innerHeight)=='number') {
		// Non-IE
		myHeight = window.innerHeight;
	} else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
		// IE 6+ in 'standards compliant mode'
		myHeight = document.documentElement.clientHeight;
	} else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
		// IE 4 compatible
		myHeight = document.body.clientHeight;
	}
	return myHeight;
}
function getWindowWidth() {
	var myWidth=0;
	if (typeof(window.innerWidth)=='number') {
		// Non-IE
		myWidth = window.innerWidth;
	} else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
		// IE 6+ in 'standards compliant mode'
		myWidth = document.documentElement.clientWidth;
	} else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
		// IE 4 compatible
		myWidth = document.body.clientWidth;
	}
	return myWidth;
}
function moveXY(myObject, x, y) {
	obj = getStyleObject(myObject)
	if (ns4) {
		obj.top = y;
 		obj.left = x;
	} else {
		if (op5) {
			obj.pixelTop = y;
 			obj.pixelLeft = x;
		} else {
			obj.top = y + 'px';
 			obj.left = x + 'px';
		}	
	}
}
function getWindowHeight() {
	var myHeight=0;
	if (typeof(window.innerHeight)=='number') {
		// Non-IE
		myHeight = window.innerHeight;
	} else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
		// IE 6+ in 'standards compliant mode'
		myHeight = document.documentElement.clientHeight;
	} else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
		// IE 4 compatible
		myHeight = document.body.clientHeight;
	}
	return myHeight;
}
function getWindowWidth() {
	var myWidth=0;
	if (typeof(window.innerWidth)=='number') {
		// Non-IE
		myWidth = window.innerWidth;
	} else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
		// IE 6+ in 'standards compliant mode'
		myWidth = document.documentElement.clientWidth;
	} else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
		// IE 4 compatible
		myWidth = document.body.clientWidth;
	}
	return myWidth;
}
function f_scrollLeft() {
	return f_filterResults (
		window.pageXOffset ? window.pageXOffset : 0,
		document.documentElement ? document.documentElement.scrollLeft : 0,
		document.body ? document.body.scrollLeft : 0
	);
}
function f_scrollTop() {
	return f_filterResults (
		window.pageYOffset ? window.pageYOffset : 0,
		document.documentElement ? document.documentElement.scrollTop : 0,
		document.body ? document.body.scrollTop : 0
	);
}
function f_filterResults(n_win, n_docel, n_body) {
	var n_result = n_win ? n_win : 0;
	if (n_docel && (!n_result || (n_result > n_docel)))
		n_result = n_docel;
	return n_body && (!n_result || (n_result > n_body)) ? n_body : n_result;
}

clicked = false ;
function showPicture(pic) {
  if (clicked != false ) return ;
  clicked=true;
  windowWidth = parseInt(getWindowWidth());
	scrollLeft = parseInt(f_scrollLeft());
	windowHeight = parseInt(getWindowHeight());
	scrollTop = parseInt(f_scrollTop());
	
	blurrer=document.createElement('div');
	blurrer.setAttribute('id', 'dialog_blurrer');
	blurrer.style.position = "absolute";
	blurrer.style.top = 0;
	blurrer.style.left = 0;
	blurrer.style.width = (windowWidth + scrollLeft) + "px";
	blurrer.style.height = (windowHeight + scrollTop) + "px";
	blurrer.style.zIndex = 1000;
	blurrer.className = "blurrer";
	blurrer.innerHTML = "&nbsp;";
	document.body.appendChild(blurrer);
	
	dialog=document.createElement('div');
	dialog.setAttribute('id', 'video_div');
	dialog.className = "video-window";
	dialog.style.position = "absolute";
	dialog.style['border'] = "1px solid #000";
	dialog.style.backgroundColor = "#fff";
	dialog.style['cursor'] = "pointer";
	dialog.style.width = "1000px";
	dialog.style.height = "483px";
//	dialog.style.paddingTop = "50px";
//	dialog.style.paddingLeft = "50px";
	dialog.onclick = function () { hideVideo(); return false; } ;

	
//	html = "<center>";
	html = "<img src='/images/cross.png' style='border:0;position:relative;top:-20px;left:-20px;float:left;' onclick='hideVideo()' />"
	html += "<img src='" + pic + "' style='border:0;' />";
//	html += "<div style='position:relative;top:-10px;'><a href='' onclick='hideVideo(); return false;'>close this window</a></div>"
//	html += "</center>"
	dialog.innerHTML = html;	
	dialog.style.zIndex = parseInt(blurrer.style.zIndex) + 1;
	document.body.appendChild(dialog);
	
	dialog.style.left = ((windowWidth - parseInt(getElementWidth('video_div')))/2 + scrollLeft) + "px";
	dialog.style.top = ((windowHeight - parseInt(getElementHeight('video_div')))/2 + scrollTop) + "px";

//	alert(getElementWidth('video_div'));
//	alert(getElementHeight('video_div'));
}

function hideVideo() {
  if (clicked != true ) return ;
  clicked=false;
  document.body.removeChild(document.getElementById("dialog_blurrer"));
  document.body.removeChild(document.getElementById("video_div"));
}

