 function setActive() {
  aObj = document.getElementById('nav').getElementsByTagName('a');
  for(var i=0; i<aObj.length; i++) { 
    if(document.location.href.indexOf(aObj[i].href)>=0) {
      aObj[i].className='active';
    }
  }

if (readCookie('subNewsletter')==null) {
	popupWindow(true);
} else {
	popupWindow(false);
}
//eraseCookie('subNewsletter');
if (window.location.href.indexOf('/#slide3')!=-1 || window.location.href.indexOf('/#slide4')!=-1 || window.location.href.indexOf('/#mac')!=-1) {
//	$("html, body").animate({ scrollTop: 2000 }, 1);
//	fireClickEvent(document.getElementById('home-feature-3'));
	$('#home').css("visibility","visible");
//	$("html, body").animate({ scrollTop: 0 }, 1400);
} 
//else {
	//fireClickEvent(document.getElementById('home-feature-0'));
//}
//document.body.style.visibility='visible';
}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for(var i=0;i < ca.length;i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name,"",-1);
}

function popupWindow(p) {
	var t = document.getElementById('popWin');
	if (t == null) return;
	t.style['display'] = (p) ? 'block' : 'none' ;
	t.style['top']     = ((window.innerHeight/2)>>0)+'px';
//	t.style['left']    = ((window.innerWidth/2)>>0)+'px';
	t.style['left']    = '64px';
//	t.style['marginLeft'] = '-'+((t.offsetWidth/2)>>0)+'px'
	t.style['marginLeft'] = '0px';
}

window.onload = setActive;
